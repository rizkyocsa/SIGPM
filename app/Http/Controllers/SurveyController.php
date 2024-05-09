<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateSurveyRequest;
use App\Models\Survey;
Use Alert;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('get_list');
    }

    public function index()
    {
        $user = Auth::user();
        $survey = Survey::paginate(5); 

        $title = 'Hapus Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('survey.index', compact('user','survey'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('survey.create', compact('user'));
    }

    public function store(CreateSurveyRequest $req)
    {        
        $validate = $req->validated();
        
        $create = Survey::create($validate);

        if($create){
            $user = Auth::user();
            $survey = Survey::all();
            Alert::success('Berhasil', 'Berhasil Tambah Data');
            return redirect()->route('survey.index')->with([
                'user' => $user,
                'survey' => $survey
            ]);
        }else{
            Alert::error('Gagal', 'Gagal Tambah Data');
        }
    }

    public function edit($id)
    {
        $user = Auth::user();
        $survey = Survey::findOrFail($id);
        // dd($survey);
        return view('survey.edit', compact('user', 'survey'));
    }

    public function update(CreateSurveyRequest $req, $id)
    {
        $validate = $req->validated();
        
        $survey = Survey::find($id);
        $update = $survey->update($validate);

        if($update){
            $user = Auth::user();
            $survey = Survey::all();
            return redirect()->route('survey.index')->with([
                'user' => $user,
                'survey' => $survey
            ]);
        }else{

        }
    }

    public function delete($id){
        $survey = Survey::findOrFail($id);        

        $survey->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function get_list()
    {
        $survey = Survey::all();
        return response()->json($survey);
    }
}
