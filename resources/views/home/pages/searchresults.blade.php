@section('title', 'Explore')
<x-home-layout>


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img class="jarallax-img" src="/template/assets/images/background/subheader.jpg" alt="" />
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Search Results</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        @if($nfts->count())
            <section aria-label="section" class="minted-nft-section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-lg-12">
                            <h2 class="minted-title">Search Results</h2>

                            <div class="nft-grid">
                                @forelse($mintedNfts as $nft)
                                    <div class="nft-card">
                                        <img src="{{ asset('storage/' . $nft->file_path) }}" alt="{{ $nft->title }}"
                                            class="nft-image">

                                        <div class="nft-creator">
                                            <img src="{{ $nft->user->profile_image ? asset('storage/' . $nft->user->profile_image) : 'template/assets/images/default.jpeg' }}"
                                                alt="{{ $nft->user->name }}" class="creator-image">
                                            <span class="creator-name">{{ $nft->user->name }}</span>
                                        </div>

                                        <div class="nft-content">
                                            <h3 class="nft-title">{{ $nft->title }}</h3>
                                            <p class="nft-description">{{ Str::limit($nft->description, 60) }}</p>
                                            <div class="nft-footer">
                                                <span class="nft-price">{{ $nft->price }} ETH</span>
                                                <a href="{{route('nft.details', $nft->id)}}" class="nft-view-link">View</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="no-nfts">No minted NFTs found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{ $nfts->appends(request()->query())->links() }}
        @else
            <p class="mt-5 text-center">No results found.</p>
        @endif
        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-lg-12">

                        <div class="items_filter">
                            <form action="https://madebydesignesia.com/themes/DigitalVault/blank.php"
                                class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                                <div class="text-center col">
                                    <input class="form-control" id="name_1" name="name_1"
                                        placeholder="Search item here..." type="text" /> <a href="#" id="btn-submit"><i
                                            class="fa fa-search bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>

                            <div id="item_category" class="dropdown">
                                <a href="#" class="btn-selector">All categories</a>
                                <ul>
                                    <li class="active"><span>All categories</span></li>
                                    <li><span>Art</span></li>
                                    <li><span>Music</span></li>



                                    <li><span>Collectibles</span></li>


                                </ul>
                            </div>


                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Monica Lucas">
                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max2.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Pinky Ocean</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.08 ETH<span>1/20</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Stacy Long">
                                    <img class="lazy" src="/template/assets/images/author/author-10.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max4.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Deep Sea Phantasy</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.06 ETH<span>1/22</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="14" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Ida Chapman">
                                    <img class="lazy" src="/template/assets/images/author/author-11.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max16.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Rainbow Style</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.05 ETH<span>1/11</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>97</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Fred Ryan">
                                    <img class="lazy" src="/template/assets/images/author/author-12.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/static-4.jpg" class="nft__item_preview"
                                        alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Two Tigers</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.02 ETH<span>1/15</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>73</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Franklin Greer">
                                    <img class="lazy" src="/template/assets/images/author/author-9.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max12.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>The Truth</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.06 ETH<span>1/20</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>26</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="6" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Mamie Barnett">
                                    <img class="lazy" src="/template/assets/images/author/author-2.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max14.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Running Puppets</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.03 ETH<span>1/24</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Nicholas Daniels">
                                    <img class="lazy" src="/template/assets/images/author/author-3.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max26.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>USA Wordmation</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.09 ETH<span>1/25</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>76</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="8" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Lori Hart">
                                    <img class="lazy" src="/template/assets/images/author/author-4.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max19.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Loop Donut</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.09 ETH<span>1/14</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>94</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Jimmy Wright">
                                    <img class="lazy" src="/template/assets/images/author/author-5.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max20.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Lady Copter</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.08 ETH<span>1/21</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>75</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Gayle Hicks">
                                    <img class="lazy" src="/template/assets/images/author/author-7.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max10.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Purple Planet</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.02 ETH<span>1/18</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>93</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Karla Sharp">
                                    <img class="lazy" src="/template/assets/images/author/author-6.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max8.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Oh Yeah!</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.025 ETH<span>1/12</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Claude Banks">
                                    <img class="lazy" src="/template/assets/images/author/author-8.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max9.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>This is Our Story</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.035 ETH<span>1/8</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>21</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Franklin Greer">
                                    <img class="lazy" src="/template/assets/images/author/author-9.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max15.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Pixel World</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.015 ETH<span>1/25</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>46</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Fred Ryan">
                                    <img class="lazy" src="/template/assets/images/author/author-12.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max3.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>I Believe I Can Fly</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.055 ETH<span>1/4</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>54</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Lori Hart">
                                    <img class="lazy" src="/template/assets/images/author/author-4.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max21.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Cute Astronout</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.005 ETH<span>1/30</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>32</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nft item begin -->
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="nft__item">
                            <div class="author_list_pp">
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Creator: Monica Lucas">
                                    <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <div class="nft__item_extra">
                                    <div class="nft__item_buttons">
                                        <button onclick="location.href=''">Buy Now</button>
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
                                    <img src="/template/assets/images/items/max11.jpg" class="nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="">
                                    <h4>Teal Ocean</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.025 ETH<span>1/12</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>24</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center col-md-12">
                        <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                    </div>



                </div>
            </div>
        </section>




        <section aria-label="section" class="minted-nft-section">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-lg-12">
                        <h2 class="minted-title">Minted NFTs</h2>

                        <div class="nft-grid">
                            @forelse($mintedNfts as $nft)
                                <div class="nft-card">
                                    <img src="{{ asset('storage/' . $nft->file_path) }}" alt="{{ $nft->title }}"
                                        class="nft-image">

                                    <div class="nft-creator">
                                        <img src="{{ $nft->user->profile_image ? asset('storage/' . $nft->user->profile_image) : 'template/assets/images/default.jpeg' }}"
                                            alt="{{ $nft->user->name }}" class="creator-image">
                                        <span class="creator-name">{{ $nft->user->name }}</span>
                                    </div>

                                    <div class="nft-content">
                                        <h3 class="nft-title">{{ $nft->title }}</h3>
                                        <p class="nft-description">{{ Str::limit($nft->description, 60) }}</p>
                                        <div class="nft-footer">
                                            <span class="nft-price">{{ $nft->price }} ETH</span>
                                            <a href="{{route('nft.details', $nft->id)}}" class="nft-view-link">View</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="no-nfts">No minted NFTs found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>







    </div>
</x-home-layout>
<style>
    .minted-nft-section {
        padding: 60px 0;
    }

    .minted-title {
        font-size: 32px;
        font-weight: bold;
        color: #4f46e5;
        /* indigo-600 */
        text-align: center;
        margin-bottom: 40px;
    }

    .nft-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 24px;
    }

    .nft-card {
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .nft-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .nft-image {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }

    .nft-content {
        padding: 16px;
    }

    .nft-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    .nft-description {
        font-size: 14px;
        color: #666;
        margin-bottom: 12px;
    }

    .nft-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nft-price {
        font-weight: bold;
        color: #4f46e5;
    }

    .nft-view-link {
        font-size: 14px;
        color: #4f46e5;
        text-decoration: none;
    }

    .nft-view-link:hover {
        text-decoration: underline;
    }

    .no-nfts {
        text-align: center;
        color: #999;
        font-size: 16px;
        grid-column: 1 / -1;
    }

    .nft-creator {
        display: flex;
        align-items: center;
        padding: 12px 16px 0;
        gap: 10px;
    }

    .creator-image {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e5e7eb;
    }

    .creator-name {
        font-size: 14px;
        color: #444;
        font-weight: 500;
    }
</style>
