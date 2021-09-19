













@component('web.layout.content')







    @slot('title')

        {!! SEO::generate() !!}

    @endslot





    <main>

    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="/web/assets/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="/web/assets/img/icon/sign/man-3.png" alt="">
            <img class="man-2 man-22" src="/web/assets/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="/web/assets/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="/web/assets/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="/web/assets/img/icon/sign/dot.png" alt="">
            <img class="bg" src="/web/assets/img/icon/sign/sign-up.png" alt="">
            <img class="flower" src="/web/assets/img/icon/sign/flower.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Create a free <br> Account</h2>
                        <p>I'm a subhead that goes with a story.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                            <div class="sign__in text-center">
                                <a href="{{route('google.auth')}}" class="sign__social g-plus text-start mb-15"><i class="fab fa-google-plus-g"></i>Sign Up with Google</a>
                                <p> <span>........</span> Or, <a href="sign-up.html">sign up</a> with your email<span> ........</span> </p>
                            </div>
                        </div>
                        <div class="sign__form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Full Name</h5>
                                    <div class="sign__input">
                                        <input name="name" type="text" placeholder="Full name">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Work email</h5>
                                    <div class="sign__input">
                                        <input name="email" type="text" placeholder="e-mail address">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>






                                <div class="sign__input-wrapper mb-25">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input name="password" type="text" placeholder="Password">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>Re-Password</h5>
                                    <div class="sign__input">
                                        <input name="password_confirmation" type="text" placeholder="Re-Password">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>

                                <br>
                                <button class="m-btn m-btn-4 w-100"> <span></span> Sign Up</button>
                                <div class="sign__new text-center mt-20">
                                    <p>Already in Markit ? <a href="{{route('login')}}"> Sign In</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->

</main>


    @endcomponent