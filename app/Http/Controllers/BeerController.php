<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BeerController extends Controller
{

    private $beer, $request;

    public function __construct(Beer $beer, Request $request)
    {

        $this->beer = $beer;
        $this->request = $request;
    }

    public function index($id)
    {
        /*$this->request->valida'te([
            'brewery_id' => 'required|numeric'
        ]);*/

        /*Buscam os registros de cada tabela*/
        $beers = $this->beer->where('brewery_id', $id)->get();
        $brewery = Brewery::where('id', $id)->firstOrFail();

        /*Returna para o componente as props*/
        return Inertia::render('Beers', ['beers' => $beers, 'brewery' => $brewery]);
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
