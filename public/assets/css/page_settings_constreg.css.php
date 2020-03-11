<?php header('Content-Type: text/css; charset=utf-8'); ?>
@charset "UTF-8";

.pt-3-half {
    padding-top: 1.4rem;
    text-align: left;
}

table .row{
    margin: 0;
}

table tbody .key {
        padding-left: 30px;
}

.cb-enable, .cb-disable, .cb-enable span, .cb-disable span { background: url(/vendors/jquery-toggleswitch/switch.gif) repeat-x; display: block; float: left; }
.cb-enable span, .cb-disable span { line-height: 30px; display: block; background-repeat: no-repeat; font-weight: bold; }
.cb-enable span { background-position: left -90px; padding: 0 10px; }
.cb-disable span { background-position: right -180px;padding: 0 10px; }
.cb-disable.selected { background-position: 0 -30px; }
.cb-disable.selected span { background-position: right -210px; color: #fff; }
.cb-enable.selected { background-position: 0 -60px; }
.cb-enable.selected span { background-position: left -150px; color: #fff; }
.switch label { cursor: pointer; }
