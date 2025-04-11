@section('title', 'Mint NFT | Upload Proof of Payment')
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
            <div class="container">
                <div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
                    <h2 class="text-2xl font-bold text-indigo-500 mb-4">Upload Payment Proof</h2>
                    <p class="text-lg text-gray-700">You're minting: <span class="font-semibold">{{ $nft->title }}</span></p>
                    <p class="text-gray-600 mt-2">Minting Price: <span class="font-semibold">0.10 ETH</span></p>
                    <div class="bg-gray-100 p-4 rounded-lg my-4 text-center">
                        <p class="text-gray-700 font-semibold">Make a payment to the following wallet address:</p>
                        <input type="text" value="0x205A8743d22c7FCEd4b54D697c3159a1eDCa58dB" readonly
                            class="w-full mt-2 p-3 text-center text-indigo-600 font-semibold border border-indigo-300 rounded-lg bg-indigo-100">
                    </div>

                    <!-- QR Code / Image -->
                    <div class="flex justify-center mb-4">
                        <img src="https://xquisitearts.com/admin/edit-profile/uploads/67802e656cadb.jpeg" alt="QR Code"
                            class="w-40 h-40 object-cover rounded-lg shadow-md">
                    </div>
                    <form action="{{ route('nfts.mint.process', $nft->id) }}" method="POST" enctype="multipart/form-data" class="mt-6">
                        @csrf
                        <label for="proof_of_payment" class="block text-gray-700 font-semibold mb-2">Upload Proof of Payment:</label>
                        <input type="file" name="proof_of_payment" required
                               class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">

                        <button type="submit"
                                class="w-full bg-indigo-500 text-white py-2 mt-4 rounded-lg shadow-md hover:bg-indigo-600">
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
