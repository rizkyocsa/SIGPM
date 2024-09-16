<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\Berita;
Use Alert;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $perPage = 5;
        $berita = Berita::paginate($perPage); 
        $currentPage = $request->input('page', 1);

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('berita.index', compact('user','berita','currentPage','perPage'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('berita.create', compact('user'));
    }

    public function store(CreateBeritaRequest $req)
    {       

        $name = '';
        if($req->hasFile('header')){
            $extension = $req->file('header')->extension();

            $filename = 'header_berita_'.time().'.'.$extension;

            $req->file('header')->storeAs(
                'public/header_berita',$filename
            );
            $name = $filename;
        }
        
        $validate = $req->validated();
        $validate['header'] = $name;

        $create = Berita::create($validate);

        if($create){
            $user = Auth::user();
            $berita = Berita::all();
            Alert::success('Berhasil', 'Berhasil Tambah Data');
            return redirect()->route('berita.index')->with([
                'user' => $user,
                'berita' => $berita
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Tambah Data');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $berita = Berita::findOrFail($id);
        // dd($berita);
        return view('berita.edit', compact('user', 'berita'));
    }

    public function update(CreateBeritaRequest $req, $id)
    {
        $berita = Berita::findOrFail($id);
        $name = '';
        if($req->hasFile('header')){
            $extension = $req->file('header')->extension();

            $filename = 'header_berita_'.time().'.'.$extension;

            $req->file('header')->storeAs(
                'public/header_berita',$filename
            );
            $name = $filename;
        }

        $validate = $req->validated();   
        if($name != ''){
            $validate['header'] = $name;        
        } 
        $update = $berita->update($validate);

        if($update){
            $user = Auth::user();
            $berita = Berita::all();
            Alert::success('Berhasil', 'Berhasil Ubah Data');
            return redirect()->route('berita.index')->with([
                'user' => $user,
                'berita' => $berita
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Ubah Data');
        }
    }

    public function delete($id){
        $berita = Berita::findOrFail($id);        

        $berita->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function list(){
        $user = Auth::user();
        $berita = Berita::orderBy('created_at', 'desc')
                 ->select('id', 'header', 'judul', 'content', 'created_at')
                 ->limit(6)
                 ->get()
                 ->map(function($item) {
                     $item->content = \Illuminate\Support\Str::limit($item->content, 25);
                     $item->created_at_formatted = $item->created_at->format('Y-m-d');
                     return $item;
                 });

        $beritaPaginated = Berita::orderBy('created_at', 'desc')
                          ->select('id', 'header', 'judul', 'content', 'created_at')
                          ->paginate(5);

        $beritaPaginated->getCollection()->transform(function($item) {
            $item->content = \Illuminate\Support\Str::limit($item->content, 25);
            $item->created_at_formatted = $item->created_at->format('Y-m-d');
            return $item;
        });
        return view('berita.list', compact('beritaPaginated', 'user'));
    }

    public function detail($id){
        $user = Auth::user();
        $berita = Berita::findOrFail($id);
        $berita->created_at_formatted = $berita->created_at->format('Y-m-d');          
        return view('berita.detail', compact('berita', 'user'));
    }
}
