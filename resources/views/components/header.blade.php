<!--====================  header area ====================-->
<div class="header-area header-area--default">

    <div class="header-bottom-wrap  bg-white header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset ('assets/images/logo/logo-dark.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="header-right">

                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-three d-none d-xl-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="multilevel-submenu">
                                            <a href="{{ route('index') }}"><span>Home</span></a>                                            
                                        </li>
                                        <li class="multilevel-submenu">
                                            <a href="{{ route('case') }}"><span>Case Studies</span></a>                                            
                                        </li>
                                        <li class="multilevel-submenu">
                                            <a href="{{ route('blog') }}"><span>Blog</span></a>                                            
                                        </li>
                                        <li class="multilevel-submenu">
                                            <a href="{{ route('contact') }}"><span>Contact Us</span></a>                                            
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--====================  End of header area  ====================-->