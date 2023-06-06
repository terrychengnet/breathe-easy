@php(the_content())

{{-- FAQ --}}
<section class="section-faq">
    <div class="container text-grey" x-data="{
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
      <h3 class="text-2xl font-bold text-center mt-[32px]">LEARN MORE ABOUT OUR SERVICES</h3>
      <h1 class="section-title mt-[15px]">FAQs</h1>
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
  </section>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
