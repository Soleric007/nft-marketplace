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
                   
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2085.6242587517595!2d-118.49746680765246!3d34.02078884245121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4c8e847eb27%3A0x4d4db8eed3ab23a8!2s631%20Wilshire%20Blvd%2C%20Santa%20Monica%2C%20CA%2090401%2C%20USA!5e0!3m2!1sen!2sng!4v1747144157853!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>

        </section>

    </div>
</x-home-layout>
