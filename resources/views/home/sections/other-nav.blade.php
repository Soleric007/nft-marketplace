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
                                    <img alt="" class="logo" src="/template/assets/images/lightwovenlight.png" />
                                    <img alt="" class="logo-2" src="/template/assets/images/lightwoven.png" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <form action="{{ route('nfts.index') }}" method="GET">
                                <input id="quick_search" class="xs-hide" name="search" placeholder="Search item here..."
                                    type="text" value="{{ request('search') }}" />
                            </form>
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
                                <a href="#">User<span></span></a>
                                <ul>
                                    <li><a href="{{ route('wallet') }}">Wallet</a></li>
                                    <li><a href="{{ route('create') }}">Create NFT</a></li>
                                    @if (!Auth::user())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                </ul>
                            </li>

                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            @auth
                                <!-- Check if user is authenticated -->
                                <!-- If user is logged in, show Profile menu -->
                                <li>
                                    <a href="#">Profile <span></span></a>
                                    <ul>
                                        <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> My
                                                Profile</a></li>
                                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i> My Dashboard</a>
                                        </li>


                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="fa fa-sign-out"></i> Sign out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>

                        <div class="menu_side_area">
                            <a href="{{ route('wallet') }}" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i>
                                <span>Connect Wallet</span>
                            </a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
