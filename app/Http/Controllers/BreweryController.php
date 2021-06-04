<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $breweries = Brewery::has('beers', '>=', 0)->orderBy('id', 'desc')->withCount('beers')->paginate(8);
        $token = csrf_token();
//        dd($token);

        return Inertia::render('Dashboard', ['breweries' => $breweries, '_token' => $token]);
    }

    public function create()
    {
        return Inertia::render('Button');
    }

    public function store()
    {
        $validate = Validator::make($this->request->all(), [
            'name' => 'required|min:4',
            'address.country' => 'required',
            'address.city' => 'required',
            'address.number' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'descript' => 'required',
        ]);
        if ($validate->fails()) {
//            dd($validate->getMessageBag()->getMessages());
            return redirect('/breweries')
                ->withErrors($validate)
                ->withInput();
        }
        $brewery = new $this->brewery;
        $brewery->fill($this->request->all());
        $brewery->save();
        return redirect()->route('breweries.index');
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
//        $data = $this->request->get('data');
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

        return redirect()->route('breweries.index');
    }
}
