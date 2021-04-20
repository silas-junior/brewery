<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BreweryController extends Controller
{

    private $brewery, $request;

    public function __construct(Brewery $brewery, Request $request)
    {
        $this->brewery = $brewery;
        $this->request = $request;
    }

    public function index()
    {
        $breweries = Brewery::has('beers', '>', 0)->withCount('beers')->paginate(8);

        return Inertia::render('Dashboard', ['breweries' => $breweries]);
    }

    public function create()
    {

    }

    public function store($data)
    {
        $this->request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $brewery = new $this->brewery;
        $brewery->name = $data['name'];
        $brewery->address = $data['address'];
//        $brewery->fill($this->request->all());
        $brewery->save();

        dd(response()->json([
            'message' => 'Resource created',
            'data' => $brewery
        ], 201));
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
