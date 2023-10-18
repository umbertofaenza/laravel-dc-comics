@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">Go back to list</a>

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