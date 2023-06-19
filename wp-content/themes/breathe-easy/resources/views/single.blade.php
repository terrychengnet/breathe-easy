@extends('layouts.app')
@include('partials.page-header')

@section('content')
<div class="container container-narrow mt-[40px] md:mt-[80px]">
    <span class="text-black text-2xl font-bold">{{ get_the_date() }}</span>
</div>
@include('partials.content-page')

@endsection
