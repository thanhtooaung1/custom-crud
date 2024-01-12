@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header text-bg-dark">Courses
                        <a href="{{ route('course.create') }}" class="btn btn-success text-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @empty($courses)
                                    <div class="text-center">There are no data!</div>
                                @endempty --}}
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td>{{ $course->level }}</td>
                                        <td>{{ $course->type }}</td>
                                        <td>{{ $course->start_date }}</td>
                                        <td>{{ $course->end_date }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('course.edit', $course->id) }}"
                                                    class="btn btn-warning me-1"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('course.show', $course->id) }}"
                                                    class="btn btn-info me-1"><i class="fas fa-info"></i></a>

                                                <form id="delete-form" action="{{ route('course.destroy', $course->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
