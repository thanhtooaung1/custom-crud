@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-bg-dark"><a href="{{ route('course.index') }}" class="btn text-light"><i
                                class="fas fa-arrow-left"></i></a> Create Course</div>
                    <div class="card-body">
                        <form action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name <small
                                            class="text-danger">*</small></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Course name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="fee" class="form-label">Fee <small
                                            class="text-danger">*</small></label>
                                    <input type="number" class="form-control @error('fee') is-invalid @enderror"
                                        name="fee" placeholder="Course Fee" value="{{ old('fee') }}">
                                    @error('fee')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="level" class="form-label">Level <small
                                            class="text-danger">*</small></label>
                                    <select class="form-select" name="level">
                                        @foreach (['Basic', 'Intermediate', 'Advance'] as $level)
                                            <option value={{ $level }}
                                                @if ($level == old('level')) selected @endif>{{ $level }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('level')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="type" class="form-label">Type <small
                                            class="text-danger">*</small></label>
                                    <select class="form-select" name="type">
                                        @foreach (['Online', 'Offline'] as $type)
                                            <option value={{ $type }}
                                                @if ($type == old('type')) selected @endif>
                                                {{ $type }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="start_date" class="form-label">Start Date <small
                                            class="text-danger">*</small></label>
                                    <input type="date" name="start_date" value="{{ old('start_date') }}"
                                        class="form-control @error('start_date') is-invalid @enderror">
                                    @error('start_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">End Date <small
                                            class="text-danger">*</small></label>
                                    <input type="date" name="end_date" value="{{ old('end_date') }}"
                                        class="form-control @error('end_date') is-invalid @enderror">
                                    @error('end_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-3">
                                <button type="submit" class="btn btn-dark" type="button">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
