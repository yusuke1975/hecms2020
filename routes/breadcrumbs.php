<?php
// ホーム
Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', url('index'));
});

// ホーム > sample
Breadcrumbs::for('sample', function ($trail) {
    $trail->parent('home');
    $trail->push('sample');
});

// ホーム > sample > wysiwyg
Breadcrumbs::for('wysiwyg', function ($trail) {
    $trail->parent('sample');
    $trail->push('wysiwyg');
});

// ホーム > sample > wysiwyg > jodit
Breadcrumbs::for('jodit', function ($trail) {
    $trail->parent('wysiwyg');
    $trail->push('jodit', url('jodit'));
});
