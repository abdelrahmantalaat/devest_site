<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blogs=Blog::query();
        //$blogs->when(\request('search'),function ($q){
          // $q->where('title','like','%'.\request('title').'%');
        //});

        //return $blogs->get();

        $blogs = Blog::all();
        return view('admin.blog',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog_create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'key_word' => 'required|unique:blogs|min:3',
            'content' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        $input['key_word'] = str_replace(' ','-',$request->key_word);

        if ($image = $request->file('image')) {
            // $image = $request['image'];
            // \Storage::disk('public')->putFileAs('images/blogs',$image, $image);
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/blogs'), $imageName);
            $input['image'] = $imageName;
        }

        Blog::create($input);

        return redirect()->route('blog.index')
            ->with('success','Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

    }
    /**
     * Key word validation if isset key word in db.
     */
     public function key_word_validate($key_word){
        $issetKey = Blog::where('key_word',$key_word)->first();
        if($issetKey){
            echo 'bad';
        }else{
            echo 'good';
        }         
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blog_edit',compact('blog'),['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'key_word' => 'required|unique:blogs,key_word,'. $blog->id,
            'content' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $input = $request->all();
        $input['key_word'] = str_replace(' ','-',$request->key_word);
        
        if ($image = $request->file('image')) {
            // $image = $request['image'];
            // \Storage::disk('public')->putFileAs('images/blogs',$image, $image);
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/blogs'), $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }
        $blog->update($input);

        return redirect()->route('blog.index')
            ->with('success','Blog post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index')
            ->with('success','Blog post deleted successfully');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Blog::query()
            ->where('title', 'LIKE', "%{$search}%")
           // ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();

        $recent_post = Blog::latest()->first();
        $categories = Category::all();
        $settings = Setting::all();

        // Return the search view with the results compacted
        return view('blog', compact('posts','recent_post','categories','settings'));
    }
    public function addCategory(Request $request){
        $request->validate([
            'name' => 'required|string|unique:categories'   
        ]);
        $addCategory = Category::create($request->all());
        if($addCategory){
            return redirect('admin')
            ->with('success','Category post created successfully.');
        }
    }
}
