<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // 管理画面表示
    public function dashboard()
    {
        // 管理者チェック
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/login')->with('error', '管理画面へのアクセス権限がありません');
        }
        
        return view('admin.dashboard');
    }
}