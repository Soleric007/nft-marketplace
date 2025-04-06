<x-home-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Create Single Collectible</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-lg-7 offset-lg-1">
                        <form id="form-create-item" class="form-border" method="post" action="{{ route('nfts.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="field-set">
                                <h5>Upload file</h5>

                                <div class="d-create-file">
                                    <p id="file_name">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</p>
                                    <input type="button" id="get_file" class="btn-main" value="Browse">
                                    <input type="file" name="file" id="upload_file">
                                </div>
                                @error('file')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror

                                <div class="spacer-20"></div>

                                <h5>Choose collection</h5>
                                <p class="p-info">This is the collection where your item will appear.</p>

                                <select name="collection_name" id="item_collection" class="form-control">
                                    <option value="">Select Collection</option>
                                    <option value="Nina Tony collection">Nina Tony Collection</option>
                                    <option value="Light of the world">Light of the World</option>
                                    <option value="Dazzling Earth">Dazzling Earth</option>
                                    <option value="white-throated warbler">White-throated Warbler</option>
                                    <option value="Bird">Bird</option>
                                    <option value="Dove">Dove</option>
                                    <option value="Doggo">Doggo</option>
                                    <option value="Azad meena">Azad Meena</option>
                                    <option value="Gift of Life">Gift of Life</option>
                                    <option value="Future cars collection">Future Cars Collection</option>
                                    <option value="my photography">My Photography</option>
                                    <option value="Gold souls my photo">Gold Souls My Photo</option>
                                    <option value="ARTWORKS">ARTWORKS</option>
                                    <option value="Landscapes">Landscapes</option>
                                    <option value="Land hand">Land Hand</option>
                                    <option value="Home">Home</option>
                                    <option value="Olcay">Olcay</option>
                                    <option value="Wilder wild">Wilder Wild</option>
                                    <option value="Streets">Streets</option>
                                    <option value="Wonderful gift of nature">Wonderful Gift of Nature</option>
                                    <option value="Pinturas art">Pinturas Art</option>
                                    <option value="Paris by Antonin Borie">Paris by Antonin Borie</option>
                                    <option value="YoungseonYou">YoungseonYou</option>
                                </select>
                                @error('collection_name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror

                                <div class="spacer-20"></div>

                                <h5>Title</h5>
                                <input type="text" name="title" id="item_title" class="form-control"
                                    placeholder="e.g. 'Crypto Funk'" />
                                @error('title')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror

                                <h5>Price</h5>
                                <input type="number" name="price" id="item_price" class="form-control"
                                    placeholder="0.00 ETH" />
                                @error('price')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                                <div class="spacer-20"></div>

                                <h5>Description</h5>
                                <textarea data-autoresize name="description" id="item_desc" class="form-control"
                                    placeholder="e.g. 'This is very limited item'"></textarea>
                                @error('description')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                                <h5>NFT Type</h5>
                                <select name="file_type" id="file_type" class="form-control">
                                    <option value="">Select NFT Type</option>
                                    <option value="art">Art</option>
                                    <option value="video">Video</option>
                                    <option value="music">Music</option>
                                    <option value="trading_card_or_collectible">Trading Card or Collectible</option>
                                    <option value="text">Text</option>
                                    <option value="memes">Memes</option>
                                    <option value="domain_name">Domain Name</option>
                                    <option value="virtual_style">Virtual Style</option>
                                    <option value="pdf">PDF</option>
                                </select>
                                @error('file_type')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror

                                <h5>Royalties (%)</h5>
                                <input type="number" name="royalties" id="item_royalties" class="form-control"
                                    placeholder="suggested: 0, 10%, 20%, 30%. Maximum is 70%" />
                                @error('royalties')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                                <div class="spacer-single"></div>

                                <input type="submit" id="submit" class="btn-main" value="Create Item">
                                <div class="spacer-single"></div>
                            </div>
                        </form>
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

{{-- <div class="col-lg-3 col-sm-6 col-xs-12">
    <h5>Preview item</h5>
    <div class="nft__item">
        <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
        <div class="author_list_pp">
            <a href="#">
                <img class="lazy" src="/template/assets/images/author/author-1.jpg" alt="">
                <i class="fa fa-check"></i>
            </a>
        </div>
        <div class="nft__item_wrap">
            <a href="#">
                <img src="/template/assets/images/collections/coll-item-3.jpg" id="get_file_2"
                    class="lazy nft__item_preview" alt="">
            </a>
        </div>
        <div class="nft__item_info">
            <a href="#">
                <h4>Pinky Ocean</h4>
            </a>
            <div class="nft__item_click">
                <span></span>
            </div>
            <div class="nft__item_price">
                0.08 ETH<span>1/20</span>
            </div>
            <div class="nft__item_action">
                <a href="#">Place a bid</a>
            </div>
            <div class="nft__item_like">
                <i class="fa fa-heart"></i><span>50</span>
            </div>
        </div>
    </div>
</div> --}}
