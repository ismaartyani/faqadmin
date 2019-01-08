<?php
namespace App\Http\Controllers;
use App\navigator;
use DataTables;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
  /**
   * Display a listing of the resource.
   *-
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('pages.navigator.index');
  }

  public function create()
  {
      $model = new navigator();
      return view('pages.navigator.form', compact('model'));
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
          'link' => 'required|string|max:255'
      ]);

      $model = navigator::create($request->all());
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
          'link' => 'required|string'
      ]);

      $model = navigator::findOrFail($id);

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
        $model = navigator::findOrFail($id);
        $model->delete();
       }

      public function edit($id)
      {
          $model = navigator::findOrFail($id);
          return view('pages.navigator.form', compact('model'));
      }
      public function dataTable()
      {
          $model = navigator::query();
          return DataTables::of($model)
              ->addColumn('action', function ($model) {
                  return view('layouts._action', [
                      'model' => $model,
                      'url_show' => route('navigator.show', $model->id),
                      'url_edit' => route('navigator.edit', $model->id),
                      'url_destroy' => route('navigator.destroy', $model->id)
                  ]);
              })
              ->addIndexColumn()
              ->rawColumns(['action'])
              ->make(true);
      }
   }
