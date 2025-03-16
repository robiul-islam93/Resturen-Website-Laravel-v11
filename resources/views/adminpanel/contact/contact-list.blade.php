@extends('adminpanel.components.master')
@section('title', 'Contact List')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0"></div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex"></div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                        <span><i class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Success!</strong> {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                        <span><i class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Error!</strong> {{ session('error') }}
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
                        <h4 class="card-title">Contact Records</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contact as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="showDeleteAlert({{ $item->id }})">Delete</button>

                                            <!-- Hidden delete form -->

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper text-center mt-4">
                    {{ $contact->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Custom Delete Alert -->
<div id="deleteAlert" class="alert alert-danger notification" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -30%); z-index: 9999;">
    <p class="notification-title"><strong>Warning!</strong> Confirm Deletion</p>
    <p>Are you sure you want to delete this record? This action cannot be undone.</p>
    <button id="confirmDelete" class="btn btn-danger btn-sm rounded-0">Confirm</button>
    <button class="btn btn-link btn-sm" onclick="hideDeleteAlert()">Cancel</button>
</div>

<script>
    let deleteFormId = null;

    function showDeleteAlert(recordId) {
        deleteFormId = `delete-form-${recordId}`;
        document.getElementById('deleteAlert').style.display = 'block';
    }

    function hideDeleteAlert() {
        document.getElementById('deleteAlert').style.display = 'none';
    }

    document.getElementById('confirmDelete').addEventListener('click', function() {
        if (deleteFormId) {
            document.getElementById(deleteFormId).submit();
        }
    });
</script>

@endsection
