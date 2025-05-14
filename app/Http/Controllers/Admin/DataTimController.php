<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Stages;
use App\Models\Teams;
use Illuminate\Http\Request;

class DataTimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Categories::all();

        return view('dashboard.datatim', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function category(string $category_name)
    {
        $category_name = Categories::where('category_name', $category_name)->firstOrFail();
        $stages = $category_name->stages;
        // Buat array kosong untuk menyimpan tim berdasarkan stage
        $teamsByStages = [];

        // Untuk setiap stage, ambil tim yang sesuai dengan stage_id
        $i = 0;
        foreach ($stages as $stage) {
            $i++;
            $teamsByStages[$i] = Teams::where('stage_id', $stage->id)->get();
        }

        return view('admin.tims.index', compact('category_name', 'teamsByStages'));
    }

    public function editTeamStage($category, Teams $team)
    {
        $stages = Stages::all(); 
        return view('admin.tims.edit', compact('team', 'stages'));
    }

}
