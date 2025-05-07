<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('work', [
            "works" => Work::all()
        ]);
    }

    public function show(Work $work)
    {
        return view('work__detail', [
            "work" => $work
        ]);
    }
}
