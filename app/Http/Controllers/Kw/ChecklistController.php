<?php

namespace App\Http\Controllers\Kw;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChecklistController extends Controller
{
    protected $limit = 15;
    // display all checklists
    public function showAllChecklists()
    {
        return response()->json(Checklist::with('user')->filter(request()->only('sort'))
        ->paginate($this->limit));
    }

    // display specific checklist
    public function showOneItem($id)
    {
        return response()->json(Checklist::find($id));
    }

    // create new checklist
    public function create(Request $request)
    {
        $this->validate($request, [
            'object_domain' => 'required',
            'object_id' => 'required',
            'description' => 'required',
        ]);

        $checklist = Checklist::create($request->all());

        return response()->json($item, 201);
    }

    // update checklist
    public function update($id, Request $request)
    {
        $checklist = Checklist::findOrFail($id);
        $checklist->update($request->all());

        return response()->json($item, 200);
    }

    // delete checklist
    public function delete($id)
    {
        Checklist::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
