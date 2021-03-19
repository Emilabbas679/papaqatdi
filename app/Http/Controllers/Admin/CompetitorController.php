<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competitor;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Competitor::orderby('id','desc')->get();
        return view('admin.competition.index', compact('items'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Competitor::find($id);
        return view('admin.competition.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'phone' => ['required', 'string']

        ],
            [
                'name.required' => __('Ad boş qala bilməz.'),
                'surname.required' => __('Soyad boş qala bilməz.'),
                'phone.required' => __('Mobil boş qala bilməz.'),

            ]
        );
        $item = Competitor::find($id);
        $item->update($request->all());
        return redirect()->route('competitor.index')->with('success', 'Yarışçı müvəffəqiyyətlə redaktə edildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Competitor::find($id);
        $item->delete();
        return redirect()->route('competitor.index')->with('success', 'Yarışçı müvəffəqiyyətlə silindi.');

    }
}
