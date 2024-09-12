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

    public function index(Request $request)
    {
        $user = Auth::user();
        $perPage = 5;
        // $dokumen = MasterDokumen::paginate(5);
        $prodi = '';
        
        if($user->id_role == 3){
            $prodi = 1;
        }else if($user->id_role == 4){
            $prodi = 2;
        }else if($user->id_role == 5){
            $prodi = 3;
        }

        $dokumen = DB::table('master_dokumens')
            ->select('master_dokumens.*', 'kategoris.nama_kategori')
            ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id');

        if ($prodi !== '') { // Check if $prodi has a valid value
            $dokumen->where('id_prodi', $prodi);
        }
        
        $dokumen = $dokumen->paginate($perPage);            

        $currentPage = $request->input('page', 1);

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dokumen.index', compact('user','dokumen', 'currentPage', 'perPage'));
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
        $user = Auth::user();

        $validate = $req->validate([                     
            'kategori' => 'required',            
            'nama_dokumen' => 'required',            
            'tautan' => 'required',    
            'id_prodi' => 'nullable',        
        ]);

        $dokumen = new MasterDokumen;
        
        if($user->id_role == 1){
            $dokumen->id_prodi = $req->get('id_prodi');
        }else if($user->id_role == 3){
            $dokumen->id_prodi = 1;
        }else if($user->id_role == 4){
            $dokumen->id_prodi = 2;
        }else if($user->id_role == 5){
            $dokumen->id_prodi = 3;
        }

        $dokumen->kategori = $req->get('kategori');
        $dokumen->sub_kategori = $req->get('sub_kategori');
        $dokumen->kriteria = $req->get('kriteria');
        $dokumen->elemen = $req->get('elemen');
        $dokumen->nama_dokumen = $req->get('nama_dokumen');
        $dokumen->tautan = $req->get('tautan');
        $dokumen->is_private = $req->get('is_private');        
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
        $options = Kategori::all();
        return view('dokumen.edit', compact('user', 'dokumen', 'options'));
    }

    public function update(CreateDokumenRequest $req, $id)
    {
        $user = Auth::user();

        $validate = $req->validate([       
            'kategori' => 'required',            
            'nama_dokumen' => 'required',            
            'tautan' => 'required',            
            'id_prodi' => 'nullable',            
        ]);

        $dokumen = MasterDokumen::findOrFail($id);
        
        if($user->id_role == 1){
            $dokumen->id_prodi = $req->get('id_prodi');
        }else if($user->id_role == 3){
            $dokumen->id_prodi = 1;
        }else if($user->id_role == 4){
            $dokumen->id_prodi = 2;
        }else if($user->id_role == 5){
            $dokumen->id_prodi = 3;
        }

        $dokumen->kategori = $req->get('kategori');
        $dokumen->sub_kategori = $req->get('sub_kategori');
        $dokumen->kriteria = $req->get('kriteria');
        $dokumen->elemen = $req->get('elemen');
        $dokumen->nama_dokumen = $req->get('nama_dokumen');
        $dokumen->tautan = $req->get('tautan');  
        $dokumen->is_private = $req->get('is_private');      
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
        $groupedDokumens = 0;
        if($kategori === "Dokumen"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->get();
                // ->groupBy('id_prodi')
                // ->groupBy('nama_kategori');

            $groupedDokumens = $dokumen->groupBy('id_prodi')->map(function ($items) {
                return $items->groupBy('nama_kategori');
            });   
        }else if($kategori === "Kegiatan Mutu"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('master_dokumens.kategori', 6)
                ->get();
                // ->groupBy('sub_kategori'); 

                $groupedDokumens = $dokumen->groupBy('id_prodi')->map(function ($items) {
                    return $items->groupBy('sub_kategori');
                });   
        }else if($kategori === "Laporan"){
            $dokumen = DB::table('master_dokumens')
                ->select('master_dokumens.*', 'kategoris.nama_kategori')
                ->join('kategoris', 'master_dokumens.kategori', '=', 'kategoris.id')
                ->where('master_dokumens.kategori', 5)
                ->get();
                // ->groupBy('sub_kategori'); 
                $groupedDokumens = $dokumen->groupBy('id_prodi')->map(function ($items) {
                    return $items->groupBy('sub_kategori');
                });  
        }
        
        // dd($kategori);
        // dd($dokumen);
        // dd($groupedDokumens);
        return view('dokumen.list', compact('user','groupedDokumens'));
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
