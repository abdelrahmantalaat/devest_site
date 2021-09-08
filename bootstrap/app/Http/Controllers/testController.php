 
 <?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Setting;
use Illuminate\Http\Request;

class testController extends Controller
{
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
}

 
 
 
 
 
 
 
 
 