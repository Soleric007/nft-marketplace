@section('title', 'Verify your Email')
<x-home-layout>
    @vite('resources/css/app.css')

    <section class="relative full-height no-top no-bottom vertical-center px-6 md:px-24 lg:px-[12rem]"
        data-bgimage="url(/template/assets/images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
        <div class="no-bottom no-top flex justify-center items-center px-10 py-8 rounded-lg bg-gray-200" id="content">
            <div id="top"></div>

            <div class="px-10 py-8 rounded-lg">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="mt-4 flex flex-col md:flex-row items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <x-primary-button>
                                {{ __('Resend Verification Email') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>


</x-home-layout>
