<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title', 'ArtureWoven - NFT Marketplace')</title>
    <link rel="icon" href="/template/assets/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ArtureWoven - NFT Marketplace Website Template" name="description" />
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
    {{--  --}}

</head>
<!--Start of Tawk.to Script-->
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
<body>
    <div id="wrapper">

        <!-- header begin -->
        @include('.home.sections.other-nav')
        <!-- header close -->
        <!-- content begin -->
        {{ $slot }}
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
                                <li><a href="{{ route('explore') }}">All NFTs</a></li>
                                <li><a href="{{ route('explore') }}">Art</a></li>
                                <li><a href="{{ route('explore') }}">Music</a></li>


                                <li><a href="{{ route('explore') }}">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
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

                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="https://madebydesignesia.com/themes/ArtureWoven/blank.php" class="row form-dark"
                                id="form_subscribe" method="post" name="form_subscribe">
                                <div class="text-center col">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                        placeholder="Enter your email" type="text" /> <a href="#" id="btn-subscribe"><i
                                            class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                           <span><a href="mailto:arturewoven@gmail.com?subject=Inquiry&body=Hello%20Arture,%0DI'd%20like%20to%20discuss...">Email arturewoven@gmail.com</a></span>

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
                                        <img alt="" class="f-logo" src="/template/assets/images/arturewovendark.png" /><span
                                            class="copy">&copy; Copyright 2025 - ArtureWoven </span>
                                    </a>
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

    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: "Error!",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "OK"
            });
        @endif
    </script>

</body>

</html>
