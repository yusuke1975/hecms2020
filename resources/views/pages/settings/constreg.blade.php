@extends('sufee_admin.app')
@include('plugin.editformmulticard')

@section('page-head')

    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_constreg.css.php') }}">
{{--
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_const2.css.php') }}">
--}}

@endsection

@section('page-foot')

    <script src="{{ asset('assets/js/page_settings_constreg.js') }}"></script>
{{--
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
--}}
    <script>
        (function($) {

        })(jQuery);
    </script>

@endsection

@section('content')
<?php
    $ary_data = array(
        array(
            'person_name' => 'aaa',
            'age' => '10',
            'company_name' => 'aaa-com',
            'countory' => 'japan',
            'city' => 'tokyo',
        ),
        array(
            'person_name' => 'bbb',
            'age' => '11',
            'company_name' => 'bbb.com',
            'countory' => 'vietnam',
            'city' => 'hanoi',
        ),
    );
/*
echo "<pre>";
print_r($ary_env);
echo "</pre>";
*/
?>
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-12">
                <!-- Editable table -->
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">env const list</h3>
                    <div class="card-body">
                        <div id="table" class="table-editable">
                            <span class="table-add float-right mb-3 mr-2">
                                <a href="#!" class="text-success">
                                    <i class="material-icons">add_circle</i>
                                </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr class="row">
                                    <th class="col-md-2 text-center">Person Name</th>
                                    <th class="col-md-1 text-center">Age</th>
                                    <th class="col-md-3 text-center">Company Name</th>
                                    <th class="col-md-2 text-center">Country</th>
                                    <th class="col-md-2 text-center">City</th>
                                    <th class="col-md-1 text-center">Sort</th>
                                    <th class="col-md-1 text-center">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ary_data as $card_ary)
                                    <tr class="row">
                                        <td class="col-md-2 pt-3-half" contenteditable="true">{{ $card_ary['person_name'] }}</td>
                                        <td class="col-md-1 pt-3-half" contenteditable="true">{{ $card_ary['age'] }}</td>
                                        <td class="col-md-3 pt-3-half" contenteditable="true">{{ $card_ary['company_name'] }}</td>
                                        <td class="col-md-2 pt-3-half" contenteditable="true">{{ $card_ary['countory'] }}</td>
                                        <td class="col-md-2 pt-3-half" contenteditable="true">{{ $card_ary['city'] }}</td>
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
                                @endforeach
                                <!-- This is our clonable table line -->
{{--
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
                                    <td class="pt-3-half" contenteditable="true">45</td>
                                    <td class="pt-3-half" contenteditable="true">Insectus</td>
                                    <td class="pt-3-half" contenteditable="true">USA</td>
                                    <td class="pt-3-half" contenteditable="true">San Francisco</td>
                                    <td class="pt-3-half">
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
                                    <td>
              <span class="table-remove"><button type="button"
                                                 class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                <!-- This is our clonable table line -->
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
                                    <td class="pt-3-half" contenteditable="true">26</td>
                                    <td class="pt-3-half" contenteditable="true">Isotronic</td>
                                    <td class="pt-3-half" contenteditable="true">Germany</td>
                                    <td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
                                    <td class="pt-3-half">
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
                                    <td>
              <span class="table-remove"><button type="button"
                                                 class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                <!-- This is our clonable table line -->
                                <tr class="hide">
                                    <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
                                    <td class="pt-3-half" contenteditable="true">31</td>
                                    <td class="pt-3-half" contenteditable="true">Portica</td>
                                    <td class="pt-3-half" contenteditable="true">United Kingdom</td>
                                    <td class="pt-3-half" contenteditable="true">London</td>
                                    <td class="pt-3-half">
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
                                    <td>
              <span class="table-remove"><button type="button"
                                                 class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Editable table -->
            </div>

{{--
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
--}}

        </div>
    </div><!-- .animated -->
@endsection{{-- content --}}

