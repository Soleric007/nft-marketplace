@section('name', $nft->name)

<x-home-layout>
    <style>
        .nft-subheader {
            background: url('/template/assets/images/background/subheader.jpg') top center no-repeat;
            background-size: cover;
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .nft-subheader h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .nft-subheader p {
            font-size: 1.2rem;
        }

        .nft-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            background: #f9f9f9;
        }

        .nft-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
        }

        .nft-left,
        .nft-right {
            flex: 1;
            min-width: 300px;
        }

        .nft-image {
            width: 22rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .nft-name {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .nft-description {
            color: #555;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .nft-info-block {
            margin-bottom: 25px;
        }

        .nft-info-block h4 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .nft-info-block p {
            font-size: 1.1rem;
            color: #333;
        }

        .nft-price {
            color: #7e3af2;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nft-status-available {
            color: green;
            font-weight: bold;
        }

        .nft-status-sold {
            color: red;
            font-weight: bold;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .nft-grid {
                flex-direction: column;
            }

            .nft-subheader h1 {
                font-size: 2rem;
            }

            .nft-subheader p {
                font-size: 1rem;
            }
            .nft-image{
                width: 100%;
            }
        }
    </style>

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- Header Section -->
        <section class="nft-subheader">
            <div class="container mt-5">
                <h1 class="text-white">{{ $nft->name }}</h1>
            </div>
        </section>

        <!-- Main Content -->
        <section class="nft-container">
            <div class="nft-grid">
                <!-- Image Side -->
                <div class="nft-left">
                    <img src="{{ asset($nft->image) }}" alt="{{ $nft->name }}" class="nft-image">
                </div>

                <!-- Details Side -->
                <div class="nft-right">
                    <h2 class="nft-title">{{ $nft->name }}</h2>
                    <p class="nft-description">{{ $nft->description }}</p>

                    <div class="nft-info-block">
                        <h4>Creator:</h4>
                        <p>{{ $nft->creator_name ?? 'Unknown' }}</p>
                    </div>

                    <div class="nft-info-block">
                        <h4>Price:</h4>
                        <p class="nft-price">{{ $nft->price }} ETH</p>
                    </div>

                    <div class="nft-info-block">
                        <h4>Royalties:</h4>
                        <p>10%</p>
                    </div>

                    <div>
                        <a href="{{route('artnft.buy', $nft->id)}}" class="btn btn-primary">
                            Buy
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
