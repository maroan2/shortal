<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelinksRequest;
use App\Models\Links;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('links.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelinksRequest $request)
    {
        $attributes = $request->validate([
            'url' => ['required', 'active_url'],
        ]);

        $short_url = fake()->regexify("[a-z0-9]{6}");

        $attributes['short_url'] = $short_url;

        $link = Links::create($attributes);

        return redirect("/link/$short_url");
    }

    public function view(links $links)
    {
        return view('links.view', ['link' => $links]);
    }

    /**
     * Display the specified resource.
     */
    public function show(links $links)
    {
        return redirect($links->url);
    }
}
