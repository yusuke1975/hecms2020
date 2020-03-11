(function ($) {

    const $tableID = $('#table');
    const $BTN = $('#export-btn');
    const $EXPORT = $('#export');

const newTr = `
<tr class="row">
    <td class="col-md-2 pt-3-half" contenteditable="true"></td>
    <td class="col-md-1 pt-3-half" contenteditable="true"></td>
    <td class="col-md-3 pt-3-half" contenteditable="true"></td>
    <td class="col-md-2 pt-3-half" contenteditable="true"></td>
    <td class="col-md-2 pt-3-half" contenteditable="true"></td>
    <td class="col-md-1 pt-3-half">
        <span class="table-up">
            <a href="#!" class="indigo-text">
                <i class="material-icons" aria-hidden="true">arrow_upward</i>
            </a>
        </span>
        <span class="table-down">
        <a href="#!" class="indigo-text">
            <i class="material-icons" aria-hidden="true">arrow_downward</i>
        </a>
    </span>
    </td>
    <td class="col-md-1">
        <span class="table-remove">
            <button type="button" class="btn btn-danger rounded-circle btn-sm my-0">
                <i class="material-icons">delete_forever</i>
            </button>
        </span>
    </td>
</tr>
`;

$('.table-add').on('click', 'i', () => {

    const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

    // コピーする場合はこの if を有効にする
    //if ($tableID.find('tbody tr').length === 0) {
        $('tbody').append(newTr);
    //}

    // $tableID.find('table').append($clone);
});

$tableID.on('click', '.table-remove', function () {

    $(this).parents('tr').detach();
});

$tableID.on('click', '.table-up', function () {

    const $row = $(this).parents('tr');

    if ($row.index() === 0) {
        return;
    }

    $row.prev().before($row.get(0));

});

$tableID.on('click', '.table-down', function () {

    const $row = $(this).parents('tr');
    $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.on('click', () => {

    const $rows = $tableID.find('tr:not(:hidden)');
    const headers = [];
    const data = [];

    // Get the headers (add special header logic here)
    $($rows.shift()).find('th:not(:empty)').each(function () {

        headers.push($(this).text().toLowerCase());
    });

    // Turn all existing rows into a loopable array
    $rows.each(function () {
        const $td = $(this).find('td');
        const h = {};

        // Use the headers from earlier to name our hash keys
        headers.forEach((header, i) => {

            h[header] = $td.eq(i).text();
        });

        data.push(h);
    });

    // Output the result
    $EXPORT.text(JSON.stringify(data));
});
})(jQuery);

