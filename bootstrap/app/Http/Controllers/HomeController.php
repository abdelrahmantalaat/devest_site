<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::all();
        $portfolio = Portfolio::all();
        $blog = Blog::all();
        $client = Client::all();
        $setting = Setting::all();

        return view('index',['pages'=>$page, 'portfolios'=>$portfolio, 'blogs'=>$blog, 'clients'=>$client, 'settings'=>$setting]);
    }

    public function getAbout(){
        $setting = Setting::all();
        $page = Page::all();
        $pageTitle = 'About Us';
        return view('about',['settings'=>$setting,'pageTitle' => $pageTitle],[ 'pages'=>$page]);
    }

    public function getPortfolio(){
        $portfolio = Portfolio::all();
        $setting = Setting::all();
        $pageTitle = 'Our Business';
        return view('portfolio',['portfolios'=>$portfolio, 'settings'=>$setting,'pageTitle' => $pageTitle]);
    }

    public function getPortfolioPost(Portfolio $portfolio)
    {
        $settings = Setting::all();
        $pageTitle = 'Our Business';
        return view('portfolio_post',compact('portfolio'),compact('settings'),['pageTitle' => $pageTitle]);
    }

    public function getContact(){
        $setting = Setting::all();
        $pageTitle = 'Contact Us';
        return view('contact',['settings'=>$setting,'pageTitle' => $pageTitle]);
    }

    public function getBlog(){
        $blog = Blog::all();
        $recent_post = Blog::orderBy('created_at', 'desc')->first();
        $category = Category::all();
        $setting = Setting::all();
        $pageTitle = 'Blog';
        return view('blog',['posts'=>$blog, 'recent_post'=>$recent_post, 'categories'=>$category, 'settings'=>$setting , 'pageTitle' => $pageTitle]);
    }

    // public function getBlogPost(Blog $blog){
    //     $settings = Setting::all();
    //     return view('blog_post', compact('blog'),compact('settings'));
    // }
    public function getBlogPost($kew_word){
        $blog = Blog::where('key_word',$kew_word)->first();
        $pageTitle = 'Blog';
        return view('blog_post',['blog' => $blog , 'pageTitle' => $pageTitle]);
    }


    public function getTest(){
        return view('gallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAdmin(){
            return view('admin.index');
    }
}
