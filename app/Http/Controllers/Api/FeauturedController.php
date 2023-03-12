<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feautured;

class FeauturedController extends Controller
{
    public function get(Feautured $feauture){
        $data = $feauture->where('id', 1)->first();
        return [
            'status' => '200',
            'success' => true,
            'data' => $data
        ];
    }
}
