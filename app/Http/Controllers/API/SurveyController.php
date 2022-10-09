<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyPostRequest;
use App\Models\Survey;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email = $request->get('email', '');

        $query = Survey::query();
        if ($email) {
            $query = $query->where('email', '=', $email);
        }

        $surveys = $query->orderBy('id', 'desc')
            ->paginate(15);

        return response()->json($surveys);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        return response()->json($survey);
    }
}
