<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function blogpageData() {
        $BlogData = Blog::latest()->get();
        return view('userpanel.blog-page', compact('BlogData'));
    }

    public function SingleblogpageData($id) {
        $singleBlogData = Blog::latest()->get();
        return view('userpanel.single-blog-page', compact('singleBlogData'));
    }

    public function BlogList()
    {

        $BlogData = Blog::orderBy('id', 'desc')->paginate(5);

        return view('adminpanel.blog.blog-list', compact('BlogData'));
    }


    public function BlogStore(Request $request)
    {
        $request->validate([
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disease_name' => 'required|string|max:255',
            'blog_title' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog_content' => 'required|string',
            'blog_author' => 'required|string|max:255',
        ]);

        $img = $request->file('img_url');
        $t = time();
        $file_name = $img->getClientOriginalName();
        $img_name = "{$t}-{$file_name}";
        $img_url = "uploads/bloge-img/{$img_name}";
        $img->move(public_path('uploads/bloge-img'), $img_name);

        Blog::create([
            'img_url' => $img_url,  // ✅ Storing the img_url path in DB
            'disease_name' => $request->disease_name,
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_content' => $request->blog_content,
            'blog_author' => $request->blog_author,  // ✅ Added blog_author
            'status' => $request->status ?? 'Inactive', // ✅ Default status if not selected
        ]);

        return redirect()->route('blog-list')->with('success', 'Blog created successfully');
    }




}
