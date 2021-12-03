@extends('layouts.app')

@section('title')
    Note - {{ $note->title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <div class="card mb-3">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th class="text-center">Completed</th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $note->title }}</td>
                                <td class="text-center">{{ $note->completed }}</td>
                                <td>{{ $note->created_at }}</td>
                                <td class="text-center">
                                    <form action="">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <a href="/notes" class="btn btn-outline-dark btn-sm">Go Back</a>

        </div>
    </div>
</div>
@endsection
