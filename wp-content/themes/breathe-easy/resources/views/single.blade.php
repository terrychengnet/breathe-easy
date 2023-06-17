@extends('layouts.app')
@include('partials.page-header')

@section('content')
    <div class="container mx-auto py-8">

        @while (have_posts())
            @php
                the_post();
            @endphp
            <article>
                <div class="content_wrapper container container-narrow my-20">
                    <div class="mb-9">
                        <span class="text-black text-2xl">{{ get_the_date() }}</span>
                    </div>
                    <div class="content">
                        {!! get_the_content() !!}
                    </div>
                </div>
            </article>
        @endwhile

    </div>
@endsection
