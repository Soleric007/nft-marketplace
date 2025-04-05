<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gigaland - NFT Marketplace Website Template</title>
    <link rel="icon" href="/template/assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Gigaland - NFT Marketplace Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="/template/assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{ route('index') }}">
                                        <img alt="" class="logo" src="/template/assets/images/logo-light.png" />
                                        <img alt="" class="logo-2" src="/template/assets/images/logo.png" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col">
                                <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                            </div>
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                    <li>
                                        <a href="{{ route('index') }}">Home<span></span></a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{ route('explore') }}">Explore<span></span></a>
                                        
                                    </li>
                                    <li>
                                        <a href="#">Pages<span></span></a>
                                        <ul>
                                            <li><a href="{{ route('author') }}">Author</a></li>
                                            <li><a href="{{ route('profile') }}">Profile</a></li>
                                            <li><a href="{{ route('wallet') }}">Wallet</a></li>
                                            <li><a href="{{ route('create') }}">Create</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Stats<span></span></a>
                                        <ul>
                                            <li><a href="{{ route('activity') }}">Activity</a></li>
                                            <li><a href="{{ route('rankings') }}">Rankings</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            <div class="menu_side_area">
                                <a href="{{ route('wallet') }}" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section class="text-light" data-bgimage="url(/template/assets/images/background/subheader.jpg)" data-stellar-background-ratio=".2">

                <div class="center-y relative text-center" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>Help Center</h1>

                                <form action='https://madebydesignesia.com/themes/gigaland/blank.php' class="row" id='form_sb' method="post" name="myForm">
                                <div class="col text-center">
                                    <div class="spacer-10"></div>
                                    <input class="form-control" id='name_1' name='name_1' placeholder="type your question here" type='text'> <a href="#" id="btn-submit"><i class="arrow_right"></i></a>
                                </div>
                                </form>

                                <div class="spacer-20"></div>

                                <p>eg. create item, create wallet.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Getting Started</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Buying</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Selling</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Creating</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Partners</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb25">
                            <div class="feature-box f-boxed style-3 text-center">
                                <div class="text">
                                    <h4>Developers</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                                    <a href="#" class="btn-main">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Marketplace</h5>
                            <ul>
                                <li><a href="#">All NFTs</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Domain Names</a></li>
                                <li><a href="#">Virtual World</a></li>
                                <li><a href="#">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                                <li><a href="#">Docs</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Mailing List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="https://madebydesignesia.com/themes/gigaland/blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="{{ route('index') }}">
                                        <img alt="" class="f-logo" src="/template/assets/images/logo-light.png" /><span class="copy">&copy; Copyright 2025 - Gigaland by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

    </div>

    

    <!-- Javascript Files
    ================================================== -->
    <script src="/template/assets/js/plugins.js"></script>
    <script src="/template/assets/js/designesia.js"></script>


</body>

</html>
