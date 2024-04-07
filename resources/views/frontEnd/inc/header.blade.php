
<div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
    <div class="navigation-container">
        <a href="{{route('home')}}" class="logo-link w-inline-block"><img src="{{asset($website->website_logo)}}" loading="lazy" width="200" alt="" class="logo"></a>
        <nav role="navigation" class="navigation-menu w-nav-menu">
            <a href="#" class="navigation-link-2 w-nav-link">Home</a>
            <a href="#" class="navigation-link-2 w-nav-link">Our Projects</a>
            <a href="#" class="navigation-link-2 w-nav-link">About us</a>
            <a href="#" class="navigation-link-2 w-nav-link">Blog</a>
        </nav>
        <div class="navigation-wrapper">
            <div class="menu-button-2 w-nav-button">
                <div class="menu-icon w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.125 5.88892H18.875V7.41669H5.125V5.88892ZM5.125 11.2361H18.875V12.7639H5.125V11.2361ZM5.125 16.5834H18.875V18.1111H5.125V16.5834Z" fill="currentColor"></path>
                    </svg></div>
            </div>

            @auth
                <a href="{{route('admin.index')}}" class="navigation-button-2 w-inline-block">
                    <div>Dashboard</div>
                </a>
            @else
                <a href="#" class="navigation-secondary w-inline-block">
                    <div>Login</div>
                </a>
                <a href="#" class="navigation-button-2 w-inline-block">
                    <div>Get Started</div>
                </a>
            @endauth
        </div>
    </div>
</div>
