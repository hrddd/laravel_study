@extends('layouts.master')
<pre>
    @php
    $title = 'USERS';
    $footer = [
        'sub' => 'footer sub',
        'main' => 'footer main',
    ];
    @endphp
</pre>
@section('header')
    @component('components.header')
        @slot('page_title')
            {{$title}}
        @endslot
    @endcomponent
@endsection
@section('menubar')
    home | users | videos
@endsection
@section('content')
<table>
    <tr><td>Id</td><td>Name</td><td>Email</td></tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> name}}</td>
        <td>{{$user -> email}}</td>
    </tr>
    @endforeach
</table>
@endsection
@section('footer')
    @include('components.footer', $footer)
@endsection