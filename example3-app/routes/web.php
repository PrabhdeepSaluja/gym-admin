<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.form');
});

Route::get('/test', function () {
    return view('sample');
});

Route::get('/demo', function () {
    return view('admin.demo');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/members', function () {
    return view('admin.members-list');
});

Route::get('/members/create', function () {
    return view('admin.create-member');
});

Route::get('/training', function () {
    return view('admin.view-training');
});

Route::get('/training/create', function () {
    return view('admin.create-training');
});

Route::get('/plan/create', function () {
    return view('admin.create-plan');
});

Route::get('/membership-plan/create', function () {
    return view('admin.create-membership-plan');
});

Route::get('/plan', function () {
    return view('admin.view-plan');
});

Route::get('/side-bar', function () {
    return view('side-bar');
});

Route::get('/training', function () {
    return view('admin.view-training');
});

Route::get('/view-members', function () {
    return view('admin.view-members');
});

Route::get('/attendance-report', function () {
    return view('admin.attendance-report');
});

Route::get('/generate-report', function () {
    return view('admin.generate-report');
});

Route::get('/unpaid-member', function () {
    return view('admin.unpaid-member');
});

Route::get('/expired-membership', function () {
    return view('admin.expired-membership');
});

Route::get('/overview/members', function () {
    return view('admin.member-overview');
});

Route::get('/overview/income', function () {
    return view('admin.income-overview');
});


Route::get('/enquiry', function () {
    return view('admin.enquiry-list');
});

Route::get('/alert/unpaid-members', function () {
    return view('admin.unpaid-member');
});

Route::get('/alert/expired-membership', function () {
    return view('admin.expired-membership');
});

Route::get('/enquiry/create', function () {
    return view('admin.create-enquiry');
});

Route::get('/payments', function () {
    return view('admin.payments');
});