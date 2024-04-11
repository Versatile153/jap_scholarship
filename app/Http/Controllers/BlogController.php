<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'details' => 'nullable',
            'image_url' => 'nullable',
        ]);

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('public/recommendations');
            $validatedData['image_url'] = $path;
        }

        $blog = Post::create($validatedData);

        return redirect()->back()->with('success', 'Your Blog has been submited for review!');

    }
}
