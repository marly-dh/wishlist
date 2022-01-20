<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ListItemController extends Controller
{
    public function index()
    {
        $items = ListItem::all();

        return view('list.index', compact('items'));
    }


    public function create()
    {
        return view('list.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        ListItem::create($request->all());

        return redirect()->route('list.index')->with('message', 'Wish has been added to the wishlist!');
    }


    public function show($item)
    {
        $item = ListItem::find($item);

        return view('list.show', compact('item'));
    }


    public function edit($item)
    {
        $item = ListItem::find($item);

        return view('list.edit', compact('item'));
    }


    public function update(Request $request, $item)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $item = ListItem::find($item);

        $item->update($request->all());

        return redirect('list')->with('message', 'Wish has been updated!');
    }


    public function destroy($item)
    {
        $item = ListItem::find($item);

        $item->delete();

        return redirect('list')->with('message', 'Wish has been deleted!');
    }
}
