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
                            <form class="form-valide" action="{{ route('blog-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-fileinput" class="form-label">Blog Image <span class="text-danger">*</span></label>
                                            <input type="file" name="img_url" id="img_url" class="form-control @error('img_url') is-invalid @enderror" onchange="previewImage(event)">
                                            @error('img_url')
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
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="disease_name">Blog Image Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('disease_name') is-invalid @enderror" id="disease_name" name="disease_name" placeholder="Enter a disease_name.." value="{{ old('disease_name') }}">
                                                @error('disease_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="blog_title">Blog Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('blog_title') is-invalid @enderror" id="blog_title" name="blog_title" placeholder="Your valid blog_title.." value="{{ old('blog_title') }}">
                                                @error('blog_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="blog_description">Author Name<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('blog_description') is-invalid @enderror" id="blog_description" name="blog_description" placeholder="Your valid blog_description.." value="{{ old('blog_description') }}">
                                                @error('blog_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="status">Blog Status
                                            <span class="text-danger">*</span>
                                        </label>
                                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                                <option value="">Select Status</option>
                                                <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="Inactive" {{ old('status') == 'Inactive ' ? 'selected' : '' }}>Inactive </option>
                                            </select>
                                            @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="blog_description">Blog Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('blog_description') is-invalid @enderror" id="blog_description" name="blog_description" placeholder="Your valid blog_description.." value="{{ old('blog_description') }}">
                                                @error('blog_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="blog_content">Blog Content <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('blog_content') is-invalid @enderror" id="blog_content" name="blog_content" placeholder="Your valid blog_content.." value="{{ old('blog_content') }}">
                                                @error('blog_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
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
