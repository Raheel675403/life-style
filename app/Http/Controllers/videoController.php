<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiKey = 'AIzaSyDUNDa-WwP9_0m_U32DgUvuapZkPInPoLI';
        $searchQuery = 'kid';
        $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&q={$searchQuery}&maxResults=100&key={$apiKey}";

        $response = Http::get($url);
        $videos = $response->json();

        if (isset($videos['error'])) {
            return "Error: " . $videos['error']['message']; // Show error if any
        }

        return view('pages.overview', compact('videos'));


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
}
