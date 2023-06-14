{{-- FAQ --}}
@php
if ((get_field('faq'))):
@endphp

<section id="faq_accordion" class="section-faq">
    <div class="container text-grey">
        <h3 class="text-2xl font-bold text-center mt-[32px]">LEARN MORE ABOUT OUR SERVICES</h3>
        <h1 class="section-title mt-[15px]">FAQs</h1>

        @php
        if (have_rows('faq')):
          while (have_rows('faq')):
              (the_row())
        @endphp
              <div class="bg-white border-b-4 border-sky-300">
                <h2 class="mb-0" id="faq-heading-{!!get_row_index()!!}">
                  <button
                    class="group relative flex w-full bg-white py-[24px] pr-[40px] text-left font-bold text-2xl lg:text-3xl text-blue-main transition 
                    [overflow-anchor:none]focus:outline-none
                    "
                    type="button"
                    data-te-collapse-init
                    {{get_row_index()===1?'':'data-te-collapse-collapsed'}}
                    data-te-target="#faq-collapse-{!!get_row_index()!!}"
                    aria-expanded="{{get_row_index()===1?'true':'false'}}"
                    aria-controls="faq-collapse-{!!get_row_index()!!}">
                    {{ get_sub_field('question') }}
                    <span
                      class="absolute top-[24px] right-0 ml-auto rotate-0 transition-transform duration-200 ease-in-out 
                      origin-center
                      group-[[data-te-collapse-collapsed]]:-rotate-90
                      ">
                      <i class="fa-solid fa-caret-down"></i>
                    </span>
                  </button>
                </h2>
                <div
                  id="faq-collapse-{!!get_row_index()!!}"
                  class="!visible {{get_row_index()===1?'':'hidden'}}"
                  data-te-collapse-item
                  {{get_row_index()===1?'data-te-collapse-show':''}}
                  aria-labelledby="faq-heading-{!!get_row_index()!!}">
                  <div class="text-blue-main lg:text-xl text-base mt-2 pt-4 pb-[60px] grid grid-cols-12">
                    <div class="col-span-12 md:col-span-10">
                        {!! str_replace(["\r\n", "\r", "\n"], '<br/>', addslashes(get_sub_field('answer'))) !!}
                    </div>
                  </div>
                </div>
              </div>
              @endwhile 
        @endif
    </div>
  </section>
@php
  endif;
@endphp