<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BreweryController extends Controller
{

    public function index()
    {
        $breweries = Brewery::has('beers', '>', 0)->withCount('beers')->paginate(8);

        return Inertia::render('Dashboard', ['breweries' => $breweries]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Brewery $brewery)
    {
        //
    }

    public function edit(Brewery $brewery)
    {
        //
    }

    public function update(Request $request, Brewery $brewery)
    {
        //
    }

    public function destroy(Brewery $brewery)
    {
        //
    }
}
