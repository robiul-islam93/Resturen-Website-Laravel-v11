@extends('adminpanel.components.master')
@section('title', 'admin index page')
@section('content')

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <!-- <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div> -->
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol> -->
                <!-- Add the Create Record button -->
                <a href="{{ route('create-record') }}" class="btn btn-primary ml-3">
                    Create Record
                </a>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                        <span><i class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Info!</strong> {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                        <span><i class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Finally!</strong> {{ session('error') }}
                </div>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Records</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Best Skill</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Currency</th>
                                        <th scope="col">Phone (US)</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($records as $record)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $record->username }}</td>
                                        <td>{{ $record->skill }}</td>
                                        <td>{{ $record->email }}</td>
                                        <td>{{ $record->currency }}</td>
                                        <td>{{ $record->phone }}</td>
                                      
                                        <td><img src="{{ asset($record->image) }}" alt="{{ $record->username }}" width="80"></td>

                                       
                                        <td>
                                            <a href="{{ route('edit-record', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="showDeleteAlert({{ $record->id }})">Delete</button>

                                            <!-- Hidden delete form -->
                                            <form id="delete-form-{{ $record->id }}" action="{{ route('delete-record', $record->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
    </div>

    <!-- Pagination links -->
    <div class="pagination-wrapper text-center mt-4">
        {{ $records->appends(request()->except('page'))->links('pagination::bootstrap-5') }}
    </div>

</div>
<!--**********************************
        Content body end
    ***********************************-->

<!-- Custom Alert -->
<div id="deleteAlert" class="alert alert-danger notification" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -30%); z-index: 9999;">
    <p class="notificaiton-title"><strong>Danger!</strong> Confirm Deletion</p>
    <p>Are you sure you want to delete this record? This action cannot be undone.</p>
    <button id="confirmDelete" class="btn btn-danger btn-sm rounded-0">Confirm</button>
    <button class="btn btn-link btn-sm" onclick="hideDeleteAlert()">Cancel</button>
</div>

<script>
    let deleteFormId = null;

    function showDeleteAlert(recordId) {
        // Save the form ID to a variable for submission
        deleteFormId = `delete-form-${recordId}`;

        // Show the custom alert
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.style.display = 'block';
    }

    function hideDeleteAlert() {
        // Hide the custom alert
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.style.display = 'none';
    }

    document.getElementById('confirmDelete').addEventListener('click', function() {
        // Submit the saved form ID
        if (deleteFormId) {
            document.getElementById(deleteFormId).submit();
        }
    });
</script>

@endsection