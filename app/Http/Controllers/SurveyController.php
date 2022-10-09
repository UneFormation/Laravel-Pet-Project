<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\SurveyPostRequest;

class SurveyController extends Controller
{
    public function create(Request $request)
    {
        return view('survey.form');
    }

    public function store(SurveyPostRequest $request)
    {
        $data = $request->validated();
        $survey = new Survey();
        $survey->date = Carbon::now();
        $survey->ip = $request->ip();
        $survey->fill($data);
        $survey->save();

        return redirect('survey')->with('success', 'Thanks for your survey');
    }
}
