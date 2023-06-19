{{--
    Template Name: Latest Blog Posts
--}}

@extends('layouts.app')
@include('partials.page-header')
@section('content')
    <div class="container mx-auto py-8">
        <h3>
            <?php echo $title; ?>
            <?php
        $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => $number_of_posts_to_display,
        ]);

        if ($query->have_posts()):
            echo '<div class="flex flex-wrap -mx-4">';

            while ($query->have_posts()):
                $query->the_post();
                ?>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 px-4 mb-4">
                <a href="<?php the_permalink(); ?>">
                    <div class="latest-blog-card bg-gray-100 rounded-2xl">
                        <div class="relative overflow-hidden rounded-2xl">
                            <div class="">
                                <?php the_post_thumbnail('large', ['class' => 'w-full aspect-[4/3] rounded-2xl object-cover object-center']); ?>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 px-10 py-5 bg-blue-main bg-opacity-60">
                                <h2 class="text-white text-4xl font-bold">
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            endwhile;

            echo '</div>';
            wp_reset_postdata();
        endif;
        ?>
    </div>
@endsection
