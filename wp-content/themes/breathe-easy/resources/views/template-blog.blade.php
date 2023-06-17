{{--
  Template Name: Blog Archive
--}}

@extends('layouts.app')
@include('partials.page-header')

@section('content')
    <div class="container mx-auto py-8">

        @php
            $posts_per_page = get_option('posts_per_page');
            $args = [
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
            ];
            $query = new WP_Query($args);
        @endphp

        @if ($query->have_posts())
            <div class="grid grid-cols-1 gap-6">
                @while ($query->have_posts())
                    @php
                        $query->the_post();
                    @endphp
                    <div class=" flex flex-col sm:flex-row">
                        <div class="w-full sm:w-1/2">
                            <a href="{{ get_permalink() }}">
                                {!! get_the_post_thumbnail(get_the_ID(), 'medium', ['class' => 'w-full h-auto rounded-3xl']) !!}
                            </a>
                        </div>
                        <div class="flex flex-col px-0 py-7 sm:px-10 sm:py-0 w-full gap-7 sm:w-1/2">
                            <h2 class="text-6xl sm:text-4xl font-bold mb-2"><a
                                    href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
                            <div class="text-gray-800 text-lg">{!! wp_trim_words(get_the_content(), 15, '...') !!}</div>
                            <a href="{{ get_permalink() }}"
                                class="inline-block text-lg w-fit mt-4 px-10 py-5 rounded-full text-white bg-blue-light hover:bg-blue-second duration-300">Read
                                More</a>
                        </div>
                    </div>
                @endwhile
                @php(wp_reset_postdata())
            </div>
        @else
            <p>No blog posts found.</p>
        @endif

        <div class="mt-8">
            {!! paginate_links(['total' => $query->max_num_pages]) !!}
        </div>
    </div>
@endsection
