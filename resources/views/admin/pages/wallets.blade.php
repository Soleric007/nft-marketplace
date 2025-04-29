<x-ad-layout>


    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">User Wallets</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                                    <th class="px-4 py-2 border">#</th>
                                    <th class="px-4 py-2 border">User</th>
                                    <th class="px-4 py-2 border">Wallet Address</th>
                                    <th class="px-4 py-2 border">Balance</th>
                                    <th class="px-4 py-2 border">Proof of Payment</th>
                                    <th class="px-4 py-2 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wallets as $index => $wallet)
                                    <tr class="text-center border">
                                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 border">{{ $wallet->user->name }}</td>
                                        <td class="px-4 py-2 border">{{ $wallet->wallet_address }}</td>
                                        <td class="px-4 py-2 border">{{ number_format($wallet->balance, 2) }} ETH</td>
                                        <td class="px-4 py-2 border">
                                            @if($wallet->proof_of_payment)
                                                <a href="{{ asset('storage/' . $wallet->proof_of_payment) }}" target="_blank"
                                                    class="text-blue-500 underline">View Proof</a>
                                            @else
                                                <span class="text-gray-500">No Proof</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ route('admin.wallets.edit', $wallet->id) }}"
                                                class=" text-blue-600 inline-block bg-blue-500 text-xs font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-gray-500">No Wallets Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $wallets->links() }}
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
                        </script> © LightWoven.
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
