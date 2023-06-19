{{--
  Template Name: Blog Archive
--}}

@extends('layouts.app')
@include('partials.page-header')

@section('content')
    <div class="container mx-auto py-[40px] md:py-[100px]">

        @php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => get_option('posts_per_page'), // Query posts per page from WordPress Reading settings
            ];
            $query = new WP_Query($args);
        @endphp

        @if ($query->have_posts())
            <div class="posts-wrap">
                @while ($query->have_posts())
                    @php
                        $query->the_post();
                    @endphp
                    <div class="grid animate-post grid-cols-12 gap-1 mb-[45px]">
                        <div class="col-span-12 lg:col-span-6">
                            <a href="{{ get_permalink() }}">
                                {!! get_the_post_thumbnail(get_the_ID(), 'medium', ['class' => 'w-full h-auto aspect-video object-cover rounded-[25px]']) !!}
                            </a>
                        </div>
                        <div class="pt-[40px] pb-[40px] md:p-10 lg:col-start-8 col-span-12 lg:col-span-5">
                            <h2 class="section-heading mb-[30px]"><a
                                    href="{{ get_permalink() }}">{{ get_the_title() }}</a>
                                </h2>
                            <div class="description mb-[40px]">
                                {{ get_the_excerpt() }}
                            </div>
                            <div class="btn-wrap">
                                <a class="btn" href="{{ get_permalink() }}">Read More</a>
                            </div>
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
