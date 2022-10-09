<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $surveys = Survey::query()
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('admin.index', ['surveys' => $surveys]);
    }

    public function survey(Survey $survey)
    {
        return view('admin.survey', ['survey' => $survey]);
    }
}
