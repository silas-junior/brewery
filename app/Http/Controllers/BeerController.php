<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{

    private $beer, $request;

    public function __construct(Beer $beer, Request $request)
    {

        $this->beer = $beer;
        $this->request = $request;
    }

    public function index()
    {
        $this->request->validate([
            'brewery_id' => 'required|numeric'
        ]);

        $beers = $this->beer->orderBy('id')->get();

        return response()->json($beers);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
