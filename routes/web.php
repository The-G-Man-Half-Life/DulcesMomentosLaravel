<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Mateo'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Assasin',
                'salary' => 500000
            ],
            [
                'id' => 2,
                'title' => 'Paladin',
                'salary' => 1000000
            ],
            [
                'id' => 3,
                'title' => 'Imperial guard',
                'salary' => 1500000
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Assasin',
            'salary' => 500000
        ],
        [
            'id' => 2,
            'title' => 'Paladin',
            'salary' => 1000000
        ],
        [
            'id' => 3,
            'title' => 'Imperial guard',
            'salary' => 1500000
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
