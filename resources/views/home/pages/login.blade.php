@section('title', 'Login Your Account')
<x-home-layout>
    @vite('resources/css/app.css')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section class="full-height relative no-top no-bottom vertical-center"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>Create, sell or collect digital items.</h1>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim.</p>
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
                                                <a class="underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='Submit'
                                                class="btn btn-main btn-fullwidth color-2 py-3">
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
