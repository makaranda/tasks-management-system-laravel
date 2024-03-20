@extends('layouts.app')
@section('content')


<div class="container-fluid mt-0" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 pl-0 pr-0" id="particles-js">
            <div class="row">
                <div class="col-12 col-sm-11 col-md-6 col-lg-6 col-xl-6" id="home-slider-content">
                    <div class="row">
                        <div class="col-12 col-md-12 pt-3">
                            <h1>Welcome to </h1><h1><span class="theme-color-text3">E</span> Visas Dubai Service Portal</h1>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <h4>Get your visa approved in <span class="theme-color-text3">3 easy steps.</span></h4>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <div class="row three-steps">
                                <div class="col-4 col-md-4 step-col">
                                    <div class="step-area">
                                        <p class="pt-3">Step 1</p>
                                        <p>Fill the Form</p>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 step-col">
                                    <div class="step-area">
                                        <p class="pt-3">Step 2</p>
                                        <p>Make the Payment</p>
                                    </div>    
                                </div>
                                <div class="col-4 col-md-4 step-col">
                                    <div class="step-area">    
                                        <p class="pt-3">Step 3</p>
                                        <p>Receive your Visa</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mt-3">
                            <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                        </div>
                    </div>
                    
                </div>
             </div>    
                <video
                        id="my-video"
                        class="video-js"
                        preload="auto"
                        width="auto"
                        autoplay
                        loop
                        height="auto"
                        played
                        data-setup="{}"
                        loop
                        muted
                    >
                    <source src="{{ url('public/assets/videos/dubai-visa-compressed-video-bg.mp4') }}" type="video/mp4" />
                    <source src="{{ url('public/assets/videos/dubai-visa-compressed-video-bg.mp4') }}" type="video/webm" />
                    <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    </p>
                </video>

        </div>
    </div>
</div>

<div class="container mt-0" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 mt-4">
            <h1 class="main-title">Choose Your Visa</h1>
            <p class="main-paragraph">All visas are valid across the United Arab Emirates and can be used for all modes of transport.</p>
        </div>
        <div class="col-12 col-md-12 mt-4">
            <!-- {{ var_dump($visas) }} -->

            <div class="row justify-content-center">
                <ul class="nav nav-pills mb-3 col-12 col-md-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Short Term Visa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Long Term Visa</button>
                    </li>
                </ul>
                <div class="col-12 col-md-12 tab-content mt-3" id="pills-tabContent">
                    <div class="tab-pane fade w-100 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        
                        <div class="row justify-content-center">
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>96 Hours</h3>
                                                <p>Dubai Transit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">30 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">96 hours from date of entry</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>14 Days</h3>
                                                <p>Dubai Visit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">14 days from date of entry</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>

                        </div>
                        
                    </div>
                    <div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        
                        <div class="row justify-content-center">
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>30 Days</h3>
                                                <p>Dubai Visit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">30 days from date of entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Extension</p>
                                                            <p class="item-lists-sub">Extension is available</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>30 Days</h3>
                                                <p>Dubai Visit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Multiple Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">30 days from date of entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Extension</p>
                                                            <p class="item-lists-sub">Extension is available</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>

                        </div>
                        
                        <div class="row justify-content-center">
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>60 Days</h3>
                                                <p>Dubai Visit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Single Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">30 days from date of entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Extension</p>
                                                            <p class="item-lists-sub">Extension is available</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>
                            
                            
                            <div class="col-12 col-sm-6 col-md-4 main-items">                               
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 pt-3  item-list">
                                        <div class="row">
                                            <div class="col-12 col-md-7 items-title-areas">
                                                <h3>60 Days</h3>
                                                <p>Dubai Visit Visa</p>
                                            </div>
                                            <div class="col-12 col-md-5 items-available-areas">
                                                <span class="badge rounded-pill text-bg-warning item-badge-available">Available</span>
                                            </div>
                                            <!-- <div class="col-12 col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                    <div class="checkmark">
                                                        <p class="No name">Reguler</p>
                                                        <p class="Yes name">Express</p>
                                                    </div>
                                                </label>
                                            </div> -->
                                            <div class="col-12 col-md-12 text-center">
                                                <h1 class="item-amount">$10</h1>
                                            </div>
                                            <div class="col-12 col-md-12 item-lists mt-3">
                                                <table>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Type</p>
                                                            <p class="item-lists-sub">Multiple Entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Average Processing Time</p>
                                                            <p class="item-lists-sub">3 Business Days</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Visa Validity</p>
                                                            <p class="item-lists-sub">60 days from date of issue</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Stay Period</p>
                                                            <p class="item-lists-sub">30 days from date of entry</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="items-list-icons"><img src="{{ url('public/assets/images/check-icon-new.png') }}" alt="" class="img-fluid"></td>
                                                        <td>
                                                            <p class="item-lists-main">Extension</p>
                                                            <p class="item-lists-sub">Extension is available</p>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </div>
                                            <div class="col-12 col-md-12 mt-3 text-center">
                                                <a href="./application.php" class="btn theme-btn">Get Visa Now</a>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>                              
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="col-12 col-md-12 mt-4">
            
        </div>
        <div class="col-12 col-md-12 mt-5 mb-0">
            <div class="home-demo partners-list">
                <div class="row">
                    <div class="col-12 col-md-12 mt-5">
                        <h1 class="main-title">Choose Your Visa</h1>
                        <p class="main-paragraph">All visas are valid across the United Arab Emirates and can be used for all modes of transport.</p>
                    </div>
                    <div class="large-12 col-12 col-md-12 columns mt-5">                  
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/48-hr.jpg') }}" data-img="visa_1.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/>
                            </div>
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/96-hr.jpg') }}" data-img="visa_2.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/>
                            </div>
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/T30-single.jpg') }}" data-img="visa_3.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/>
                            </div>
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/T60-single.jpg') }}" data-img="visa_4.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/>   
                            </div>
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/T30-v-ext.jpg') }}" data-img="visa_5.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/> 
                            </div>
                            <div class="item">
                                <img src="{{ url('public/assets/images/visas/T60-v-ext.jpg') }}" data-img="visa_6.png" alt="" data-bs-toggle="modal" data-bs-target="#imgCaroselModal" class="hvr-grow cursor-pointer img-carosel-view"/>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>            
        </div>
    </div>
</div>


@endsection
@push('css')
    <style>

    </style>
@endpush

@push('scripts')


<script type="text/javascript">
jQuery(document).ready(function($){
    hidePreloader();	
    	
    function hidePreloader() {
    	var preloaderFadeOutTime = 500;
    	var preloader = $('.spinner-wrapper');
    	setTimeout(function() {
    		//$('.spinner-wrapper').fadeOut(500);
    		preloader.css({"display": "none"});
    	}, 2000);
    } 

    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    
    $('#visa-category').on('change',function(){
        //console.log($(this).val());
        var visaPrice = $(this).val();
        $('#visa-price').val('Visa Price - $'+visaPrice);
    });
    
    $('#iti-0__country-listbox').on('change',function(){
        //console.log($(this).val());
        var visaPrice = $(this).val();
        $('#visa-price').val('Visa Price - $'+visaPrice);
    });
    
    $(".pop").popover({
      trigger: "manual",
      content: function() {
        return $('#popover-wrapper').html();
      },
      html: true,
      animation: false
    }).on("mouseenter", function() {
      var _this = this;
      $(this).popover("show");
      $(".popover").on("mouseleave", function() {
        $(_this).popover('hide');
      });
      $(".close").on("mousedown", function() {
        $(_this).popover('hide');
      });
    }).on("mouseleave", function() {
      var _this = this;
      setTimeout(function() {
        if (!$(".popover:hover").length) {
          $(_this).popover("hide");
        }
      }, 100);
    });

    window.onload =function(){
        //document.getElementById("my-video").play();
    }
    
    $('.img-carosel-view').on('click',function(){
        /*let imgCarosel = $(this).attr("src");*/
        let imgCarosel = $(this).attr("data-img");
        $('#imgCarosel').attr('src','assets/images/visas/'+imgCarosel+'');
    });

    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $("#main-page").position();
        //alert(scroll+'/'+topDist.top);
        if (scroll > topDist.top) {
            //$('#mainNavArea').css({"position":"fixed","top":"0","z-index":"99","width": "100%","background-color": "#fff"});
            $('#mainNavArea').addClass('nav-sticky');
        } else {
            //$('#mainNavArea').css({"position":"relative","top":"auto","z-index":"99"});
            $('#mainNavArea').removeClass('nav-sticky');
        }
    });

    $('.btn-toggle-mobile').on('click',function(){
        $(this).addClass("d-none");
        $('.btn-close-area').removeClass("d-none");
        $('.btn-close-area').addClass("d-block");
    });

    $('.btn-close-area').on('click',function(){
        $(this).removeClass("d-block");
        $('.btn-toggle-mobile').addClass("d-block");
        $('.btn-toggle-mobile').removeClass("d-none");
        $('.btn-close-area').addClass("d-none");
    });


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    center: true,
    responsiveClass:true,
    autoplay:true,
    dots: false,
    nav: true,
    navElement: true,
    autoplayTimeout:5000,
    pagination: false,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        }
    }
});
  

});
        var count_particles, stats, update;
        //stats = new Stats;
        //stats.setMode(0);
        //stats.domElement.style.position = 'absolute';
        //stats.domElement.style.left = '0px';
        //stats.domElement.style.top = '0px';
        //document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            //stats.begin();
            //stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            //count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);

</script>

@endpush
