@extends('backend.dashboard.dashboard')
@section('content')
    <div class="header pb-6 d-flex align-items-center"
        style="min-height: 150px; background-image: url({{ asset('dashboard/img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-11 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Add To Categories Section</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Name (Arabic)</label>
                                            <input type="text" value="{{ old('ar_name') }}" name="ar_name"
                                                class="form-control" placeholder="Write Arabic Category Name Here">
                                            @error('ar_name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Name (English)</label>
                                            <input type="text" value="{{ old('en_name') }}" name="en_name"
                                                class="form-control" placeholder="Write English Category Name Here">
                                            @error('en_name')
                                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 ">
                                <label class="form-control-label ">Upload Image</label>
                                <div class="input-group">
                                    <input type="file" name="photo" class="form-control" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                @error('photo')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex mt-3 justify-content-end">
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection