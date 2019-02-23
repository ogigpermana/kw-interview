<?php

namespace App\Http\Controllers\Kw;

use App\Models\Kw\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    // display all items
    public function showAllItems()
    {
        return response()->json(Item::all());
    }

    // display specific item
    public function showOneItem($id)
    {
        return response()->json(Item::find($id));
    }

    // create new item
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'description',
        ]);

        $item = Item::create($request->all());

        return response()->json($item, 201);
    }

    // update item
    public function update($id, Request $request)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return response()->json($item, 200);
    }

    // delete item
    public function delete($id)
    {
        Item::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
