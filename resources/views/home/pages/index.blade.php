<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ArtureWoven - NFT Marketplace | Home</title>

    <link rel="icon" href="/template/assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ArtureWoven - NFT Marketplace " name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="/template/assets/css/colors/scheme-12.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/de-modern.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/coloring-gradient.css" rel="stylesheet" type="text/css" />
    <!-- custom font -->
    <link href="/template/assets/css/custom-font-3.css" rel="stylesheet" type="text/css" />
    {{--  --}}

</head>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/68054f347f5f42190ba77f1b/1ipabqpq8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<body class="switch-scheme">
    <div id="wrapper">
        <!-- header begin -->
        @include('home.sections.index-nav')
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" class="no-top no-bottom mt90 sm-mt-0" aria-label="section">
                <div class="m-5 padding30 br-15 bg-custom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-sm-30">
                                <h1>Explore, collect, and sell extraordinary <span class="text-gradient">NFTs</span>
                                </h1>
                                <p class="lead">
                                    Welcome to the future, you can buy and sell awesome artworks form here. The world
                                    largest digital marketplace for non-fungible tokens.</p>
                                <a href="{{ route('explore') }}" class="btn-main btn-lg">Explore</a>&nbsp;&nbsp;
                                <a href="{{ route('login') }}" class="btn-main btn-lg btn-light">Sell</a>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-carousel">
                                    <div id="item-carousel-big-type-2" class="owl-carousel owl-center"
                                        data-wow-delay="1s">
                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Blue Nomad</span>
                                                    <span class="nft_pic_by">Mamie Barnett</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/max6.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Cytotoxin</span>
                                                    <span class="nft_pic_by">Monica Lucas</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/crs-5.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Diminishable</span>
                                                    <span class="nft_pic_by">Nicholas Daniels</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/max7.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Manganite</span>
                                                    <span class="nft_pic_by">Fred Ryan</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/max23.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>


                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Elutriator</span>
                                                    <span class="nft_pic_by">Lori Hart</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/max22.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="nft_pic mod-b br-15">
                                            <a href="{{ route('collection') }}">
                                                <span class="nft_pic_info">
                                                    <span class="nft_pic_title">Forest Women</span>
                                                    <span class="nft_pic_by">Fred Ryan</span>
                                                </span>

                                                <div class="nft_pic_wrap">
                                                    <img src="/template/assets/images/carousel/max1.jpg"
                                                        class="lazy img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                                    <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" class="mt-20 no-top no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/1.png" alt="" class="mb20">
                                <h4>Metamask</h4>
                            </a>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay=".4s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/2.png" alt="" class="mb20">
                                <h4>Bitski</h4>
                            </a>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay=".6s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/3.png" alt="" class="mb20">
                                <h4>Fortmatic</h4>
                            </a>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay=".8s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/4.png" alt="" class="mb20">
                                <h4>WalletConnect</h4>
                            </a>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay="1s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/5.png" alt="" class="mb20">
                                <h4>Coinbase Wallet</h4>
                            </a>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mb30 wow fadeInRight" data-wow-delay="1.2s">
                            <a class="box-url style-2" href="{{ route('login') }}">
                                <img src="/template/assets/images/wallet/6.png" alt="" class="mb20">
                                <h4>Arkane</h4>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <section id="section-collections" class="no-top no-bottom">
                <div class="m-5 mt-0 mb-0 padding30 br-15 bg-custom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Top Sellers in 30 days</h2>
                                {{-- <div id="top_sellers_filter" class="dropdown alt-2">
                                    <a href="#" class="btn-selector">30 days</a>
                                    <ul>
                                        <li class="active"><span>30 days</span></li>
                                        <li><span>1 day</span></li>
                                        <li><span>7 days</span></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="col-md-12 wow fadeIn">
                                <ol class="author_list alt-2 d-col-3">
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-1.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Monica Lucas</a>
                                            <span>@monica</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>3.2 ETH</span>
                                            $4,823
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-2.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Mamie Barnett</a>
                                            <span>@mamieb</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>2.8 ETH</span>
                                            $4,210
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-3.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Nicholas Daniels</a>
                                            <span>@nicdaniels</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>2.5 ETH</span>
                                            $3,757
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-4.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Lori Hart</a>
                                            <span>@lorihart</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>2.2 ETH</span>
                                            $3,300
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-5.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Jimmy Wright</a>
                                            <span>@thejimmy</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>1.9 ETH</span>
                                            $2,846
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-6.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Karla Sharp</a>
                                            <span>@karlasharp</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>1.6 ETH</span>
                                            $2,395
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-7.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Gayle Hicks</a>
                                            <span>@gayleee</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>1.5 ETH</span>
                                            $2,244
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-8.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Claude Banks</a>
                                            <span>@claudebanks</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>1.3 ETH</span>
                                            $1,945
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-9.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Franklin Greer</a>
                                            <span>@franklin</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.9 ETH</span>
                                            $1,347
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-10.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Stacy Long</a>
                                            <span>@stacylong</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.8 ETH</span>
                                            $1,197
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-11.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Ida Chapman</a>
                                            <span>@chapman</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.6</span>
                                            $898
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-12.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Fred Ryan</a>
                                            <span>@fredryan</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.4 ETH</span>
                                            $599
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-13.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Ramon Tipps</a>
                                            <span>@ramontipps</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.3 ETH</span>
                                            $450
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-14.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Norene Jette</a>
                                            <span>@jette</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.2 ETH</span>
                                            $300
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author_list_pp">
                                            <a href="">
                                                <img class="lazy" src="/template/assets/images/author/author-15.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info">
                                            <a href="">Chin Haward</a>
                                            <span>@chinhaward</span>
                                        </div>
                                        <div class="author_list_info_e">
                                            <span>0.2 ETH</span>
                                            $300
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="section-trending" class="pt40 no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Trending NFTs</h2>
                            <div id="items-carousel-s2" class="owl-carousel wow fadeIn">
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="de_countdown" data-year="2025" data-month="5" data-day="8"
                                            data-hour="8"></div>
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: ArtureWoven">
                                                <img class="lazy" src="/template/assets/images/author/author-4.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max13.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Pink fragrant</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.09 ETH<span>1/14</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>94</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: Stacy Long">
                                                <img class="lazy" src="/template/assets/images/author/author-10.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max25.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Dendroclastic</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.06 ETH<span>1/22</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>80</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="de_countdown" data-year="2025" data-month="5" data-day="12"
                                            data-hour="8"></div>
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: Ida Chapman">
                                                <img class="lazy" src="/template/assets/images/author/author-11.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max24.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Masterling</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.05 ETH<span>1/11</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>97</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: Fred Ryan">
                                                <img class="lazy" src="/template/assets/images/author/author-12.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max18.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Blue Planet</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.02 ETH<span>1/15</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>73</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: Franklin Greer">
                                                <img class="lazy" src="/template/assets/images/author/author-9.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max29.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Superpious</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.06 ETH<span>1/20</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>26</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- nft item begin -->
                                <div class="d-item">
                                    <div class="nft__item s2">
                                        <div class="de_countdown" data-year="2025" data-month="5" data-day="6"
                                            data-hour="8"></div>
                                        <div class="author_list_pp">
                                            <a href="" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Creator: Monica Lucas">
                                                <img class="lazy" src="/template/assets/images/author/author-1.jpg"
                                                    alt="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                        <div class="nft__item_wrap">
                                            <div class="nft__item_extra">
                                                <div class="nft__item_buttons">
                                                    <button data-bs-toggle="modal" data-bs-target="#buy_now">Buy
                                                        Now</button>
                                                    <button data-bs-toggle="modal" data-bs-target="#place_a_bid">Place a
                                                        Bid</button>
                                                    <div class="nft__item_share">
                                                        <h4>Share</h4>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes"
                                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                        <a
                                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i
                                                                class="fa fa-envelope fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="">
                                                <div class="d-placeholder"></div>
                                                <img src="/template/assets/images/items/max17.jpg"
                                                    class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="">
                                                <h4>Delectus Antiendotoxin</h4>
                                            </a>
                                            <div class="nft__item_click">
                                                <span></span>
                                            </div>
                                            <div class="nft__item_price">
                                                0.08 ETH<span>1/20</span>
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>50</span>
                                            </div>
                                        </div>
                                    </div>
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
                            You are about to purchase a <b>Diminishable #108</b> from <b>Monica Lucas</b>
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
                            You are about to place a bid for <b>Diminishable #108</b> from <b>Monica Lucas</b>
                            <div class="spacer-single"></div>
                            <h6>Your bid (ETH)</h6>
                            <input type="text" name="bid_value" id="bid_value" class="form-control"
                                placeholder="Enter bid" />
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
                            <a href="{{ route('wallet') }}" target="_blank" class="btn-main btn-fullwidth">Place a
                                bid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Get the latest updates</h5>
                            <p>Signup for our newsletter to get the latest updates in your inbox.</p>
                            <form action="" class="row form-dark"
                                id="form_subscribe" method="post" name="form_subscribe">
                                <div class="text-center col">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                        placeholder="Enter your email" type="text" /> <a href="#" id="btn-subscribe"><i
                                            class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-xs-1">
                                <div class="widget">
                                    <h5>Marketplace</h5>
                                    <ul>
                                        <li><a href="{{ route('explore') }}">All NFTs</a></li>
                                        <li><a href="{{ route('explore') }}">Art</a></li>
                                        <li><a href="{{ route('explore') }}">Music</a></li>


                                        <li><a href="{{ route('explore') }}">Collectibles</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-xs-1">
                                <div class="widget">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li><a href="{{ route('login')}}">Login</a></li>
                                        <li><a href="{{ route('register')}}">Register</a></li>
                                        <li><a href="{{ route('wallet')}}">Wallet</a></li>
                                        <li><a href="{{ route('create')}}">Create NFT</a></li>
                                        <li><a href="{{ route('wallet')}}">Connect Wallet</a></li>
                                        <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <a href="{{ route('index') }}">
                                <span class="copy">&copy; Copyright 2025 - ArtureWoven </span>
                            </a>
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
