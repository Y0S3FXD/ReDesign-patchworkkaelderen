<?php
if (Session::exists('updatesuccess')) {
    echo '<div class="alert alert-success">Kursus successfully updated! ' . Session::flash('updatesuccess') . '</div>';
}

if (Session::exists('kursus-create-success')) {
    echo '<div class="alert alert-success">New kursus created successfully! ' . Session::flash('kursus-create-success') . '</div>';
}

if (Session::exists('kursus-delete-success')) {
    echo '<div class="alert alert-success">Kursus deleted successfully. ' . Session::flash('kursus-delete-success') . '</div>';
}

if (Session::exists('kursus-error')) {
    echo '<div class="alert alert-danger">Error: ' . Session::flash('kursus-error') . '</div>';
}
