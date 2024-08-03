<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateKategoriRequest;
use App\Models\Kategori;
Use Alert;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $perPage = 5;
        $kategori = Kategori::paginate($perPage); 
        $currentPage = $request->input('page', 1);

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('kategori.index', compact('user','kategori','currentPage', 'perPage'));
    }

    public function create()
    {
        $user = Auth::user();    
        return view('kategori.create', compact('user'));
    }

    public function store(CreateKategoriRequest $req)
    {        
        $validate = $req->validated();

        // $validate['nama_kategori'] = $kategori;
        // $validate['sub_kategori'] = $subKategori;

        // dd($validate);
        $create = Kategori::create($validate);

        if($create){
            $user = Auth::user();
            $kategori = Kategori::all();
            Alert::success('Berhasil', 'Berhasil Tambah Data');
            return redirect()->route('kategori.index')->with([
                'user' => $user,
                'kategori' => $kategori
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Tambah Data');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('user', 'kategori'));
    }

    public function update(CreateKategoriRequest $req, $id)
    {
        $validate = $req->validated();

        // $kategoriParts = explode(' - ', $validate['kategori']);
        // $kategori = $kategoriParts[0];
        // $subKategori = $kategoriParts[1];

        // $validate['kategori'] = $kategori;
        // $validate['sub_kategori'] = $subKategori;

        $kategori = Kategori::find($id);
        
        $update = $kategori->update($validate);

        if($update){
            $user = Auth::user();
            $kategori = Kategori::all();
            Alert::success('Berhasil', 'Berhasil Ubah Data');
            return redirect()->route('kategori.index')->with([
                'user' => $user,
                'kategori' => $kategori
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Ubah Data');
        }
    }

    public function delete($id){
        $kategori = Kategori::findOrFail($id);        

        $kategori->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
