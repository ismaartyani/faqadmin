<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;
use DataTables;
class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('pages.kontak.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new kontak();
        return view('pages.kontak.form', compact('model'));
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
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:kontak,id,email'
        ]);

        $model = kontak::create($request->all());
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
            $model = kontak::findOrFail($id);
            return view('pages.kontak.form', compact('model'));
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
             'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:kontak,id,email'
        ]);

        $model = kontak::findOrFail($id);

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
          $model = kontak::findOrFail($id);
          $model->delete();
         }


    public function dataTable()
    {
        $model = kontak::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('kontak.show', $model->id),
                    'url_edit' => route('kontak.edit', $model->id),
                    'url_destroy' => route('kontak.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
