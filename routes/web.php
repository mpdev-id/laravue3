<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $questions = QuestionResource::collection(
      Question::with('user')->latest()->paginate(15)
    );

    return Inertia::render('Questions/Index', [
        'questions' => $questions]);
})->name('questions.index');

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
