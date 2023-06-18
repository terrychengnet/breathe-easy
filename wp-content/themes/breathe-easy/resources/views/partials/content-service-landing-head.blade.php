@php
$serviceA_title = get_field('service_a_title');
$serviceA_summary = get_field('service_a_summary');
$serviceA_link = get_field('service_a_link');
$serviceA_bg = get_field('service_a_background');

$serviceB_title = get_field('service_b_title');
$serviceB_summary = get_field('service_b_summary');
$serviceB_link = get_field('service_b_link');
$serviceB_bg = get_field('service_b_background');

$contact_us_link = get_field('contact_us_link');
@endphp

<section class="section-service-landing-head py-0">
<div class="service-head-boxes relative grid grid-cols-1 lg:grid-cols-2"> 
    <div class="service-head-box__wrap col-span-1 relative min-h-[400px] md:min-h-[600px] grid justify-items-end overflow-hidden">
        <div class="service-head-box relaitve z-20 flex h-full">
            <a class="grid z-20 text-center h-full content-center p-[40px] md:p-[80px] max-w-[850px]" href="{{ $serviceA_link }}">
                <h1 class="section-heading text-white mb-[40px]">{{ $serviceA_title }}</h1>
                <p class="description text-white">{{ $serviceA_summary }}</p>    
            </a>
        </div>
        <div class="service-head-box__mask absolute z-10 top-0 left-0 right-0 bottom-0 bg-blue-second/75"></div>
        <div class="service-head-box__bg absolute z-0 w-full h-full transition-all duration-500 ease-in-out transform bg-center bg-cover;"
        style="background-image:url( {{ $serviceA_bg['url'] }} )"></div>
    </div>
    <div class="service-head-box__wrap col-span-1 relative min-h-[400px] md:min-h-[600px] grid justify-items-start overflow-hidden">
        <div class="service-head-box relaitve z-20 flex h-full">
            <a class="grid z-20 text-center h-full content-center p-[40px] md:p-[80px] max-w-[850px]" href="{{ $serviceB_link }}">
                <h1 class="section-heading text-white mb-[40px]">{{ $serviceB_title }}</h1>
                <p class="description text-white">{{ $serviceB_summary }}</p>    
            </a>
        </div>
        <div class="service-head-box__mask absolute z-10 top-0 left-0 right-0 bottom-0 bg-blue-main/75"></div>
        <div class="service-head-box__bg absolute z-0 w-full h-full transition-all duration-500 ease-in-out transform bg-center bg-cover;"
        style="background-image:url( {{ $serviceB_bg['url'] }} )"></div>
    </div>
</div>
</section>
<section class="service-head-contact bg-blue-main">
    <div class="container container-narrow text-center pb-[30px]">
        <h1 class="section-headering text-blue-light mb-[14px]">Free Consultation</h1>
        <p class="description text-blue-light mb-[44px]">Not sure if you need Aircon cleaning? <br class=""/>
            Book a consultation with our experts to learn more.</p>
        <a class="btn" href="{{ $contact_us_link }}">Contact Us</a>
    </div>
</section>