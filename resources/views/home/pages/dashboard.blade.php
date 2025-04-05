<x-home-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">My Dashboard</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section class="px-4 lg:px-[10rem]" id="section-main" aria-label="section">
            <div class="max-w-6xl mx-auto p-6">
                <!-- User Details Section -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <div class="flex items-center space-x-6">
                        <img src="{{asset('template/assets/images/default.jpeg')}}" alt="Profile Image"
                            class="w-16 h-16 rounded-full border-2 border-indigo-600">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">{{Auth::user()->name}}</h2>
                            <p class="text-gray-600">{{Auth::user()->email}}</p>
                            <p class="text-gray-600">Wallet: {{Auth::user()->wallet ? Auth::user()->wallet : 'Not Set'}}
                            </p>
                            <p class="text-gray-600">Phone: {{Auth::user()->phone}}</p>
                        </div>
                    </div>
                </div>

                <!-- Ethereum Balance & Actions -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-900">Ethereum Balance</h2>
                        <p class="text-indigo-600 text-xl font-bold">
                            {{Auth::user()->balance ? Auth::user()->balance : '0.25' }}ETH
                        </p>
                    </div>
                    <div class="mt-4 flex space-x-4">
                        <a href="{{route('wallet')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Connect
                            Wallet</a>
                        <a href='{{route('create')}}' class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Create
                            NFT</a>
                    </div>
                </div>

                <!-- NFTs Section -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Your NFTs (0)</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- NFT Card Example -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <img src="{{asset('template/assets/images/default.jpeg')}}" alt="NFT Image"
                                class="w-full h-40 object-cover rounded-lg">
                            <h3 class="text-lg font-semibold mt-2">NFT Title</h3>
                            <p class="text-gray-600">Price: 0.1 ETH</p>
                            <span class="bg-green-500 text-white px-2 py-1 text-xs rounded">Minted</span>
                            <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded-lg w-full">Mint NFT</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</x-home-layout>