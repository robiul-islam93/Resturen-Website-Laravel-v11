@extends('adminpanel.components.master')
@section('title', 'Admin Profile Page')
@section('content')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="profile">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                    <div class="profile-photo">
                        <img src="{{ asset('adminpanel/images/avatar/admin.jpg') }}" class="img-fluid rounded-circle" alt="Admin Photo">
                    </div>
                </div>
                <div class="profile-info">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    <div class="profile-name">
                                        <h4 class="text-primary">{{ $admin->name }}</h4>
                                        <p>Name</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    <div class="profile-email">
                                        <h4 class="text-muted">{{ $admin->email }}</h4>
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    <div class="profile-phone">
                                        <h4 class="text-muted">+92 11223344556</h4>
                                        <p>Phone No.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-4 prf-col">
                                    <div class="profile-role">
                                        <h4 class="text-muted">ADMIN</h4>
                                        <p>Role</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
        
@endsection
