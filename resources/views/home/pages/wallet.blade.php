@section('title', 'Choose Wallet')
<x-home-layout>


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Wallet</h1>
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
                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <span class="box-url-label">Most Popular</span>
                            <img src="/template/assets/images/wallet/1.png" alt="" class="mb20">
                            <h4>Metamask</h4>
                            <p>Start exploring blockchain applications in seconds. Trusted by over 1 million users
                                worldwide.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <img src="/template/assets/images/wallet/binanceapp.png" alt="" class="mb20">
                            <h4>Binance</h4>
                            <p>Binance connects communities, creators and brands through unique, ownable digital content.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <img src="/template/assets/images/wallet/trust.png" alt="" class="mb20">
                            <h4>Trust Wallet</h4>
                            <p>Let users access your Ethereum app from anywhere. No more browser extensions.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <img src="/template/assets/images/wallet/bitget.png" alt="" class="mb20">
                            <h4>Bitget Wallet</h4>
                            <p>Open source protocol for connecting decentralised applications to mobile wallets.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <img src="/template/assets/images/wallet/5.png" alt="" class="mb20">
                            <h4>Coinbase Wallet</h4>
                            <p>The easiest and most secure crypto wallet. ... No Coinbase account required.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 mb30">
                        <a class="box-url" href="{{ route('connect.wallet') }}">
                            <img src="/template/assets/images/wallet/phantom.png" alt="" class="mb20">
                            <h4>Phantom</h4>
                            <p>Make it easy to create blockchain applications with secure wallets solutions.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-home-layout>
