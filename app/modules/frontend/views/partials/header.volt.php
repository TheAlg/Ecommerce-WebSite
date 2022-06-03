<?php if (str_contains($url, 'users')) { ?>
<header class="header header-6">
    <div class="header-middle">
        <div class="container">
            <div class="header-center">
                <a href="index.html" class="logo">
                    <img src="/assets/images/demos/demo-2/logo.png" alt="Molla Logo" width="105" height="25">
                </a>
            </div>
        </div>
    </div>
</header>
<?php } else { ?>
<header class="header header-10 header-intro-clearance">
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                
                <a href="index.html" class="logo">
                    <img src="assets/images/demos/demo-13/logo.png" alt="Molla Logo" width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
    <form action="#" method="get">
        <div class="header-search-wrapper search-wrapper-wide">
            <div class="select-custom">
                <select id="cat" name="cat">
                    <option value="">All Departments</option>
                    <option value="1">Fashion</option>
                    <option value="2">- Women</option>
                    <option value="3">- Men</option>
                    <option value="4">- Jewellery</option>
                    <option value="5">- Kids Fashion</option>
                    <option value="6">Electronics</option>
                    <option value="7">- Smart TVs</option>
                    <option value="8">- Cameras</option>
                    <option value="9">- Games</option>
                    <option value="10">Home &amp; Garden</option>
                    <option value="11">Motors</option>
                    <option value="12">- Cars and Trucks</option>
                    <option value="15">- Boats</option>
                    <option value="16">- Auto Tools &amp; Supplies</option>
                </select>
            </div><!-- End .select-custom -->
            <label for="q" class="sr-only">Search</label>
            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </div><!-- End .header-search-wrapper -->
    </form>
</div><!-- End .header-search -->
            </div> 
            <div class="header-right">
                <div class="header-dropdown-link">
                    <!--TAG-->
<div class="account">
    <a href="#signin-modal" data-toggle="modal" title="My account">
    <div class="icon">
        <i class="icon-user"></i>
    </div>
    <p href="/user/login">Account</p>
    </a>
</div>

<!--BANNER-->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>
                <div class="form-box"> 
    <div class="form-tab">
        <ul class="nav nav-pills nav-fill" role="tablist">
            <?php if (str_contains($url, 'signup')) { ?> 
            <li class="nav-item">
                <a class="nav-link" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="false" aria-expanded="false">Sign In</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active show" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true" aria-expanded="true">Register</a>
            </li>
            <?php } else { ?> 
            <li class="nav-item active">
                <a class="nav-link active show" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true" aria-expanded="true">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false" aria-expanded="false">Register</a>
            </li>
            <?php } ?>
        </ul>

        <div class="tab-content" >
            <!-- Login -->
            <?php if (str_contains($url, 'signup')) { ?> 
                <div class="tab-pane fade" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                <?php } else { ?>
                <div class="tab-pane fade active in show" id="signin" role="tabpanel" aria-labelledby="signin-tab">
            <?php } ?>
                <?= \Phalcon\Tag::form(['/users/login', 'method' => 'post', 'enctype' => 'multipart/form-data']) ?>
                    <!-- username -->
                    <div class="form-group">
                        <?= $loginForm->label('login_email', ['for' => 'login_email']) ?>
                        <?= $loginForm->render('login_email', ['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= $loginForm->label('login_password', ['for' => 'login_password']) ?>
                        <?= $loginForm->render('login_password', ['class' => 'form-control']) ?>
                    </div>
                    <div class="form-footer" action="">
                        <?= $loginForm->render('login_token', ['value' => $this->security->getToken()]) ?>
                        <?= $loginForm->render('Login', ['class' => 'btn btn-primary']) ?>
                        <span>LOG IN</span>
                        <i class="icon-long-arrow-right"></i>
                        <div class="custom-control custom-checkbox">
                            <?= $loginForm->render('login_remember', ['class' => 'custom-control-input', 'id' => 'signin-remember']) ?>
                            <?= $loginForm->label('login_remember', ['class' => 'custom-control-label', 'for' => 'signin-remember']) ?>
                        </div><!-- End .custom-checkbox -->
                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                    </div>
                <?= \Phalcon\Tag::endForm() ?>
                <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-login btn-g">
                                <i class="icon-google"></i>
                                        Login With Google
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-login btn-f">
                                <i class="icon-facebook-f"></i>
                                        Login With Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register -->
            <?php if (str_contains($url, 'signup')) { ?> 
                <div class="tab-pane fade active in show" id="register" role="tabpanel" aria-labelledby="register-tab">
                <?php } else { ?>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <?php } ?>

                <?= \Phalcon\Tag::form(['/users/signup', 'method' => 'post', 'enctype' => 'multipart/form-data']) ?>
                    <div class="form-group">
                        <?= $singUpForm->label('register_name', ['for' => 'register_name']) ?>
                        <?= $singUpForm->render('register_name', ['class' => 'form-control']) ?>
                    </div>
                    <?= $singUpForm->messages('register_name') ?>
                    <div class="form-group">
                        <?= $singUpForm->label('register_email', ['for' => 'register_email']) ?>
                        <?= $singUpForm->render('register_email', ['class' => 'form-control']) ?>
                    </div>
                    <?= $singUpForm->messages('register_email') ?>

                    <div class="form-group">
                        <?= $singUpForm->label('register_password', ['for' => 'register_password']) ?>
                        <?= $singUpForm->render('register_password', ['class' => 'form-control']) ?>
                    </div>
                    <?= $singUpForm->messages('register_password') ?>

                    <div class="form-group">
                        <?= $singUpForm->label('register_confirmPassword', ['for' => 'register_confirmPassword']) ?>
                        <?= $singUpForm->render('register_confirmPassword', ['class' => 'form-control']) ?>
                    </div>
                    <?= $singUpForm->messages('register_confirmPassword') ?>
                    <div class="form-footer">
                        <?= $singUpForm->render('register_token', ['value' => $this->security->getToken()]) ?>                    
                        <?= $singUpForm->render('Sign Up', ['class' => 'btn btn-primary']) ?>
                        <span>SIGN UP</span>
                        <i class="icon-long-arrow-right"></i>
                        <div class="custom-control custom-checkbox">
                            <?= $singUpForm->render('register_terms', ['class' => 'custom-control-input', 'id' => 'register_terms']) ?>
                            <?= $singUpForm->label('register_terms', ['class' => 'custom-control-label', 'for' => 'register_terms']) ?>
                        </div>
                        <?= $singUpForm->messages('register_terms') ?>

                    </div>
                    <?= \Phalcon\Tag::endForm() ?>
                    <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-login btn-g">
                                <i class="icon-google"></i>
                                        Login With Google
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-login  btn-f">
                                <i class="icon-facebook-f"></i>
                                        Login With Facebook
                            </a>
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
</div>
                    <a href="wishlist.html" class="wishlist-link">
    <i class="icon-heart-o"></i>
    <span class="wishlist-count">3</span>
    <span class="wishlist-txt">Wishlist</span>
</a>


                    
<div class="dropdown cart-dropdown">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <div class="icon">
            <i class="icon-shopping-cart"></i>
            <span class="cart-count" id="cartCount"> <?= $cart_count ?></span>
        </div>
        <p>Cart</p>
    </a>      
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-cart-products" id="cart_items">  
            <?php foreach ($cart_items as $item) { ?>
                <div class="product productselector" value= " <?= $item->productId ?> " >
                    <div class="product-cart-details">
                        <h4 class="product-title">
                            <a href="product.html"> <?= $item->title ?> </a>
                        </h4>
                        <span class="cart-product-info">
                            <span class="cart-product-qty"> <?= $item->qty ?>
                            </span>
                            x  $<?= $item->price ?>
                        </span>
                    </div>
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="<?= $item->picture ?>" alt="product">
                        </a>
                    </figure>
                    <a class="btn-remove removeProduct" type= "submit" value ="<?= $item->productId ?>" title="Remove Product"><i class="icon-close"></i></a>
                </div>
            <?php } ?>
        </div>
        <!--total-->
        <div class="dropdown-cart-total">
            <span>Total</span>
            <span class="cart-total-price" id ="cart-total-price">$ 
                <?= $cart_totalPrice ?>  
            </span>
        </div>
        <!--actions-->
        <div class="dropdown-cart-action">
            <a href="/cart" class="btn btn-primary">View Cart</a>
            <a href ="" id = "emptyCart" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
        </div>
    </div>    
</div>

                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">

    <div class="header-center">
        <nav class="main-nav">
            <ul class="menu">
                <li id ='header_index' class="">
                    <a href="index.html" >Home</a>
                </li>
                <li id="header_shop" class=''>
                    <a href="/products">Shop</a>
                </li>
                <li id="header_about" class="">
                    <a href="product.html"  >About</a>
                </li>
                <li id="header_contact" class="">
                    <a href="#">Contact</a>
                </li>
            </ul><!-- End .menu -->
        </nav><!-- End .main-nav -->
    </div><!-- End .col-lg-9 -->
    <div class="header-right">
        <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
    </div>
</div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
<?php } ?>

