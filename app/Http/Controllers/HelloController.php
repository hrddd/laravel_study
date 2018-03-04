<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function index(Request $request, Response $response){
        $data = [
            'request' => $request,
            'response' => $response,
            'middleware_merge_data' => $request['data']
        ];
        return view('hello.index', $data);
    }

    public function post(HelloRequest $request, Response $response){
        $entry_data = [
            'name' => $request -> entry_name,
            'email' => $request -> entry_email,
            'video' => $request -> entry_video
        ];
        // memo: to upload large dimension file, must edit php.ini param--
        // upload_max_filesize, post_max_size, memory_limit, max_execution_time
        $file = $request -> file('entry_video');
        $filename = $file->getClientOriginalName();
        // memo: must make symbolic link (php artisan storage:link)
        // ex. storage/app/public/ -> public/storage/
        $path = storage_path().'/app/public/upload/video/';
        $file -> move($path, $filename);
        $data = [
            'entry_data' => $entry_data,
            'request' => $request,
            'response' => $response,
            'middleware_merge_data' => $request['data'],
            'tmp_video_path' => asset('storage/upload/video/'.$filename),
        ];
        return view('hello.index', $data);
    }
}
