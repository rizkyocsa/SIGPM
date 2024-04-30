<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('get_list');
    }

    public function index()
    {
        $user = Auth::user();
        $survey = Survey::all();
        return view('survey.index', compact('user','survey'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function get_list()
    {
        $survey = Survey::all();
        return response()->json($survey);
    }
}
