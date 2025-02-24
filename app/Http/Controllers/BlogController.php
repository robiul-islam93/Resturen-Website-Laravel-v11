<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogList()
    {

        $BlogData = Blog::orderBy('id', 'desc')->paginate(5);

        return view('adminpanel.blog.blog-list', compact('BlogData'));
    }


    public function BlogStore(Request $request)
    {
        $request->validate([
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disease_name' => 'required',
            'blog_title' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog_content' => 'required|string|max:255',
            'blog_author' => 'required|string|max:255',
        ]);

        $productImgPath = null;

            if ($request->hasFile('img_url')) {
                $productImg = $request->file('img_url');
                $productImgName = time() . '-' . $productImg->getClientOriginalName();
                $productImgPath = "blog-image/{$productImgName}";
                $productImg->move(public_path('blog-image/'), $productImgName);
            }

            Blog::create([
            'disease_name' => $request->disease_name,
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_content' => $request->blog_content,
            'blog_author' => $request->blog_author,
        ]);

        return redirect()->route('blog-list')->with('success', 'Blog updated successfully');
    }




}
