<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/animazooki/assets/img/animazooki-b.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/animazooki/assets/img/animazooki-b.png" />
    <link rel="apple-touch-icon-precomposed" href="/animazooki/assets/img/animazooki-b.png" />
    <link rel="icon" href="/animazooki/assets/img/animazooki-b.png" sizes="any">
    <link rel="icon" href="/animazooki/assets/img/animazooki-b.png" type="image/svg+xml">
    <link rel="manifest" href="/animazooki/assets/img/animazooki-b.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" media="screen and (min-device-width: 1200px)" href="/animazooki/assets/css/desktop-style.css" />
    <link rel="stylesheet" media='screen and (min-width: 800px) and (max-width: 1199px)' href='/animazooki/assets/css/medium-style.css' />
    <link rel="stylesheet" media='screen and (min-width: 100px) and (max-width: 799px)' href='/animazooki/assets/css/mobile-style.css' />
    <title>Animazooki | Log-in</title>
</head>

<body class="bg-light-in txtc">

    <div class="sticky-top navic-cont ic-l" style="top: 0 !important;">
        <a class="navbar-brand px-2" href="#">
            <!-- light-mode -->

            <img src="/animazooki/assets/img/animazooki-b.png" alt="Animazooki" style="max-height: 40px"
                class="mt-1 pb-1">


            <!-- dark-mode -->
            <!-- <img src="/animazooki/assets/img/animazooki-w.svg" alt="" style="max-height: 40px">
         -->

        </a>
    </div>
    <div class="sticky-top navic-cont ic-r-log px-2" style="top: 0 !important;"> <!-- <i class="bi bi-moon"></i> -->
        <a class="nav-button" id="mode-toggle"><i class="fas fa-moon mx-2 txt-light-inv"></i></button>
            <a class="nav-button" href="https://sceiiya.wd49p.com/animazooki/profile/"><i
                    class="fas fa-user-circle mx-2 txt-light-inv"></i></a>
    </div>

    <main class="w100 clflx">


        <form class="animazooki-log-cont txtc bg-light-in">
            <h3 class="txtc mb-4">Log in</h3>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" placeholder="Email" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-0">
                <input type="password" id="form2Example2" class="form-control" placeholder="Password" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input inbg-red" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label cb-sgn-txt mt-0" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!" class="txtred cb-sgn-txt mt-0" onclick="popdev()">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="button" id= "login" class="btn btn-primary btn-block mb-4 inbg-red rwflx txtc"><a class="txt-light" href="https://sceiiya.wd49p.com/animazooki/">Log in</a></button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="https://sceiiya.wd49p.com/animazooki/sign-up/" class="txtred">Create account</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f txtred" onclick="popdev()"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google txtred" onclick="popdev()"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter txtred" onclick="popdev()"></i>
                </button>
            </div>
        </form>



    </main>

    <footer class="p-0 m-0 bg-cloud">
        <div class="footer-socmed-mail rwflx w100 p-3 py-2 footer-box">
            <div class="in-footer-socmed rwflx w50 txtr ">
                <div class="in-footer-sm-label txtc">
                    <h5 class="me-2 txtc txt-light">Connect with Us</h5>
                </div>
                <div class="in-footer-sm-links rwflx w50 me-2">
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank"
                        href="https://www.facebook.com/profile.php?id=100090989854633" role="button"><i
                            class="fab fa-facebook-f p-1"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank"
                        href="https://www.tiktok.com/@animazooki" role="button"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank"
                        href="https://www.instagram.com/animazooki/" role="button"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank"
                        href="https://www.youtube.com/c/animazooki" role="button"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank"
                        href="https://www.twitter.com/animazooki" role="button"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="in-footer-mail">
                <!-- <div>
                      <p>Join our mailing list for anime and merchandise news!</p>
                  </div> -->
                <div class="w100 txtc rwflx">
                    <div class="in-footer-mail-label txtc">
                        <h5 class="m-0 ms-2 txt-light">Email: &nbsp;&nbsp;</h5>
                    </div>
                    <div class="in-footer-mailinput">
                        <input class="crnrclean" type="email" id="email" name="email" placeholder="animazooki@gmail.com"
                            style="width: auto;">
                    </div>
                    <div class="in-footer-mail-button txtc">
                        <a class="footer-mail-button">
                            <h5 class="m-0 txt-light" onclick="popdev()">&nbsp;&nbsp; Subscribe</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-ship-info rwflx w100 footer-box px-5">
            <div class="clflx w50 txtl px-3 py-2 txt-light">
                <h5>Shipping Info</h5>
                <div>
                    <p class="ps-3 txt-light">Where can it ship? <br />
                        Local Philippines, Japan, China, Indonesia, Taiwan, and Thailand.<br />
                        Shipping fee may differ based on the size of the parcel. </p>
                    <br />
                    <p class="ps-3 txt-light">Expected Shipment Date: <br />
                        In-stick orders may take up to 7-10 business days.<br />
                        Hence for pre-orders, may take up to atleast 30 days to 90 days <br />depending on the
                        capability of
                        the manufacturer.</p>
                </div>
            </div>
            <div class="footer-ship-pay clflx w50 px-3 py-2">
                <div class="in-footer-freight-label txtl txt-light">
                    <h5>Partnered Freight Options</h5>
                </div>
                <div class="in-footer-freight-logos txtl rwflx p-3">

                    <div class="crnrclean">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/jnt-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/gogoxpress-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean ">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/ninjavan-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean ">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/flash-logo.png" alt="">
                    </div>
                </div>
                <div class="in-footer-pay-label txtl txt-light">
                    <h5>Payment Options</h5>
                </div>
                <div class="in-footer-pay-logos rwflx p-3">
                    <div class="crnrclean">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/visa-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/mastercard-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean ">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/paypal-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean ">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/paymaya-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                    <div class="crnrclean ">
                        <img class="cs-logo" src="/animazooki/assets/img/footer/gcash-logo.png" alt="">
                    </div>&nbsp;&nbsp;
                </div>
            </div>
        </div>

        <div class="footer-cs clflx w100 p-2 txtc footer-box foot-txt">
            <div class="in-footer-cs-label w100 txtc txt-light">
                <h5>Customer Service</h5>
            </div>
            <div class="in-footer-cs-list w100 txtc">
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-FAQ" role="button"
                    aria-expanded="false" aria-controls="collapseExample">FAQ</a> &nbsp;|&nbsp;
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-tracking"
                    role="button" aria-expanded="false" aria-controls="collapseExample">Order Tracking</a> &nbsp;|&nbsp;
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-RnR" role="button"
                    aria-expanded="false" aria-controls="collapseExample">Return & Refund</a> &nbsp;|&nbsp;
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-TnC" role="button"
                    aria-expanded="false" aria-controls="collapseExample">Terms & Conditions</a> &nbsp;|&nbsp;
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-privacy-policy"
                    role="button" aria-expanded="false" aria-controls="collapseExample">Privacy Policy</a> &nbsp;|&nbsp;
                <a class="footer-cs-list-i txt-light" data-bs-toggle="collapse" href="#animazooki-contact-us"
                    role="button" aria-expanded="false" aria-controls="collapseExample">Contact Us</a>
            </div>
            <div class="footer-cs-collapse clflx w100"> <!--- collapse --->
                <div class="collapse" id="animazooki-FAQ">
                    <div class="card card-body txtl ps-4 bg-light-inv">
                        Frequently Asked Question<br />
                        <div class="in-footer-cs-list clflx w100 txtl">
                            <a class="footer-cs-list-i ps-2 txt-light" data-bs-toggle="collapse" href="#faqq1"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Question #1</a>
                            &nbsp;|&nbsp;
                            <div class="collapse" id="faqq1">
                                <div class="txtl ps-4 txt-light">
                                    Answer #1 <br />
                                </div>
                            </div>
                            <a class="footer-cs-list-i ps-2 txt-light" data-bs-toggle="collapse" href="#faqq2"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Question #2</a>
                            &nbsp;|&nbsp;
                            <div class="collapse" id="faqq2">
                                <div class="txtl ps-4 txt-light">
                                    Answer #2 <br />
                                </div>
                            </div>
                            <a class="footer-cs-list-i ps-2 txt-light" data-bs-toggle="collapse" href="#faqq3"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Question #3</a>
                            &nbsp;|&nbsp;
                            <div class="collapse" id="faqq3">
                                <div class=" txtl ps-4 txt-light">
                                    Answer #3 <br />
                                </div>
                            </div>
                            <a class="footer-cs-list-i ps-2 txt-light" data-bs-toggle="collapse" href="#faqq4"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Question #4</a>
                            &nbsp;|&nbsp;
                            <div class="collapse" id="faqq4">
                                <div class="txtl ps-4 txt-light">
                                    Answer #4 <br />
                                </div>
                            </div>
                            <a class="footer-cs-list-i ps-2 txt-light" data-bs-toggle="collapse" href="#faqq5"
                                role="button" aria-expanded="false" aria-controls="collapseExample">Question #5</a>
                            &nbsp;|&nbsp;
                            <div class="collapse" id="faqq5">
                                <div class="txtl ps-4 txt-light">
                                    Answer #5 <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="animazooki-tracking">
                    <div class="card card-body bg-light-inv txtl ps-4">
                        You may go to your order-page and see the tracking status of your merch.<br />
                        &nbsp;In addition, here our our freight partners the you might ask about the status of your
                        parcel<br />&nbsp;by using their tracking app.
                        &nbsp;Copy the Tracking Number in your order-page and paste it in their tracking app.
                    </div>
                </div>
                <div class="collapse" id="animazooki-RnR">
                    <div class="card card-body bg-light-inv txtl ps-4">
                        For Return and Refund, you may contact our customer service in the chat.<br />
                        <p>&nbsp;Please read the Terms and
                            Conditions in <strong><a href="#" target="_blank" onclick="popdev()">Return and
                                    Refund</a></strong> section for validity of your
                            return/refund.
                    </div>
                </div>
                <div class="collapse" id="animazooki-TnC">
                    <div class="card card-body bg-light-inv txtl ps-4">
                        <p>You may read our whole <strong>T&C</strong> on the other page by clicking <a href="#"
                                target="_blank" onclick="popdev()">here.</a>
                    </div>
                </div>
                <div class="collapse" id="animazooki-privacy-policy">
                    <div class="card card-body bg-light-inv txtl ps-4">
                        <p>In accordance to Republic Act No. 10173, otherwise known as the Data Privacy Act,<br />you
                            may read our whole <strong>Privacy Policy</strong> on the other page by clicking <a href="#"
                                target="_blank" onclick="popdev()">here.</a>
                    </div>
                </div>
                <div class="collapse" id="animazooki-contact-us">
                    <div class="card card-body bg-light-inv txtl ps-4">
                        You may reach us out here!<br />
                        &nbsp;&nbsp;E-mail: animazooki@gmail.com<br />
                        &nbsp;&nbsp;Phone number:+6399 999 9999<br />
                        &nbsp;&nbsp;Fax: 999 999 999

                    </div>
                </div>

            </div>
        </div>

        <div class="footer-linker rwflx w100 m-0 footer-box px-5 py-1">
            <div class="in-footer-abt-shop clflx w33 txtl m-4">
                <div>
                    <h5 class="txt-light">About the Shop</h5>
                </div>
                <div>
                    <p class="ps-3 txt-light">Ξ Wear Your Inner Anime Delusions Ξ</p>
                    <br />
                    <p class="ps-3 txt-light">A fantasy is not always that bad. You might even find your courage from
                        it.
                    </p>
                </div>
            </div>
            <div class="in-footer-links clflx w33 txtl m-3">
                <div class="footer-links-label txt-light">
                    <h5>Helpful Links</h5>
                </div>
                <div class="footer-links-list clflx txtl ps-3 foot-txt">
                    <a class="footer-cs-list-i txt-light" href="">Sign-in</a>
                    <a class="footer-cs-list-i txt-light" href="" onclick="popdev()">Refer a friend</a>
                    <a class="footer-cs-list-i txt-light" href="" onclick="popdev()">News</a>
                    <a class="footer-cs-list-i txt-light" href="" onclick="popdev()">More about animazooki. . .</a>
                    <a class="footer-cs-list-i txt-light" href="" onclick="popdev()">Collab with us!</a>
                </div>
            </div>
            <div class="in-footer-debug clflx w33 txtc m-3">
                <div class="footer-debug txt-light">
                    <h5>Seeing bugs? help us improve~</h5>
                </div>
                <div class="">
                    <img class="p-2 m-2 footer-img" src="/animazooki/assets/img/footer/bug-svgrepo-com.png"
                        style="border: 2px solid salmon; border-radius: 4px;">
                </div>
                <div class="footer-debug-button txt-light">
                    <a class="txt-light foot-txt" onclick="popdev()">Send Feedback</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright txtc py-1 px-4 footer-box txt-light">
            <h6>©2023 Animazooki.&nbsp;All Rights Reserved.</h6>
            <br />
            <h6 class="author">&nbsp;Designed and Developed by Scheidj Villados</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0de39995d2.js" crossorigin="anonymous"></script>
    <script src="/animazooki/assets/js/script.js"></script>
</body>

</html>