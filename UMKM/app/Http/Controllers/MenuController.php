<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'Food' => 'required|string|max:255',
        'Drink' => 'required|string|max:255',
        'Description' => 'required|string|max:255',
    ]);

    $menu = new Menu();
    $menu->Food = $request->Food;
    $menu->Drink = $request->Drink;
    $menu->Description = $request->Description;

    $menu->save();

    return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu): RedirectResponse
    {
        $menu = $menu;

        $request->validate([
            'Food' =>'string|max:255',
            'Drink' =>'string|max:255',
            'Description' =>'string|max:255',
        ]);

        $menu->Food  = $request->Food;
        $menu->Drink = $request->Drink;
        $menu->Description = $request->Description;

    $menu->save();

    return redirect()->route('menu.index')->with('success','Menu berhasil dperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu): RedirectResponse
    {
        $menu = $menu;

        $menu->delete();
        return redirect()->route('menu.index')->with('success','Menu berhasil dihapus!');
    }
}
