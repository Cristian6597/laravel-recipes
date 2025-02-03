<?php

use Illuminate\Support\Facades\Route;

$recipes = [
    'pasta-al-pomodoro' => [
        'title' => 'Pasta al Pomodoro',
        'ingredienti' => 'Pomodori, pasta, sale, olio, basilico',
        'steps' => [
            'Step 1' => 'Preparo l\'acqua',
            'Step 2' => 'Preparo il sugo',
            'Step 3' => 'Butto la pasta',
            'Step 4' => 'Unisco il tutto e servo',
        ]
    ],
    'arrosto-misto' => [
        'title' => 'Arrosto Misto',
        'ingredienti' => 'Carne mista, sale, pepe, olio, rosmarino',
        'steps' => [
            'Step 1' => 'Preparo la carne',
            'Step 2' => 'Condisco con spezie',
            'Step 3' => 'Cuocio in forno',
            'Step 4' => 'Servo caldo',
        ]
    ],
    'pasta-carbonara' => [
        'title' => 'Pasta Carbonara',
        'ingredienti' => 'Pasta, uova, pecorino, guanciale, pepe',
        'steps' => [
            'Step 1' => 'Cuocio la pasta',
            'Step 2' => 'Rosolo il guanciale',
            'Step 3' => 'Preparo la crema di uova e pecorino',
            'Step 4' => 'Manteco e servo',
        ]
    ],
    'pizza' => [
        'title' => 'Pizza',
        'ingredienti' => 'Farina, acqua, lievito, sale, pomodoro, mozzarella',
        'steps' => [
            'Step 1' => 'Preparo l\'impasto',
            'Step 2' => 'Lascio lievitare',
            'Step 3' => 'Stendo la base',
            'Step 4' => 'Aggiungo il condimento e inforno',
            'Step 5' => 'Servo calda',
        ]
    ],
];

Route::get('/', function () use ($recipes) {
    return view('pages.homepage', ['recipes' => $recipes]);
});

Route::get('/recipes/{recipe}', function ($recipe) use ($recipes) {
    return view('pages.recipe', ['recipe' => $recipes[$recipe]]);
});
