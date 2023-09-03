<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

use App\Http\Requests\AddItemRequest;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supply = items::all()
            ->where('type', 'Supply');
        $equipment = items::all()->where('type', 'Equipment');
        return view('supplyEquipment', compact('supply', 'equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddItemRequest $request)
    {
        
        // try{
        //     dd($request);
        // }catch(\Exception $e){
        //     return $e->getMessage();
        // }
        items::create([
            'item_name' => $request->item_name,
            'item_code' => $request->item_code,
            'quantity' => $request->quantity,
            'status' => 'working',
            'type' => $request->type,
            'branch' => Auth::user()->user_branch,
            'user_id' => Auth::user()->user_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(items $items, $id, Request $req)
    {
        //

        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(items $items)
    {
        //
    }
}
