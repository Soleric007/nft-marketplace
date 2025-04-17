@section('title', 'Contact')
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
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Contact Us</h1>
                            <p>Reach Out. We’re Always Listening.</p>
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

                    <div class="col-lg-8 mb-sm-30">
                        <h3>Do you have any question?</h3>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form name="contactForm" id="contact_form" class="form-border" method="POST"
                            action="{{ route('contact.send') }}">
                            @csrf
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Your Email" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Your Phone" />
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control"
                                    placeholder="Your Message"></textarea>
                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="spacer-half"></div>

                            <div id="submit">
                                <input type="submit" id="send_message" value="Submit Form" class="btn btn-main" />
                            </div>
                        </form>
                    </div>



                </div>
            </div>

        </section>

    </div>
</x-home-layout>
