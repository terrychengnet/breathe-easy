{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        @include('partials.page-header')
        <div class="container text-grey mx-auto px-10 lg:px-20 py-20" x-data="{
            faqs: [
                @if (have_rows('faqs')) @while (have_rows('faqs'))
                    @php(the_row())
                    {
                        question: '{{ get_sub_field('question') }}',
                        answer: '{!! str_replace(["\r\n", "\r", "\n"], '<br/>', addslashes(get_sub_field('answer'))) !!}',
                        isOpen: true,
                    },
                    @endwhile @endif
            ]
        }">
            <h3 class="text-2xl font-bold text-center">LEARN MORE ABOUT OUR SERVICES</h3>
            <h2 class="text-7xl font-bold text-center">FAQs</h2>
            <div class="leading-loose mt-20">
                <template x-for="(faq, index) in faqs" :key="index">
                    <div class="border-b-4 border-sky-300 pb-4">
                        <button
                            class="w-full font-bold text-2xl lg:text-3xl text-blue-main py-3 flex justify-between items-center mt-4 text-left"
                            :class="index !== faqs.length - 1 && ''"
                            @click="faqs = faqs.map((f, i) => ({ ...f, isOpen: i !== index ? false : !f.isOpen}))">
                            <div x-text="faq.question" class="w-5/6"></div>
                            <i x-show="!faq.isOpen" class="fa-solid fa-caret-right"></i>
                            <i x-show="faq.isOpen" class="fa-solid fa-caret-down"></i>
                        </button>

                        <div class="text-blue-main lg:text-xl text-base mt-2 pt-4 pb-8" x-show="faq.isOpen"
                            x-html="faq.answer">
                        </div>
                    </div>
                </template>
            </div>
        </div>
        @include('partials.content-page')
    @endwhile
@endsection
