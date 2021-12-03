@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mb-3">
                <div class="card-header">New Note</div>
                <div class="card-body">
                    <form action="/store-note" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="completed" class="form-label">Completed</label>
                            <select name="completed" id="completed" class="form-select">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Create</button>
                    </form>
                </div>
            </div>

            <a href="/notes" class="btn btn-outline-dark btn-sm">Go Back</a>

        </div>
    </div>
@endsection
