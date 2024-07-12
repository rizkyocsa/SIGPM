<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateAkreditasiRequest;
use App\Models\Kriteria;
use App\Models\MasterDokumen;
Use Alert;

class AkreditasiController extends Controller
{
    public function __construct()
    {
        $this->options = [
            (object)['elemen' => 'Penetapan' ],
            (object)['elemen' => 'Pelaksanaan' ],
            (object)['elemen' => 'Evaluasi' ],
            (object)['elemen' => 'Pengendalian' ],
            (object)['elemen' => 'Peningkatan' ],
        ];
    }
    
    // private function _getTitleAndSubTitle($kategori){
    //     $titles = [
    //         'kriteria_1' => ['title' => 'Kriteria 1', 'subTitle' => 'Visi, Misi, Tujuan dan Strategi'],
    //         'kriteria_2' => ['title' => 'Kriteria 2', 'subTitle' => 'Tata Pamong, Tata Kelola, dan Kerjasama'],
    //         'kriteria_3' => ['title' => 'Kriteria 3', 'subTitle' => 'Mahasiswa'],
    //         'kriteria_4' => ['title' => 'Kriteria 4', 'subTitle' => 'Sumber Daya Manusia'],
    //         'kriteria_5' => ['title' => 'Kriteria 5', 'subTitle' => 'Keuangan, Sarana dan Prasana'],
    //         'kriteria_6' => ['title' => 'Kriteria 6', 'subTitle' => 'Pendidikan'],
    //         'kriteria_7' => ['title' => 'Kriteria 7', 'subTitle' => 'Penelitian'],
    //         'kriteria_8' => ['title' => 'Kriteria 8', 'subTitle' => 'Pengabdian Kepada Masyarakat'],
    //         'kriteria_9' => ['title' => 'Kriteria 9', 'subTitle' => 'Luaran dan Capaian Tridarma'],
    //     ];

    //     return $titles[$kategori] ?? ['title' => '', 'subTitle' => ''];
    // }

    private function _getTitleAndSubTitle($kategori){
        $titles = [
            '1' => ['title' => 'Kriteria 1', 'subTitle' => 'Visi, Misi, Tujuan dan Strategi'],
            '2' => ['title' => 'Kriteria 2', 'subTitle' => 'Tata Pamong, Tata Kelola, dan Kerjasama'],
            '3' => ['title' => 'Kriteria 3', 'subTitle' => 'Mahasiswa'],
            '4' => ['title' => 'Kriteria 4', 'subTitle' => 'Sumber Daya Manusia'],
            '5' => ['title' => 'Kriteria 5', 'subTitle' => 'Keuangan, Sarana dan Prasana'],
            '6' => ['title' => 'Kriteria 6', 'subTitle' => 'Pendidikan'],
            '7' => ['title' => 'Kriteria 7', 'subTitle' => 'Penelitian'],
            '8' => ['title' => 'Kriteria 8', 'subTitle' => 'Pengabdian Kepada Masyarakat'],
            '9' => ['title' => 'Kriteria 9', 'subTitle' => 'Luaran dan Capaian Tridarma'],
        ];

        return $titles[$kategori] ?? ['title' => '', 'subTitle' => ''];
    }

    public function index($kategori){                
        $user = Auth::user();

        ['title' => $title, 'subTitle' => $subTitle] = $this->_getTitleAndSubTitle($kategori);

        $akreditasi = Kriteria::where('kategori', $kategori)->paginate(5); 

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('akreditasi.index', compact('user','akreditasi','subTitle', 'kategori'));
    }

    public function create($kategori){
        $user = Auth::user();
        ['title' => $title, 'subTitle' => $subTitle] = $this->_getTitleAndSubTitle($kategori);
        $options = $this->options;
        
        return view('akreditasi.create', compact('user','subTitle', 'kategori', 'options'));
    }

    public function store(CreateAkreditasiRequest $req){

        $validate = $req->validated();

        $create = Kriteria::create($validate);

        if($create){
            $user = Auth::user();
            $akreditasi = Kriteria::all();
            Alert::success('Berhasil', 'Berhasil Tambah Data');
            return redirect()->route('akreditasi.index', $validate['kategori'])->with([
                'user' => $user,
                'akreditasi' => $akreditasi
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Tambah Data');
        }
    }

    public function edit($id){
        $user = Auth::user();
        // ['title' => $title, 'subTitle' => $subTitle] = $this->_getTitleAndSubTitle($kategori);
        $options = $this->options;
        $akreditasi = Kriteria::findOrFail($id);

        return view('akreditasi.edit', compact('user', 'options','akreditasi'));
    }

    public function update(CreateAkreditasiRequest $req, $id){
        $validate = $req->validated();
        
        $akreditasi = Kriteria::find($id);
        
        $update = $akreditasi->update($validate);

        if($update){
            $user = Auth::user();
            $akreditasi = Kriteria::all();
            Alert::success('Berhasil', 'Berhasil Ubah Data');
            return redirect()->route('akreditasi.index', $validate['kategori'])->with([
                'user' => $user,
                'akreditasi' => $akreditasi
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Ubah Data');
        }
    }
    public function listGPM(){
        $user = Auth::user();
        return view('akreditasi.list-gpm', compact('user'));
    }

    public function list(){
        $user = Auth::user(); 
        return view('akreditasi.list', compact('user'));
    }

    public function delete($id){
        $akreditasi = Kriteria::findOrFail($id);        

        $akreditasi->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function detail($kategori){
        $user = Auth::user();
        
        ['title' => $title, 'subTitle' => $subTitle] = $this->_getTitleAndSubTitle($kategori);

        // $akreditasi = Kriteria::where('kategori', $kategori)
        //                 ->orderBy('elemen')
        //                 ->orderBy('no_urut')
        //                 ->get() 
        //                 ->groupBy('elemen');       
        $akreditasi = MasterDokumen::where('kategori', $kategori)
                        ->orderBy('elemen')
                        // ->orderBy('no_urut')
                        ->get() 
                        ->groupBy('elemen');       
        // dd($akreditasi);
        return view('akreditasi.detail', compact('user','akreditasi','title', 'subTitle'));
    }

    public function getHighestNoUrut($kategori, $elemen)
    {
        $highestNoUrut = Kriteria::where('kategori', $kategori)
                        ->where('elemen', $elemen)
                        ->max('no_urut');
        // dd($highestNoUrut);
        return response()->json(['no_urut' => $highestNoUrut]);
    }
}
