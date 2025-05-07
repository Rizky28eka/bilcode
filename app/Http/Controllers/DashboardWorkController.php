<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contributor;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.work.index',
            [
                'works' => Work::latest('id')->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.work.create', [
            'categories' => Category::where('service_id', 1)->get(),
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all()); // Cetak data dari request

        $validatedData = $request->validate([
            'slug' => 'required|unique:works',
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'required|image',
        ]);

        $validatedData['published_at'] = Carbon::now()->toDayDateTimeString();

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('work-images', 'public');
        }

        $work = Work::create($validatedData);

        // Transform contributors array
        $contributors = $request->input('contributors', []);
        $contributors = array_map(function ($userId) {
            return ['user_id' => $userId];
        }, $contributors);

        foreach ($contributors as $contributorData) {
            Contributor::create([
                'work_id' => $work->id,
                'user_id' => $contributorData['user_id']
            ]);
        }

        return redirect('/development/work')->with('success', 'New post has been published!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('dashboard.work.show', [
            'work' => $work,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('dashboard.work.edit', [
            'work' => $work,
            'categories' => Category::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        // dd($request->all()); // Cetak data dari request

        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'image',
        ];

        if ($request->slug != $work->slug) {
            $rules['slug'] = 'required|unique:works';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($work->image) {
                Storage::delete($work->image);
            }
            $validatedData['image'] = $request->file('image')->store('work-images', 'public');
        }

        Work::where('id', $work->id)
            ->update($validatedData);

        // Update contributors
        if ($request->input('contributors')) {
            $contributors = $request->input('contributors', []);
            $contributors = array_map(function ($userId) {
                return ['user_id' => $userId];
            }, $contributors);

            // First, delete all existing contributors of the work
            Contributor::where('work_id', $work->id)->delete();

            // Then, add the updated contributors
            foreach ($contributors as $contributorData) {
                Contributor::create([
                    'work_id' => $work->id,
                    'user_id' => $contributorData['user_id']
                ]);
            }
        }

        return redirect('/development/work')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        if ($work->image) {
            Storage::delete($work->image);
        }

        Work::destroy($work->id);

        Contributor::where('work_id', $work->id)->delete();

        return redirect('/development/work')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Work::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
