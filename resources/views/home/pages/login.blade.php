@section('title', 'Login Your Account')
<x-home-layout>


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section class="relative full-height no-top no-bottom vertical-center"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="relative center-y">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>Create, sell or collect digital items.</h1>
                                <p class="lead">Enter the vault and access your NFTs — secure, decentralized, and uniquely yours.
                                    Your digital treasures await.</p>
                            </div>

                            <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                                <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                    <h3 class="mb10">Sign In</h3>
                                    <p>Login using an existing account or create a new account <a
                                            href="{{ route('register') }}">here<span></span></a>.</p>
                                    <form method="POST" action="{{ route('login') }}" name="contactForm"
                                        id='contact_form' class="form-border">
                                        @csrf

                                        <div class="field-set">
                                            <input type="email" name="email" :value="old('email')" required autofocus
                                                autocomplete="email" id='email' class="form-control"
                                                placeholder="Email Address">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="field-set">
                                            <input type='password' name='password' required
                                                autocomplete="current-password" id='password' class="form-control"
                                                placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div class="mb-4">
                                            @if (Route::has('password.request'))
                                                <a class="text-xs text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='Submit'
                                                class="py-3 btn btn-main btn-fullwidth color-2">
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="spacer-single"></div>

                                        <!-- social icons -->
                                        {{-- <ul class="list s3">
                                            <li>Login with:</li>
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Google</a></li>
                                        </ul> --}}
                                        <!-- social icons close -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-home-layout>
