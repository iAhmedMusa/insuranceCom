<?php

namespace App\Http\Controllers\AppControllers;

use App\Http\Controllers\Controller;
use App\Models\testTableModel;
use Illuminate\Http\Request;

class testTableController extends Controller {

    public function index() {
        $values = testTableModel::paginate( 10 );
        return view( 'home' )->with( 'values', $values );
    }

    public function create() {
        return view( 'create' );
    }

    public function search( Request $request ) {
        $search = $request->name;
        $values = testTableModel::
        where( 'name', 'ilike', '%' . $search . '%' )
        ->orWhere( 'address', 'ilike', '%' . $search . '%' )
        ->orWhere( 'postCode', 'ilike', '%' . $search . '%' )
        ->orWhere( 'cityName', 'ilike', '%' . $search . '%' )
        ->paginate( 10 )->appends( 'name', $search );
        return view( 'home' )->with( 'values', $values );
    }

    public function store( Request $request ) {

        $item = new testTableModel();
        $item->insId = $request->insID;
        $item->name = $request->name;
        $item->address = $request->address;
        $item->postCode = $request->postCode;
        $item->cityName = $request->city;
        $item->conNumber = $request->conNumber;
        $item->save();

        $encoded_address = urlencode($request->address);
        
        echo $encoded_address;
        // return redirect()->route( 'home' );
    }

    public function delete($id){
        $items = testTableModel::where('id', $id)->get();
        foreach ($items as $item){
            $item->delete();
        }
        return back();
    }
}
