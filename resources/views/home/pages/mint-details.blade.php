@section('title', 'Mint NFT')
<x-home-layout>
    @vite('resources/css/app.css')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Mint NFT Details</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section aria-label="section">
            {{-- <div class="container">
                <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
                    <h2 class="text-2xl font-bold text-indigo-500 mb-4">Mint NFT: {{ $nft->title }}</h2>
                    <img src="{{ asset('storage/' . $nft->file_path) }}" alt="NFT Image" class="w-full rounded-lg mb-4">
                    <p class="text-lg text-gray-700">Price: <span class="font-semibold">{{ $nft->price }} ETH</span></p>
                    <p class="text-gray-600 mt-2">{{ $nft->description }}</p>

                    <a href="{{ route('nfts.mint.payment', $nft->id) }}"
                        class="block w-full text-center bg-indigo-500 text-white py-2 mt-6 rounded-lg shadow-md hover:bg-indigo-600">
                        Proceed to Payment
                    </a>
                </div>

            </div> --}}
            <div class="container mx-auto px-4 py-8">
                <div class="text-center mb-8">
                    <p class="text-indigo-600 text-lg font-semibold">Mint your NFT to have it show up in the
                        marketplace!</p>
                </div>

                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-indigo-600">You are minting:</h3>
                    <img src="{{ asset('storage/' . $nft->file_path) }}"
                        class="w-32 h-32 mx-auto border-2 border-indigo-500 rounded-lg mt-4 mb-6" alt="NFT Image">

                    <p class="text-lg font-medium text-gray-800 mb-4">NFT Name: <b
                            class="text-indigo-600">{{ $nft->title }}</b></p>
                    <p class="text-lg font-medium text-gray-800 mb-4">NFT Price: <b
                            class="text-indigo-600">{{ $nft->price }} ETH</b></p>
                    <p class="text-md text-gray-600">For the minting process, please proceed below:</p>
                </div>

                <div class="flex justify-center">
                    <form action="" method="post" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg">
                        @csrf
                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-700">Minting Fee</label>
                            <div class="flex items-center mt-2">
                                <input type="text" name="amount" id="amount" value="0.10" readonly
                                    class="w-full p-2 border-2 border-indigo-500 rounded-md text-center text-lg font-semibold text-gray-700" />
                                <span class="ml-2 text-gray-700">ETH</span>
                            </div>
                        </div>

                        <input type="hidden" name="nft_id" value="{{ $nft->id }}">

                        <a href="{{ route('nfts.mint.payment', $nft->id) }}"
                            class="w-full inline-block py-3 px-4 mt-6 bg-indigo-600 text-white rounded-lg text-center font-semibold hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Proceed to Payment</a>
                    </form>
                </div>
            </div>

    </div>
    </div>
    </section>


    </div>
</x-home-layout>
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
