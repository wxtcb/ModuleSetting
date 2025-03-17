@extends('setting::layouts.master')

@section('content')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module yes oke: {!! config('setting.name') !!}
    </p>
@endsection
