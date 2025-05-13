<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">User Created NFTs</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                                    <th class="px-4 py-2 border">#</th>
                                    <th class="px-4 py-2 border">Image</th>
                                    <th class="px-4 py-2 border">Title</th>
                                    <th class="px-4 py-2 border">Price</th>
                                    <th class="px-4 py-2 border">Creator</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border">Miniting PoP</th>
                                    <th class="px-4 py-2 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($nfts as $index => $nft)
                                                                <tr class="text-center border">
                                                                    <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                                                    <td class="px-4 py-2 border">
                                                                        <img src="{{ asset('storage/' . $nft->file_path) }}" alt="NFT Image"
                                                                            class="w-16 h-16 object-cover rounded-md">
                                                                    </td>
                                                                    <td class="px-4 py-2 border">{{ $nft->title }}</td>
                                                                    <td class="px-4 py-2 border">{{ number_format($nft->price, 2) }} ETH</td>
                                                                    <td class="px-4 py-2 border">{{ $nft->user->name }}</td>
                                                                    <td class="px-4 py-2 border">
                                                                        <span class="px-3 py-1 rounded-full text-white text-xs
                                    {{ $nft->status === 'minted' ? 'bg-green-500' : ($nft->status === 'pending' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                                                            @if($nft->status === 'minted')
                                                                                Minted
                                                                            @elseif($nft->status === 'pending')
                                                                                Pending
                                                                            @else
                                                                                Not Minted
                                                                            @endif
                                                                        </span>

                                                                    </td>
                                                                    <td class="px-4 py-2 border">
                                                                        <a href="{{ asset('storage/' . $nft->mint_proof_of_payment) }}" target="_blank"
                                                                            class="text-blue-500 underline">View Proof</a>
                                                                    </td>
                                                                    <td class="px-4 py-2 border">
                                                                        {{-- <span>
                                                                            @if($nft->status === 'not_minted' || $nft->status === 'pending')
                                                                            <form action="{{route('admin.nfts.mint', $nft->id)}}" method="post">
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="mint-nft-btn block bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded">
                                                                                    Mint NFT
                                                                                </button>
                                                                            </form>
                                                                            @else
                                                                            <span class="text-gray-500 text-xs">Already Minted</span>
                                                                            @endif
                                                                        </span> --}}
                                                                        <a href="{{ route('admin.nfts.edit', $nft->id) }}"
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
                                        <td colspan="7" class="text-center py-4 text-gray-500">No NFTs found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $nfts->links() }}
                </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.mint-nft-btn').forEach(button => {
            button.addEventListener('click', function () {
                let nftId = this.getAttribute('data-id');

                fetch(`/admin/nfts/mint/${nftId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert('Something went wrong!');
                        }
                    });
            });
        });
    });
</script>