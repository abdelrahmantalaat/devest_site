@extends('admin.app')

@section('content')



<section class="content">

    <div class="container-fluid">
        <div class="block-header">
            <h2>Contacts</h2>
        </div>

        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Contacts
                            <small>Basic example without any additional modification classes</small>
                        </h2>
                    </div>

                    <div class="body table-responsive">
                        <div class="row">
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>CONTACT NO</th>
                                <th>EMAIL</th>
                                <th>SERVICE TYPE</th>
                                <th>MESSAGE</th>
                                <th>DATE</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($contacts as $contact)

                                <tr>
                                    <th scope="row">{{ $contact->id }}</th>
                                    <td name="name">{{ $contact->name }}</td>
                                    <td name="contact_no">{{ $contact->contact_no }}</td>
                                    <td name="email">{{ $contact->email }}</td>
                                    <td name="service_type">{{ $contact->service_type }}</td>
                                    <td name="message">{!! $contact->message !!}</td>
                                    <td name="date">{{ $contact->created_at }}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function delete_form (id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form-'+id).submit();
                    }
                })
            }
        </script>

    </div>
</section>



@endsection
