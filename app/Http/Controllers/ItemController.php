<?php

namespace App\Http\Controllers;

use App\Models\Item;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends ParentController
{
    public function all()
    {
        $response['items'] = Item::all();
        return view('pages.items.all')->with($response);
    }

    public function deleted()
    {
        $response['items'] = Item::onlyTrashed()->get();
        return view('pages.items.deleted')->with($response);
    }

    public function new()
    {
        return view('pages.items.new');
    }

    public function view($item_id)
    {
        $response['item'] = Item::find($item_id);
        return view('pages.items.view')->with($response);
    }

    public function store(Request $request)
    {
        $request['created_by'] = Auth::id();
        Item::create($request->all());

        $response['alert-success'] = 'Item created successfully!';
        return redirect()->route('items.all')->with($response);
    }

    public function edit($item_id)
    {
        $response['item'] = Item::find($item_id);
        // dd($response);
        return view('pages.items.edit')->with($response);
    }

    public function update(Request $request, $item_id)
    {
        $item = Item::find($item_id);
        $request['updated_by'] = Auth::id();
        $item->update($this->merge($item, $request->all()));

        $response['alert-success'] = 'Item updated successfully!';
        return redirect()->route('items.all')->with($response);
    }

    protected function merge(Item $item, $data)
    {
        return array_merge($item->toArray(), $data);
    }

    public function delete($item_id)
    {
        $item = Item::find($item_id);
        $item->deleted_by = Auth::id();
        $item->save();
        $item->delete();

        $response['alert-success'] = 'Item deleted successfully!';
        return redirect()->route('items.all')->with($response);
    }

    public function restore($item_id)
    {
        $item = Item::withTrashed()->find($item_id);
        $item->restore();

        $response['alert-success'] = 'Item restored successfully!';
        return redirect()->route('items.deleted')->with($response);
    }

    public function deleteForce($item_id)
    {
        $item = Item::withTrashed()->find($item_id);
        $item->forceDelete();

        $response['alert-success'] = 'Item deleted successfully!';
        return redirect()->route('items.deleted')->with($response);
    }

    public function print()
    {
        $response['items'] = Item::all();
        $pdf = PDF::loadView('pages.print.items', $response)->setPaper('a4', 'landscape');

        // $pdf->output();
        // $canvas = $pdf->getDomPDF()->getCanvas();
        // $height = $canvas->get_height();
        // $width = $canvas->get_width();
        // $canvas->set_opacity(.1, "Multiply");
        // $canvas->page_text($width / 4, $height / 2, 'DRAFT', null, 150, array(0, 0, 0), 2, 2, -30);

        // return $pdf->download('items.pdf');
        return $pdf->stream('items.pdf', array("Attachment" => false));
    }
}
