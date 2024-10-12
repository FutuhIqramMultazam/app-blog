<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Tambahkan ini di atas

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); // ini fungsi nya buat input select
        return view('dashboard.posts.create', compact('categories'));
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
            'title' => 'required|max:255|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ], [
            'title.required' => 'Title harus di isi lah bos.',
            'category_id.required' => 'Pilih aja yang ada di select apa susah nya.',
            'body.required' => 'isi aja kali walaupun satu kata bos.',
            'title.unique' => 'eh judul ini udah ada yang pake',
        ]); // contoh penggunaan Customizing The Error Messages

        $slug = Str::slug($request->title); // Menggunakan Str::slug untuk hasil lebih aman
        $excerpt = Str::limit(strip_tags($request->body), 40); // Buat excerpt otomatis dari body (ambil 40 karakter pertama)

        if ($request->file('image')) {
            $image = $request->file('image')->store('post-images');
        } else {
            $image = null;
        }

        $hasil = [
            'title' => $request->title,
            'slug' => $slug,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'image' => $image,
            'excerpt' => $excerpt,
            'body' => $request->body,
            // 'published_at' => now(),
        ];

        // Insert data ke database
        Post::create($hasil);

        return redirect('/dashboard/posts')->with('status', "Post created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required',
            'image' => 'image|file|max:1024|nullable',
            'body' => 'required',
            // Validasi slug dengan pengecualian post yang sedang di-update
            'title' => ['required', 'max:255', 'unique:posts,title,' . $post->id],
        ], [
            'title.unique' => 'eh judul ini udah ada yang pake',
        ]);


        $slug = Str::slug($request->title); // Menggunakan Str::slug untuk hasil lebih aman
        $excerpt = Str::limit(strip_tags($request->body,), 40, '....'); // Buat excerpt otomatis dari body (ambil 40 karakter pertama)

        // Check if the user wants to delete the existing image
        if ($request->has('delete_image')) {
            if ($post->image) {
                Storage::delete($post->image); // Delete the image from storage
                $post->image = null; // Set image field to null in the database
            }
        }

        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $image = $request->file('image')->store('post-images');
        } else {
            $image = $post->image;
        }

        $hasil = [
            'title' => $request->title,
            'slug' => $slug,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'image' => $image,
            'excerpt' => $excerpt,
            'body' => $request->body,
            // 'published_at' => now(),
        ];

        // Insert data ke database
        Post::where('id', $post->id)->update($hasil);

        return redirect('/dashboard/posts')->with('status', "Post updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('status', "Post deleted successfully!");
    }
}
