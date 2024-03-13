<html lang="en"><head>
        <title>DDoS Protection - Nexus Market</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head><body class="bg-gradient-to-tl from-gray-900 via-gray-900 to-red-900">
        <style>
       body {
        background-color: #f0f0f0; /* Adjust background color as needed */
    }

    .min-h-screen {
        min-height: 100vh;
    }

    .max-w-5xl {
        max-width: 72rem; /* Adjust max-width as needed */
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .flex {
        display: flex;
    }

    .flex-col {
        flex-direction: column;
    }

    .lg {
        /* Add your styles for large screens if needed */
    }

    .justify-center {
        justify-content: center;
    }

    .lg\:justify-between {
        justify-content: space-between;
    }

    .lg\:space-x-12 > * + * {
        margin-left: 3rem; /* Adjust the space between elements as needed */
    }

    .self-center {
        align-self: center;
    }

    .p-12 {
        padding: 3rem; /* Adjust padding as needed */
    }

    .bg-white/10 {
        background-color: rgba(255, 255, 255, 0.1); /* Adjust background color and opacity as needed */
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .rounded-3xl {
        border-radius: 1.5rem; /* Adjust border-radius as needed */
    }

    .w-full {
        width: 100%;
    }

    .shadow-lg {
        /* Add your styles for the shadow if needed */
    }

    .shadow-base-500/10 {
        box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.1); /* Adjust box shadow as needed */
    }

    .mb-7 {
        margin-bottom: 1.75rem; /* Adjust margin as needed */
    }

    .text-center {
        text-align: center;
    }

    .font-semibold {
        font-weight: 600;
    }

    .text-3xl {
        font-size: 1.875rem; /* Adjust font size as needed */
    }

    .text-white {
        color: #fff; /* Adjust text color as needed */
    }

    .space-y-6 {
        margin-bottom: 1.5rem; /* Adjust margin as needed */
    }

    .slide-left-ani {
        /* Add your styles for the animation if needed */
    }

    .ddos_form {
        /* Add your styles for the form if needed */
    }

    .ch {
        margin: 0 5px; /* Adjust margin as needed */
        padding: 8px; /* Adjust padding as needed */
        background-color: rgba(255, 255, 255, 0.1); /* Adjust background color and opacity as needed */
        border-radius: 0.375rem; /* Adjust border-radius as needed */
    }


    .before,
    .expired {
        margin-top: 10px; /* Adjust margin as needed */
        /* Add your styles for the buttons if needed */
    }
    .p-12 {
        padding: 3rem; /* Adjust padding as needed */
        background-color: #2c3e50; /* Dark background color */
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Adjust shadow as needed */
    }

    .bg-white/10 {
        background-color: rgba(255, 255, 255, 0.1); /* Adjust background color and opacity as needed */
    }

    .rounded-3xl {
        border-radius: 1.5rem; /* Adjust border-radius as needed */
    }

    .shadow-lg {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Adjust shadow as needed */
    }

    .shadow-base-500/10 {
        box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.1); /* Adjust box shadow as needed */
    }
            .captchav2 {
                text-align: center;
                width: 100%;
            }

            /*.image {*/
            /*    width: 20px;*/
            /*    height: 20px;*/
            /*    transform-origin: center;*/
            /*    transform: scale(6);*/
            /*    transition: all 0.2s ease-in;*/
            /*    border-radius: 50%;*/
            /*    border: 0.5px solid #ff5050;*/
            /*    margin:auto;*/
            /*    margin-bottom:60px;*/
            /*    margin-top:80px;*/
            /*    background: url(http://68.183.65.127/capthca/Untitled.webp) no-repeat;*/
            /*}*/
            
            
            
 {!! session('captcha_image') !!}
 
            input {
                text-align: center;
                text-transform: uppercase;
                background: #1a1e23;
                border: 1.5px solid #525b63;
                color: #e1e1e1;
                font-size: 30px;
                margin: 1px;
                width: 50px;
                height: 50px;
            }
            input:focus{
                border: 1.5px solid #ff5050;
            }

            .expire {
                display: inline-block;
                vertical-align: top;
                width: 100px;
                height: 50px;
                position: relative;
                animation: timer-warning 1s 1;
                animation-fill-mode: forwards;
                animation-delay: 50s;
                margin-bottom: 6px;
                border-radius: 3px;
            }

            .expire>.timer {
                position: absolute;
                top: 0;
                left: 0;
                width: 100px;
                overflow: hidden;
            }

            .expire>.timer>.time-part-wrapper {
                display: inline-block;
                vertical-align: top;
                height: 50px;
                line-height: 50px;
                color: #d8d8d8;
            }

            .expire>.timer>.time-part-wrapper:first-child:after {
                content: ':';
                display: inline-block;
                vertical-align: top;
                width: 15px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                font-size: 22px;
            }

            .expire>.timer>.time-part-wrapper>.time-part {
                display: inline-block;
                vertical-align: top;
                width: 15px;
                position: relative;
                animation: timer-expire;
                animation-fill-mode: forwards;
                animation-delay: 60s;
            }

            .expire>.timer>.time-part-wrapper>.time-part>.digit-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                width: 15px;
                text-align: center;
            }

            .expire>.timer>.time-part-wrapper>.time-part>.digit-wrapper>.digit {
                display: block;
                width: 100%;
                text-align: center;
                height: 50px;
                line-height: 50px;
                font-size: 22px;
            }

            .expire>.timer>.time-part-wrapper>.time-part.seconds.tens>.digit-wrapper {
                top: -50px;
                animation: timer-seconds-tens 50s 1;
                animation-fill-mode: forwards;
                animation-delay: 1s;
            }

            .expire>.timer>.time-part-wrapper>.time-part.seconds.ones>.digit-wrapper {
                animation: timer-seconds-ones 10s 6;
            }

            .expire>.timer>.time-part-wrapper>.time-part.hundredths.tens>.digit-wrapper {
                animation: timer-seconds-ones 1s 60;
            }

            .expire>.timer>.time-part-wrapper>.time-part.hundredths.ones>.digit-wrapper {
                animation: timer-seconds-ones 500ms 120;
            }

            @-webkit-keyframes timer-seconds-tens {
                0% {
                    top: -50px;
                }

                19% {
                    top: -50px;
                }

                20% {
                    top: -100px;
                }

                39% {
                    top: -100px;
                }

                40% {
                    top: -150px;
                }

                59% {
                    top: -150px;
                }

                60% {
                    top: -200px;
                }

                79% {
                    top: -200px;
                }

                80% {
                    top: -250px;
                }

                99% {
                    top: -250px;
                }

                100% {
                    top: -300px;
                }
            }

            @-webkit-keyframes timer-seconds-ones {
                0% {
                    top: 0;
                }

                9% {
                    top: 0;
                }

                10% {
                    top: -50px;
                }

                19% {
                    top: -50px;
                }

                20% {
                    top: -100px;
                }

                29% {
                    top: -100px;
                }

                30% {
                    top: -150px;
                }

                39% {
                    top: -150px;
                }

                40% {
                    top: -200px;
                }

                49% {
                    top: -200px;
                }

                50% {
                    top: -250px;
                }

                59% {
                    top: -250px;
                }

                60% {
                    top: -300px;
                }

                69% {
                    top: -300px;
                }

                70% {
                    top: -350px;
                }

                79% {
                    top: -350px;
                }

                80% {
                    top: -400px;
                }

                89% {
                    top: -400px;
                }

                90% {
                    top: -450px;
                }

                99% {
                    top: -450px;
                }

                100% {
                    top: -500px;
                }
            }

            @-webkit-keyframes timer-warning {
                from {
                    color: #d8d8d8;
                }

                to {
                    color: #E7943C;
                }
            }

            @-webkit-keyframes timer-expire {
                from {
                    color: #000;
                }

                to {
                    color: #e7643c;
                }
            }

            @-webkit-keyframes button-expired {
                from {
                    visibility: hidden;
                }

                to {
                    visibility: visible;
                }
            }

            @-webkit-keyframes button-before {
                from {
                    visibility: visible;
                }

                to {
                    visibility: hidden;
                }
            }

            .center {
                text-align: center;
            }

            form.ddos_form button.before {
                animation: button-before;
                animation-fill-mode: forwards;
                animation-delay: 60s;
            }

            form.ddos_form button.expired {
                visibility: hidden;
                background: #E74C3C;
                animation: button-expired;
                animation-fill-mode: forwards;
                animation-delay: 60s;
                margin-top: -40px;
            }




        {!! session('cssCoordinates') !!}


        </style>
        <div class="relative min-h-screen max-w-5xl mx-auto flex flex-col lg:flex-row justify-center lg:justify-between lg:space-x-12">

            <div class="flex justify-center self-center">
                <div class="p-12 bg-white/10 mx-auto rounded-3xl w-full shadow-lg shadow-base-500/10">
                    <div class="mb-7 text-center">
                        <h3 class="font-semibold text-3xl text-white mb-3">DDoS Protection</h3>
                    </div>
                    <div class="space-y-6 text-center">
                        <p class="slide-left-ani">Select each text box and enter the letter or number you see within the circle below.</p>
                         <form action="/ddos_check" class="ddos_form" method="POST">
                        @csrf
                           <div style="margin-bottom: 10px;">
    <input class="ch bg-white/10 rounded-lg" type="text" name="c1" maxlength="1" pattern="[A-Za-z0-9]" autocomplete="off" autofocus="">
    <input class="ch bg-white/10 rounded-lg" type="text" name="c2" maxlength="1" pattern="[A-Za-z0-9]" autocomplete="off">
    <input class="ch bg-white/10 rounded-lg" type="text" name="c3" maxlength="1" pattern="[A-Za-z0-9]" autocomplete="off">
    <input class="ch bg-white/10 rounded-lg" type="text" name="c4" maxlength="1" pattern="[A-Za-z0-9]" autocomplete="off">
    <input class="ch bg-white/10 rounded-lg" type="text" name="c5" maxlength="1" pattern="[A-Za-z0-9]" autocomplete="off">

                               
                                <div class="image" >

                                </div>
                            </div>
                            <div class="expire">
                                <div class="timer">
                                    <div class="time-part-wrapper">
                                        <div class="time-part seconds tens">
                                            <div class="digit-wrapper">
                                                <span class="digit">0</span>
                                                <span class="digit">5</span>
                                                <span class="digit">4</span>
                                                <span class="digit">3</span>
                                                <span class="digit">2</span>
                                                <span class="digit">1</span>
                                                <span class="digit">0</span>
                                            </div>
                                        </div>
                                        <div class="time-part seconds ones">
                                            <div class="digit-wrapper">
                                                <span class="digit">0</span>
                                                <span class="digit">9</span>
                                                <span class="digit">8</span>
                                                <span class="digit">7</span>
                                                <span class="digit">6</span>
                                                <span class="digit">5</span>
                                                <span class="digit">4</span>
                                                <span class="digit">3</span>
                                                <span class="digit">2</span>
                                                <span class="digit">1</span>
                                                <span class="digit">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="time-part-wrapper">
                                        <div class="time-part hundredths tens">
                                            <div class="digit-wrapper">
                                                <span class="digit">0</span>
                                                <span class="digit">9</span>
                                                <span class="digit">8</span>
                                                <span class="digit">7</span>
                                                <span class="digit">6</span>
                                                <span class="digit">5</span>
                                                <span class="digit">4</span>
                                                <span class="digit">3</span>
                                                <span class="digit">2</span>
                                                <span class="digit">1</span>
                                                <span class="digit">0</span>
                                            </div>
                                        </div>
                                        <div class="time-part hundredths ones">
                                            <div class="digit-wrapper">
                                                <span class="digit">0</span>
                                                <span class="digit">9</span>
                                                <span class="digit">8</span>
                                                <span class="digit">7</span>
                                                <span class="digit">6</span>
                                                <span class="digit">5</span>
                                                <span class="digit">4</span>
                                                <span class="digit">3</span>
                                                <span class="digit">2</span>
                                                <span class="digit">1</span>
                                                <span class="digit">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><button class="before" type="submit">Submit</button>
                            <button class="expired" type="submit"> Refresh (expired)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body></html>
