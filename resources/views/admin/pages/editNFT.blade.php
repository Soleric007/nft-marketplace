<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container mx-auto px-4 py-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Edit NFT</h2>

                <div class="bg-white shadow-md rounded-lg p-6">
                    <form action="{{ route('admin.nft.update', $nft->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Title</label>
                            <input type="text" name="title" value="{{ old('title', $nft->title) }}"
                                class="w-full p-2 border rounded-lg">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Price (ETH)</label>
                            <input type="number" step="0.01" name="price" value="{{ old('price', $nft->price) }}"
                                class="w-full p-2 border rounded-lg">
                        </div>

                        

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Status</label>
                            <select name="status" class="w-full p-2 border rounded-lg">
                                <option value="minted" {{ $nft->status === 'minted' ? 'selected' : '' }}>Minted</option>
                                <option value="pending" {{ $nft->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="not_minted" {{ $nft->status === 'not_minted' ? 'selected' : '' }}>Not Minted</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">NFT Image</label>
                            @if($nft->file_path)
                                <p class="mb-2">
                                    <img src="{{ asset('storage/' . $nft->file_path) }}" alt="NFT Image" class="h-20">
                                </p>
                            @endif
                            <input type="file" name="image" class="w-full p-2 border rounded-lg">
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Update NFT
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © ArtureWoven.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Soleric
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
