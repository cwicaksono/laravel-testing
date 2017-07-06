<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DepartemenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->module_name = 'departemen';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = \App\Location::where('deleted', 0)
        //        ->get();

        // $params = array(
        //     'items' => $posts
        // );

        return view($module_name.'.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    	return view($module_name.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // $name = Input::get('location_name');
        // // TODO - handle image icon uploader

        // $message = "";
        // if ($name == ''){
            
        //     \Session::flash('message', 'Semua field (*) harus diisi'); 
        //     \Session::flash('alert-class', 'alert-danger'); 
        //     return redirect('master/location/create');

        // }else{

        //     $item = new \App\Location;
        //     $item->location_name = $name;
        //     $item->save();

        //     \Session::flash('message', 'Data telah disimpan'); 
        //     \Session::flash('alert-class', 'alert-success'); 
        //     return redirect('master/location/create');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $item = \App\Location::find($id);

        return \View::make($module_name.'.edit')
            ->with('item', $item);

    }

    // public function delete($id)
    // {
    //     // TODO - replace this function with REST method
    //     $user = \App\User::find($id);
    //     $user->deleted = 1;
    //     $user->save();

    //     return redirect('system/user');
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // $name = Input::get('location_name');
        // // TODO - handle image icon uploader

        // $message = "";
        // if ($name == ''){
            
        //     \Session::flash('message', 'Semua field (*) harus diisi'); 
        //     \Session::flash('alert-class', 'alert-danger'); 
        //     return redirect('master/location/create');

        // }else{

        //     $item = \App\Location::find($id);
        //     $item->location_name = $name;
        //     $item->save();

        //     \Session::flash('message', 'Data telah disimpan'); 
        //     \Session::flash('alert-class', 'alert-success'); 
        //     return redirect('master/location/'.$id);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        // $user = \App\Location::find($id);
        // $user->deleted = 1;
        // $user->save();

        // \Session::flash('message', 'Data telah dihapus!');
        // \Session::flash('alert-class', 'alert-success');
        // return \Redirect::to('master/location');
    }

    /**
     * Wrap save method into one function
     *
     * @param
     @ @return Response
     */
    public function save()
    {

    }
}
