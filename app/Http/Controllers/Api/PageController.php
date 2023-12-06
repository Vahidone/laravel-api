<?php

namespace App\Http\Controllers\Api;
use App\Models\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $projects = Project::paginate(20);
        return response()->json($projects);
    }
}
