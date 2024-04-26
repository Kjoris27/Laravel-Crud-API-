<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Créer la fonction pour l'ajout de produits
    public function adding(Request $request) {
        $items = new Products();
        $items->name = $request->name;
        $items->value = $request->value;
        $items->quantity = $request->quantity;

        $items->save();

        return response()->json('Added successfully');

    }

    public function edit(Request $request) {
        $items = Products::findorfail($request->id);

        $items->name = $request->name;
        $items->value = $request->value;
        $items->quantity = $request->quantity;

        $items->update();

        return response()->json('Updated successfully');


    }

}
