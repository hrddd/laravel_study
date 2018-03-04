<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function post(Request $request, Response $response){
        $validate_rule = [
            'entry_name' => 'required',
            'entry_email' => 'email',
            'entry_video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime'
        ];
        $this->validate($request, $validate_rule);
        $entry_data = [
            'name' => $request -> entry_name,
            'email' => $request -> entry_email,
            'video' => $request -> entry_video
        ];
        $data = [
            'entry_data' => $entry_data,
            'request' => $request,
            'response' => $response,
            'middleware_merge_data' => $request['data']
        ];
        return view('hello.index', $data);
    }
}
