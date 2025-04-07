<header class="header-light scroll-light">
    {{-- @vite('resources/css/app.css') --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('index') }}">
                                    <img alt="" class="logo" src="/template/assets/images/logo-7-light.png" />
                                    <img alt="" class="logo-2" src="/template/assets/images/logo-7.png" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide" name="quick_search"
                                placeholder="search item here..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="{{ route('index') }}">Home<span></span></a>
                            </li>
                            <li>
                                <a href="#">Market Place<span></span></a>
                                <ul>
                                    <li><a href="{{ route('explore') }}">Explore</a></li>
                                    <li><a href="{{ route('author') }}">Authors</a></li>
                                    <li><a href="{{ route('activity') }}">Activity</a></li>
                                    <li><a href="{{ route('rankings') }}">Rankings</a></li>
                                </ul>
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
                                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i> My Dashboard</a></li>

                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-white">
                                                    <i class="fa fa-sign-out"></i> Sign out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                        <div class="menu_side_area">
                            <a href="{{ route('wallet') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                            <span href="#" id="switch_scheme">
                                <i class="ss_dark fa fa-moon-o"></i>
                                <i class="ss_light fa fa-sun-o"></i>
                            </span>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
