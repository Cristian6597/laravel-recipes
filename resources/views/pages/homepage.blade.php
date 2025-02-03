@extends('layout.app')

@section('mid-content')
    <section class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Descrizione Ricetta</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recipes as $slug => $item)
                <a href="{{ url('/recipes/' . $slug) }}" class="block">
                    <div class="bg-white shadow-lg rounded-2xl p-6 border hover:shadow-xl transition">
                        <h1 class="text-2xl font-semibold text-gray-800 mb-2">{{ $item['title'] }}</h1>
                        <h3 class="text-lg font-semibold text-gray-600">Ingredienti:</h3>
                        <p class="text-gray-700 mb-4">{{ $item['ingredienti'] }}</p>
                        <h3 class="text-lg font-semibold text-gray-600">Passaggi:</h3>
                        <ol class="list-decimal pl-5 text-gray-700">
                            @foreach ($item['steps'] as $step => $description)
                                <li><strong>{{ $step }}:</strong> {{ $description }}</li>
                            @endforeach
                        </ol>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
