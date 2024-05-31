<?php

namespace App\Http\Controllers;

use App\Http\Requests\HikeContactRequest;
use App\Http\Requests\SearchHikesRequest;
use App\Mail\HikeContactMail;
use App\Models\Hike;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    public function index(SearchHikesRequest $request)
    {
        $query = Hike::query()->orderBy('created_at', 'desc')->with('options');
        if ($distance = $request->validated('distance')) {
            $query = $query->where('distance', '<=', $distance);
        }
        if ($duration = $request->validated('duration')) {
            $query = $query->where('duration', '<=', $duration);
        }
        if ($title = $request->validated('title')) {
            $query = $query->where('title', 'like', "%{$title}%");
        }
        return view('hike.index', [
            'hikes' => $query->paginate(16),
            'input' => $request->validated()
        ]);
    }

    public function show(string $slug, Hike $hike)
    {
        $expectedSlug = $hike->getSlug();
        if ($slug !== $expectedSlug) {
            return to_route('hike.show', ['slug' => $expectedSlug, 'hike' => $hike]);
        }

        return view('hike.show', [
            'hike' => $hike
        ]);
    }

    public function contact(HikeContactRequest $request, Hike $hike)
    {
        Mail::send(new HikeContactMail($hike, $request->validated()));
        return back()->with('success', 'Votre message à bien été envoyé.');
    }

    public function about()
    {
        return view('hike.about');
    }
}
