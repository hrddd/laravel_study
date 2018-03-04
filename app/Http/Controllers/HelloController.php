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
        $entry_data = [
            'name' => $request -> name,
            'id' => $request -> id,
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
