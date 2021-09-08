@extends('admin.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DEVEST ADMIN DASHBOARD</h2>
            </div>

            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Users
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                        </div>

                        <div class="body table-responsive">
                            <div class="row">
                                <div class="col-md-4"><a style="margin-top: 0px; " href="{{ route('users.create') }}" class="btn btn-success btn-lg btn-block">NEW</a></div>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td name="name">{{ $user->name }}</td>
                                        <td name="email">{{ $user->email }}</td>
                                        <td name="password">{{ $user->password }}</td>
                                        <td>
                                            <a href="{{ route('users.edit',compact('user')) }}" class="btn btn-primary" name="edit">EDIT</a>
                                            <button class="btn btn-danger" onclick="delete_form({{ $user->id }})" type="submit" name="delete">DELETE</button>
                                        </td>
                                    </tr>

                                    <form method="POST" id="delete-form-{{$user->id}}" action="{{ route('users.destroy', $user) }}" >
                                        @csrf
                                        @method('DELETE')
                                    </form>

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
