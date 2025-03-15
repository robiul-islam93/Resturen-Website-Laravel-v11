@extends('adminpanel.components.master')
@section('title', 'Create Blog')
@section('content')


<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-md-12">
                <div class="welcome-text text-center">
                    <h4>Create Blog Post</h4>
                    <p class="mb-1">Fill in the details below</p>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Blog Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Image Upload -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blog Image <span class="text-danger">*</span></label>
                                        <input type="file" name="img_url" class="form-control @error('img_url') is-invalid @enderror" onchange="previewImage(event)">
                                        @error('img_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center mt-3">
                                        <img id="showImage" class="rounded img-thumbnail" style="width: 100px;" src="{{ asset('default-img/User-avatar.jpg') }}" alt="Blog Image">
                                    </div>
                                </div>

                                <!-- Blog Image Name -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blog Image Name <span class="text-danger">*</span></label>
                                        <input type="text" name="disease_name" class="form-control @error('disease_name') is-invalid @enderror" placeholder="Enter image name" value="{{ old('disease_name') }}">
                                        @error('disease_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Blog Title -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blog Title <span class="text-danger">*</span></label>
                                        <input type="text" name="blog_title" class="form-control @error('blog_title') is-invalid @enderror" placeholder="Enter blog title" value="{{ old('blog_title') }}">
                                        @error('blog_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Author Name -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Author Name <span class="text-danger">*</span></label>
                                        <input type="text" name="blog_author" class="form-control @error('blog_author') is-invalid @enderror" placeholder="Enter author name" value="{{ old('blog_author') }}">
                                        @error('blog_author')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Blog Status -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blog Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="">Select Status</option>
                                            <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Blog Description (Summernote Editor) -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Blog Description <span class="text-danger">*</span></label>
                                        <textarea id="blog-description" name="blog_description" class="form-control @error('blog_description') is-invalid @enderror" placeholder="Enter blog description">{{ old('blog_description') }}</textarea>
                                        @error('blog_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Blog Content (Summernote Editor) -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Blog Content <span class="text-danger">*</span></label>
                                        <textarea id="blog-content" name="blog_content" class="form-control @error('blog_content') is-invalid @enderror" placeholder="Enter blog content">{{ old('blog_content') }}</textarea>
                                        @error('blog_content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('showImage').src = reader.result;
        };
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }

    $(document).ready(function() {
        $('#blog-description').summernote({
            height: 150, // set editor height
            tabsize: 2, // set tab size
            placeholder: 'Write your description here'
        });

        $('#blog-content').summernote({
            height: 300, // set editor height
            tabsize: 2, // set tab size
            placeholder: 'Write your content here'
        });
    });
</script>

@endsection
