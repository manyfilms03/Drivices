<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo DB::connection('mysql')->getDatabaseName();
});
