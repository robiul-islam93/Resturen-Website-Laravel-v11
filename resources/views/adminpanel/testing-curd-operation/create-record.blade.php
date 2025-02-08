@extends('adminpanel.components.master')
@section('title', 'Admin Index Page')
@section('content')

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Create Record!</h4>
                    <p class="mb-1">Validation</p>
                </div>
            </div>
            <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div> -->
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
                            <form class="form-valide" action="{{ route('testing-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="username">Username
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter a username.." value="{{ old('username') }}">
                                                @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your valid email.." value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="image">Upload Image
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                                @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                                <img id="showImage" style="width: 80px"
                                                    src="{{ asset($record->image ?? 'default-img/User-avatar.jpg') }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="skill">Best Skill
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control @error('skill') is-invalid @enderror" id="skill" name="skill">
                                                    <option value="">Please select</option>
                                                    <option value="html" {{ old('skill') == 'html' ? 'selected' : '' }}>HTML</option>
                                                    <option value="css" {{ old('skill') == 'css' ? 'selected' : '' }}>CSS</option>
                                                    <option value="javascript" {{ old('skill') == 'javascript' ? 'selected' : '' }}>JavaScript</option>
                                                    <option value="angular" {{ old('skill') == 'angular' ? 'selected' : '' }}>Angular</option>
                                                    <option value="react" {{ old('skill') == 'react' ? 'selected' : '' }}>React</option>
                                                    <option value="vuejs" {{ old('skill') == 'vuejs' ? 'selected' : '' }}>Vue.js</option>
                                                    <option value="ruby" {{ old('skill') == 'ruby' ? 'selected' : '' }}>Ruby</option>
                                                    <option value="php" {{ old('skill') == 'php' ? 'selected' : '' }}>PHP</option>
                                                    <option value="asp" {{ old('skill') == 'asp' ? 'selected' : '' }}>ASP.NET</option>
                                                    <option value="python" {{ old('skill') == 'python' ? 'selected' : '' }}>Python</option>
                                                    <option value="mysql" {{ old('skill') == 'mysql' ? 'selected' : '' }}>MySQL</option>
                                                </select>
                                                @error('skill')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="currency">Currency
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('currency') is-invalid @enderror" id="currency" name="currency" placeholder="$21.60" value="{{ old('currency') }}">
                                                @error('currency')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="212-999-0000" value="{{ old('phone') }}">
                                                @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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

        reader.onload = function() {
            const output = document.getElementById('showImage');
            output.src = reader.result;
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection