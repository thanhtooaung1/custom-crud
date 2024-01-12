@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-bg-dark"><a href="{{ route('course.index') }}" class="btn text-light"><i
                                class="fas fa-arrow-left"></i> Course Detail</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>{{ $course->level }}</td>
                                    <td>{{ $course->type }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->end_date }}</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
