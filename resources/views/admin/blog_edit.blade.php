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
                        <form method="POST" action="{{route('blog.update', $blog->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!--text field-->
                            <label for="">Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Enter your text">
                                </div>
                            </div>
                            <label for="">Key word</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="key_word" name="key_word" value="{{ $blog->key_word }}"  class="form-control" placeholder="Enter your key word">
                                    <p id="validate"></p>
                                </div>
                            </div>
                            <p id="blog_key_word" style="display:none;">Link : <a href="#" id="blog_link" ></a> </p>
                            <!--text field-->

                            <!--ck editor-->
                            <label for="">Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                    
                                    <textarea class="summernote" name="content" id="" cols="30" rows="10">{!! $blog->content !!}</textarea>
                                </div>
                            </div>
                            <!--ck editor-->

                            <label for="">Photo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="" value="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                                    <img src="{{ asset('storage/images/blogs/'.$blog->image) }}" name="photo" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                                </div>
                            </div>

                            <label for="">Category</label>
                            <div class="form-group">
                                <select name="category_id" class="selectpicker">
                                    @foreach($categories as $category)
                                        @if($category->id == $blog->category_id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <label for="">Author</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="author" value="{{ $blog->author }}" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                        </form>
                    </div>
                </div>

            </div>
            <!--section end-->

        </div>
    </section>


<script>
key_word.addEventListener('keyup',function(){
	blog_link.innerHTML = 'https://devest.co/blog/' + this.value.replaceAll(' ','-');
	blog_key_word.style.display = 'block';
	
	let value = key_word.value;
	const XML = new XMLHttpRequest();
	XML.onreadystatechange = function() {
	if(this.readyState === 4 && this.status === 200){
	    if(this.responseText == 'bad'){
	        blog_link.style.color = '#f00';
	    }else{
	        blog_link.style.color = '#337ab7';
	    }
	}
	}
	XML.open("GET", "/key-word-validate/"+value,true);
	XML.setRequestHeader(
	"Content-Type",
	"application/x-www-form-urlencoded"
	);
	XML.send('key_word=' + value);
        
});
</script>
@endsection
