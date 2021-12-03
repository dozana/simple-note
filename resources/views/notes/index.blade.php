@extends('layouts.app')

@section('title')
    Notes
@endsection

@section('content')
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
                        @foreach($notes as $note)
                        <tr>
                            <td>{{ $note->title }}</td>
                            <td class="text-center">{{ $note->completed }}</td>
                            <td>{{ $note->created_at }}</td>
                            <td class="text-center">
                                @if(!$note->completed)
                                    <a href="/notes/{{ $note->id }}/complete" class="btn btn-warning btn-sm">Complete</a>
                                @endif

                                <a href="/notes/{{ $note->id }}" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
