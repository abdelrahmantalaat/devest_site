@extends('admin.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>NORMAL TABLES</h2>
            </div>

    <!-- section -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="card">
            <div class="header">
                <h2>
                    Header
                </h2>
            </div>
            <div class="body">
                <form method="POST" action="{{route('portfolio.update', $portfolio->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <!--text field-->
                    <label for="">Title</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="" name="title" value="{{ $portfolio->title }}" class="form-control" placeholder="Enter your text">
                        </div>
                    </div>
                    <!--text field-->

                    <!--ck editor-->
                    <label for="">Content</label>
                    <div class="form-group">
                        <div class="form-line">
                            
                            <textarea class="summernote" name="content" id="" cols="30" rows="10">{!! $portfolio->content !!}</textarea>
                        </div>
                    </div>
                    <!--ck editor-->

                    <label for="">Photo</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" id="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                            <img src="{{ asset('storage/images/portfolio/'.$portfolio->image) }}" name="photo" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                        </div>
                    </div>

                    <!--ck editor-->
                    <label for="">Platforms</label> <button type="button" style="float:right" class="btn btn-primary add-new">Add new</button>
                    <div class="form-group add-platform">
                        <!--<div class="form-line">-->
                            <select style="box-shadow: 0 2px 5px rgb(0 0 0 / 16%), 0 2px 10px rgb(0 0 0 / 12%);padding:7px;width:220px;border-radius: 2px; border: none;font-size: 13px;outline: none;" name="platforms[0][name]">
                                <option value="">----</option>
                                <option value="<i class='fab fa-windows'></i>">Windows</option>
                                <option value="<i class='fab fa-apple'></i>">Apple</option>
                                <option value="<i class='fab fa-android'></i>">Android</i></option>
                            </select>
                            <input  type="text" name="platforms[0][url]"   class="form-control" placeholder="Enter your platform url">
                        <!--</div>-->
                    </div>
                    <!--ck editor-->

                <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                </form>
            </div>
        </div>

    </div>
    <!--section end-->

        </div>
    </section>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    let num = 1;
    $('.add-new').on('click',function(){
        $('.add-platform').append(`
            <select style="box-shadow: 0 2px 5px rgb(0 0 0 / 16%), 0 2px 10px rgb(0 0 0 / 12%);padding:7px;width:220px;border-radius: 2px; border: none;font-size: 13px;outline: none;" name="platforms[${num}][name]">
                <option value="">----</option>
                <option value="<i class='fab fa-windows'></i>">Windows</option>
                <option value="<i class='fab fa-apple'></i>">Apple</option>
                <option value="<i class='fab fa-android'></i>">Android</i></option>
            </select>
            <input  type="text" name="platforms[${num}][url]"   class="form-control" placeholder="Enter your platform url">`);
            num++
    });
</script>

@endsection
