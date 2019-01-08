<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;
use DataTables;
class kontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pages.konten.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new konten();
        return view('pages.konten.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'konten' => 'required|string',
            'isi_konten' => 'required|string',
            'id_kategori' => 'required|numeric|max:255'
        ]);


        $model = konten::create($request->all());
        return $model;
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
        $model = konten::findOrFail($id);
            return view('pages.konten.form', compact('model'));
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
         $this->validate($request, [
            'konten' => 'required|string|max:255',
            'isi_konten' => 'required|string|max:255',
            'id_kategori' => 'required|numeric|max:255'
        ]);

        $model = konten::findOrFail($id);

        $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = konten::findOrFail($id);
          $model->delete();
    }

    public function dataTable()
    {
      $model = konten::query();
      return DataTables::of($model)
      ->addColumn('action', function ($model) {
                    return view('layouts._action', [
                        'model' => $model,
                        'url_show' => route('konten.show', $model->id),
                        'url_edit' => route('konten.edit', $model->id),
                        'url_destroy' => route('konten.destroy', $model->id)
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
    }
}
