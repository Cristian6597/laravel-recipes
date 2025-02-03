@extends('layout.app')

@section('mid-content')
    <section class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">{{ $recipe['title'] }}</h1>
        <div class="bg-white shadow-lg rounded-2xl p-6 border">
            <h3 class="text-lg font-semibold text-gray-600">Ingredienti:</h3>
            <p class="text-gray-700 mb-4">{{ $recipe['ingredienti'] }}</p>
            <h3 class="text-lg font-semibold text-gray-600">Passaggi:</h3>
            <ol class="list-decimal pl-5 text-gray-700">
                @foreach ($recipe['steps'] as $step => $description)
                    <li><strong>{{ $step }}:</strong> {{ $description }}</li>
                @endforeach
            </ol>
        </div>
        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="text-blue-600 hover:underline">Torna alla Home</a>
        </div>
    </section>
@endsection
