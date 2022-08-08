<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
   
    public function index()
    {
        $data['assets'] = Assets::all();
        return view("pages/manageAssets",$data);
    }

   
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'assets_name'=>'required'
        ]);

        $at = new Assets();
        $at->assets_name = $request->assets_name;
        $at->assets_code = $request->assets_code;
        $at->assets_image = $request->assets_image;
        $at->save();

        return redirect()->route("assets.index");
    }

    public function show(Assets $assets)
    {
        //
    }

  
    public function edit(Assets $assets)
    {
        //
    }

    public function update(Request $request, Assets $assets)
    {
        //
    }

   
    public function destroy(Assets $assets)
    {
        //
    }
}