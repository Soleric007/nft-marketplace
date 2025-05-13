@section('title', 'Buy NFT')
<x-home-layout>
    @vite('resources/css/app.css')

    <style>
        .buy-section {
            padding: 3rem 1rem;
            background-color: #f3f4f6;
        }

        .buy-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        @media (min-width: 1024px) {
            .buy-container {
                flex-direction: row;
            }
        }

        .card {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .input-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
        }

        .submit-btn {
            background-color: #4f46e5;
            color: white;
            padding: 0.75rem;
            font-weight: 600;
            border-radius: 0.5rem;
            width: 100%;
            cursor: pointer;
            border: none;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background-color: #4338ca;
        }

        .nft-image {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .qr-code {
            display: flex;
            justify-content: center;
            margin: 1rem 0;
        }

        .qr-code img {
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .wallet-address {
    font-weight: bold;
    text-align: center;
    margin-top: 1rem;
    background-color: #f9fafb;
    padding: 1rem;
    border: 1px dashed #9ca3af;
    border-radius: 0.5rem;
    font-family: monospace;
    word-break: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

    </style>

    <div class="no-bottom no-top" id="content">
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">Buy NFT</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="buy-section">
            <div class="buy-container">
                <!-- Payment Details -->
                <div class="card">
                    <h3>Payment Details</h3>
                    <form action="{{ route('artNfts.purchase.process', $nft->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="input-group">
                            <label>Price</label>
                            <input type="text" readonly value="{{ $nft->price }} ETH">
                        </div>

                        <div class="input-group">
                            <label>Payment Method</label>
                            <select name="payment_method">
                                <option value="crypto">Crypto (ETH)</option>

                            </select>
                        </div>

                        <div class="input-group">
                            <label>Wallet Address to Transfer To</label>
                            <div class="wallet-address">0x66c51220d48ccCA297cC98C51BBFAaC37C416e6e</div>
                        </div>

                        <div class="qr-code">
                            <img src="/template/assets/images/wallet/qrcode.jpeg" alt="QR Code">
                        </div>

                        <div class="input-group">
                            <label for="proof_of_payment">Upload Proof of Payment</label>
                            <input type="file" name="proof_of_payment">
                        </div>
                        <x-input-error :messages="$errors->get('proof_of_payment')" class="mt-2" />


                        <button type="submit" class="submit-btn">Submit Payment</button>
                    </form>
                </div>

                <!-- NFT Summary -->
                <div class="card">
                    <h3>NFT Summary</h3>
                    <div class="mb-4">
                        <img src="{{ asset($nft->image) }}" alt="{{ $nft->name }}" class="nft-image">
                    </div>
                    <p class="mb-1 text-lg font-bold">{{ $nft->name }}</p>
                    <p class="mb-3 text-sm text-gray-500">Created by: <b>{{ $nft->creator_name }}</b></p>
                    <p class="mb-3 text-gray-700">{{ $nft->description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-semibold text-indigo-600">{{ $nft->price }} ETH</span>
                        <span class="text-sm text-gray-500">Qty: {{ $nft->quantity ?? 1 }}/{{ $nft->stock ?? 1 }}</span>
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
