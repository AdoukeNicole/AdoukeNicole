<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gest;

class TodoController extends Controller
{
    //Affichage de la page product-list

    public function index(){
        $data = Gest::get();
        return view('product-list', compact('data'));
    }

    //  Affichage de la page add-product

    public function AddProduct(){
        return view('add-product');
    }

    //Enregistrement des produits

    public function SaveProduct(Request $request){
        //sans données pas de validation
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'Statut'=>'required',
        ]);
        $name = $request->name;
        $qte = $request->quantity;
        $PU = $request->price;
        $statut = $request->Statut;

        $item = new Gest();
        $item->name = $name;
        $item->quantity = $qte;
        $item->price = $PU;
        $item->Statut=$statut;
        $item->save();

        return back()->with(['success' => 'Product Added Succesffully']);
    }

    public function EditProduct($id){
        $data = Gest::where('id','=',$id)->first();
        return view('edit-product',compact("data"));
    }

    public function UpdateProduct(Request $request){
        //Sans données pas de validation
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'Statut'=>'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $qte = $request->quantity;
        $PU = $request->price;
        $statut = $request->Statut;

        Gest::where('id','=',$id)->update([
            'name'=>$name,
            'quantity'=>$qte,
            'price'=>$PU,
            'Statut'=>$statut
        ]);

        return back()->with(['success' => 'Product Updated Succesffully']);
    }

    public function DeleteProduct($id){
        Gest::where('id','=',$id)->delete();
        return back()->with(['success' => 'Product Deleted Succesffully']);
    }
}
