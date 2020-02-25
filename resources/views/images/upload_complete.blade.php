@extends('images.layout.upload')

@section('shortcut')
{{__('data_types.upload_complete')}}</h1>
@endsection

@section('txt')
{{__('data_types.upload_complete.txt')}}</p>
@endsection

@section('content')
<img src='{{$data->src}}'
    class='emoticon' data-emoticon=':{{$data->shortcut}}' title=':{{$data->shortcut}}' />
<div class='emoticon' data-emoticon=':{{$data->shortcut}}'>:{{$data->shortcut}}</div>
<!-- <a href='#' class='emoticon' data-emoticon=':{{$data->shortcut}}'>{{__('data_types.upload_complete.link')}}</a> -->
@endsection