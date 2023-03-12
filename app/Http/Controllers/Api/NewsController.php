<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function list(Request $request, News $news){
        $magazine = $news->orderby('created_at', 'desc')->get();
        return [
            'status' => '200',
            'success' => true,
            'data' => $magazine
        ];
    }

    public function get(Request $request, News $news){
        if($news->where('id', $request->id)->count() != 1) {
            return [
                'status' => '503',
                'success' => false,
                'message' => 'Мэдээний дугаар буруу байна. Та хүсэлтээ шалгана уу?'
            ];
        }
        $magazine = $news->where('id', $request->id)->first();
        return [
            'status' => '200',
            'success' => true,
            'data' => $magazine
        ];
    }
}
