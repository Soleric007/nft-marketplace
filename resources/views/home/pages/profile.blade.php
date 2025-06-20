@section('title', 'Profile')
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
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Edit Profile</h1>
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
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form id="form-create-item" class="form-border" method="POST"
                            action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="de_tab tab_simple">
                                <ul class="de_nav">
                                    <li class="active"><span><i class="fa fa-user"></i>Profile</span></li>
                                </ul>
                                <div class="de_tab_content">
                                    <div class="tab-1">
                                        <div class="row wow fadeIn">
                                            <div class="col-lg-8 mb-sm-20">
                                                <div class="field-set">
                                                    <h5>Name</h5>
                                                    <input type="text" name="name" id="username" class="form-control"
                                                        value="{{ $user->name }}" />
                                                    <div class="spacer-20"></div>

                                                    <h5>Email Address*</h5>
                                                    <input type="text" name="email" value="{{ $user->email }}" disabled
                                                        id="email_address" class="form-control" />

                                                    <div class="spacer-20"></div>

                                                    <h5><i class="fa fa-phone"></i>Phone</h5>
                                                    <input type="text" value="{{ $user->phone }}" name="phone"
                                                        id="phone" class="form-control" />

                                                    <div class="spacer-20"></div>

                                                    <h5><i class="fa fa-addressing"></i> Address</h5>
                                                    <input type="text" name="address" value="{{ $user->address }}"
                                                        id="address" class="form-control" />
                                                </div>
                                            </div>

                                            <div id="sidebar" class="col-lg-4">
                                                <h5>Profile image <i class="fa fa-info-circle id-color-2"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i>
                                                </h5>
                                                <img src="{{ asset($user->profile_image ? 'storage/' . ($user->profile_image) : 'template/assets/images/default.jpeg') }}"
                                                    id="click_profile_img" class="d-profile-img-edit img-fluid"
                                                    alt="Profile Image">
                                                <input type="file" name="profile_image" id="upload_profile_img">
                                                <div class="spacer-30"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-30"></div>
                            <input type="submit" id="submit" class="btn-main" value="Update profile">
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
</x-home-layout>


