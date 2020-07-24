<!DOCTYPE html>
<html>
<head>

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/bootstrap-4.1.3/bootstrap.css')}}">
    <link href="{{URL::asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/styles/responsive.css')}}">

 
</head>
<body>

 
<div class="super_container">



<!-- Header -->

<header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">

            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="#"><div>a<span>star</span></div></a>
            </div>



        </div>
    </header>






    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Info -->
        <div class="info">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">


            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="#"><div><span>store</span></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="/index">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="/contact">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        

        <!-- Cart -->


        <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                
                
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                    <?php $count = 0 ?>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                        </div>
 
                        <?php $total = 0 ?>
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
 
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $id }}</p>
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>


        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                    <img src="{{URL::asset('assets/images/bag.png')}}" alt="">
                    <div class="cart_num">
                    <a href="{{ url('cart') }}" >
                    <div class="col-lg-6 col-sm-6 col-6">
                    
                      {{ count(session('cart')) }}                       
                     </div>
                     </a> 
                    </div>
                </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price"> {{ $total }}</div>                           
                       
        </div>
    </div>

        <!-- Home -->

        <div class="home">

<!-- Home Slider -->
<div class="home_slider_container">
    <div class="owl-carousel owl-theme home_slider">

        <!-- Slide -->
        <div class="owl-item">
            <div class="background_image" style="background-image:url({{URL::asset('assets/images/home_slider_1.jpg')}})"></div>
            <div class="home_content_container">
                <div class="home_content">
                    <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                        <h1>Welcome to</h1>
                        <div class="home_discount_text">our store</div>
                    </div>
                    <div class="home_title">New Collection</div>
                    <div class="button button_1 home_button trans_200"><a href="{{route('index')}}">Shop NOW!</a></div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="owl-item">
            <div class="background_image" style="background-image:url({{URL::asset('assets/images/home_slider_1.jpg')}})"></div>
            <div class="home_content_container">
                <div class="home_content">
                    <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                        <h1>Enjoy<h1>
                        <div class="home_discount_text">with our products</div>
                    </div>
                    <div class="home_title">New Collection</div>
                    <div class="button button_1 home_button trans_200"><a href="{{route('index')}}">Shop NOW!</a></div>
                </div>
            </div>
        </div>

        <!-- Slide -->
        <div class="owl-item">
            <div class="background_image" style="background-image:url({{URL::asset('assets/images/home_slider_1.jpg')}})"></div>
            <div class="home_content_container">
                <div class="home_content">
                    <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                        <h1></h1>
                        <div class="home_discount_text">Discount on the</div>
                    </div>
                    <div class="home_title">New Collection</div>
                    <div class="button button_1 home_button trans_200"><a href="{{route('index')}}">Shop NOW!</a></div>
                </div>
            </div>
        </div>

    </div>

    <!-- Home Slider Navigation -->
    <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
    <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

</div>
</div>

<!-- Boxes -->

<div class="boxes">
<div class="section_container">
    <div class="container">
        <div class="row">

            <!-- Box -->
            @foreach($data['categories'] as $category)
            <div class="col-lg-4 box_col">
                <div class="box">
                    <div class="box_image"  ><img src="{{$category->photo}}" alt="" style="height:200px;width:300px;"></div>
                    <div class="box_title trans_200" value="{{$category->id}}"><a href="{{url('showcat/'.$category->id) }}">{{$category->name}}</a></div>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</div>
</div>

<!-- Categories -->

<div class="categories">
<div class="section_container">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="categories_list_container">
                    <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                    @foreach($data['tags'] as $tag)
                        <li><a href="{{url('showtag/'.$tag->id) }}">{{$tag->name}}</a></li>                       
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



 
    
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')

<div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{URL::asset('assets/images/newsletter.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">subscribe to our newsletter</div>
                            <div class="newsletter_subtitle">we won't spam, we promise!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="https://www.youtube.com" id="newsletter_form" class="newsletter_form">
                               
                                <button class="newsletter_button">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_about">
                                <!-- Logo -->
                                <div class="footer_logo">
                                    <a href="#"><div>j<span>star</span></div></a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                                </div>
                                
                            </div>
                        </div>

                        
                      
                    

                        <!-- Contact -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">contact</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Jayani Swimming pool contruction PVT Ltd</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>{{$data['abouts']->address1}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>  </span><div>{{$data['abouts']->address2}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>  </span><div>{{$data['abouts']->address3}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>{{$data['abouts']->phone1}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>  </span><div>{{$data['abouts']->phone2}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>  </span><div>{{$data['abouts']->phone3}}</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>{{$data['abouts']->email}}</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="{{$data['socials']->instagram}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="{{$data['socials']->google}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">google +</div>
                                    </div>
                                </a>
                                <!-- Pinterest -->
                                <a href="{{$data['socials']->pinterest}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">pinterest</div>
                                    </div>
                                </a>
                                <!-- Facebook -->
                                <a href="{{$data['socials']->facebook}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">facebook</div>
                                    </div>
                                </a>
                             <!-- Twitter -->
                                <a href="{{$data['socials']->twitter}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">twitter</div>
                                    </div>
                                </a>
                                <!-- YouTube -->
                                <a href="{{$data['socials']->youtube}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">youtube</div>
                                    </div>
                                </a>
                                <!-- Tumblr -->
                                <a href="{{$data['socials']->tumblr}}">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">tumblr</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </footer>


</div>

<script src="{{URL::asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('assets/styles/bootstrap-4.1.3/popper.js')}}"></script>
<script src="{{URL::asset('assets/styles/bootstrap-4.1.3/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
 
</body>
</html>