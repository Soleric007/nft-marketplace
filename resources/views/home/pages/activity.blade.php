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
            <section id="subheader" class="text-light" data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
                    <div class="relative text-center center-y">
                        <div class="container">
                            <div class="row">

                                <div class="text-center col-md-12">
									<h1>Activity</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
			<section aria-label="section">
				<div class="container">
					<div class="row">

						<div class="col-md-8">
                            <ul class="activity-list">
                                <li class="act_follow">
                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Monica Lucas</h4>
                                        started following <a href="#">Gayle Hicks</a>
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_sale">
                                    <img src="/template/assets/images/items/thumbnail-2.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Deep Sea Phantasy</h4>
                                        1 edition purchased by <a href="#">Stacy Long</a> for 0.001 ETH
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_like">
                                    <img src="/template/assets/images/items/thumbnail-7.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Cute Astronout</h4>
                                        liked by <a href="#">Nicholas Daniels</a>
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_follow">
                                    <img class="lazy" src="/template/assets/images/author/author-2.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Mamie Barnett</h4>
                                        started following <a href="#">Claude Banks</a>
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_offer">
                                    <img src="/template/assets/images/items/thumbnail-5.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Purple Planet</h4>
                                        <a href="#">Franklin Greer</a> offered 0.002 ETH
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_follow">
                                    <img class="lazy" src="/template/assets/images/author/author-3.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Nicholas Daniels</h4>
                                        started following <a href="#">Franklin Greer</a>
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_sale">
                                    <img src="/template/assets/images/items/thumbnail-4.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Two Tigers</h4>
                                        1 edition purchased by <a href="#">Jimmy Wright</a> for 0.02 ETH
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                                <li class="act_like">
                                    <img src="/template/assets/images/items/thumbnail-6.jpg" alt="">
                                    <div class="act_list_text">
                                        <h4>Cute Astronout</h4>
                                        liked by <a href="#">Karla Sharp</a>
                                        <span class="act_list_date">
                                            10/07/2021, 12:40
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <span class="filter__l">Filter</span>
                            <span class="filter__r">Reset</span>
                            <div class="spacer-half"></div>
                            <div class="clearfix"></div>
                            <ul class="activity-filter">
                                <li class="filter_by_sales"><i class="fa fa-shopping-basket"></i>Sales</li>
                                <li class="filter_by_likes"><i class="fa fa-heart"></i>Likes</li>
                                <li class="filter_by_offers"><i class="fa fa-gavel"></i>Offers</li>
                                <li class="filter_by_followings"><i class="fa fa-check"></i>Followings</li>
                            </ul>

                        </div>

					</div>

				</div>
			</section>
			<!-- section close -->

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="footer-light">
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
                                <div class="text-center col">
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
                                        <img alt="" class="f-logo" src="/template/assets/images/logo.png" /><span class="copy">&copy; Copyright 2025 - Gigaland by Designesia</span>
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
