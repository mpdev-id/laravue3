<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Questions/Index', [
        'questions' => [
            [
                'id' => 1,
                'title' => 'Question 1',
                'body' => 'Question body 1',
                'created_at' => now(),
                'answers_count' => 0
            ],
            [
                'id' => 2,
                'title' => 'Question 2',
                'body' => 'Question body 2',
                'created_at' => now(),
                'answers_count' => 0
            ],
            [
                'id' => 3,
                'title' => 'Question 3',
                'body' => 'Question body 3',
                'created_at' => now(),
                'answers_count' => 0
            ]
        ]
    ]);
});

// ini url yang di tuju
Route::get('/questions/{question}', function ($question) {
    // returnnya page yang di buat di js
    return Inertia::render('Questions/Show', [ 
        'question' => [
            'id' => $question,
            'title' => "Question $question",
            'body' => "Question body $question",
            'created_at' => now(),
            'answers_count' => 0
        ]
        
    ]);
})->name('questions.show');
