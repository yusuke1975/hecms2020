<?php header('Content-Type: text/css; charset=utf-8'); ?>
@charset "UTF-8";

:root {
    /* const */
    /* default */
    --default-padding: 10px;
    /* header */
    --header-height: 55px;
    /* sidenav */
    --sidenav-width: 120px;
    /* main-content */
    --main-container-margin-left: calc( var(--sidenav-width) + 5px);

    /* site color */
    --sitecolor-darkgray: #707070;
    --sitecolor-lightgray: #f5f5f5;
}

body{
    margin: 0;
    padding: 0;
    background-color: var(--sitecolor-lightgray);
}

/* ****************
** container
**************** */
.outer-container {
    height: auto;
    width: 100%;
    margin: 0;
    overflow: hidden;
}
/*
    padding: 10px;
 */
/* ****************
** header
**************** */
header {
    margin: 0;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--header-height);
    background-color: var(--sitecolor-lightgray);
}

#logo{
    float: left;
    padding: var(--default-padding);

}

#loginuser{
    float: right;
    background-color: var(--sitecolor-lightgray);
}

#loginuser #menubar li i{
    padding-top: 5px;
    padding-right: 5px;
    font-size: 2.5em;
    color: var(--sitecolor-darkgray);
    background-color: var(--sitecolor-lightgray);
}

#loginuser #menubar ul{
    width:100px;
}

#loginuser #menubar ul li a{
    display: block;
}

#loginuser #menubar ul li a .material-icons-sub{
    font-size: 1em;
}

#loginuser #menubar ul li a span{
    font-size: 0.8em;
}

#username_area{
    margin-top: 5px;
    margin-right: 0;
    padding-right: 10px;
    float: right;
    text-align: right;
    font-size: 0.7em;
}

/* ****************
** breadcrumbs
**************** */
#breadcrumbs{
    padding-left: 10px;
}

/* ****************
** side nav
**************** */
.side-nav {
    display: block;
    margin-top: var(--header-height);
    margin-left: 0;
    padding: 5px;
    color: var(--sitecolor-darkgray);
    background: var(--sitecolor-lightgray);
    float: left;
}

.side-nav_wide{
    width: var(--sidenav-width);
}

/* ****************
** header profile menu
**************** */
#menubar {
    margin: 0;
    padding: 0;
    width: 48px;
    height: 48px;
    border: 0;
    background-color: #f5f5f5;
    /*
    background-color: var(--sitecolor-lightgray);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    */
}

#menubar > .material-icons-sub{
    font-size: 2em;
}

#menubar li .ui-menu{ /* Menubar buttons */
    background-color: var(--sitecolor-lightgray);

}

/* Make jQuery UI Menu into a horizontal menubar with vertical dropdown */
#menubar > li { /* Menubar buttons */
    display: inline-block;
}
#menubar > li > ul > li { /* Menubar buttons inside dropdown */
    display: block;
}

/* Change dropdown carets to correct direction */
#menubar > li > div > span.ui-icon-caret-1-e {
    /* Caret on menubar */
    /*
    background:url(https://www.drupal.org/files/issues/ui-icons-222222-256x240.png) no-repeat -64px -16px !important;
     */
}
#menubar ul li div span.ui-icon-caret-1-e {
    /* Caret on dropdowns */
    /*
    background:url(https://www.drupal.org/files/issues/ui-icons-222222-256x240.png) no-repeat -32px -16px !important;
     */
}

/* ****************
** menu
**************** */
#menu .home{
    padding: 5px 0 0 5px;
    font-size: 1em;
}
#menu li a span {
    padding-right: 5px;
    font-size: 0.7em;
}

.side-nav .ui-menu{
    border-style: none;
}

.ui-menu .ui-menu-item .ui-corner-all{
    padding: 0;
    border-style: none;
}

.ui-menu .ui-menu-item .ui-corner-all .material-icons {
    color: var(--sitecolor-darkgray);
    font-size: 1.3em;
}

.ui-corner-all .ui-menu-icon{
    margin-left: -5px;
}

.material-header{
    margin-bottom: 5px;
    padding-bottom: 5px;
    font-size:1em;
    border-bottom:1px solid var(--sitecolor-darkgray);
}

.ui-menu  .ui-menu-item .ui-menu{
    padding: var(--default-padding);
    color: var(--sitecolor-darkgray);
    background: var(--sitecolor-lightgray);
    border: 1px double var(--sitecolor-darkgray);
}

/* ****************
** main-container
**************** */
.main-container {
    margin-top: var(--header-height);
    margin-left: var(--main-container-margin-left);
    background: var(--sitecolor-lightgray);
}

.main-container-header{
    display: block;
    heght: 50px;
    width: 100%;
    color: var(--sitecolor-darkgray);
    background-color: #ffffff;
    font-size: 0.7em;
    border-radius: 10px;
}

.main-content{
    margin-top: 5px;
    padding: var(--default-padding);
    background: #ffffff;
    border-radius: 10px;
}

