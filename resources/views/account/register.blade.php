@extends('master.main')

@section('main')

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Register</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ Route('home.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area">
            <div class="contact-info-wrap contact-info-bg" data-background="assets/img/bg/contact_info_bg.jpg">
             
            </div>
            <div class="contact-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title mb-15">
                                    <span class="sub-title">Create your account</span>
                                    <h2 class="title">Get in <span>Touch</span></h2>
                                </div>
                                <p>Meat provide well shaped fresh and the organic meat well <br> animals is Humans have hunted schistoric</p>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="contact-form-wrap">
                                        <div class="form-grp">
                                            <input name="name" type="text" placeholder="Your Name *" required>
                                        </div>
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="Your Email *" required>
                                        </div>
                                        <div class="form-grp">
                                            <input name="phone" type="text" placeholder="Your Phone *" required>
                                        </div>
                                        <div class="form-grp">
                                            <input name="address" type="text" placeholder="Your Adress *" required>
                                        </div>
                                        <div class="form-grp">
                                            <select name="gender" class="form-control" id="">
                                                <option value="">Select one</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-grp">
                                            <input name="password" type="text" placeholder="Your Password *" required>
                                        </div>

                                        <div class="form-grp">
                                            <input name="confirm_password" type="text" placeholder="Your Confirm password *" required>
                                        </div>
                                        
                                        <button type="submit">Create account</button>
                                    </div>
                                </form>
                                <p class="ajax-response mb-0"></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

@stop()