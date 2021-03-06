<div class="header-container header-color color">
    <div class="header_full">
        <div class="header">
            <div class="header-logo show-992">
                <a href="index.html" class="logo"> <img class="img-responsive" src="{{asset('assets/images/logo.png')}}"
                        alt="" /></a>
            </div>
            <!--- .header-logo -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="header-config-bg">
                            <div class="header-wrapper-bottom">
                                <div class="custom-menu col-lg-12">
                                    <div class="header-logo hidden-992">
                                        <a href="index.html" class="logo"> <img class="img-responsive"
                                                src="{{asset('assets/images/logo.png')}}" alt="" /></a>
                                    </div>
                                    <!--- .header-logo -->
                                    <div class="magicmenu clearfix">
                                        <ul class="nav-desktop sticker">
                                            <li class="level0 logo display"><a class="level-top"
                                                    href="index.html"><img alt="logo" src="{{ asset('assets/images/logo.png') }}"></a>
                                            </li>
                                            <li class="level0 home">
                                                <a class="level-top" href="{{ url('/') }}"><span
                                                        class="icon-home fa fa-home"></span><span
                                                        class="icon-text">Home</span></a>
                                                        <li>
                                                            
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="nav-link ">
                                            
                                                <p>Logout</p>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                            </li>

                                            

                                        </ul>
                                    </div>
                                    <!--- .magicmenu -->

                                </div>
                                <!--- .custom-menu -->
                            </div>
                            <!--- .header-wrapper-bottom -->
                        </div>
                        <!--- .header-config-bg -->
                    </div>
                    <!--- .row -->
                </div>
                <!--- .container -->
            </div>
            <!--- .header-bottom -->
            <div class="header-page clearfix">
                <div class="header-setting header-search">
                    <div class="settting-switcher">
                        <div class="dropdown-toggle">
                            <div class="icon-setting"></div>
                        </div>
                        
                    </div>
                </div>
                                    
                                 <div class="header-setting">
                    <div class="settting-switcher">
                        
                      
                        <!--- .settting-switcher -->
                    </div>
                    <!--- .header-setting -->

                    

                    <div class="miniCartWrap">
                        <div class="mini-maincart">
                            <div class="cartSummary">
                                <div class="crat-icon">
                                    <span class="icon-handbag icons"></span>
                                    <p class="mt-cart-title">My Cart</p>
                                </div>
                                <div class="cart-header">
                                    <span class="zero">0 </span>
                                    <p class="cart-tolatl">
                                        <span class="toltal">Total:</span>
                                        <span><span class="price">$0.00</span></span>
                                    </p>
                                </div>
                            </div>
                            <!--- .cartSummary -->
                            <div class="mini-contentCart" style="display: none">
                                <div class="block-content">
                                    <p class="block-subtitle">Recently added item(s)</p>
                                    <ol id="cart-sidebar" class="mini-products-list clearfix">
                                        <li class="item clearfix">
                                            <div class="cart-content-top">
                                                <a href="#" class="product-image"><img src="http://placehold.it/60x75"
                                                        width="60" height="77" alt="Brown Arrows Cushion"></a>
                                                <div class="product-details">
                                                    <p class="product-name"><a href="#">Brown Arrows Cushion</a></p>
                                                    <strong>1</strong> x <span class="price">$229.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-content-bottom">
                                                <div class="clearfix"> <a href="#" title="Edit item"
                                                        class="btn-edit"><i class="fa fa-pencil-square-o"></i></a> <a
                                                        href="#" title="Remove" class="btn-remove btn-remove2"><i
                                                            class="icon-close icons"></i></a></div>
                                            </div>
                                        </li>

                                    </ol>
                                    <p class="subtotal"> <span class="label">Subtotal:</span> <span
                                            class="price">$687.00</span></p>
                                    <div class="actions"> <a href="#" class="view-cart"> View cart </a> <a
                                            href="checkout-step1.html">Checkout</a></div>
                                </div>
                            </div>
                            <!--- .mini-contentCart -->
                        </div>
                        <!--- .mini-maincart -->
                    </div>
                    <!--- .miniCartWrap -->

                </div>
                <!--- .header-page -->
            </div>
            <!--- .header -->
        </div>
        <!--- .header_full -->
    </div>
