<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_item = Item::all();
        $i=0;
        
       return view('/index', compact('all_item','i'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'owner'=>'required',
            'status'=>'required',
            'start_date'=>'required',
            'finish_date'=>'required'
        ]);
        
        Item::create($request->all());

        return redirect()->action([ItemController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        return view('show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'owner'=>'required',
            'status'=>'required',
            'start_date'=>'required',
            'finish_date'=>'required'
        ]);

        $item = Item::find($id);
        $item->title = request('title');
        $item->description = request('description');
        $item->owner = request('owner');
        $item->status = request('status');
        $item->start_date = request('start_date');
        $item->finish_date = request('finish_date');
        $item->save();

        return redirect()->action([ItemController::class, 'show'], $item->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::where('id', $id)->delete();
        return redirect()->action([ItemController::class, 'index']);
    }
}
