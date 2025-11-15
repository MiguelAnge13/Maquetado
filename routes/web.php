<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('AuthViews/login');
});

Route::get('/Calibracion', function () {
    return view('ProfileViews/Calibracion');
});

Route::get('/Codigos', function () {
    return view('ProfileViews/Codigos');
});

Route::get('/Historial', function () {
    return view('ProfileViews/Historial');
});

Route::get('/inicial', function () {
    return view('ProfileViews/inicial');
});

Route::get('/Inicio', function () {
    return view('ProfileViews/Inicio');
});

Route::get('/Librerias', function () {
    return view('ProfileViews/Librerias');
});

Route::get('/Microcontrolador', function () {
    return view('ProfileViews/Microcontrolador');
});

Route::get('/Parcipantes', function () {
    return view('ProfileViews/Participantes');
});

Route::get('/Proyectos', function () {
    return view('ProfileViews/Proyectos');
});

Route::get('/sesion', function () {
    return view('RegisterViews/sesion');
});