<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function list(Request $request, Projects $projects){
        $project = $projects->orderby('created_at', 'desc')->get();
        return [
            'status' => '200',
            'success' => true,
            'data' => $project
        ];
    }
}
