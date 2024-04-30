<?php

use Illuminate\Support\Facades\Route;


function getContacts()
{
    $contacts = [
        1 => ['name' => 'Name 1', 'phone' => '2142354534'],
        2 => ['name' => 'Name 2', 'phone' => '2110489534'],
        3 => ['name' => 'Name 3', 'phone' => '9832980437'],
    ];

    return $contacts;
}

Route::get('/', function () {
    return view('layouts.public');
});

Route::get('/contacts', function () {
    $contacts = getContacts();

    $companies = [
        1 => ['name' => 'Company One', 'Contacts' => 3],
        2 => ['name' => 'Company Two', 'Contacts' => 5],
    ];

    return view('contacts.index', compact('contacts', 'companies'));
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contacts = getContacts();
    abort_unless(isset($contacts[$id]), 404);
    $contact = $contacts[$id];
    return view('contacts.show', compact('contact'));
})->name('contacts.show');

