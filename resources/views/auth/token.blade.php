

@component('web.layout.content')







    @slot('title')

        Login ...

        @endslot






    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="assets/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="/web/assets/img/icon/sign/man-1.png" alt="">
            <img class="man-2" src="/web/assets/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="/web/assets/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="/web/assets/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="/web/assets/img/icon/sign/dot.png" alt="">
            <img class="bg" src="/web/assets/img/icon/sign/sign-up.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Enter the<br> Active code</h2>
                        <p>You will recieved the code<a href="#">On your cell phone ...</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">

                        <div class="sign__form">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Token</h5>
                                    <div class="sign__input">
                                        <input name="token" type="text" placeholder="Token ...">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>

                                <button class="m-btn m-btn-4 w-100"> <span></span> Sign In</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->


@endcomponent