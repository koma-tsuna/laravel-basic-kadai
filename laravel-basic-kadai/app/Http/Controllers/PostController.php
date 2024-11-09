<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        // postsテーブルからすべてのデータを取得し、$postsに代入する
        $posts = DB::table('posts')->get();

        // 変数$postsをpost/index.blade.phpファイルにわたす
        return view('posts.index', compact('posts'));
    }

}
