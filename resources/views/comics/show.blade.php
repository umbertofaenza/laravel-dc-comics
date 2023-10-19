@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">Go back to list</a>

        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning mb-3">Edit comic</a>

        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger mb-3">Delete comic</button>
        </form>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $comic->title }}</h1>
                        <ul>
                            <li>{{ $comic->description }}</li>
                            <li>{{ $comic->price }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
