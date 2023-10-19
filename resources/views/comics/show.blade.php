@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">Go back to list</a>

        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning mb-3">Edit comic</a>

        <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
            data-bs-target="#deleteModal-{{ $comic->id }}">
            Delete comic
        </button>




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

        {{-- deleteModal --}}
        <div class="modal fade" id="deleteModal-{{ $comic->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">DELETING COMIC</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this comic?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">Delete comic</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
