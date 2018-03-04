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
    this is 'hello.index' blade template.
    @if(count($errors) > 0)
    <h2>Error!!</h2>
    <ul class="error">
        @foreach($errors->all() as $error)
        <li class="error-item">{{$error}}</li>
        @endforeach
    </ul>
    @endif
    @isset ($entry_data)
    <h2>Your Entry Information</h2>
    <p>Hello {{$entry_data['name']}}.({{$entry_data['email']}})</p>
    <p>{{$entry_data['video']}}</p>
    @else
    <p>please enter message...</p>
    @endif
    @isset ($tmp_video_path)
    <div class="video_preview">
        <video src='{{$tmp_video_path}}'></video>
    </div>
    @endif
    <form method="POST" action="/hello" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>name:</label><input type="text" name="entry_name" value="{{old('entry_name')}}">
        <label>email:</label><input type="text" name="entry_email" value="{{old('entry_email')}}">
        <label>movie:</label><input type="file" name="entry_video" value="{{old('entry_video')}}">
        <input type="submit" name="entry_submit">
    </form>
    <ul class="list">
        @each('components.item', $list_item, 'item')
    </ul>
    <p>{{$view_messages}}</p>
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
        <dt class="simple_description_list-term">
            Arguments '\$request->data'
        </dt>
        <dd class="simple_description_list-description">
            <ul class="list">
                @foreach($middleware_merge_data as $item)
                <li class="list-item">{{$item['name']}}: {{$item['mail']}}</li>
                @endforeach
            </ul>
        </dd>
    </dl>
@endsection
@section('footer')
    @include('components.footer', $footer)
@endsection