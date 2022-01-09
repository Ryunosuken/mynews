<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function add()
{
    return view('admin.news.create');
}
}
cd~/environment/mynews
php artisan make:controller Admin/ProfileController

