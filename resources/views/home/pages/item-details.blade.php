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
            <header class="transparent header-light scroll-light border-bottom">
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


            <section id="nft-item-details" aria-label="section" class="sm-mt-0">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-md-6 text-center">
                            <div class="nft-image-wrapper">
                                <img src="/template/assets/images/items/big-4.jpg" class="image-autosize img-fluid img-rounded mb-sm-30" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item_info">
                                Auctions ends in <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                                <h2>AnimeSailorClub #304</h2>
                                <div class="item_info_counts">
                                    <div class="item_info_type"><i class="fa fa-image"></i>Art</div>
                                    <div class="item_info_views"><i class="fa fa-eye"></i>250</div>
                                    <div class="item_info_like"><i class="fa fa-heart"></i>18</div>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                <div class="d-flex flex-row">
                                    <div class="mr40">
                                        <h6>Creator</h6>
                                        <div class="item_author">
                                            <div class="author_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="author_list_info">
                                                <a href="{{ route('author') }}">Monica Lucas</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6>Collection</h6>
                                        <div class="item_author">
                                            <div class="author_list_pp">
                                                <a href="{{ route('collection') }}">
                                                    <img class="lazy" src="/template/assets/images/collections/coll-thumbnail-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="author_list_info">
                                                <a href="{{ route('collection') }}">AnimeSailorClub</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="spacer-40"></div>

                                <div class="de_tab tab_simple">

                                <ul class="de_nav">
                                    <li class="active"><span>Details</span></li>
                                    <li><span>Bids</span></li>
                                    <li><span>History</span></li>
                                </ul>

                                <div class="de_tab_content">
                                    <div class="tab-1">
                                        <h6>Owner</h6>
                                        <div class="item_author">
                                            <div class="author_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-10.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="author_list_info">
                                                <a href="{{ route('author') }}">Stacy Long</a>
                                            </div>
                                        </div>

                                        <div class="spacer-40"></div>
                                        <h6>Properties</h6>
                                        <div class="row gx-2">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Background</h5>
                                                    <h4>Yellowish Sky</h4>
                                                    <span>85% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Eyes</h5>
                                                    <h4>Purple Eyes</h4>
                                                    <span>14% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Nose</h5>
                                                    <h4>Small Nose</h4>
                                                    <span>45% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Mouth</h5>
                                                    <h4>Smile Red Lip</h4>
                                                    <span>61% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Neck</h5>
                                                    <h4>Pink Ribbon</h4>
                                                    <span>27% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Hair</h5>
                                                    <h4>Pink Short</h4>
                                                    <span>35% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Accessories</h5>
                                                    <h4>Heart Necklace</h4>
                                                    <span>33% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Hat</h5>
                                                    <h4>Cute Panda</h4>
                                                    <span>62% have this trait</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <a href="#" class="nft_attr">
                                                    <h5>Clothes</h5>
                                                    <h4>Casual Purple</h4>
                                                    <span>78% have this trait</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="spacer-30"></div>
                                    </div>

                                    <div class="tab-2">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-2.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-3.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-4.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-3">
                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-5.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Jimmy Wright</b> at 6/14/2021, 6:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid accepted <b>0.005 ETH</b>
                                                <span>by <b>Monica Lucas</b> at 6/15/2021, 3:20 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-2.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.005 ETH</b>
                                                <span>by <b>Mamie Barnett</b> at 6/14/2021, 5:40 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-3.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.004 ETH</b>
                                                <span>by <b>Nicholas Daniels</b> at 6/13/2021, 5:03 AM</span>
                                            </div>
                                        </div>

                                        <div class="p_list">
                                            <div class="p_list_pp">
                                                <a href="{{ route('author') }}">
                                                    <img class="lazy" src="/template/assets/images/author/author-4.jpg" alt="">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </div>
                                            <div class="p_list_info">
                                                Bid <b>0.003 ETH</b>
                                                <span>by <b>Lori Hart</b> at 6/12/2021, 12:57 AM</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="spacer-10"></div>

                                <h6>Price</h6>
                                <div class="nft-item-price"><img src="/template/assets/images/misc/ethereum.svg" alt=""><span>0.059</span>($253.67)</div>

                                <!-- Button trigger modal -->
                                <a href="#" class="btn-main btn-lg" data-bs-toggle="modal" data-bs-target="#buy_now">
                                  Buy Now
                                </a>
                                &nbsp;
                                <a href="#" class="btn-main btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#place_a_bid">
                                  Place a Bid
                                </a>

                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <!-- buy now -->
        <div class="modal fade" id="buy_now" tabindex="-1" aria-labelledby="buy_now" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="p-3 form-border">
                    <h3>Checkout</h3>
                    You are about to purchase a <b>AnimeSailorClub #304</b> from <b>Monica Lucas</b>
                    <div class="spacer-single"></div>
                    <h6>Enter quantity. <span class="id-color-2">10 available</span></h6>
                    <input type="text" name="buy_now_qty" id="buy_now_qty" class="form-control" value="1" />
                    <div class="spacer-single"></div>
                    <div class="de-flex">
                        <div>Your balance</div>
                        <div><b>10.67856 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Service fee 2.5%</div>
                        <div><b>0.00325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>You will pay</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="spacer-single"></div>
                    <a href="{{ route('wallet') }}" target="_blank" class="btn-main btn-fullwidth">Add funds</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- place a bid -->
        <div class="modal fade" id="place_a_bid" tabindex="-1" aria-labelledby="place_a_bid" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="p-3 form-border">
                    <h3>Place a Bid</h3>
                    You are about to place a bid for <b>AnimeSailorClub #304</b> from <b>Monica Lucas</b>
                    <div class="spacer-single"></div>
                    <h6>Your bid (ETH)</h6>
                    <input type="text" name="bid_value" id="bid_value" class="form-control" placeholder="Enter bid" />
                    <div class="spacer-single"></div>
                    <h6>Enter quantity. <span class="id-color-2">10 available</span></h6>
                    <input type="text" name="bid_qty" id="bid_qty" class="form-control" value="1" />
                    <div class="spacer-single"></div>
                    <div class="de-flex">
                        <div>Your bidding balance</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Your balance</div>
                        <div><b>10.67856 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>Service fee 2.5%</div>
                        <div><b>0.00325 ETH</b></div>
                    </div>
                    <div class="de-flex">
                        <div>You will pay</div>
                        <div><b>0.013325 ETH</b></div>
                    </div>
                    <div class="spacer-single"></div>
                    <a href="{{ route('wallet') }}" target="_blank" class="btn-main btn-fullwidth">Place a bid</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#" id="back-to-top"></a>

    </div>

    

    <!-- Javascript Files
    ================================================== -->
    <script src="/template/assets/js/plugins.js"></script>
    <script src="/template/assets/js/designesia.js"></script>

</body>

</html>
