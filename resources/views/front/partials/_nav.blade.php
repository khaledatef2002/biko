<!-- Navbar -->
<nav class="navbar navbar-expand-lg {{ request()->routeIs('front.blogs.*') ? 'shadow-sm' : '' }}">
    <div class="container">
        <a class="navbar-brand" href="{{ route('front.home') }}">
            <img src="{{ $website_settings->display_logo }}" alt="بيكو">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="/">@lang('custom.home')</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="/#services">@lang('custom.our_services')</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="/#clients">@lang('custom.partners')</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="{{ route('front.blogs.index') }}">@lang('custom.blog')</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="/#contact">@lang('custom.contact_us')</a></li>
                <div>
                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                EN
                            </a>
                        </li>  
                        @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('front.blogs.*') ? 'text-dark' : '' }}" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                العربية
                            </a>  
                        </li>
                    @endif
                </div>
            </ul>
        </div>
    </div>
</nav>