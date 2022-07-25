<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function new()
    {
        $response['items'] = Item::all();
        return view('pages.invoice.new')->with($response);
    }

    public function create(Request $request)
    {
        dd($request->all());
    }
}
