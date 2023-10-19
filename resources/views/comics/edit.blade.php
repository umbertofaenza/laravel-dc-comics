@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1 class="mb-5">Editing comic: {{ $comic->title }}</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3 mb-3">
            @csrf
            @method('PUT')

            <div class="col-6">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
            </div>

            <div class="col-6">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control"
                    value="{{ $comic->description }}">
            </div>

            <div class="col-6">
                <label for="thumb">Thumb</label>
                <input type="text" id="thumb" name="thumb" class="form-control" value="{{ $comic->thumb }}">
            </div>

            <div class="col-6">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $comic->price }}">
            </div>

            <div class="col-6">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" class="form-control" value="{{ $comic->series }}">
            </div>

            <div class="col-6">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ $comic->type }}">
            </div>

            <div class="col-6">
                <label for="sale_date">Sale Date</label>
                <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ $comic->sale_date }}">
            </div>

            <div class="col-6">

            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-success w-25">Save</button>
            </div>
        </form>

        <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back to list</a>
    </section>
@endsection
