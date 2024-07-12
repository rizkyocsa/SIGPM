<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateDokumenRequest;
use App\Models\MasterDokumen;
use App\Models\Kategori;
Use Alert;
use DB;

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
            (object)['kategori' => 'Laporan', 'sub_kategori' => 'Penetapan'],
            (object)['kategori' => 'Laporan', 'sub_kategori' => 'Pelaksanaan'],
            (object)['kategori' => 'Laporan', 'sub_kategori' => 'Evaluasi'],
            (object)['kategori' => 'Laporan', 'sub_kategori' => 'Pengendalian'],
            (object)['kategori' => 'Laporan', 'sub_kategori' => 'Peningkatan'],
        ];
    }

    public function index()
    {
        $user = Auth::user();
        $dokumen = MasterDokumen::paginate(5);

        $dokumen = DB::table('master_dokumens')
            ->select('master_dokumens.*', 'kategoris.nama_kategori')
            ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
            ->paginate(5); 

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dokumen.index', compact('user','dokumen'));
    }

    public function create()
    {
        $user = Auth::user();
        // $options = $this->options;
        $options = Kategori::all();
        return view('dokumen.create', compact('user', 'options'));
    }

    public function store(Request $req)
    {        
        // $validate = $req->validated();
        $validate = $req->validate([
            'kategori' => 'required',            
            'nama_dokumen' => 'required',            
            'tautan' => 'required',            
        ]);

        $dokumen = new MasterDokumen;
        
        $dokumen->kategori = $req->get('kategori');
        $dokumen->sub_kategori = $req->get('sub_kategori');
        $dokumen->kriteria = $req->get('kriteria');
        $dokumen->elemen = $req->get('elemen');
        $dokumen->nama_dokumen = $req->get('nama_dokumen');
        $dokumen->tautan = $req->get('tautan');
        // $kategoriParts = explode(' - ', $validate['kategori']);
        // $kategori = $kategoriParts[0];
        // $subKategori = $kategoriParts[1];

        // $validate['kategori'] = $kategori;
        // $validate['sub_kategori'] = $subKategori;

        // // dd($validate);
        // $create = MasterDokumen::create($validate);
        $dokumen->save();

        if($dokumen){
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
        // $options = $this->options;
        $options = Kategori::all();
        // dd($options);
        return view('dokumen.edit', compact('user', 'dokumen', 'options'));
    }

    public function update(CreateDokumenRequest $req, $id)
    {
        $validate = $req->validate([
            'kategori' => 'required',            
            'nama_dokumen' => 'required',            
            'tautan' => 'required',            
        ]);

        $dokumen = MasterDokumen::findOrFail($id);
        
        $dokumen->kategori = $req->get('kategori');
        $dokumen->sub_kategori = $req->get('sub_kategori');
        $dokumen->kriteria = $req->get('kriteria');
        $dokumen->elemen = $req->get('elemen');
        $dokumen->nama_dokumen = $req->get('nama_dokumen');
        $dokumen->tautan = $req->get('tautan');        
        $dokumen->save();

        if($dokumen){
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
        $dokumen = 0;
        if($kategori === "Dokumen"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->get()
                ->groupBy('nama_kategori'); 
        }else if($kategori === "Kegiatan Mutu"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('master_dokumens.kategori', 6)
                ->get()
                ->groupBy('sub_kategori'); 
        }else if($kategori === "Laporan"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('master_dokumens.kategori', 7)
                ->get()
                ->groupBy('sub_kategori'); 
        }
        
        // dd($kategori);
        // dd($dokumen);
        return view('dokumen.list', compact('user','dokumen'));
    }

    public function get_list_sub($sub_kategori)
    {
        $user = Auth::user();
        // $dokumen = MasterDokumen::where('sub_kategori', $sub_kategori)->get();
        $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('kategori', $sub_kategori)
                ->get();
        $sub_kategori = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('kategori', $sub_kategori)
                ->first();
                // ->groupBy('kategori');
        // dd($sub_kategori);
        return view('dokumen.list-sub', compact('user','dokumen', 'sub_kategori'));
    }
}
