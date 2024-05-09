<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProfilRequest;
use App\Models\Profil;
Use Alert;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profil::paginate(5); 

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('profile.index', compact('user','profile'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $profile = Profil::findOrFail($id);
        // dd($profile);
        return view('profile.form', compact('user', 'profile'));
    }

    public function update(CreateProfilRequest $req, $id)
    {
        $validate = $req->validated();
        
        $profile = Profil::find($id);
        $update = $profile->update($validate);

        if($update){
            $user = Auth::user();
            $profile = Profil::all();
            Alert::success('Berhasil', 'Berhasil Ubah Data');
            return redirect()->route('profil.index')->with([
                'user' => $user,
                'profile' => $profile
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Ubah Data');
        }
    }

    public function getDetail($menu)
    {
        $user = Auth::user();
        $profile = Profil::where('sub_menu', $menu)->first(); 
        // dd($profile);
        return view('profile.detail', compact('user','profile'));
    }


}
