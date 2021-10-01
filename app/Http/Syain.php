<?php
use App\HttpSyain;

Route::get('/test1', function () {
    $data = Syain::all();
    return view('index',[
        'db1'=>$data
    ]);
});
