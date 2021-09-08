@extends('admin.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DEVEST ADMIN DASHBOARD</h2>
            </div>

            <!-- section -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <h2>
                            Create
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!--text field-->
                            <label for="">Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="title"  class="form-control" placeholder="Enter your text">
                                </div>
                            </div>
                            <label for="">Key word</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="key_word" name="key_word"  class="form-control" placeholder="Enter your key word">
                                    <p id="validate"></p>
                                </div>
                            </div>
                            <p id="blog_key_word" style="display:none;">Link : <a href="#" id="blog_link" ></a> </p>
                            <!--text field-->

                            <!--ck editor-->
                            <label for="">Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <textarea class="summernote" name="content" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <!--ck editor-->

                            <label for="">Photo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                                    <img src="" name="photo" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                                </div>
                            </div>

                            <label for="">Category</label>
                            <div class="form-group">
                                <select name="category_id" class="selectpicker">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="">Author</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="author" value="{{ Auth::user()->name }}" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <!--ck editor-->

                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">ADD</button>
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
