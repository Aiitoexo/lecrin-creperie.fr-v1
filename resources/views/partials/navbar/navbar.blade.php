<div class="sticky top-0 border-green-600 h-16 md:h-20 lg:h-24 xl:h-32 w-full z-50">
    <div class="grid grid-cols-6 h-full xl:hidden relative bg-gradient-to-b from-yellow-500 to-yellow-300">
        <div class="col-span-1 flex justify-center items-center">
            <button id="hamburger">
                <svg class="h-10 md:h-14 lg:h-16 fill-current text-gray-800"
                     xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div class="col-span-4 flex justify-center items-center gap-x-4">
            <img class="h-12 md:h-16 lg:h-20" src="{{ asset('img/logo.png') }}" alt="">
            <img class="h-12 md:h-16 lg:h-20" src="{{ asset('img/title-logo.png') }}" alt="">
        </div>
        @if (isset($all_sections))
            <div class="col-span-1 flex justify-center items-center">
                <a href="{{ route('cart') }}" class="relative">
                    <svg class="h-12 lg:h-16 fill-current text-gray-800"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 480 480">
                        <g>
                            <path
                                d="M422.38,363.89h11.21c8.19,0,16.39-.07,24.58,0,9.9.09,17.1,6.21,18.79,15.95a15.93,15.93,0,0,1-3,12.63c-3.44,4.57-4.71,9.72-5.59,15.19-2.26,13.91-4.7,27.79-7.08,41.68-2.34,13.66-4.61,27.33-7.07,41-2.64,14.61-4.76,29.33-8.39,43.74-2.27,9-5.36,17.73-10.55,25.56-7.86,11.84-18.88,18.77-32.83,21.19-7.07,1.23-14.19.9-21.29.89q-69.61-.07-139.24-.16c-13.07,0-26.14.25-39.21.15-10.93-.07-21.21-2.64-30.29-9-8.07-5.69-13.6-13.41-17.56-22.33a123,123,0,0,1-8.12-28.12q-5-27.39-9.77-54.83c-2.66-15.26-5.19-30.55-7.79-45.82q-1.66-9.86-3.39-19.71a17.52,17.52,0,0,0-3.25-7.27,23.27,23.27,0,0,1-4.23-9.16c-1.58-7.91,4-19.82,15.25-21.18a95.6,95.6,0,0,1,11.24-.31q13.44-.06,26.87,0c1,0,1.31-.34,1.47-1.32,2-12.37,4.08-24.74,6.12-37.11.92-5.59,1.66-11.22,2.75-16.78,1.7-8.62,5.08-16.48,11.3-22.88,6-6.18,13.49-9.52,21.85-11.12,6.68-1.29,13.44-1.11,20.19-1.14,3.56,0,7.12-.08,10.66-.36a9.39,9.39,0,0,0,7.68-4.87c2.36-4,5.61-6.89,10.32-7.64a43.42,43.42,0,0,1,6.46-.33c19.07,0,38.13,0,57.2,0a15,15,0,0,1,13.81,7.93,9.47,9.47,0,0,0,8.25,5c5.47.2,10.94.26,16.42.31,7.26.06,14.45.65,21.35,3.15,12.37,4.48,20,13.39,24.06,25.69,1.74,5.3,2.44,10.81,3.33,16.29q2.43,15.07,4.92,30.14c.75,4.61,1.52,9.22,2.28,13.83C422.2,363,422.28,363.4,422.38,363.89ZM188,363.6H407.29c-.56-3.43-1.1-6.78-1.67-10.12q-3.86-22.31-7.71-44.61a24.5,24.5,0,0,0-23.22-20.45c-9-.41-18.06-.13-27.09-.1a8.51,8.51,0,0,0-7.07,3.67,15.07,15.07,0,0,1-13,6.5q-29.87-.12-59.72,0a15.1,15.1,0,0,1-13-6.5,8.51,8.51,0,0,0-7.06-3.67c-8.19-.08-16.39-.15-24.58-.12a26.4,26.4,0,0,0-5.94.68c-10,2.39-16.93,8.22-19.44,18.47-1.12,4.61-1.92,9.31-2.73,14-1.71,10-3.34,19.92-5,29.89C189.32,355.32,188.68,359.42,188,363.6Zm41,166.13h0c0,7.43-.06,14.86,0,22.3,0,4.63,2.54,7.62,6.9,8.51a16.87,16.87,0,0,0,3.09.32c9.27.07,18.54.14,27.81.16,4.75,0,9.51,0,14.26-.19s7.51-2.76,8.27-7a18.76,18.76,0,0,0,.25-3.35c.07-8.87.15-17.74.14-26.61,0-5.47,0-11-.28-16.42s-3.59-8.41-9.06-8.43q-21.1-.06-42.2,0c-5.84,0-9.15,3.33-9.21,9.17C229,515.35,229,522.54,229,529.73Zm137.24.19h0c0-7.4.06-14.79,0-22.18-.05-4.93-2.7-7.88-7.58-8.62a21.86,21.86,0,0,0-3.34-.15c-7.71,0-15.43.08-23.14.09-5.79,0-11.59-.11-17.38-.07-4.92,0-8,2.51-8.89,7.05a16.09,16.09,0,0,0-.26,3.1c-.06,9.71-.12,19.42-.11,29.13,0,4.91,0,9.83.28,14.74.2,4.14,2.78,6.87,6.87,7.61a25.35,25.35,0,0,0,4.17.37q11.81,0,23.61,0c5.48,0,11,0,16.42-.16,6.09-.15,9.31-3.4,9.37-9.47C366.31,544.22,366.26,537.07,366.26,529.92ZM180,418v0c-3.88,0-7.76,0-11.63,0-4.2,0-8.4,0-12.58.19-5.07.26-8,2.83-8.67,7.31a14.92,14.92,0,0,0,0,4.06q.9,6.47,2,12.9c1.63,9.48,3.26,19,5,28.41.92,5,4,7.45,9.07,7.47q20,0,39.92,0c6,0,9.24-3.34,9.35-9.31.09-5,.21-9.91.2-14.87q0-13.9-.25-27.81c-.07-4.34-2.56-7.29-6.61-8.08a16,16,0,0,0-3.1-.24C195.17,418,187.58,418,180,418ZM382.75,448h0c0,7.19-.07,14.38,0,21.57.07,4.9,2.83,7.88,7.67,8.55a23.08,23.08,0,0,0,3.22.16l24.58-.05c4.63,0,9.27.08,13.9,0s7.7-2.4,8.85-6.89c.12-.51.22-1,.31-1.53,2-11.4,4-22.8,5.88-34.22a64.07,64.07,0,0,0,1-9.14c.09-4.11-2.19-6.93-6.18-7.88a25.18,25.18,0,0,0-5.68-.65c-9-.05-18,0-27,0-5.83,0-11.66-.05-17.5,0-4.74,0-7.77,2.15-8.75,6.11a13.21,13.21,0,0,0-.37,3.2C382.74,434.21,382.75,441.12,382.75,448ZM290,444.79c-.11-4-.27-11.27-.5-18.54-.16-4.81-2.75-7.78-7.34-8.49a18.56,18.56,0,0,0-3-.11c-4.11,0-8.23.12-12.34.12-9.47,0-18.95-.09-28.42,0-6.14,0-9.45,3.4-9.58,9.53,0,2.24-.08,4.48-.07,6.72,0,11.63,0,23.26.08,34.89,0,5.48,2.64,8.78,7.47,9.62a17,17,0,0,0,2.86.17q20,0,39.94,0c.83,0,1.68,0,2.51-.08,4.1-.34,7.09-2.7,8-6.44a15.63,15.63,0,0,0,.36-3.68C290,461.65,290,454.86,290,444.79Zm15.24,3.15h.1c0,7.27-.05,14.55,0,21.82a8.31,8.31,0,0,0,6.69,8.51,20.64,20.64,0,0,0,4.16.37q17.87,0,35.74,0c2,0,4,0,6-.06,4.65-.23,7.84-3.07,8.32-7.71a97.23,97.23,0,0,0,.31-9.81q0-17-.1-33.93c0-5.05-2.43-8.17-6.82-9.12a13,13,0,0,0-2.86-.3q-21-.06-42-.08c-5.53,0-8.84,3.21-9,8.72C305.57,433.55,305.41,440.75,305.22,447.94Zm-92.55,81.31h0c0-1.4,0-2.8,0-4.2-.06-5.87,0-11.75-.23-17.62-.19-4.78-2.7-7.43-7.24-8.15a22.28,22.28,0,0,0-3.46-.24q-11.46-.06-22.9,0c-3.24,0-6.48,0-9.71.23-4.33.3-7.11,2.54-7.86,6.29a16.62,16.62,0,0,0-.24,4.4c.17,2.31.48,4.61.86,6.89,1.9,11.4,6.29,21.65,14.05,30.34,7,7.85,15.54,12.74,26.21,13.6,5.73.46,9.28-2.09,10.24-7.66a22.31,22.31,0,0,0,.27-3.46C212.68,542.83,212.67,536,212.67,529.25Zm195.9-30.05V499c-2,0-4,0-6,0-3.91.06-7.84,0-11.74.24-4.52.25-7.07,2.56-7.81,7a36.76,36.76,0,0,0-.42,5.84q0,11,0,22.07c0,6-.07,12.07.21,18.09.27,5.83,4.07,8.93,9.91,8.55A35.23,35.23,0,0,0,413,553.05c14.3-11.56,20.37-27.13,21.27-45,.27-5.31-2.89-8.56-8.22-8.79C420.24,499,414.4,499.2,408.57,499.2ZM179,391.56c5.5,0,9.09-3.64,9.06-9.13a9.07,9.07,0,0,0-9-8.6,8.87,8.87,0,0,0-8.78,9A8.51,8.51,0,0,0,179,391.56Zm237.1,0A8.51,8.51,0,0,0,425,383a8.87,8.87,0,0,0-8.73-9.2c-4.69-.08-9,3.9-9.06,8.44C407.09,387.75,410.65,391.46,416.11,391.56Z"
                                transform="translate(-58 -180.89)"/>
                        </g>
                    </svg>

                    <p class="absolute top-4 left-2 h-4 w-4 md:w-5 md:h-5 rounded-full bg-white flex justify-center
                       items-center text-xs md:text-sm font-semibold">
                        {{ $count_cart }}
                    </p>
                </a>
            </div>
        @endif

        <div id="sub_nav_mobile"
             class="hidden h-screen w-screen bg-yellow-500 absolute p-4">
            <div class="flex flex-col justify-center items-center h-full relative">
                <a href="{{ route('login') }}">Admin</a>
                <a href="{{ route('homepage') }}">Accueil</a>
                <a href="{{ route('menu') }}">Carte</a>
                <a href="{{ route('contact') }}">Contact</a>

                <div class="absolute top-0 right-0">
                    <button id="close_sub_nav">
                        <svg class="h-14"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden xl:block fixed top-0 z-40 w-full">
        <div class="bg-gradient-to-b from-yellow-500 to-yellow-300 h-32 grid grid-cols-2 border-b-2 border-white">
            <div class="col-span-1 grid grid-cols-5">
                <div class="xl:col-span-2 flex justify-center">
                    <div class="absolute h-52 ml-6 mt-6">
                        <img class="h-full object-cover" src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                </div>

                <div class="xl:col-span-2 flex items-center justify-start">
                    <img class="h-28 object-cover" src="{{ asset('img/title-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-span-1">
                <ul class="h-full gap-x-5 flex justify-end mr-20 items-center">
                    <li class="text-2xl text-white"><a href="{{ route('login') }}">Admin</a></li>
                    <li class="text-2xl text-white"><a href="{{ route('homepage') }}">Accueil</a></li>
                    <li class="text-2xl text-white"><a href="{{ route('menu') }}">Carte</a></li>
                    <li class="text-2xl text-white"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>

        @include('partials.navbar.navbar_sections_desktop')
    </div>
</div>


