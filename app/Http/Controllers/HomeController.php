<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Verifica si hay un usuario autenticado
        if (Auth::id()) {
            $post=Post::all();
            $usertype = Auth::user()->usertype;
            
            if ($usertype == 'user') {
                return view('home.homepage',compact('post'));
            } elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        } else {
            // Maneja el caso cuando el usuario no está autenticado
            return redirect()->route('login');
        }
    }

    public function homepage()
    {
        $post=Post::all();
        return view('home.homepage',compact('post'));
    }
    public function post_details($id)
{
    $post=Post::find($id);
    return view('home.post_details',compact('post'));
}

}

