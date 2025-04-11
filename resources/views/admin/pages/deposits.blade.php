<x-ad-layout>


    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">User Deposits</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                                    <th class="px-4 py-2 border">#</th>
                                    <th class="px-4 py-2 border">User</th>
                                    <th class="px-4 py-2 border">Amount</th>
                                    <th class="px-4 py-2 border">Proof of Payment</th>
                                    <th class="px-4 py-2 border">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($deposits as $index => $deposit)
                                    <tr class="text-center border">
                                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 border">{{ $deposit->user->name }}</td>
                                        <td class="px-4 py-2 border">{{ number_format($deposit->amount, 2) }} ETH</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ asset('storage/' . $deposit->proof_of_payment) }}" target="_blank"
                                                class="text-blue-500 underline">View Proof</a>
                                        </td>
                                        <td class="px-4 py-2 border">{{ $deposit->created_at->format('d M Y, h:i A') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500">No Deposits Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $deposits->links() }}
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
