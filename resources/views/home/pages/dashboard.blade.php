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
                                <div class="flex items-center justify-between">
                                    <p class="nft-price">Price: {{ $nft->price }} ETH</p>
                                    <div>
                                        <a class="text-indigo-600" href="{{route('nft.details', $nft->id)}}">View</a>
                                    </div>
                                </div>
                                <div class="nft-status">
                                    <span class="status-badge {{ $nft->status === 'minted' ? 'minted' : 'not-minted' }}">
                                        {{ $nft->status === 'minted' ? 'Minted' : 'Not minted' }}
                                    </span>
                                </div>
                                @if($nft->status === 'not_minted')
                                    <a href="{{ route('nfts.mint.details', $nft->id) }}" class="mint-button">Mint NFT</a>
                                    <span href="{{ route('nfts.mint.details', $nft->id) }}" class="mint-button">Proceed to pay gas fee of 0.18ETH to mint your image as an NFT</span>
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

/* Base styling for user details */
.user-details {
  margin-bottom: 20px;
  padding: 20px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.profile {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
}

.profile-image {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
}

.user-info {
  flex: 1;
  min-width: 200px;
}

.user-name {
  font-size: 1.5rem;
  margin-bottom: 5px;
}

.user-email, .user-wallet, .user-phone {
  margin: 5px 0;
  word-break: break-word;
}

/* Balance and actions section */
.balance-actions {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.balance-info {
  flex: 0 0 auto;
}

.balance-heading {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.balance-amount {
  font-size: 2rem;
  font-weight: bold;
  color: #5557be;
  margin-bottom: 10px;
}

.action-buttons {
  display: flex;
  flex: 0 0 auto;
  gap: 15px;
  align-items: center;
}

.action-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #5557be;
  color: white;
  text-decoration: none;
  border-radius: 8px;
  text-align: center;
  transition: background-color 0.3s;
  min-width: 150px;
}

.action-button:hover {
  background-color: #4646a0;
}

/* Dropdown styling */
.dropdown-pill {
  position: relative;
  background-color: #5557be;
  color: white;
  border-radius: 8px;
  cursor: pointer;
  padding: 10px 20px;
  text-align: center;
  min-width: 150px;
}

.dropdown-pill:hover {
  background-color: #4646a0;
}

.dropdown-pill p {
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.dropdown-pill i {
  margin-left: 5px;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  margin-top: 5px;
  background-color: #fff;
  min-width: 200px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  z-index: 10;
  border-radius: 8px;
}

.dropdown-pill:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid #eee;
}

.dropdown-content a:last-child {
  border-bottom: none;
}

.dropdown-content a:hover {
  background-color: #f9f9f9;
}

/* For JavaScript toggle functionality */
.dropdown-content.show {
  display: block;
}

/* Responsive layouts */
@media screen and (max-width: 991px) {
  .balance-actions {
    flex-direction: column;
    align-items: stretch;
  }

  .balance-info {
    margin-bottom: 20px;
    width: 100%;
  }

  .action-buttons {
    flex-direction: column;
    width: 100%;
    gap: 10px;
  }

  .action-button, .dropdown-pill {
    width: 100%;
  }
}

@media screen and (max-width: 768px) {
  .profile {
    flex-direction: column;
  }

  .flex.items-center.space-x-3 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }

  .profile .action-button {
    margin-top: 15px;
    width: 100%;
  }

  .user-wallet {
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-all;
    max-width: 100%;
  }
}

@media screen and (max-width: 576px) {
  .user-name {
    font-size: 1.3rem;
  }

  .user-email, .user-wallet, .user-phone {
    font-size: 0.9rem;
  }

  .balance-heading {
    font-size: 1.1rem;
  }

  .balance-amount {
    font-size: 1.8rem;
  }
}

@media screen and (max-width: 480px) {
  .user-details, .balance-actions {
    padding: 15px;
    border-radius: 8px;
  }

  .profile-image {
    width: 60px;
    height: 60px;
  }

  .action-button, .dropdown-pill {
    padding: 8px 16px;
    font-size: 0.9rem;
  }
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
