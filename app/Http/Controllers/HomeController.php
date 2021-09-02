<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $this->seo()->setTitle('صفحه اصلی')->setDescription('صفحه اصلی مجموعه مهتاب');
        return view('template.home');
    }

    public function about()
    {
        $this->seo()->setTitle('درباره ما')->setDescription('صفحه درباره ما خانه مهتاب');
        return view('template.about');
    }
}
