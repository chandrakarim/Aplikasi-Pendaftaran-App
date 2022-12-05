<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_user = \Auth::user()->id;
        $users = DB::table('users')->where('id',$id_user)->get();
   
        return view('profil',['users' => $users]);
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
        //
     
      // $data = Users::findOrFail($id);
       //var_dump($data);
       $id_user = \Auth::user()->id;
       $users = DB::table('users')->where('id',$id_user)->get();
  
       return view('edit',['users' => $users]);
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
    $request = app('request');
    if($request->hasfile('file_img')){
        $avatar = $request->file('file_img');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/profil/' . $filename) );
        Auth()->user()->update(['file_img'=>$filename]);
        }
        //
    $users[0] = User::findOrFail($id);
    $users[0]->name = $request->name;
    $users[0]->email = $request->email;
    $users[0]->asal_kota = $request->asal_kota;
    $users[0]->tempat_lahir = $request->tempat_lahir;
    $users[0]->tgl_lahir = $request->tgl_lahir;
    $users[0]->jk = $request->jk;
    $users[0]->no_tlp = $request->no_tlp;
    $users[0]->alamat = $request->alamat;
   // $users[0]->avatar = $filename;
    $users[0]->save();
    return redirect()->route('profil')->with('success', 'Berhasil Mengubah Profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
