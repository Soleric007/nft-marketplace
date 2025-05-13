@section('title', 'Mint NFT | Upload Proof of Payment')
<x-home-layout>
    @vite('resources/css/app.css')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
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
            <div class="container">
                <div class="max-w-lg p-6 mx-auto mt-10 bg-white rounded-lg shadow-lg">
                    <h2 class="mb-4 text-2xl font-bold text-indigo-500">Upload Payment Proof</h2>
                    <p class="text-lg text-gray-700">You're minting: <span class="font-semibold">{{ $nft->title }}</span></p>
                    <p class="mt-2 text-gray-600">Minting Price: <span class="font-semibold">0.18 ETH</span></p>
                    <div class="p-4 my-4 text-center bg-gray-100 rounded-lg">
                        <p class="font-semibold text-gray-700">Make a payment to the following wallet address:</p>
                        <input type="text" value="0x66c51220d48ccCA297cC98C51BBFAaC37C416e6e" readonly
                            class="w-full p-3 mt-2 font-semibold text-center text-indigo-600 bg-indigo-100 border border-indigo-300 rounded-lg">
                    </div>

                    <!-- QR Code / Image -->
                    <div class="flex justify-center mb-4">
                        <img src="/template/assets/images/wallet/qrcode.jpeg" alt="QR Code"
                            class="object-cover w-40 h-40 rounded-lg shadow-md">
                    </div>
                    <form action="{{ route('nfts.mint.process', $nft->id) }}" method="POST" enctype="multipart/form-data" class="mt-6">
                        @csrf
                        <label for="proof_of_payment" class="block mb-2 font-semibold text-gray-700">Upload Proof of Payment:</label>
                        <input type="file" name="proof_of_payment" required
                               class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">

                        <button type="submit"
                                class="w-full py-2 mt-4 text-white bg-indigo-500 rounded-lg shadow-md hover:bg-indigo-600">
                            Submit Payment
                        </button>
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
