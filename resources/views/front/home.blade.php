@extends('front.layout')

@section('title', 'الرئيسية')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <video autoplay="" muted="" loop="" playsinline="" preload="auto">
        <source src="{{ asset('front/videos/hero.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div id="about-us">
        <div class="container text-center py-5 d-flex flex-column align-items-center">
            <h1 class="fw-bold">@lang('custom.about_us.title')</h1>
            <p class="lead fs-6 fw-bold mt-2">@lang('custom.about_us.description')</p>
            <a href="#contact" class="btn btn-primary btn-lg mt-2 mx-auto d-flex align-items-center gap-2">
                <span>@lang('custom.contact_us')</span>
                <i class="fa-solid fa-circle-arrow-right"></i>
            </a>
        </div>
    </div>
    <div id="scroll-down" class="text-center">
        <a href="#services">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M342.6 534.6C330.1 547.1 309.8 547.1 297.3 534.6L137.3 374.6C124.8 362.1 124.8 341.8 137.3 329.3C149.8 316.8 170.1 316.8 182.6 329.3L320 466.7L457.4 329.4C469.9 316.9 490.2 316.9 502.7 329.4C515.2 341.9 515.2 362.2 502.7 374.7L342.7 534.7zM502.6 182.6L342.6 342.6C330.1 355.1 309.8 355.1 297.3 342.6L137.3 182.6C124.8 170.1 124.8 149.8 137.3 137.3C149.8 124.8 170.1 124.8 182.6 137.3L320 274.7L457.4 137.4C469.9 124.9 490.2 124.9 502.7 137.4C515.2 149.9 515.2 170.2 502.7 182.7z"/></svg>
        </a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">@lang('custom.our_services')</h2>
        <div class="row g-4">
            @if ($services->count() == 0)
                <p class="mb-0 fw-bold text-center">@lang('custom.our_services.no_services')</p>
            @else
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->title }}"/>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $service->title }}</h5>
                                <p class="card-text">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif            
        </div>
    </div>
</section>

<!-- Clients / Logos Section -->
<section id="clients" class="clients py-5 bg-white">
    <div class="container">
        <h3 class="text-center mb-4 fw-bold">@lang('custom.partners')</h3>
        <div class="d-flex flex-wrap row-gap-5 text-center">
            @if ($top_customers->count() == 0)
                <p class="mb-0 fw-bold text-center">@lang('custom.partners.no_partners')</p>
            @else
                @foreach ($top_customers as $customer)
                    <div class="col-lg-3 col-md-4 col-6"><img src="{{ asset($customer->customer_image) }}" class="img-fluid" alt="{{ $customer->customer_name }}" title="{{ $customer->customer_name }}"></div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 text-dark">
    <div class="container">
        <h3 class="text-center mb-4 fw-bold">@lang('custom.contact_us_now')</h3>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form id="send-contacts" method="POST">
                    <div class="d-flex gap-2">
                        <div class="mb-3 flex-fill">
                            <label for="company" class="form-label">@lang('custom.company')</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="@lang('custom.company')">
                        </div>
                        <div class="mb-3 flex-fill">
                            <label for="name" class="form-label">@lang('custom.name')</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="@lang('custom.name')">
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="mb-3 flex-fill">
                            <label for="email" class="form-label">@lang('custom.email')</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="@lang('custom.email')">
                        </div>
                        <div class="mb-3 flex-fill">
                            <label for="phone_number" class="form-label">@lang('custom.phone')</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="@lang('custom.phone')">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">@lang('custom.message')</label>
                        <textarea class="form-control" id="message" name="message" rows="2" placeholder="@lang('custom.message')"></textarea>
                    </div>
                    <button type="submit" class="loader-btn btn bg-dark w-100 text-white fw-bold">
                        <p class="mb-0">
                            <i class="fa-solid fa-paper-plane"></i> @lang('custom.send')
                        </p>
                        <div class="loader"></div>
                    </button>
                </form>
            </div>
            <div class="col-md-5 ps-5 mt-2 d-flex flex-column justify-content-center">
                <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.0532422979913!2d31.464174200000002!3d30.064008299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458194288b3f6bb%3A0x461eb9f446915654!2sPromotru%20agency!5e0!3m2!1sen!2seg!4v1762527732896!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="mb-1">
                    <i class="fa-solid fa-house"></i>
                    <span>{{ str_replace('http://', '', str_replace('https://', '', url('/'))) }}</span>
                </p>
                <p class="mb-1">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>التجمع الأول أمام بوابة الرحاب - القاهرة الجديدة</span>
                </p>
                @if ($website_settings->phone_number)
                    <p class="mb-1">
                        <i class="fa-solid fa-phone"></i>
                        <span>{{ $website_settings->phone_number }}</span>
                    </p>
                @endif
                @if ($website_settings->email)
                    <p class="mb-1">
                        <i class="fa-solid fa-envelope"></i>
                        <span>{{ $website_settings->email }}</span>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection