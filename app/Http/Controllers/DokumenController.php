<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateDokumenRequest;
use App\Models\MasterDokumen;
Use Alert;

class DokumenController extends Controller
{
    private $options;

    public function __construct()
    {
        $this->options = [
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Dokumen SPMI'],
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Standar Operasional Procedure (SOP)'],
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Pedoman Akademik'],
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Formulir SPMI'],
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Manual SPMI'],
            (object)['kategori' => 'Dokumen', 'sub_kategori' => 'Kebijakan SPMI'],
            (object)['kategori' => 'Kegiatan Mutu', 'sub_kategori' => 'Per Tahun'],
            (object)['kategori' => 'Kegiatan Mutu', 'sub_kategori' => 'Per Semester'],
            (object)['kategori' => 'Laporan', 'sub_kategori' => ''],
        ];
    }

    public function index()
    {
        $user = Auth::user();
        $dokumen = MasterDokumen::paginate(5); 

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dokumen.index', compact('user','dokumen'));
    }

    public function create()
    {
        $user = Auth::user();
        $options = $this->options;
        return view('dokumen.create', compact('user', 'options'));
    }

    public function store(CreateDokumenRequest $req)
    {        
        $validate = $req->validated();

        $kategoriParts = explode(' - ', $validate['kategori']);
        $kategori = $kategoriParts[0];
        $subKategori = $kategoriParts[1];

        $validate['kategori'] = $kategori;
        $validate['sub_kategori'] = $subKategori;

        // dd($validate);
        $create = MasterDokumen::create($validate);

        if($create){
            $user = Auth::user();
            $dokumen = MasterDokumen::all();
            Alert::success('Berhasil', 'Berhasil Tambah Data');
            return redirect()->route('dokumen.index')->with([
                'user' => $user,
                'dokumen' => $dokumen
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Tambah Data');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $dokumen = MasterDokumen::findOrFail($id);
        $options = $this->options;
        return view('dokumen.edit', compact('user', 'dokumen', 'options'));
    }

    public function update(CreateDokumenRequest $req, $id)
    {
        $validate = $req->validated();

        $kategoriParts = explode(' - ', $validate['kategori']);
        $kategori = $kategoriParts[0];
        $subKategori = $kategoriParts[1];

        $validate['kategori'] = $kategori;
        $validate['sub_kategori'] = $subKategori;

        $dokumen = MasterDokumen::find($id);
        
        $update = $dokumen->update($validate);

        if($update){
            $user = Auth::user();
            $dokumen = MasterDokumen::all();
            Alert::success('Berhasil', 'Berhasil Ubah Data');
            return redirect()->route('dokumen.index')->with([
                'user' => $user,
                'dokumen' => $dokumen
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Ubah Data');
        }
    }

    public function delete($id){
        $dokumen = MasterDokumen::findOrFail($id);        

        $dokumen->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function get_list($kategori)
    {
        $user = Auth::user();
        $dokumen = MasterDokumen::where('kategori', $kategori)->get()->groupBy('sub_kategori');
        // dd($dokumen);
        return view('dokumen.list', compact('user','dokumen'));
    }

    public function get_list_sub($sub_kategori)
    {
        $user = Auth::user();
        $dokumen = MasterDokumen::where('sub_kategori', $sub_kategori)->get();
        // dd($dokumen);
        return view('dokumen.list-sub', compact('user','dokumen', 'sub_kategori'));
    }
}
