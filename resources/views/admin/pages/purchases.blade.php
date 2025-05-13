<x-ad-layout>


    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">NFT purchases</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                                    <th class="px-4 py-2 border">#</th>
                                    <th class="px-4 py-2 border">User</th>
                                    {{-- <th class="px-4 py-2 border">NFT</th> --}}
                                    <th class="px-4 py-2 border">Is Verified</th>
                                    <th class="px-4 py-2 border">Proof of Payment</th>
                                    {{-- <th class="px-4 py-2 border">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($purchases as $index => $purchase)
                                    <tr class="text-center border">
                                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 border">{{ $purchase->user->name }}</td>
                                        {{-- <td class="px-4 py-2 border">{{ $purchase->artNft->price }}</td> --}}
                                        <td class="px-4 py-2 border">{{ $purchase->is_verified ? $purchase->is_verified : 'false' }}</td>
                                        <td class="px-4 py-2 border">
                                            @if($purchase->proof_of_payment)
                                                <a href="{{ asset('storage/' . $purchase->proof_of_payment) }}" target="_blank"
                                                    class="text-blue-500 underline">View Proof</a>
                                            @else
                                                <span class="text-gray-500">No Proof</span>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-gray-500">No Purchases Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $purchases->links() }}
                </div>


                <!--end row-->

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
                        </script> © ArtureWoven.
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
