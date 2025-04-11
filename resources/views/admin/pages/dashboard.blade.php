<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto p-6">

                <h2 class="text-2xl font-bold mb-4">Admin Dashboard</h2>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                        <p class="text-2xl font-bold">{{ $totalUsers }}</p>
                    </div>

                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-700">Total NFTs</h3>
                        <p class="text-2xl font-bold">{{ $totalNFTs }}</p>
                    </div>

                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-700">Total Wallets Created</h3>
                        <p class="text-2xl font-bold">{{ $totalWallets }}</p>
                    </div>

                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-700">Total Deposits</h3>
                        <p class="text-2xl font-bold">{{ number_format($totalDeposits, 2) }} ETH</p>
                    </div>

                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-700">Total Withdrawals</h3>
                        <p class="text-2xl font-bold">{{ number_format($totalWithdrawals, 2) }} ETH</p>
                    </div>

                </div>

                <!-- Recent NFTs Created -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4">Recent NFTs Created</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow rounded-lg">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Title</th>
                                    <th class="py-3 px-6 text-left">Creator</th>
                                    <th class="py-3 px-6 text-left">Price</th>
                                    <th class="py-3 px-6 text-left">Created At</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($recentNFTs as $nft)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left">{{ $nft->title }}</td>
                                        <td class="py-3 px-6 text-left">{{ $nft->user->name }}</td>
                                        <td class="py-3 px-6 text-left">{{ number_format($nft->price, 2) }} ETH</td>
                                        <td class="py-3 px-6 text-left">{{ $nft->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @if ($recentNFTs->isEmpty())
                            <p class="text-center text-gray-500 mt-4">No recent NFTs created.</p>
                        @endif
                    </div>
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
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Soleric & ChinexTech
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
