<?php
use Illuminate\Support\Facades\Route;

Route::get('/books', function () {
    return response()->json([
        [
            'id' => 1,
            'title' => 'Programming 101',
            'author' => 'John Doe',
            'available' => 5
        ],
        [
            'id' => 2,
            'title' => 'Math Basics',
            'author' => 'Jane Smith',
            'available' => 2
        ]
    ]);
});

Route::get('/categories', function () {
    return response()->json([
        [
            'id' => 1,
            'name' => 'BSIT'
        ],
        [
            'id' => 2,
            'name' => 'BSCS'
        ]
    ]);
});

Route::get('/borrowers', function () {
    return response()->json([
        [
            'id' => 1,
            'name' => 'Shannaia Keth Dablio',
            'course' => 'BSIT',
            'year_level' => 3,
            'section' => 'A'
        ],
        [
            'id' => 2,
            'name' => 'Jumar Ebal',
            'course' => 'BSTM',
            'year_level' => 3,
            'section' => 'B'
        ],
        [
            'id' => 3,
            'name' => 'Kylle Froi Visitacion',
            'course' => 'BSCE',
            'year_level' => 3,
            'section' => 'C'
        ],
        [
            'id' => 4,
            'name' => 'Brent Anthony Micabalo',
            'course' => 'BSCE',
            'year_level' => 3,
            'section' => 'D'
        ]
    ]);
});

Route::get('/transactions', function () {
    return response()->json([
        [
            'id' => 1,
            'book_title' => 'Programming 101',
            'borrower_name' => 'Juan',
            'status' => 'borrowed'
        ],
        [
            'id' => 2,
            'book_title' => 'Math Basics',
            'borrower_name' => 'Maria',
            'status' => 'returned'
        ]
    ]);
});

Route::get('/notices', function () {
    return response()->json([
        [
            'id' => 1,
            'title' => 'Overdue Reminder',
            'message' => 'Return books ASAP'
        ],
        [
            'id' => 2,
            'title' => 'Library Closed',
            'message' => 'Closed on Oct 10'
        ]
    ]);
});

Route::get('/summary', function () {
    return response()->json([
        'total_books' => 150,
        'total_borrowers' => 80,
        'overdue_count' => 3
    ]);
});