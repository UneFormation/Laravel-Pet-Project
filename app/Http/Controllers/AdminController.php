<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q', '');

        $query = Survey::query();
        if ($q) {
            $query = $query->where('email', '=', $q);
        }

        $surveys = $query->orderBy('id', 'desc')
            ->paginate(15);

        return view('admin.index', ['surveys' => $surveys, 'query' => $q]);
    }

    public function survey(Survey $survey)
    {
        return view('admin.survey', ['survey' => $survey]);
    }
}
