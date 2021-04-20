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
        $breweries = Brewery::has('beers', '>=', 1)->withCount('beers')->paginate(8);

        return Inertia::render('Dashboard', ['breweries' => $breweries]);
    }

    public function create()
    {
        return Inertia::render('Button');
    }

    public function store()
    {
//        $this->request->validate([
//            'name' => 'required',
//            'address' => 'required',
//        ]);

        $name = $this->request->get('name');
        $address = $this->request->get('address');

        $brewery = new $this->brewery;
        $brewery->name = $name;
        $brewery->address = $address;
//        $brewery->fill($this->request->all());
        $brewery->save();

        return response()->json([
            'message' => 'Resource created',
            'data' => $brewery
        ], 201);
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

    public function destroy()
    {
        $id = $this->request->get('id');
//        dd($this->request->get('id'));
        $brewery = $this->brewery->findOrFail($id)->delete();

        return response()->json([], 204);
    }
}
