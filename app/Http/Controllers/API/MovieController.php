<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $movies = new Movie;

        if ($request->search) {
            $movies = $movies->where('title', 'like', '%' . $request->search . '%');
        }

        return \App\Http\Resources\MovieResource::collection($movies->paginate());
    }
}
