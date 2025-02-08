@extends('adminpanel.components.master')
@section('title', 'admin index page')
@section('content')

@if (session('success'))
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
            <span><i class="mdi mdi-close"></i></span>
        </button>
        <strong>Info!</strong> {{ session('success') }}
    </div>
@endif
<!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-1">Validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Validation</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                        <form class="form-valide" action="{{ route('update-record', $record->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="username">Username <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $record->username) }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $record->email) }}">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="image">Upload Image</label>
                <div class="col-lg-6">
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="{{ asset('storage/' . $record->image) }}" alt="User Image" class="mt-2 img-thumbnail" style="width: 100px;">
                </div>
            </div> -->

            <div class="col-md-6">
    <div class="form-group mb-3">
        <label for="example-fileinput" class="form-label">Upload Image <span class="text-danger">*</span></label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage(event)">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="mb-3">
        <label for="example-fileinput" class="form-label"></label>
        <!-- Display the previously uploaded image -->
        <img id="showImage" style="width: 80px" 
     src="{{ asset($record->image ?? 'default-img/User-avatar.jpg') }}" 
     class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">


    </div>
</div>


        </div>
        <div class="col-xl-6">
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="skill">Best Skill <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <select class="form-control" id="skill" name="skill">
                        <option value="html" {{ $record->skill == 'html' ? 'selected' : '' }}>HTML</option>
                        <option value="css" {{ $record->skill == 'css' ? 'selected' : '' }}>CSS</option>
                        <option value="javascript" {{ $record->skill == 'javascript' ? 'selected' : '' }}>JavaScript</option>
                        <!-- Add other options -->
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="currency">Currency <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="currency" name="currency" value="{{ old('currency', $record->currency) }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="phone">Phone <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $record->phone) }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-8 ml-auto">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
        Content body end
    ***********************************-->
    <script>
   function previewImage(event) {
    const input = event.target;
    const reader = new FileReader();

    reader.onload = function () {
        const output = document.getElementById('showImage');
        output.src = reader.result;
    };

    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

@endsection