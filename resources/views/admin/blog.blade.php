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
                                Blog
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                        </div>

                        <div class="body table-responsive">
                            <div class="row">
                                <div class="col-md-4"><a style="margin-top: 0px; " href="/admin/blog/create" class="btn btn-success btn-lg btn-block">NEW</a></div>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TITLE</th>
                                    <th>KEYWORD</th>
                                    <th>CONTENT</th>
                                    <th>IMAGE</th>
                                    <th>CATEGORY</th>
                                    <th>AUTHOR</th>
                                    <th>DATE</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($blogs as $field)

                                    <tr>
                                        <th scope="row">{{ $field->id }}</th>
                                        <td name="title">{{ $field->title }}</td>
                                        <td name="keyword">{{ $field->key_word }}</td>
                                        <td name="content">{!! $field->content !!}</td>
                                        <td><img name="image" src="{{ asset('images/blogs/'.$field->image) }}" style="width: 100px; height: auto" alt=""></td>
                                        <td name="category">{{ $field->category->name }}</td>
                                        <td name="category">{{ $field->author }}</td>
                                        <td name="category">{{ $field->created_at }}</td>
                                        <td>
                                            <a href="/admin/blog/{{ $field->id }}/edit" class="btn btn-primary" name="edit">EDIT</a>
                                            <button class="btn btn-danger" onclick="delete_form({{ $field->id }})" type="submit" name="delete">DELETE</button>
                                        </td>
                                    </tr>

                                    <form method="POST" id="delete-form-{{$field->id}}" action="{{ route('blog.destroy', $field) }}" >
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
