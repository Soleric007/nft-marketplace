@section('title', 'Explore')
<x-home-layout>


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img class="jarallax-img" src="/template/assets/images/background/subheader.jpg" alt="" />
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Explore</h1>
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
                    <div class="col-lg-12">

                        <div class="items_filter">
                            <form action="{{ route('explore') }}" method="GET" class="form-dark">
                                <div class="row align-items-center justify-content-center gy-3">
                                    {{-- Search Input --}}
                                    <div class="col-md-5">
                                        <input class="form-control form-control-lg" name="search"
                                            value="{{ request('search') }}" placeholder="Search item here..."
                                            type="text" />
                                    </div>

                                    {{-- Category Dropdown --}}
                                    <div class="col-md-4">
                                        <select name="category" class="form-control form-select form-control-lg">
                                            <option value="explore" {{ request('category') == 'explore' ? 'selected' : '' }}>All categories</option>
                                            <option value="trending" {{ request('category') == 'trending' ? 'selected' : '' }}>Trending</option>
                                        </select>
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="fa fa-search me-2"></i>Filter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    @if($exploreNfts->count() > 0)
                        @foreach ($exploreNfts as $nft)
                            <!-- nft item begin -->
                            <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="nft__item">
                                    {{-- <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8">
                                    </div> --}}
                                    <div class="author_list_pp">
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Creator: {{$nft->creator_name}}">
                                            <img class="lazy" src="{{$nft->creator_image}}" alt="">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                    <div class="nft__item_wrap">
                                        <div class="nft__item_extra">
                                            <div class="nft__item_buttons">


                                            </div>
                                            <div class="nft__item_buttons">
                                                    <a href="{{route('artnft.buy', $nft->id)}}">Buy Now</a>
                                                </div>
                                        </div>
                                        <a href="{{route('artnft.show', $nft->id)}}">
                                            <div class="d-placeholder"></div>
                                            <img src="{{ $nft->image }}" class="nft__item_preview" alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="">
                                            <h4>{{$nft->name}}</h4>
                                        </a>
                                        <div class="nft__item_click">
                                            <span></span>
                                        </div>
                                        <div class="nft__item_price">
                                            {{$nft->price}} ETH<span>{{ $nft->quantity ?? '1' }}/{{ $nft->stock ?? '1' }}</span>
                                        </div>
                                        {{-- <div class="nft__item_action">
                                            <a href="#">Place a bid</a>
                                        </div> --}}
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>{{ $nft->likes ?? 0 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="py-5 text-center col-12">
                            <h4 class="text-muted">No NFTs found matching your search or filter criteria.</h4>
                            <p>Try adjusting your filters or searching with different keywords.</p>
                        </div>
                    @endif
                    <div class="text-center col-md-12">
                        {{ $exploreNfts->links('vendor.pagination.bootstrap-5') }}
                    </div>

                </div>
            </div>
        </section>

        <section aria-label="section" class="minted-nft-section">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-lg-12">
                        <h2 class="minted-title">Minted NFTs</h2>

                        <div class="nft-grid">
                            @forelse($mintedNfts as $nft)
                                <div class="nft-card">
                                    <img src="{{ asset('storage/' . $nft->file_path) }}" alt="{{ $nft->title }}"
                                        class="nft-image">

                                    <div class="nft-creator">
                                        <img src="{{ $nft->user->profile_image ? asset('storage/' . $nft->user->profile_image) : 'template/assets/images/default.jpeg' }}"
                                            alt="{{ $nft->user->name }}" class="creator-image">
                                        <span class="creator-name">{{ $nft->user->name }}</span>
                                    </div>

                                    <div class="nft-content">
                                        <h3 class="nft-title">{{ $nft->title }}</h3>
                                        <p class="nft-description">{{ Str::limit($nft->description, 60) }}</p>
                                        <div class="nft-footer">
                                            <span class="nft-price">{{ $nft->price }} ETH</span>
                                            <a href="{{route('nft.details', $nft->id)}}" class="nft-view-link">View</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="no-nfts">No minted NFTs found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>







    </div>
</x-home-layout>
<style>
    .minted-nft-section {
        padding: 60px 0;
    }

    .minted-title {
        font-size: 32px;
        font-weight: bold;
        color: #4f46e5;
        /* indigo-600 */
        text-align: center;
        margin-bottom: 40px;
    }

    .nft-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 24px;
    }

    .nft-card {
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .nft-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .nft-image {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }

    .nft-content {
        padding: 16px;
    }

    .nft-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    .nft-description {
        font-size: 14px;
        color: #666;
        margin-bottom: 12px;
    }

    .nft-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nft-price {
        font-weight: bold;
        color: #4f46e5;
    }

    .nft-view-link {
        font-size: 14px;
        color: #4f46e5;
        text-decoration: none;
    }

    .nft-view-link:hover {
        text-decoration: underline;
    }

    .no-nfts {
        text-align: center;
        color: #999;
        font-size: 16px;
        grid-column: 1 / -1;
    }

    .nft-creator {
        display: flex;
        align-items: center;
        padding: 12px 16px 0;
        gap: 10px;
    }

    .creator-image {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e5e7eb;
    }

    .creator-name {
        font-size: 14px;
        color: #444;
        font-weight: 500;
    }
</style>
