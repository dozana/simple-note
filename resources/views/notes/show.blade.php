@extends('layouts.app')

@section('title')
    Note - {{ $note->title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    {{ $note->title }}
                </div>
                <div class="card-body">

                    <ul class="list-unstyled">
                        <li>Date: {{ $note->created_at }}</li>
                        <li>Completed: {{ $note->completed }}</li>
                    </ul>

                    <div class="mb-3">
                        {{ $note->description }}
                    </div>

                    <form action="/notes/{{ $note->id }}/destroy" method="post">
                        @method('DELETE')
                        @csrf
                        <a href="/notes/{{ $note->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </div>
            </div>

            <a href="/notes" class="btn btn-outline-dark btn-sm">Go Back</a>

        </div>
    </div>
</div>
@endsection
