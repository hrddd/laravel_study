@php
$title = <<< EOF
'my first section' --
call {{\$page_layouts}} at component
EOF;
$footer = [
    'sub' => 'footer sub',
    'main' => 'footer main',
];
$list_item = [
    [
        'text' => 'first_item'
    ],
    [
        'text' => 'next_item'
    ], 
];
@endphp
@extends('layouts.helloapp')
@section('header')
    @component('components.header')
        @slot('page_title')
            {{$title}}
        @endslot
    @endcomponent
@endsection
@section('menubar')
    @parent
    index page
@endsection
@section('content')
    @parent
    this is 'hello.index' blade template.
    @isset ($entry_data)
    <p>Hello {{$entry_data['name']}}.</p>
    <p>Your ID is {{$entry_data['id']}}.</p>
    @else
    <p>please enter message...</p>
    @endif
    <ul class="list">
        @each('components.item', $list_item, 'item')
    </ul>
    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <label>name:</label><input type="text" name="name">
        <label>id:</label><input type="text" name="id">
        <input type="submit">
    </form>
    <dl class="simple_description_list">
        <dt class="simple_description_list-term">
            Arguments 'Request'
        </dt>
        <dd class="simple_description_list-description">
            <pre>{{$request}}</pre>
        </dd>
        <dt class="simple_description_list-term">
            Arguments 'Response'
        </dt>
        <dd class="simple_description_list-description">
            <pre>{{$response}}</pre>
        </dd>
    </dl>
@endsection
@section('footer')
    @include('components.footer', $footer)
@endsection