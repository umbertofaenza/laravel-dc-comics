@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="mb-3">{{ $title }}</h1>

        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">Add comic</a>

        <div class="row g-3 mb-3">
            @forelse($comics as $comic)
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3>
                                {{ $comic->title }}
                            </h3>
                            <ul>
                                <li>{{ $comic->description }}</li>
                                <li>{{ $comic->price }}</li>
                            </ul>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">More details</a>
                        </div>
                    </div>
                </div>
            @empty
                No comics found.
            @endforelse
        </div>


    </section>
@endsection
