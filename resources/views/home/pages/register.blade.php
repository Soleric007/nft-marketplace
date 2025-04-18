@section('title', 'Sign up with Email')
<x-home-layout>




    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Register</h1>
                            <p>Register by providing an Email and Password</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3 class='text-xl md:text-[2rem] font-bold'>Don't have an account? Register now.</h3>
                        <p class='mt-4'>Create your account and unlock a new digital frontier. Secure your wallet, collect rare NFTs, and join a global network of creators, collectors, and innovators. The future is yours—claim it on the blockchain.</p>

                        <div class="spacer-10"></div>

                        <form method="POST" action="{{ route('register') }}" name="contactForm" id='contact_form'
                            class="form-border">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Name:</label>
                                        <input type='text' name="name" :value="old('name')" required autofocus
                                            autocomplete="name" id='name' class="form-control">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Email Address:</label>
                                        <input type='text' name='email' :value="old('email')" required
                                            autocomplete="email" id='email' class="form-control">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Choose a Username:</label>
                                        <input type='text' name='username' :value="old('username')" required
                                            autocomplete="username" id='username' class="form-control">
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Phone:</label>
                                        <input type='text' name='phone' :value="old('phone')" required
                                            autocomplete="phone" id='phone' class="form-control">
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Password:</label>
                                        <input type="password" name="password" required autocomplete="new-password"
                                            id='password' class="form-control">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Confirm Password:</label>
                                        <input type="password" name="password_confirmation" required
                                            autocomplete="new-password" id='re-password' class="form-control">
                                        <x-input-error :messages="$errors->get('password_confirmation')"
                                            class="mt-2" />

                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <div id='submit' class="pull-left">
                                        <a class="text-sm text-indigo-600 underline rounded-md hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                        <input type='submit' id='send_message' value='Register Now'
                                            class="btn btn-main color-2">
                                    </div>

                                    <div id='mail_success' class='success'>Your message has been sent successfully.
                                    </div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your
                                        message.</div>
                                    <div class="clearfix"></div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </div>
</x-home-layout>
