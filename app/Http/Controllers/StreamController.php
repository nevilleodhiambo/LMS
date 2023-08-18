<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index(){
        $streams = Stream::all();
        return view('academics/stream/index', compact('streams'));
    }
    public function create(){
        return view('academics/stream/create');
    }
    public function store(Request $request){
        $stream = new Stream();
        $stream->name = $request->name;
        $stream->save();
        return redirect()->route('stream.index');

    }
    public function edit($id){
        $stream = Stream::where('id', $id)->first();
        return view('academics/stream/edit', compact('stream'));
    }
    public function update(Request $request, $id){
        $stream = Stream::where('id', $id)->first();
        $stream->name = $request->name;
        $stream->save();
        return redirect()->route('stream.index');
    }
    public function destroy($id){
        $stream  = Stream::where('id', $id)->first();
        $stream->delete();
        return redirect()->back();
    }
}
