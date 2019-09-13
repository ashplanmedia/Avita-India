@extends('layouts.app')

@section('title')
    @lang('title.about_us')
@stop

@section('content')

<main>

<h1>Product Customization</h1>

<img src="{{$new_image}}" alt="Watermark">

</main>
@endsection
