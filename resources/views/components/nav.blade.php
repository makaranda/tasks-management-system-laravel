<div class="spinner-wrapper">
    <div class="spinner">
        <img src="{{ url('public/assets/images/dubai-visa-logo.jpg') }}" alt="Online Dubai Visa" class="img-fluid header-main-logo-pc"><br>
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<div id="mainNavArea">
    <div class="main-nav-bar container mt-3 mb-2">
        <div class="row justify-content-center">
            <div class="col-7 col-md-5">
                <a href="{{ URL::to('') }}"><img src="{{ url('public/assets/images/dubai-visa-logo.jpg') }}" alt="Online Dubai Visa" class="img-fluid header-main-logo-pc"></a>
            </div>
            <div class="col-5 col-md-7 d-block d-sm-block d-md-none">
                <button class="navbar-toggler btn-toggle-mobile" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                </button>
                <button type="button" class="btn-close1 btn-close-white text-reset float-right btn-close-area d-none" data-bs-target="#navbarSupportedContent" data-bs-dismiss="offcanvas" aria-label="Close">
                    <span class="navbar-toggler-icon"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="col-12 col-md-7 d-none d-sm-none d-md-block">
                <ul class="list-group list-group-horizontal justify-content-end top-menu-area">
                    <li class="list-group-item"><a href="{{ URL::to('') }}/about-us">About us</a></li>
                    <li class="list-group-item"><a href="{{ URL::to('') }}/corporate-enquiry">Corporate Enquiry</a></li>
                    <li class="list-group-item"><a href="{{ URL::to('') }}/contact-us">Contact us</a></li>
                </ul>                       
            </div>
        </div>
    </div>
    <section class="main-nav-bar navbar-header-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <nav class="navbar navbar-expand-lg pt-0 pb-0 primary-menu-area">
                        <div class="container-fluid">
                    
                            <div class="offcanvas offcanvas-start bg-theme collapse navbar-collapse" id="navbarSupportedContent" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header w-100">
                                    <a href="{{ URL::to('') }}"><img src="{{ url('public/assets/images/dubai-visa-logo.jpg') }}" alt="Dubai Visa" class="img-fluid"></a>
                                    
                                </div>
                                <div class="offcanvas-body main-nav-bar">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('') }}/visa-guides">Visa Guides</a>
                                        </li>
                                        <!--<li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visas</a>
                                            <ul class="dropdown-menu fade-up">
                                                <li><a class="dropdown-item" href="#">Short Term Visa</a></li>
                                                <li class="divider-li"><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Long Term Visa</a></li>
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('') }}/application">Application</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('') }}/other-services">Other Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('') }}/blogs">Blogs</a>
                                        </li>
                                        
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </nav>           
                </div>
            </div>
        </div>
    </section>
</div>