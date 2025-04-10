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
                                                {{ $nft->is_minted ? 'bg-green-500' : 'bg-red-500' }}">
                                                {{ $nft->is_minted ? 'Minted' : 'Not Minted' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2 border">
                                            @if(!$nft->is_minted)
                                                <button data-id="{{ $nft->id }}" class="mint-nft-btn bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded">
                                                    Mint NFT
                                                </button>
                                            @else
                                                <span class="text-gray-500 text-xs">Already Minted</span>
                                            @endif
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
                    </script> © Gigaland.
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