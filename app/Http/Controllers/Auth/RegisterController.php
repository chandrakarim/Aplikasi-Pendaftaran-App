<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'asal_kota' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'file_img' => 'required',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $calon = User::all();
        $q = DB::table('users')->select(DB::raw('MAX(RIGHT(kode_pendf,4)) as kode'));
        $kd = "";
        if($q->count()>0)
        {
         foreach($q->get() as $k)
         {
             $tmp = ((int)$k->kode)+1;
             $kd = sprintf("%04s", $tmp);
         }
        }
        else
        {
         $kd = "0001";
        }

        $request = app('request');
        if($request->hasfile('file_img')){
            $avatar = $request->file('file_img');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/profil/' . $filename) );
        }
        return User::create([
            'kode_pendf' => $kd,
            'name' => $data['name'],
            'email' => $data['email'],
            'asal_kota' => $data['asal_kota'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'password' => Hash::make($data['password']),
            'jk' => $data['jk'],
            'no_tlp' => $data['no_tlp'],
            'alamat' => $data['alamat'],
            'file_img' => $filename,
        ]);
        
    }


}
