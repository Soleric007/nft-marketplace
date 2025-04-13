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

                        <form name="contactForm" id="contact_form" class="form-border" method="post"
                            action="email.php.html">
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                            </div>

                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Your Email" />
                            </div>

                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Your Phone" />
                            </div>

                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control"
                                    placeholder="Your Message"></textarea>
                            </div>

                            <div class="spacer-half"></div>

                            <div id="submit">
                                <input type="submit" id="send_message" value="Submit Form" class="btn btn-main" />
                            </div>
                            <div id="mail_success" class="success">Your message has been sent successfully.</div>
                            <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                        </form>
                    </div>

                    

                </div>
            </div>

        </section>

    </div>
</x-home-layout>
