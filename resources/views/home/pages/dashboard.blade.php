@section('title', 'Dashboard')
<x-home-layout>
    @vite('resources/css/app.css')


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">My Dashboard</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="section-main" aria-label="section">
            <div class="container">
                <!-- User Details Section -->
                <div class="user-details">
                    <div class="profile">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset($user->profile_image ? 'storage/' . ($user->profile_image) : 'template/assets/images/default.jpeg') }}"
                                alt="Profile Image" class="profile-image">
                            <div class="user-info">
                                <h2 class="user-name">{{ Auth::user()->name }}</h2>
                                <p class="user-email">Email: {{ Auth::user()->email }}</p>
                                <p class="user-wallet">Wallet:
                                    {{ Auth::user()->wallet->wallet_address ? Auth::user()->wallet->wallet_address : 'Not Set' }}
                                </p>
                                <p class="user-phone">Phone: {{ Auth::user()->phone }}</p>
                                <p class="user-phone">Address: {{ Auth::user()->address }}</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="{{ route('profile') }}" class="action-button">Edit Profile</a>

                        </div>
                    </div>
                </div>

                <!-- Ethereum Balance & Actions -->
                <div class="balance-actions">
                    <div class="balance-info">
                        <h2 class="balance-heading">Ethereum Balance</h2>
                        <p class="balance-amount">
                            {{ $wallet->balance ? $wallet->balance : '0.05' }} ETH
                        </p>
                    </div>
                    <div class="action-buttons">
                        <a href="{{ route('wallet') }}" class="action-button">Connect Wallet</a>
                        <a href="{{ route('create') }}" class="action-button">Create NFT</a>
                        <div class="dropdown-pill" id="moreOptions">
                            <p class="p-1 pl-3 pr-3">
                                <b>More Options </b> <i class="fas fa-chevron-down"></i>
                            </p>

                            <div class="dropdown-content">
                                <!-- Add your dropdown content here -->
                                <a href="{{route('wallet.fund')}}">Fund Account</a>
                                <a href="{{route('withdrawal.wallet')}}">Withdrawal Wallet</a>
                                <a href="{{route('request.withdrawal')}}">Request Withdrawal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NFTs Section -->
                <div class="nfts-section">
                    <h2 class="nfts-heading">Your NFTs ({{ count($nfts) }})</h2>

                    <div class="nft-cards">
                        @forelse($nfts as $nft)
                            <div class="nft-card">
                                <img src="{{ asset('storage/' . $nft->file_path) }}" alt="NFT Image" class="nft-image">
                                <h3 class="nft-title">{{ $nft->title }}</h3>
                                <p class="nft-price">Price: {{ $nft->price }} ETH</p>
                                <div class="nft-status">
                                    <span class="status-badge {{ $nft->status === 'minted' ? 'minted' : 'not-minted' }}">
                                        {{ $nft->status === 'minted' ? 'Minted' : 'Pending' }}
                                    </span>
                                </div>
                                @if($nft->status === 'not_minted')
                                    <a href="{{ route('nfts.mint.details', $nft->id) }}" class="mint-button">Mint NFT</a>
                                @elseif ($nft->status === 'pending')
                                    <span class="text-xs text-gray-500">Minting Pending</span>
                                @elseif ($nft->status === 'minted')
                                    <span class="text-xs text-gray-500">Already Minted</span>
                                @endif
                            </div>
                        @empty
                            <p class="no-nfts">You haven't created any NFTs yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>




    </div>
</x-home-layout>

<style>
    /* Container */
    .container {
        padding: 24px 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* User Details Section */
    .user-details {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 24px;
    }

    .profile {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .profile-image {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        border: 4px solid #4C51BF;
        margin-right: 24px;
    }

    .user-info h2 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #2D3748;
    }

    .user-info p {
        color: #718096;
    }

    /* Ethereum Balance & Actions */
    .balance-actions {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
    }

    .balance-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .balance-heading {
        font-size: 1rem;
        font-weight: 600;
        color: #2D3748;
    }

    .balance-amount {
        font-size: 1.5rem;
        font-weight: 700;
        color: #4C51BF;
    }

    .action-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        align-items: center;
    }

    /* Primary Action Buttons */
    .action-button {
        background-color: #4C51BF;
        /* Indigo-600 */
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        text-align: center;
        text-decoration: none;
        transition: background 0.3s ease-in-out;
    }

    .action-button:hover {
        background-color: #434190;
        /* Darker shade */
    }

    /* More Options Dropdown */
    .dropdown-pill {
        position: relative;
        background-color: #4C51BF;
        /* Indigo-600 */
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }

    .dropdown-pill:hover {
        background-color: #434190;
    }

    /* Dropdown Content */
    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 220px;
        z-index: 100;
        padding: 8px 0;
        overflow: hidden;
    }

    /* Dropdown Links */
    .dropdown-content a {
        display: block;
        padding: 12px 16px;
        color: #333;
        text-decoration: none;
        transition: background 0.3s ease-in-out;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show dropdown on hover */
    .dropdown-pill:hover .dropdown-content {
        display: block;
    }

    /* Show dropdown on click using JavaScript */
    .dropdown-pill.active .dropdown-content {
        display: block;
    }


    /* NFTs Section */
    .nfts-section {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 24px;
    }

    .nfts-heading {
        font-size: 1.25rem;
        font-weight: 600;
        color: #2D3748;
        margin-bottom: 16px;
    }

    .nft-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 24px;
    }

    .nft-card {
        background-color: #F7FAFC;
        padding: 24px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .nft-card:hover {
        transform: scale(1.05);
    }

    .nft-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 16px;
    }

    .nft-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #2D3748;
        margin-bottom: 8px;
    }

    .nft-price {
        color: #718096;
    }

    .nft-status {
        margin-top: 12px;
    }

    .status-badge {
        display: inline-block;
        padding: 4px 8px;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 4px;
        color: white;
    }

    .status-badge.minted {
        background-color: #38A169;
    }

    .status-badge.not-minted {
        background-color: #E53E3E;
    }

    .mint-button {
        display: block;
        text-align: center;
        background-color: #4C51BF;
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        width: 100%;
        margin-top: 16px;
        cursor: pointer;
    }

    .mint-button:hover {
        background-color: #434190;
    }

    .no-nfts {
        color: #718096;
        text-align: center;
        margin-top: 16px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const moreOptions = document.getElementById("moreOptions");

        moreOptions.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevents event from bubbling up
            this.classList.toggle("active");
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", function (event) {
            if (!moreOptions.contains(event.target)) {
                moreOptions.classList.remove("active");
            }
        });
    });

</script>
