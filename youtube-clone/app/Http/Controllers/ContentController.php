<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public $contents, $content;
    public function add()
    {
        return view('admin.content.add');
    }

    public function store(Request $request)
    {
        Content::addContent($request);
        return redirect('/content/add')->with('message', 'Content Info Save Successfully');
    }

    public function manage()
    {
        $this->contents = Content::all();
        return view('admin.content.manage', ['contents' => $this->contents]);
    }

    public function editContent($id)
    {
        $this->content = Content::find($id);
        return view('admin.content.edit-content', [ 'content' => $this->content]);
    }

    public function updateContent(Request $request, $id)
    {
        Content::updateContent($request, $id);
        return redirect('/content/manage')->with('message', 'Content info update Successfully');
    }
    public function deleteContent($id)
    {
        Content::deleteContent($id);
        return redirect('/content/manage')->with('message', 'Content info Delete Successfully');
    }
    public function detailContent($id)
    {
        $this->content = Content::find($id);
        $this->contents = Content::all();
        return view('admin.content.detail', ['content' => $this->content,'contents' => $this->contents]);
    }
}
