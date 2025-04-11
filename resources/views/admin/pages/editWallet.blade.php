<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Edit Wallet</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <form action="{{ route('admin.wallets.update', $wallet->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Wallet Address</label>
                            <input type="text" name="wallet_address" value="{{ $wallet->wallet_address }}"
                                class="w-full p-2 border rounded-lg">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Balance</label>
                            <input type="number" step="0.01" name="balance" value="{{ $wallet->balance }}"
                                class="w-full p-2 border rounded-lg">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Proof of Payment</label>
                            @if($wallet->proof_of_payment)
                                <p class="mb-2">
                                    <a href="{{ asset('storage/' . $wallet->proof_of_payment) }}" target="_blank"
                                        class="text-blue-500 underline">View Current Proof</a>
                                </p>
                            @endif
                            <input type="file" name="proof_of_payment" class="w-full p-2 border rounded-lg">
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Update Wallet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © DigitalVault.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Soleric
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</x-ad-layout>

<!-- AJAX Script for Updating Mint Status -->
