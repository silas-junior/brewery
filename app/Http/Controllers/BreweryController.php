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
        $breweries = Brewery::has('beers', '>=', 0)->withCount('beers')->paginate(8);

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

    public function edit($id)
    {
        $brewery = $this->brewery->findOrFail($id);
        return Inertia::render('EditBrewery', ['brewery' => $brewery]);
    }

    public function update($id)
    {
//        dd($this->request->all());
//        User::create(
//            Request::validate([
//                'first_name' => ['required', 'max:50'],
//                'last_name' => ['required', 'max:50'],
//                'email' => ['required', 'max:50', 'email'],
//            ])
//        );
        $data = $this->request->get('data');
        $brewery = $this->brewery->findOrFail($id);
//        $brewery->fill($this->request->all());
        $brewery->name = $this->request->get('name');
        $brewery->address = $this->request->get('address');
        $brewery->phone = $this->request->get('phone');
        $brewery->save();
        return response()->json([
            'message' => 'Resource updated'
        ]);
    }

    public function destroy($id)
    {
//        $id = $this->request->get('id');
//        dd($this->request->get('_method'));
        $brewery = $this->brewery->findOrFail($id)->delete();

        return $this->index();

//        return response()->json([], 204);
    }
}
