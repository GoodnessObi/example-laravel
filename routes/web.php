<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '50k'
        ],
        [
            'id' => 2,
            'title' => 'AI Specialist',
            'salary' => '20k'
        ],    [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '10k'
        ]
    ]]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '50k'
        ],
        [
            'id' => 2,
            'title' => 'AI Specialist',
            'salary' => '20k'
        ],    [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '10k'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
