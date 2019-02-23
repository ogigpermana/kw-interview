<?php

namespace App\Http\Controllers\Kw;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    // display all templates
    public function showAllTemplates()
    {
        return response()->json(Template::all());
    }

    // display specific template
    public function showOneTemplate($id)
    {
        return response()->json(Template::find($id));
    }

    // create new template
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'checklist_id' => 'required',
            'item_id' => 'required',
        ]);

        $template = Template::create($request->all());

        return response()->json($template, 201);
    }

    // update template
    public function update($id, Request $request)
    {
        $template = Template::findOrFail($id);
        $template->update($request->all());

        return response()->json($template, 200);
    }

    // delete template
    public function delete($id)
    {
        Template::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
