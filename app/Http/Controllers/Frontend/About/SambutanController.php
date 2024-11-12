<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index(Request $request)
    {
        $paginate = is_numeric($request->limit) ? $request->limit : 10;
        $page_attr = [
            'title' => 'sambutan',
            'navigation' => 'tentang.sambutan',
        ];
        return view('pages.frontend.tentang.sambutan', compact('page_attr'));
    }
}
