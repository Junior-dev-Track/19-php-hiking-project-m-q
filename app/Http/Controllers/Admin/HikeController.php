<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HikeFormRequest;
use App\Models\Option;
use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    public function index()
    {
        return view('admin.hike.index', [
            'hikes' => Hike::orderBy('created_at', 'desc')->paginate(25),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hike = new Hike();
        $hike->fill([
            'distance' => 10,
            'duration' => '1 h30',
            'elevation_gain' => 300,
            'city' => 'Battice',
        ]);
        return view('admin.hike.form', [
            'hike' => $hike,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HikeFormRequest $request)
    {
        $hike = Hike::create($request->validated());
        $hike->options()->sync($request->validated('options'));
        return to_route('admin.hike.index')->with('success', 'La rando à bien été créée');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hike $hike)
    {
        return view('admin.hike.form', [
            'hike' => $hike,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HikeFormRequest $request, Hike $hike)
    {
        $hike->update($request->validated());
        $hike->options()->sync($request->validated('options'));
        return to_route('admin.hike.index')->with('success', 'La rando à bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hike $hike)
    {
        $hike->delete();
        return to_route('admin.hike.index')->with('success', 'La rando à bien été supprimée');
    }
}
