<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('contents.index', ['contents' => $contents]);
    }

    public function create()
    {
        return view('contents.create');
    }

    public function save(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'title'=>'required',
            'contents'=>'required'
        ]);
        //dd($data['title']);
        $title =  $data['title'];
        $details = $data['contents'];
        //$new_content = Content::create($data);
        $new_content = Content::create([
            'title' => $title,
            'details' => $details,
        ]);
        return redirect(route('contents.index'));
    }

    public function edit(Content $content)
    {
        //dd($content);
        return view('contents.edit', ['content' => $content]);
    }

    public function update(Content $content, Request $request)
    {
        
        $data = $request->validate([
            'title'=>'required',
            'contents'=>'required'
        ]);
        
        $title =  $data['title'];
        $details = $data['contents'];
        //$new_content = Content::create($data);
        $new_content = [
            'title' => $title,
            'details' => $details,
        ];
        $content->update($new_content);
        return redirect(route('contents.index'))->with('success', 'Updated Successfully');
    }


    public function delete(Content $content)
    {
        //dd($content);
        $content->delete();
        return redirect(route('contents.index'));
    }
}
