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
                                Clients
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                        </div>

                        <div class="body table-responsive">
                            <div class="row">
                                <div class="col-md-4"><a style="margin-top: 0px; " href="/admin/client/create" class="btn btn-success btn-lg btn-block">NEW</a></div>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>CONTENT</th>
                                    <th>PHOTO</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($clients as $client)

                                    <tr>
                                        <th scope="row">{{ $client->id }}</th>
                                        <td name="clients[{{ $client->name }}]">{{ $client->name }}</td>
                                        <td name="clients[{{ $client->content }}]">{{ $client->content }}</td>
                                        <td><img name="clients[{{ $client->id }}]" src="{{ asset('storage/images/client/'.$client->image) }}" style="width: 100px; height: auto" alt=""></td>
                                        <td>
                                            <a href="/admin/client/{{ $client->id }}/edit" class="btn btn-primary" name="edit">EDIT</a>
                                            <button class="btn btn-danger" onclick="delete_form({{ $client->id }})" type="submit" name="delete">DELETE</button>
                                        </td>
                                    </tr>

                                    <form method="POST" id="delete-form-{{$client->id}}" action="{{ route('client.destroy', $client) }}" >
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
