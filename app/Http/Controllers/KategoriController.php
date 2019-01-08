<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Kategori;
// use DataTables;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *-
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pages.kategori.index');
    }

    public function create()
    {
        $model = new Kategori();
        return view('pages.kategori.form', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255'
        ]);

        $model = Kategori::create($request->all());
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
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255'
        ]);

        $model = Kategori::findOrFail($id);

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
          $model = Kategori::findOrFail($id);
          $model->delete();
         }

        public function edit($id)
        {
            $model = Kategori::findOrFail($id);
            return view('pages.kategori.form', compact('model'));
        }
        public function dataTable()
        {
            $model = Kategori::query();
            return DataTables::of($model)
                ->addColumn('action', function ($model) {
                    return view('layouts._action', [
                        'model' => $model,
                        'url_show' => route('kategori.show', $model->id),
                        'url_edit' => route('kategori.edit', $model->id),
                        'url_destroy' => route('kategori.destroy', $model->id)
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
     }




//     public function editKategori(Request $request, $id){
//     $rules = array (
//   			'nama' => 'required|alpha',
//   			'judul' => 'required|alpha',
//   	);
//   	$validator = Validator::make ( Input::all (), $rules );
//   	if ($validator->fails ())
//   		return Response::json ( array (
//
//   				'errors' => $validator->getMessageBag ()->toArray ()
//   		));
//   	else {
//
//   		$data = kategori::find ( $request->id );
//   		$data->nama = ($request->nama);
//   		$data->judul = ($request->judul);
//   		$data->save ();
//   		return response ()->json ( $data );
//   	}
// }
//     Public function deleteKategori(Request $request, $id){
//       kategori::find ( $request->id )->delete ();
// 	     return response ()->json ();
//     }
