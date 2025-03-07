@extends('layouts.main')

@section('conteudo')
    <!DOCTYPE html>
    <html lang="en">
    <link rel="icon" type="image/png" href="/build\assets\img\logocine.png">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

    </head>

    <body>
        <div>

            <section class="relative bg-[rgb(17,24,39)] text-gray-700 dark:text-white overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('/build/assets/img/section.jpg');"></div>


                <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
                    <div class="flex flex-col md:flex-row items-center justify-between">

                        <div class="w-full md:w-1/2 mb-12 md:mb-0">
                            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                                A Melhor Plataforma <br> de <br> Streaming
                            </h1>
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                <a href="#"
                                    class="bg-blue-700 text-white font-semibold px-8 py-3 rounded-full hover:bg-blue-950 transition duration-300 text-center">Comece
                                    já</a>

                            </div>
                        </div>

                        <!-- Right Side: Features -->
                        <div class="w-full md:w-1/2 md:pl-12">
                            <div
                                class="bg-[rgb(17,24,39)] bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                                <h2 class="text-2xl font-semibold mb-6">Por que o Cinelax??</h2>
                                <ul class="space-y-4">
                                    <li class="flex items-center typewriter">
                                        <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 17.25L18.38 21 15.62 13.97 22 9.88l-7.18-.66L12 2 9.18 9.22 2 9.88l6.38 4.09L5.62 21z" />
                                        </svg>
                                        <span>A melhor qualidade do mercado</span>
                                    </li>
                                    <li class="flex items-center typewriter">
                                        <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6l4-4-4-4zM4 12v6h16v-6H4z" />
                                        </svg>
                                        <span>Sempre se atualizando</span>
                                    </li>
                                    <li class="flex items-center typewriter">
                                        <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v16h16V4H4zm6 12V8l6 4-6 4z" />
                                        </svg>
                                        <span>Últimos filmes lançados!</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



        </section>







        <h3 class="flex items-center w-full">
            <span class="flex-grow bg-gray-800 rounded h-1"></span>

            <span class="flex-grow bg-gray-800 rounded h-1"></span>
        </h3>


        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-5xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                        Ainda estou aqui!</h1>
                    <p class="max-w-30xl mb-6 font-sans text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-white">O
                        filme brasileiro "Ainda Estou Aqui", dirigido por Walter Salles, fez história ao vencer o Oscar
                        de
                        Melhor Filme Internacional na 97ª cerimônia da Academia, realizada em 2 de março de 2025. Este é
                        o
                        primeiro filme brasileiro a conquistar essa categoria desde a criação do prêmio em 1957.
                        A vitória de "Ainda Estou Aqui" no Oscar representa um marco significativo para o cinema
                        brasileiro,
                        destacando a qualidade e a relevância das produções nacionais no cenário internacional.</p>
                    <div class="flex justify-center items-center ">
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900  transform transition-all duration-300 hover:translate-x-2">
                            Veja agora!
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex items-center justify-center overflow-hidden relative">

                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-40 rounded-xl">
                    </div>


                    <video class=" rounded-full w-full h-full object-cover shadow-xl scale-105 transition-all" autoplay loop
                        muted playsinline>
                        <source src="/build/assets/img/im_still_here.mp4" type="video/mp4">
                        Seu navegador não suporta vídeos.
                    </video>
                </div>


            </div>
        </section>



        <h3 class="flex items-center w-full">
            <span class="flex-grow bg-gray-800 rounded h-1"></span>

            <span class="flex-grow bg-gray-800 rounded h-1"></span>
        </h3>


        <section class="bg-white dark:bg-gray-900">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5 py-32">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <h1
                            class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-2xl md:text-2xl lg:text-5xl xl:text-6xl">

                            <span class="block text-primary-700 dark:text-primary-300 xl:inline">Flow ganha como melhor
                                animação de 2025.</span>
                        </h1>
                        <p class="mt-6 text-gray-500 dark:text-white md:text-lg lg:text-xl">
                            Na edição do Oscar de 2025, a animação Flow fez história ao ganhar o prêmio de Melhor
                            Animação. Criado inteiramente no Blender, o filme encantou o público e a crítica com sua
                            narrativa inovadora e visual impressionante. A premiação é um marco significativo para a
                            indústria de animações independentes, demonstrando o poder das ferramentas digitais e a
                            criatividade sem limites. Flow se destacou pela sua abordagem única, explorando temas
                            profundos e emocionantes com uma estética visual deslumbrante, consolidando-se como um dos
                            grandes vencedores daquela noite.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-5">
                            <div class="flex justify-center items-center  w-full">
                                <a href="#"
                                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900  transform transition-all duration-300 hover:translate-x-2">
                                    Veja agora!
                                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>


                        </div>
                    </div>
                    <div class="lg:col-span-5 flex items-center justify-center overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-40 rounded-xl">
                        </div>
                        <video class=" w-full h-full object-cover shadow-xl rounded-full " autoplay loop muted playsinline>
                            <source src="/build/assets/img/flow.mp4" type="video/mp4">
                            Seu navegador não suporta vídeos.
                        </video>
                    </div>
                </div>
            </div>


            <h3 class="flex items-center w-full">
                <span class="flex-grow bg-gray-800 rounded h-1"></span>

                <span class="flex-grow bg-gray-800 rounded h-1"></span>
            </h3>



            <div class="bg-[#111829] dark:bg-[#111829] flex relative z-20 items-center overflow-hidden">
                <div class="container mx-auto px-6 flex relative py-16">
                    <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                        <h1
                            class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-[#111829]">
                            Novidades
                            <span class="text-5xl sm:text-7xl">
                                no Cinelax!!
                            </span>
                        </h1>
                        <p class="text-2xl sm:text-2xl text-gray-700 dark:text-white font-bold leading-relaxed">
                            <i class="fas fa-film text-blue-700 mr-2 animate__animated animate__fadeInLeft"></i> Filmes
                            Novos
                            <br>
                            <i class="fas fa-mobile-alt text-white mr-2 animate__animated animate__fadeInUp"></i> Nosso
                            Aplicativo
                            <br>
                            <i class="fas fa-gift text-red-500 mr-2 animate__animated animate__zoomIn"></i> E Muito mais!
                        </p>

                        <div class="flex justify-center mt-8">
                            <a href="#"
                                class="uppercase py-2 px-4 rounded-lg bg-blue-800 border-2 border-transparent text-white text-md mr-4 font-bold font-sans hover:bg-blue-950 transition-all duration-300">
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6M9 16h6M9 8h6m6.293 1.707a1 1 0 01-.293.707L18 12.414l-1.414-1.414 1.086-1.085a1 1 0 011.415 1.415l-1.086 1.085 1.414 1.414a1 1 0 01.293-.707l.707-.707a1 1 0 000-1.415l-.707-.707z" />
                                    </svg>
                                    Alguma Sugestão? Envie Aqui
                                </li>
                            </a>
                        </div>







                        <div class="flex mt-8">

                        </div>
                    </div>
                    <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative w-full h-full">
                        <img src="/build/assets/img/controller.jpg" class="w-150 h-95 object-cover ml-70" />
                    </div>

                </div>
            </div>



            <h3 class="flex items-center w-full">
                <span class="flex-grow bg-gray-800 rounded h-1"></span>

                <span class="flex-grow bg-gray-800 rounded h-1"></span>
            </h3>

            <section class="pt-20 md:pt-40">
                <div class="container mx-auto px-8 lg:flex">
                    <div class="text-center lg:text-left lg:w-1/2">
                        <h1 class="text-4xl lg:text-5xl xl:text-2xl font-bold leading-none dark:text-white ">O site
                            está
                            sendo atualizado no momento para receber informações agora!</h1>
                        <p class="text-xl lg:text-2xl mt-6 font-serif dark:text-white">estamos sempre trabalhando para
                            melhorar a qualidade do usuário</p>

                        <p class="mt-4 dark:text-white font-sans">É sempre bom um feedback!</p>
                    </div>
                    <div class="lg:w-1/2">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 1167.52 754.06">
                            <defs>
                                <linearGradient id="a" x1="588.17" y1="805.69" x2="588.17"
                                    y2="186.69" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="gray" stop-opacity=".25"></stop>
                                    <stop offset=".54" stop-color="gray" stop-opacity=".12"></stop>
                                    <stop offset="1" stop-color="gray" stop-opacity=".1"></stop>
                                </linearGradient>
                                <linearGradient id="b" x1="568.69" y1="1179.83" x2="568.69"
                                    y2="1173.83" gradientTransform="translate(73.48 -1003.15)" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="c" x1="995.74" y1="822.32" x2="995.74"
                                    y2="622.1" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="d" x1="355.29" y1="824.58" x2="355.29"
                                    y2="603.69" gradientTransform="matrix(-1 0 0 1 965 0)" xlink:href="#a">
                                </linearGradient>
                                <linearGradient id="e" x1="463.15" y1="767.98" x2="463.15"
                                    y2="572.32" gradientTransform="matrix(-.98 .22 .22 .98 532.3 -45.53)"
                                    xlink:href="#a">
                                </linearGradient>
                            </defs>
                            <g opacity=".2">
                                <path
                                    d="M1007.26 726.43a18.25 18.25 0 01-1.73 2.67q-8.64-6.09-17.57-11.93c.12-.25.25-.51.39-.77a16.74 16.74 0 016-6.51c3.29-2 7-2.48 10-.86s4.76 4.93 4.94 8.77a16.85 16.85 0 01-2.03 8.63z"
                                    fill="#3f3d56"></path>
                                <ellipse cx="1022.06" cy="779.24" rx="14.01" ry="10.7"
                                    transform="rotate(-62.09 953.41 756.26)" fill="#3f3d56"></ellipse>
                                <ellipse cx="1030.07" cy="764.11" rx="14.01" ry="10.7"
                                    transform="rotate(-62.09 961.425 741.122)" fill="#3f3d56"></ellipse>
                                <ellipse cx="1038.09" cy="748.97" rx="14.01" ry="10.7"
                                    transform="rotate(-62.09 969.439 725.984)" fill="#3f3d56"></ellipse>
                                <ellipse cx="1046.11" cy="733.84" rx="14.01" ry="10.7"
                                    transform="rotate(-62.09 977.453 710.846)" fill="#3f3d56"></ellipse>
                                <path
                                    d="M1049.31 538.53a51.89 51.89 0 01-.78-7l27 9.08-27-14a51.4 51.4 0 0118.23-36.45l26.16 37.81-20.31-42.07a51.28 51.28 0 1148 90.35 51.23 51.23 0 01.8 11l-41.15-.33 40.52 6.67a51.32 51.32 0 01-29.84 38.69 51.28 51.28 0 11-71.23-37.73 51.28 51.28 0 0129.67-56z"
                                    fill="#4299e1"></path>
                                <path
                                    d="M1115.4 609.41a51.13 51.13 0 01-24.53 22.88 51.28 51.28 0 11-71.23-37.73c-1.99-10.92 98.46 9.76 95.76 14.85z"
                                    opacity=".1"></path>
                            </g>
                            <g opacity=".2">
                                <path
                                    d="M975.13 423.96a31 31 0 01-2.25 4.63q-15.12-8.05-30.61-15.66c.14-.43.3-.87.47-1.31a27.32 27.32 0 018.3-11.66c4.87-3.9 10.74-5.37 16-3.38s8.62 7 9.67 13.12a27.21 27.21 0 01-1.58 14.26z"
                                    fill="#3f3d56"></path>
                                <ellipse cx="985.03" cy="464.84" rx="22.69" ry="17.33"
                                    transform="rotate(-69.16 924.024 440.128)" fill="#3f3d56"></ellipse>
                                <ellipse cx="994.89" cy="438.92" rx="22.69" ry="17.33"
                                    transform="rotate(-69.16 933.888 414.207)" fill="#3f3d56"></ellipse>
                                <ellipse cx="1004.76" cy="413.01" rx="22.69" ry="17.33"
                                    transform="rotate(-69.16 943.748 388.294)" fill="#3f3d56"></ellipse>
                                <ellipse cx="1014.62" cy="387.09" rx="22.69" ry="17.33"
                                    transform="rotate(-69.16 953.612 362.373)" fill="#3f3d56"></ellipse>
                                <path
                                    d="M1005.25 113.7a83.22 83.22 0 01-2.65-11.17l45.22 9.21-46.16-17.18a83.11 83.11 0 0121.91-62l49.56 55.47-41-63.54a83 83 0 1195.09 135.6 83.51 83.51 0 013.46 17.52l-66.17 7.67 66.43 2.65a83.07 83.07 0 01-40.24 68.1 83 83 0 11-122-46.42 83 83 0 0136.52-95.94z"
                                    fill="#4299e1"></path>
                                <path
                                    d="M1125.55 214.41a82.63 82.63 0 01-34.86 41.62 83 83 0 11-122-46.42c-5.33-17.13 160.18-3.91 156.86 4.8z"
                                    opacity=".1"></path>
                            </g>
                            <g opacity=".2">
                                <path
                                    d="M178.38 510.17a37.65 37.65 0 002 5.8q19-7.29 38.43-14c-.11-.53-.22-1.07-.36-1.62a32.46 32.46 0 00-8.07-15c-5.18-5.32-11.89-7.92-18.34-6.34s-11.2 7-13.35 14.05a32.48 32.48 0 00-.31 17.11z"
                                    fill="#3f3d56"></path>
                                <ellipse cx="206.83" cy="546.21" rx="20.61" ry="26.98"
                                    transform="rotate(-13.72 -104.628 577.056)" fill="#3f3d56"></ellipse>
                                <ellipse cx="199.01" cy="514.17" rx="20.61" ry="26.98"
                                    transform="rotate(-13.72 -112.456 545.04)" fill="#3f3d56"></ellipse>
                                <ellipse cx="191.2" cy="482.14" rx="20.61" ry="26.98"
                                    transform="rotate(-13.72 -120.278 512.984)" fill="#3f3d56"></ellipse>
                                <ellipse cx="183.38" cy="450.11" rx="20.61" ry="26.98"
                                    transform="rotate(-13.72 -128.106 480.968)" fill="#3f3d56"></ellipse>
                                <path
                                    d="M188.58 139.63a97.19 97.19 0 004.78-12.79l-54.71 4.19 57-13.47a98.81 98.81 0 00-16.71-76.43l-66.68 58.24 57.77-68.93a98.72 98.72 0 10-132.2 146 99 99 0 00-6.67 20.15l76.95 18.82-78.78-6.68a98.78 98.78 0 0037.43 86.3 98.72 98.72 0 10150.76-36.79 98.73 98.73 0 00-29-118.59z"
                                    fill="#4299e1"></path>
                                <path
                                    d="M31.76 240.73a98.3 98.3 0 0035 54.3 98.72 98.72 0 10150.76-36.79c8.88-19.48-188.37-28.28-185.76-17.51z"
                                    opacity=".1"></path>
                            </g>
                            <path
                                d="M1072.54 186.69H103.8a8.64 8.64 0 00-8.63 8.65v592.89a17.43 17.43 0 0017.4 17.46h951.2a17.43 17.43 0 0017.4-17.46V195.34a8.64 8.64 0 00-8.63-8.65z"
                                transform="translate(-16.24 -72.97)" fill="url(#a)"></path>
                            <path
                                d="M1061.01 150.53v561.24a17.26 17.26 0 01-17.25 17.26H100.27a17.26 17.26 0 01-17.26-17.26V150.53z"
                                fill="#fff"></path>
                            <path d="M211.93 143.72v585.31H100.27a17.26 17.26 0 01-17.26-17.26v-568z" fill="#d7d9e1">
                            </path>
                            <path
                                d="M1061.01 125.59v24.94h-978v-24.94a8.56 8.56 0 018.56-8.56h960.88a8.56 8.56 0 018.56 8.56z"
                                fill="#ededf4"></path>
                            <circle cx="98.51" cy="133.52" r="4" fill="#fa5959" opacity=".8"></circle>
                            <circle cx="109.51" cy="133.52" r="4" fill="#fed253" opacity=".8"></circle>
                            <circle cx="120.51" cy="133.52" r="4" fill="#8ccf4d" opacity=".8"></circle>
                            <path fill="#ededf4"
                                d="M371.93 199.71h94v10h-94zM371.93 228.71h528v10h-528zM371.93 257.71h528v10h-528zM371.93 286.71h528v10h-528zM371.93 315.71h528v10h-528zM95.93 199.71h94v10h-94zM95.93 228.71h94v10h-94zM95.93 257.71h94v10h-94zM95.93 286.71h94v10h-94zM95.93 315.71h94v10h-94z">
                            </path>
                            <path transform="rotate(90 670.53 129.08)" fill="url(#b)" d="M640.17 170.69h4v6h-4z">
                            </path>
                            <path
                                d="M913 628.18a1.88 1.88 0 00-1-1.48 1.92 1.92 0 00-2.55 1.07l-9.21 19.37-2.07 76.25h3.32l1.24-76.08 10.12-17.93a1.92 1.92 0 00.15-1.2z"
                                fill="#3f3d56"></path>
                            <path
                                d="M1069 819.92a1.46 1.46 0 01-.16.19 2.67 2.67 0 01-1.14.57 11.14 11.14 0 01-2.57.43h-.26a10.65 10.65 0 01-1.49 0 7.88 7.88 0 00-1.09-.07 7.63 7.63 0 00-1.55.38 13.29 13.29 0 01-3.44.49h-4.98c-2.24 0-4.46.42-6.7.45h-.72a10.58 10.58 0 01-6.18-1.85 2.34 2.34 0 01-.81-.93 2.68 2.68 0 01-.15-1.23 2.9 2.9 0 01.75-2.06 3.22 3.22 0 011.19-.58l2.28-.72 2.44-.73.16-.05.46-.13.29-.1a4.72 4.72 0 001-.47 3.36 3.36 0 001-1c0-.08.1-.16.14-.24v-.19c-.07-.52-.13-1-.22-1.56a6.15 6.15 0 01-3.06-1.73 9.88 9.88 0 01-1.79-2.41 50.82 50.82 0 01-2.33-6.17 55.59 55.59 0 00-4.63-8.89c-1.59-2.65-3.18-5.3-5-7.8-1.2-1.65-2.49-3.24-3.68-4.9a43.31 43.31 0 01-7.07-15.46 21.46 21.46 0 00-.86-3.14c-.71-1.74-2-3.15-3-4.75a15.59 15.59 0 01-2.19-5.62c-.21-1.14-.56-2.36-1.69-2.48l-.12.24c-2.34 4.57-4.75 9.2-8.29 12.92a13.83 13.83 0 00-1.55 1.78 18.13 18.13 0 00-1 1.91 12.6 12.6 0 01-2.2 3.22 7.42 7.42 0 01-.87.74 4.87 4.87 0 01-1.37.68 3.9 3.9 0 01-.59.14.68.68 0 010 .14v.16a19.56 19.56 0 01-.76 9.92c0 .1-.07.2-.1.29-.17.47-.36.92-.56 1.37-.51 1.1-1.11 2.15-1.58 3.27-.08.19-.16.38-.23.57-1.67 4.44-1.26 9.39-1.46 14.16a15.36 15.36 0 01-.37 3.1c-.28 1.15-.73 2.34-1 3.52a6 6 0 000 2.72h-.1c-.45.17-.9.32-1.35.46v.06c.17.93.32 1.86.48 2.78a4.1 4.1 0 00.86 2.22 4.18 4.18 0 01.4.44c.33.51 0 1.19.1 1.8.09.86.89 1.59.76 2.45a1.6 1.6 0 01-1 1.15 2.82 2.82 0 01-.64.21h-.13l-.75.09a34.69 34.69 0 01-9.27.09c-.61-.1-1.21-.24-1.82-.29a12.84 12.84 0 00-2.32.1 114.47 114.47 0 01-17.07.33c-1.48-.08-3.18-.32-4-1.59a4.67 4.67 0 01-.08-3.6 3.74 3.74 0 01.5-1.26.94.94 0 01.09-.12c.76-.94 2.2-1 3.43-1l4 .12a3.59 3.59 0 001.18-.1 12.36 12.36 0 001.77-1c.77-.37 1.74-.4 2.29-1l.07-.09a3.18 3.18 0 00.28-.43l.06-.08a.35.35 0 000-.08c.51-.67 1.41-.89 2.13-1.32a1.44 1.44 0 00.31-.22l.08-.07a8.61 8.61 0 01-2-2 2.14 2.14 0 01-.46-.8 1.21 1.21 0 01.05-.68 1 1 0 01.07-.15c.28-.56.86-1.06 1.18-1.63v-.05a2.57 2.57 0 00-.13-2.79c.33-5.45 1.83-10.78 2.17-16.24.13-2.17.07-4.35.17-6.52s.34-4.29.58-6.42c.55-4.88 1.87-9.66 1.69-14.56a9 9 0 010-1.37v-.09a8.2 8.2 0 01.93-2.87 22.18 22.18 0 012-2.87c2.55-3.31 5.61-6.62 6.52-10.71a23.13 23.13 0 012.54-5.93 10.42 10.42 0 012.21-3.11 9.39 9.39 0 001.47-1.26c.68-.88.7-2.09 1.1-3.14.21-.54.53-1 .69-1.6a1 1 0 010-.17 10.86 10.86 0 00.14-1.71v-.48a17.37 17.37 0 011.42-4.74l.25-.57a17.66 17.66 0 01-5-4.32 9.87 9.87 0 01-1.2-1.82 22 22 0 01-1.45-5.48c-1-4.43-3.17-8.6-3.47-13.12a14.83 14.83 0 00-.48-4.11 8.76 8.76 0 00-.47-1c-.08-.14-.15-.28-.22-.42a.8.8 0 01-.08-.16l-.22-.41-.34.26a248.49 248.49 0 01-26.61 18.19l-.8.47a2.93 2.93 0 00-1 .86l-.09.16c-.19.39-.24.84-.4 1.25a3.38 3.38 0 01-2.31 1.84 7.13 7.13 0 01-5.24-.68c-.2-.1-.4-.21-.59-.33a6.65 6.65 0 01-.66.32 6.49 6.49 0 01-.87.33 18.21 18.21 0 01-5.11.46 15.54 15.54 0 00-5.09.56 12.82 12.82 0 01-3.27 1h-.39a5.88 5.88 0 01-1.85-.55l-.34-.15c-.17-.09-.34-.17-.51-.28a2.69 2.69 0 01-.5-.39 1.83 1.83 0 01-.47-.79 1.34 1.34 0 010-.66.39.39 0 01.14-.25.41.41 0 01.24-.06 7.5 7.5 0 011.42.12 4.66 4.66 0 00.83 0h.15a1.77 1.77 0 001.26-.7.66.66 0 00.11-.2.87.87 0 00.08-.37.29.29 0 000-.09c-.17-.08-.35-.16-.51-.25l-.25-.15h-.05a2.44 2.44 0 01-.43-.35 1.33 1.33 0 01-.21-.26 1.57 1.57 0 01-.25-.5 2.38 2.38 0 00-1 0c-.45.12-.91.39-1.36.48a1.13 1.13 0 01-.68 0c-.65-.23-.87-1-1-1.69 0-.13 0-.26-.08-.4a2.27 2.27 0 010-.78 2.84 2.84 0 011.09-1.42l1.36-1.14.1-.08a3.43 3.43 0 01-.06-.34 2 2 0 010-.77 2.86 2.86 0 011.09-1.42l3-2.53a3.52 3.52 0 011.91-1c1.09-.07 2 .83 2.78 1.55a6.15 6.15 0 003.64 1.75 5.27 5.27 0 001.93-.26l.35-.12c-.07-.15-.15-.3-.22-.46s-.24-.51-.35-.76a8.29 8.29 0 004.7-2.25c1.34-1.16 2.49-2.53 3.84-3.67s3.13-2.17 4.61-3.36c3.44-2.79 5.73-6.89 9.41-9.35 1.27-.86 2.75-1.54 3.62-2.82.27-.39.47-.84.75-1.23.88-1.24 2.39-1.81 3.64-2.67a18 18 0 003.35-3.34c.72-.87 1.45-1.74 2.13-2.63.64-1.18 1.17-2.41 1.84-3.58a17.79 17.79 0 012-2.77c.17-.33.34-.66.53-1s.32-.55.49-.81.25-.37.38-.55c-.38-.67-.74-1.25-.91-1.49l-.08-.12a12.93 12.93 0 00-1.17-1.09q-.66-.11-1.29-.27a12.09 12.09 0 01-8.89-11.68 12 12 0 011.32-5.46c.17-.34.36-.66.56-1a5.31 5.31 0 01-.55-.23 2.12 2.12 0 01-.77-.63 1.84 1.84 0 01-.32-.81 4.07 4.07 0 01.3-2 9 9 0 01.38-.9v-.05a11.54 11.54 0 019.75-6.18c4.26-.17 8.4 1.82 11.76 4.68a15.83 15.83 0 012.87 2.67 17 17 0 012.77 8.64 13.11 13.11 0 010 2.87 6.81 6.81 0 01-.2 1c-.06.2-.13.39-.2.58a4.08 4.08 0 01-.19.42 2.93 2.93 0 01-.21.39v.05l-.06.09.11.24a2.26 2.26 0 00.11.22c.84.07 1.6.18 2.44.25a5.18 5.18 0 011.18.18 8.06 8.06 0 012.15 1.34c1.73 1.22 3.85 1.79 5.54 3.05 2.51 1.86 3.75 4.92 5.24 7.67 2 3.68 5.23 6.81 6.66 10.75l1.95 5.35a82.1 82.1 0 004.27 10.3c2.4 4.59 5.66 8.72 7.59 13.52a2.13 2.13 0 001 1.12 87.69 87.69 0 017 11.68 22.58 22.58 0 012.38 6.77 16.09 16.09 0 01-.52 6.32 29.11 29.11 0 01-1.21 3.59 6 6 0 00-.41 1.28.68.68 0 000 .14 12.11 12.11 0 00.3 2.38 4.38 4.38 0 01-.21 1.9c0 .09-.07.19-.11.28a11.08 11.08 0 00-.65 1.51v.19a7.52 7.52 0 00.42 2.71 35.93 35.93 0 01.41 9.94c-.1 1.65 1.24 3 2.36 4.21a44.61 44.61 0 015.25 7.64 24.23 24.23 0 012.15 4.29 37.92 37.92 0 011.15 5.28c1.06 5.47 4.51 10.3 5.45 15.79a14.16 14.16 0 003.2 6.79 13.91 13.91 0 011.38 1.67 6.73 6.73 0 01.69 1.49 11 11 0 01.56 3.78 6 6 0 00.11 1.84c.39 1.27 1.78 2 2.36 3.17s.17 2.73.39 4.09a4.48 4.48 0 001.64 2.76c-.33.29-.68.56-1 .82a4.08 4.08 0 01.86.9 3.49 3.49 0 01.39.74c.55 1.27.57 2.78 1 4.12a2.94 2.94 0 01.29 1.73 1.94 1.94 0 00-.14.51c0 .38.39.62.54 1a1 1 0 01-.18.98z"
                                transform="translate(-16.24 -72.97)" fill="url(#c)"></path>
                            <path
                                d="M965.01 585.33a26.18 26.18 0 007-3.53l7.71-4.91a6.72 6.72 0 01-5-3.46 17.7 17.7 0 01-1.88-6 31.35 31.35 0 00-8.86 5.8c-1.07.92-3.32 2.3-3.65 3.73s1.76 2.59 2.57 3.55c.31.35 2.93 4.6 2.11 4.82z"
                                fill="#fbbebe"></path>
                            <path
                                d="M965.01 585.33a26.18 26.18 0 007-3.53l7.71-4.91a6.72 6.72 0 01-5-3.46 17.7 17.7 0 01-1.88-6 31.35 31.35 0 00-8.86 5.8c-1.07.92-3.32 2.3-3.65 3.73s1.76 2.59 2.57 3.55c.31.35 2.93 4.6 2.11 4.82z"
                                opacity=".1"></path>
                            <path
                                d="M922.86 625.9a8.52 8.52 0 01-4.33 1.31 6.32 6.32 0 01-3.64-1.74c-.81-.72-1.68-1.62-2.77-1.54a3.57 3.57 0 00-1.91 1l-3 2.52a2.09 2.09 0 00-1 2.57c.14.67.36 1.46 1 1.69s1.35-.27 2-.45a2.39 2.39 0 012.35.69 1.41 1.41 0 01.4.9c0 .75-.84 1.24-1.59 1.28s-1.5-.21-2.25-.16a.41.41 0 00-.24.06.4.4 0 00-.14.24 1.57 1.57 0 00.48 1.45 4.19 4.19 0 001.35.81 5.49 5.49 0 001.85.55c1.27.08 2.44-.63 3.65-1a16 16 0 015.08-.56 17.74 17.74 0 005.1-.45 5.77 5.77 0 003.86-3.13.81.81 0 00.07-.48.82.82 0 00-.35-.41c-2.31-1.71-3.25-3.79-5.85-5z"
                                fill="#fbbebe"></path>
                            <path
                                d="M922.86 625.9a8.52 8.52 0 01-4.33 1.31 6.32 6.32 0 01-3.64-1.74c-.81-.72-1.68-1.62-2.77-1.54a3.57 3.57 0 00-1.91 1l-3 2.52a2.09 2.09 0 00-1 2.57c.14.67.36 1.46 1 1.69s1.35-.27 2-.45a2.39 2.39 0 012.35.69 1.41 1.41 0 01.4.9c0 .75-.84 1.24-1.59 1.28s-1.5-.21-2.25-.16a.41.41 0 00-.24.06.4.4 0 00-.14.24 1.57 1.57 0 00.48 1.45 4.19 4.19 0 001.35.81 5.49 5.49 0 001.85.55c1.27.08 2.44-.63 3.65-1a16 16 0 015.08-.56 17.74 17.74 0 005.1-.45 5.77 5.77 0 003.86-3.13.81.81 0 00.07-.48.82.82 0 00-.35-.41c-2.31-1.71-3.25-3.79-5.85-5z"
                                opacity=".1"></path>
                            <path
                                d="M971.39 581.7a5 5 0 00-4.38-.53 9.43 9.43 0 00-3.78 2.52 17.24 17.24 0 00-2.66 3.52c-.71 1.23-1.26 2.54-1.95 3.78a39.41 39.41 0 01-4.5 6.11 17.55 17.55 0 01-3.35 3.32c-1.24.86-2.75 1.43-3.63 2.66-.28.39-.48.83-.76 1.23-.86 1.26-2.33 1.94-3.61 2.79-3.68 2.45-6 6.52-9.39 9.29-1.48 1.19-3.15 2.13-4.61 3.35s-2.5 2.49-3.83 3.64a8.2 8.2 0 01-4.7 2.23 24 24 0 004.6 7.24c2 2 5 3.35 7.8 2.55a3.39 3.39 0 002.31-1.83 7.56 7.56 0 01.48-1.41 3 3 0 011.05-.85 247.16 247.16 0 0031.54-21.86c2.67-2.17 5.31-4.11 8-6.2a17.51 17.51 0 002.71-2.37 9 9 0 001.09-9.92 23.75 23.75 0 00-2.51-3.41 30.08 30.08 0 00-5.92-5.85z"
                                fill="#4299e1"></path>
                            <path
                                d="M971.39 581.7a5 5 0 00-4.38-.53 9.43 9.43 0 00-3.78 2.52 17.24 17.24 0 00-2.66 3.52c-.71 1.23-1.26 2.54-1.95 3.78a39.41 39.41 0 01-4.5 6.11 17.55 17.55 0 01-3.35 3.32c-1.24.86-2.75 1.43-3.63 2.66-.28.39-.48.83-.76 1.23-.86 1.26-2.33 1.94-3.61 2.79-3.68 2.45-6 6.52-9.39 9.29-1.48 1.19-3.15 2.13-4.61 3.35s-2.5 2.49-3.83 3.64a8.2 8.2 0 01-4.7 2.23 24 24 0 004.6 7.24c2 2 5 3.35 7.8 2.55a3.39 3.39 0 002.31-1.83 7.56 7.56 0 01.48-1.41 3 3 0 011.05-.85 247.16 247.16 0 0031.54-21.86c2.67-2.17 5.31-4.11 8-6.2a17.51 17.51 0 002.71-2.37 9 9 0 001.09-9.92 23.75 23.75 0 00-2.51-3.41 30.08 30.08 0 00-5.92-5.85z"
                                opacity=".1"></path>
                            <path
                                d="M953.58 735.44a6.66 6.66 0 00-2.12 1.32c-.17.21-.28.47-.46.67-.55.65-1.53.68-2.29 1.05a13.55 13.55 0 01-1.77 1 3.94 3.94 0 01-1.19.09l-4-.12c-1.28 0-2.78 0-3.52 1.07a3.74 3.74 0 00-.5 1.26 4.62 4.62 0 00.08 3.58c.78 1.25 2.48 1.49 4 1.57a112.87 112.87 0 0017-.33 13.74 13.74 0 012.31-.09 18.16 18.16 0 011.82.29 35 35 0 009.26-.09 4.71 4.71 0 001.53-.33 1.58 1.58 0 001-1.14c.13-.86-.67-1.58-.76-2.44-.06-.61.23-1.28-.1-1.79a2.72 2.72 0 00-.4-.43 4.09 4.09 0 01-.85-2.21l-.75-4.28a1.27 1.27 0 00-.34-.8 1.19 1.19 0 00-.52-.21c-3.15-.72-6.39-.06-9.54.34a26.53 26.53 0 01-4.88.24c-.7 0-1-.13-1.5.33s-.85 1.04-1.51 1.45zM1029.84 740.56a6.58 6.58 0 01-1.77.69q-2.44.72-4.87 1.49a3.22 3.22 0 00-1.19.58 2.86 2.86 0 00-.75 2.05 2.66 2.66 0 00.15 1.22 2.39 2.39 0 00.81.92 10.85 10.85 0 006.61 1.84c2.33 0 4.64-.39 7-.45 2.82-.08 5.71.32 8.41-.47a8.12 8.12 0 011.6-.39 8 8 0 011.09.07 11.39 11.39 0 004.31-.39 2.65 2.65 0 001.15-.57 1.09 1.09 0 00.31-1.17c-.15-.33-.53-.58-.54-1a1.94 1.94 0 01.14-.51 2.91 2.91 0 00-.29-1.72c-.54-1.6-.45-3.44-1.41-4.83a6.14 6.14 0 00-4.38-2.18 12.21 12.21 0 00-4.09.12c-1.51.32-2.92 1-4.41 1.43a14.59 14.59 0 01-5.3.5c-1.19-.1-.78.09-1.18 1.08a3.49 3.49 0 01-1.4 1.69z"
                                fill="#3f3d56"></path>
                            <circle cx="963.62" cy="567.57" r="12.02" fill="#fbbebe"></circle>
                            <path
                                d="M1050.76 736.26c-3.73 3.21-8.77 4.61-13.68 4.66a11.18 11.18 0 01-6-1.28c-.12-.68-.17-1.41-.3-2.09a7.66 7.66 0 01-4.84-4.12 50.23 50.23 0 01-2.33-6.13 55.1 55.1 0 00-4.63-8.84c-1.58-2.63-3.17-5.26-5-7.74-1.2-1.65-2.49-3.22-3.67-4.87a43 43 0 01-7.07-15.36 19.45 19.45 0 00-.86-3.12 30.94 30.94 0 00-3-4.72 15.51 15.51 0 01-2.19-5.59c-.21-1.13-.55-2.35-1.69-2.47-2.38 4.63-4.81 9.32-8.4 13.08a12.85 12.85 0 00-1.55 1.76 17.34 17.34 0 00-1 1.91 12 12 0 01-2.19 3.2 5.13 5.13 0 01-2.83 1.54 19.26 19.26 0 01-1.36 11.81c-.5 1.1-1.1 2.14-1.57 3.25-1.93 4.55-1.49 9.7-1.69 14.64a15.07 15.07 0 01-.36 3.08c-.51 2-1.54 4.18-1 6.2-5.2 2-11 1.86-16.47 1a7.9 7.9 0 01-3.07-.93 8.57 8.57 0 01-2-2 2.14 2.14 0 01-.46-.8c-.21-.95.84-1.64 1.32-2.48a2.55 2.55 0 00-.11-2.82c.33-5.43 1.83-10.73 2.16-16.15.14-2.16.08-4.32.18-6.48s.33-4.26.57-6.38c.55-4.84 1.88-9.59 1.69-14.46a8.38 8.38 0 011-4.31 21.06 21.06 0 012-2.85c2.54-3.29 5.6-6.58 6.51-10.64a23 23 0 012.53-5.89 10.41 10.41 0 012.22-3.09 9.79 9.79 0 001.46-1.26c.68-.87.7-2.08 1.11-3.12a17.2 17.2 0 00.67-1.59 8.9 8.9 0 00.19-1.86 17.14 17.14 0 011.72-5.78 17.67 17.67 0 01-5-4.29 10.39 10.39 0 01-1.21-1.81 22.74 22.74 0 01-1.45-5.44c-1-4.41-3.15-8.55-3.46-13a14.73 14.73 0 00-.48-4.09 13.69 13.69 0 00-.77-1.59 6.4 6.4 0 01-.65-1.61c-.27-1.22.1-2.5 0-3.74a27.21 27.21 0 00-.8-3.2 15.36 15.36 0 01-.12-4.23 35.12 35.12 0 00.32-5 19.36 19.36 0 015.26-14.89l.1-.1c.79-.81 1.65-1.56 2.37-2.44 1-1.17 1.67-2.56 2.68-3.7.45-.51 1-1 1.4-1.48a12.05 12.05 0 011.34-1.51 2.08 2.08 0 011.88-.5 4.92 4.92 0 00.57 1.76c.86.07 1.63.19 2.48.26a5.18 5.18 0 011.18.18 7.78 7.78 0 012.15 1.33c1.72 1.21 3.84 1.78 5.53 3 2.51 1.84 3.75 4.89 5.23 7.62 2 3.66 5.23 6.77 6.66 10.68q1 2.67 1.94 5.32a81.9 81.9 0 004.27 10.24c2.4 4.55 5.65 8.66 7.57 13.43a2.15 2.15 0 001 1.11 87.55 87.55 0 017 11.61 22.06 22.06 0 012.37 6.73c.46 3.34-.46 6.72-1.72 9.85a4.91 4.91 0 00-.43 1.41 11.22 11.22 0 00.3 2.36 4.46 4.46 0 01-.32 2.17 9.86 9.86 0 00-.65 1.5 6.41 6.41 0 00.39 2.88 35.5 35.5 0 01.4 9.88c-.09 1.64 1.25 3 2.36 4.18a44.61 44.61 0 015.25 7.59 25 25 0 012.14 4.26 37.36 37.36 0 011.16 5.26c1 5.43 4.5 10.23 5.43 15.68a14 14 0 003.2 6.74 14.56 14.56 0 011.38 1.67 6.2 6.2 0 01.68 1.48 10.94 10.94 0 01.57 3.76 5.35 5.35 0 00.11 1.83c.38 1.26 1.78 2 2.35 3.15s.18 2.71.4 4.06a4.32 4.32 0 001.63 2.73z"
                                fill="#4299e1"></path>
                            <path
                                d="M925.35 622.17a8.55 8.55 0 01-4.33 1.31 6.29 6.29 0 01-3.64-1.74c-.82-.72-1.69-1.62-2.77-1.54a3.54 3.54 0 00-1.91 1l-3 2.52a2.77 2.77 0 00-1.08 1.41 2.68 2.68 0 00.07 1.16c.13.67.36 1.46 1 1.69s1.35-.27 2-.45a2.37 2.37 0 012.35.69 1.36 1.36 0 01.4.9c0 .75-.83 1.25-1.59 1.28s-1.49-.21-2.24-.16a.42.42 0 00-.25.06.45.45 0 00-.14.24 1.6 1.6 0 00.54 1.49 4.57 4.57 0 001.36.82 5.73 5.73 0 001.84.54c1.28.08 2.45-.63 3.65-1a15.85 15.85 0 015.09-.57 17.77 17.77 0 005.1-.45 5.76 5.76 0 003.85-3.13.68.68 0 00.07-.48.8.8 0 00-.34-.41c-2.32-1.71-3.26-3.79-5.86-5z"
                                fill="#fbbebe"></path>
                            <path
                                d="M957.76 560.19a10.1 10.1 0 00-2 .87 3.46 3.46 0 01-2.83-.16 2.12 2.12 0 01-.77-.63 3 3 0 010-2.79 11.39 11.39 0 0110.15-7.08c4.25-.17 8.39 1.81 11.74 4.65a16.43 16.43 0 012.67 2.79 16.9 16.9 0 012.77 8.59 11.24 11.24 0 01-.26 3.84 4.68 4.68 0 01-2.17 2.94 4.33 4.33 0 01-3.81-.17 15.45 15.45 0 01-3.25-2.37 5 5 0 00-1.62-1 1.68 1.68 0 00-1.76.42c-.55.67-.42 1.76-.92 2.48a2.74 2.74 0 01-2.44.82 2.79 2.79 0 01-2.32-.78 2.9 2.9 0 01-.23-2.37 7.56 7.56 0 00.41-2.43c-.17-1.64-1.62-2.68-2.07-4.2-.29-1 .36-1.42.29-2.32a1.3 1.3 0 00-1.58-1.1z"
                                fill="#3f3d56"></path>
                            <path
                                d="M995.53 674.49v.1c-2.38 4.63-4.81 9.32-8.4 13.08a12.85 12.85 0 00-1.55 1.76 17.34 17.34 0 00-1 1.91 12 12 0 01-2.19 3.2l-3 1.5 9.53-49.73zM981.68 599.22a17.51 17.51 0 01-2.71 2.37c-2.74 2.09-5.38 4-8 6.2q-3.23 2.63-6.52 5.13a6.4 6.4 0 01-.65-1.61c-.27-1.22.1-2.5 0-3.74a27.21 27.21 0 00-.8-3.2 15.36 15.36 0 01-.12-4.23 35.12 35.12 0 00.32-5 19.36 19.36 0 015.26-14.89l.1-.1a7.77 7.77 0 011.41-.63 5 5 0 014.38.53 29.86 29.86 0 016 5.86 23.12 23.12 0 012.51 3.4 9 9 0 01-1.18 9.91z"
                                opacity=".1"></path>
                            <path
                                d="M973.88 577.97a5 5 0 00-4.39-.53 9.46 9.46 0 00-3.77 2.52 17.28 17.28 0 00-2.67 3.52c-.7 1.23-1.26 2.54-1.94 3.78a38.84 38.84 0 01-4.51 6.11 17.22 17.22 0 01-3.34 3.32c-1.25.86-2.76 1.43-3.64 2.66-.28.39-.48.83-.75 1.23-.87 1.26-2.34 1.94-3.62 2.79-3.67 2.45-6 6.52-9.38 9.29-1.48 1.19-3.15 2.13-4.61 3.35s-2.5 2.49-3.84 3.64a8.15 8.15 0 01-4.69 2.23 24 24 0 004.59 7.24c2 2 5.05 3.35 7.81 2.55a3.38 3.38 0 002.3-1.83 8.39 8.39 0 01.49-1.41 3 3 0 011.05-.85 247.87 247.87 0 0031.54-21.86c2.67-2.17 5.31-4.11 8-6.2a17.06 17.06 0 002.71-2.37 9 9 0 001.1-9.92 22.49 22.49 0 00-2.52-3.4 29.81 29.81 0 00-5.92-5.86z"
                                fill="#4299e1"></path>
                            <g opacity=".1">
                                <path
                                    d="M964.07 571.7a2.76 2.76 0 01-2.32-.78 2.9 2.9 0 01-.23-2.37 7.5 7.5 0 00.41-2.42c-.17-1.65-1.62-2.68-2.07-4.21-.29-1 .36-1.42.29-2.32a1.31 1.31 0 00-1.55-1.07 10.1 10.1 0 00-2 .87 3.46 3.46 0 01-2.83-.15 2.35 2.35 0 01-.77-.63 3 3 0 010-2.8v-.09a10.53 10.53 0 00-.86 1.75 3 3 0 000 2.79 2.12 2.12 0 00.77.63 3.46 3.46 0 002.85.13 10.1 10.1 0 012-.87 1.3 1.3 0 011.55 1.07c.07.9-.58 1.32-.29 2.32.45 1.52 1.9 2.56 2.07 4.2a7.56 7.56 0 01-.41 2.43 2.9 2.9 0 00.23 2.37 2.79 2.79 0 002.32.78 2.74 2.74 0 002.44-.82 3.38 3.38 0 00.45-1.27 3.53 3.53 0 01-2.05.46zM977.86 571.55a4.31 4.31 0 01-3.8-.16 16.54 16.54 0 01-3.3-2.36 4.73 4.73 0 00-1.61-1 1.68 1.68 0 00-1.76.42 3.24 3.24 0 00-.52 1.4 1.75 1.75 0 011.45-.16 5 5 0 011.62 1 15.45 15.45 0 003.25 2.37 4.33 4.33 0 003.81.17 4.63 4.63 0 002.13-2.8 3.76 3.76 0 01-1.27 1.12z">
                                </path>
                            </g>
                            <circle cx="874.73" cy="737.28" r="12.43" fill="#3f3d56"></circle>
                            <circle cx="874.73" cy="737.28" r="12.43" opacity=".1"></circle>
                            <circle cx="874.73" cy="737.28" r="7.87" fill="#65617d"></circle>
                            <circle cx="874.73" cy="737.28" r="7.87" opacity=".1"></circle>
                            <path d="M865.19 717.8l8.16 18.44a1.58 1.58 0 002.87.06l9.7-19.75z" fill="#3f3d56"></path>
                            <path d="M865.19 717.8l8.16 18.44a1.58 1.58 0 002.87.06l9.7-19.75z" opacity=".1"></path>
                            <circle cx="797.23" cy="737.28" r="12.43" fill="#3f3d56"></circle>
                            <circle cx="797.23" cy="737.28" r="12.43" opacity=".1"></circle>
                            <circle cx="797.23" cy="737.28" r="7.87" fill="#65617d"></circle>
                            <circle cx="797.23" cy="737.28" r="7.87" opacity=".1"></circle>
                            <path d="M787.7 717.8l8.16 18.44a1.58 1.58 0 002.87.06l9.69-19.75z" fill="#3f3d56"></path>
                            <path d="M787.7 717.8l8.16 18.44a1.58 1.58 0 002.87.06l9.69-19.75z" opacity=".1"></path>
                            <path
                                d="M915.07 629.03a1.86 1.86 0 00-1-1.48 1.92 1.92 0 00-2.55 1.07l-7.13 17.71-2.07 79.57h3.31l1.24-79.4 8.06-16.27a1.91 1.91 0 00.14-1.2z"
                                fill="#3f3d56"></path>
                            <path fill="#4299e1" d="M768.43 719.66l11.19-7.04 120.8-1.04 3.11 8.08h-135.1z"></path>
                            <path fill="#3f3d56" d="M768.43 727.12v-7.46l137.29-1.32-.13 5.05H770.91v3.73h-2.48z">
                            </path>
                            <circle cx="785.83" cy="741.63" r="12.43" fill="#3f3d56"></circle>
                            <circle cx="785.83" cy="741.63" r="7.87" fill="#65617d"></circle>
                            <path d="M776.3 722.15l8.16 18.44a1.58 1.58 0 002.87.06l9.69-19.74z" fill="#3f3d56"></path>
                            <circle cx="882.39" cy="741.63" r="12.43" fill="#3f3d56"></circle>
                            <circle cx="882.39" cy="741.63" r="7.87" fill="#65617d"></circle>
                            <path d="M872.86 722.15l8.16 18.44a1.58 1.58 0 002.87.06l9.69-19.74z" fill="#3f3d56">
                            </path>
                            <path fill="#ededf4" d="M787.93 633.71h82v82h-82z"></path>
                            <path
                                d="M804.61 669.51h13.9v20.84h-13.9zm17.37-10.42h13.89v31.26h-13.89zm17.37 17.36h13.89v13.9h-13.89z"
                                fill="#4299e1"></path>
                            <path fill="#d7d9e1" d="M801.93 551.71h82v82h-82z"></path>
                            <path
                                d="M829.03 610.08h27.79v5.21h-27.79zm13.9-13.89a3.48 3.48 0 000-6.95 3.83 3.83 0 00-1 .13l-7.17-5.28-.43.38 5.31 7.24a3.29 3.29 0 00-.16 1 3.47 3.47 0 003.45 3.48z"
                                fill="#4299e1"></path>
                            <path
                                d="M842.93 570.14a22.57 22.57 0 00-17.79 36.47h6.38l.43-.44 2.4-2.39-2.48-2.49-2.4 2.39a17.25 17.25 0 01-3.82-9.23h3.38v-3.42h-3.38a17.25 17.25 0 013.82-9.23l2.4 2.39 2.48-2.49-2.39-2.39a17.28 17.28 0 019.23-3.82v3.38h3.47v-3.38a17.25 17.25 0 019.23 3.82l-2.39 2.39 2.49 2.49 2.4-2.39a17.33 17.33 0 013.82 9.23h-3.39v3.47h3.39a17.33 17.33 0 01-3.82 9.23l-2.4-2.39-2.49 2.49 2.4 2.39.44.44h6.42a22.58 22.58 0 00-17.79-36.47z"
                                fill="#4299e1"></path>
                            <path opacity=".1" d="M373.93 362.71h82v82h-82z"></path>
                            <path fill="#ededf4" d="M371.93 360.71h82v82h-82z"></path>
                            <path
                                d="M404.24 380.88h6.95v41.68h-6.95zm-10.42 29.52h6.94v12.16h-6.95zm20.84-6.95h7v19.11h-7zm10.42-10.42h6.95v29.53h-6.95z"
                                fill="#4299e1"></path>
                            <path opacity=".1" d="M817.93 361.71h82v82h-82z"></path>
                            <path fill="#ededf4" d="M815.93 359.71h82v82h-82z"></path>
                            <path
                                d="M870.32 392.28l-9.47 14.48a5.13 5.13 0 011.17 3.28 5.21 5.21 0 01-10.42 0 6.12 6.12 0 01.09-1l-6.25-3.64a5.19 5.19 0 01-6.18.78l-6.65 6.23v6.21a4.65 4.65 0 004.63 4.64h39.37a4.66 4.66 0 004.64-4.64v-23.03l-6.36-4.23a5.23 5.23 0 01-4.57.92z"
                                fill="#4299e1"></path>
                            <path
                                d="M841.83 396.48a5.21 5.21 0 015.21 5.21v.67l6.52 3.65a5.2 5.2 0 013.3-1.18 5.76 5.76 0 011.13.12l9.49-14.69a5.16 5.16 0 01-1-3 5.21 5.21 0 0110.42 0 5.52 5.52 0 01-.14 1.23l4.49 3v-8.69a4.66 4.66 0 00-4.64-4.64h-39.37a4.65 4.65 0 00-4.63 4.64v24.89l4.34-4.16a5.2 5.2 0 014.88-7z"
                                fill="#4299e1"></path>
                            <path opacity=".1" d="M595.93 365.71h82v82h-82z"></path>
                            <path fill="#ededf4" d="M593.93 363.71h82v82h-82z"></path>
                            <path
                                d="M621.03 422.08h27.79v5.21h-27.79zm13.9-13.89a3.5 3.5 0 000-7 3.83 3.83 0 00-1 .13l-7.17-5.23-.43.38 5.31 7.24a3.29 3.29 0 00-.16 1 3.47 3.47 0 003.45 3.48z"
                                fill="#4299e1"></path>
                            <path
                                d="M634.93 382.14a22.57 22.57 0 00-17.79 36.47h6.38l.43-.44 2.4-2.39-2.48-2.49-2.4 2.39a17.25 17.25 0 01-3.82-9.23h3.38v-3.42h-3.38a17.25 17.25 0 013.82-9.23l2.4 2.39 2.48-2.49-2.39-2.39a17.28 17.28 0 019.23-3.82v3.38h3.47v-3.38a17.25 17.25 0 019.23 3.82l-2.39 2.39 2.49 2.49 2.4-2.39a17.33 17.33 0 013.82 9.23h-3.39v3.47h3.39a17.33 17.33 0 01-3.82 9.23l-2.4-2.39-2.49 2.49 2.4 2.39.44.44h6.42a22.58 22.58 0 00-17.79-36.47z"
                                fill="#4299e1"></path>
                            <path opacity=".1" d="M561.93 494.71h82v82h-82z"></path>
                            <path fill="#ededf4" d="M554.93 488.71h82v82h-82z"></path>
                            <path
                                d="M605.65 515.12l5.57 5.56-11.86 11.88-9.73-9.73-18 18.05 3.43 3.43 14.59-14.59 9.73 9.73 15.31-15.3 5.57 5.57v-14.6z"
                                fill="#4299e1"></path>
                            <path
                                d="M557.71 820c.59-2.52 1-4.73 1-4.73a9.73 9.73 0 011.09-4.8v-5.75a16.92 16.92 0 00-1.27-2.65c-.92-1.59 0-7.43 0-7.43s3.38-8.22 2.55-13.43S568 758 568 758a22.48 22.48 0 00-.74-5.12 4.4 4.4 0 01-.09-1.08v-.13c.11-3.44 2.83-9.88 2.83-9.88l-.36-12.29s-1.74-7.25 1.1-17c1-3.39 1.62-6.11 2-8.2 0-.24.09-.47.13-.69-5.83-.89-10.28-1.63-10.28-1.63s3.38-14.14 5.66-16.62 4.11-10.25 4.11-10.25 1.19-10-.73-12.91-2.19-8-2.19-8-4.39-3.18-4.94-4.59a23.8 23.8 0 01-1.46-6.28c0-1.68.55-3.18.37-4.07s1.28-4.24.55-5.83a4.38 4.38 0 01-.3-1.54v.11a21.42 21.42 0 01.39-4.15 11.7 11.7 0 014.33-2.32l.1-.38.25-1a4.92 4.92 0 01.43-.26v-1.79l-.69-3.23c-1.34-5.61 6.14-6.45 6.14-6.45a3.94 3.94 0 012.13-1.86c1.51-.53.25 8.44-.46 9a33.77 33.77 0 00-3 4.62l-.13.23a3.41 3.41 0 01.34.35l-.28 2v.3a8.25 8.25 0 011.19 2 4.36 4.36 0 00-1.1 3.18 10 10 0 01-.45 3.89c.08-.09 1.05-1.14 2-.88s3.65 1.06 3.65 1.06 2 .35 1.83.8 1.37 2.38 1.37 2.38l5.4-5.11c.05-.16.11-.31.15-.47a11.68 11.68 0 00.47-2.24 11.86 11.86 0 01-1.72-.55 3.59 3.59 0 01-1.5-1 5.82 5.82 0 01-.87-2.32 32.45 32.45 0 00-2-4.47 14.54 14.54 0 01-1.08-8 5.27 5.27 0 01.83-2.35c.88-1.22 2.48-1.71 3.64-2.68s1.92-2.44 3.27-3.17a6.5 6.5 0 014.1-.35 21.86 21.86 0 017.65 2.78 3.87 3.87 0 002.56.84 3.44 3.44 0 001.85-1.35v-.08l.06-.07a9.57 9.57 0 01.84 4v.65a1.79 1.79 0 000 .23 1.09 1.09 0 000 .18.9.9 0 000 .28 2 2 0 00.51.73 4.41 4.41 0 01.44.6c0-.07-.05-.15-.08-.22a3.13 3.13 0 01.56 1.7 1.7 1.7 0 01-.4 1.22 6.67 6.67 0 01-.88.71 10.76 10.76 0 01.16 1.8 10.47 10.47 0 01-5.09 8.91l-.18.46a12.81 12.81 0 00-1 5.89c0 .14 0 .28.06.43l.2.22s8.91.09 11-1.81 5.3 4.64 5.3 4.64 3.19.62 3.83 0 4.39-.09 4.39-.09a8 8 0 015.57-2 16.34 16.34 0 014.09-2.27h.1a4.49 4.49 0 012-.25s4.38-3.63 5.66-5.57 7.37-9.16 7.4-9.2v-.34l.07-1.06a3.43 3.43 0 00.55 0c0-.1.07-.23.12-.36a20.24 20.24 0 011.29-3s0-1.33-.38-1.66.16-5.2.16-5.2 4-9.23 7.49-2.34c0 0 6.69 4.46 1.07 9.66 0 0-2.24 1.08-2.56 1.94-.2.56-1 2.12-1.48 3.16l-.22.46h.06l-.08.87v.34c1.06.6 1.78 1.19 1.6 1.65a10.36 10.36 0 00-.64 2.38s-7.76 9.73-8.76 13.88c0 0-20.83 12.38-27.68 13.26l1.19 6.19s.36 3.71.27 5 .82 7.34.82 7.34 1.19 8.84 2.2 10.08.82 6.54.82 6.54a44 44 0 001.37 7.51 19.23 19.23 0 01.27 7.52s3.47 7.95-4.84 2.56c0 0-4.08-.25-8.78-.41v2.42c.06 4.55.09 10.83-.12 15.58-.36 8.4-2.92 25-2.92 25v8.35a11.11 11.11 0 01.24 2.39 15.51 15.51 0 01-2.25 8.36l-.64 5.57a21.82 21.82 0 00-1.53 5.86 2.83 2.83 0 00.07.53 4 4 0 01.07.85c.08 2.53-1.44 8.58-1.44 8.58s-.09 6.1-1 6.46 1 3.51 1.59 4.43a.85.85 0 000-.17l.11.18a4.25 4.25 0 01.28 1.55 2.21 2.21 0 01-1 2.14c-1.74 1.06-2.67 1.94-1.2 2.3a13.65 13.65 0 011.61.34 1.8 1.8 0 00.08-.21 1 1 0 01.6 1.07 4.56 4.56 0 01-.54 2.07 21.84 21.84 0 01-2.48 4.51l-.7-.08a3.69 3.69 0 00.41.75 2.89 2.89 0 001 .92 3.32 3.32 0 001.25.43 3.52 3.52 0 012.59 1.26c.91 1.17 1.48 2.78-.32 4.19l-6.53 2.25s-11.24 1.46-10.64-1.06 1-4.73 1-4.73a9.93 9.93 0 01.91-4.47c.12-.22.25-.44.4-.66h-.4s-.82-5.57-1.92-6.63c-.25-.25-.31-.43-.25-.58-.11-.3.17-.48.54-.58a1.43 1.43 0 01.08.22 5.47 5.47 0 011.09-.12s.37-2.92-.82-4a1.15 1.15 0 01-.23-.87 4.9 4.9 0 01.12-1.18l.05.06a43.41 43.41 0 012.62-6.85s.09-2.65-.64-3.71.09-14.41.09-14.41-.27-6.46.55-9.46-1-6.54-1-6.54v-.2s0-.4.11-1v.06c.18-1.71.53-4.8.79-6.23.36-2-.09-11.76-.09-11.76l-1.51-4.06-2.92 7.16-3.08 9.54a8.12 8.12 0 00-1.6 4.07v.94a5.72 5.72 0 01-1 3.4s-.82 4.51-2.1 5.66a5.1 5.1 0 00-1.28 3.36s-1.55 6.54-2.29 7.69c-.61 1-.64 3.63-.64 4.45v.24s-.22 2.34-.21 4.3v.7-.05a6.74 6.74 0 00.19 1.59v.09-.33a16.88 16.88 0 01.47 4.08c0 2.35-.32 5.13-1.74 6.77-2.47 2.83-4 2.47-4 2.47s1.19 3.54 2.65 4.25a.65.65 0 01.15.1 1.55 1.55 0 000-.21 1.74 1.74 0 01.43 1.32 9.48 9.48 0 01-1.81 5.24 2.9 2.9 0 01-1.24.72l.23.14a5.5 5.5 0 00.51.24 2.85 2.85 0 00.74.2 3.49 3.49 0 012.59 1.25c.91 1.18 1.48 2.78-.32 4.19l-6.53 2.26s-11.08 1.45-10.49-1.06z"
                                transform="translate(-16.24 -72.97)" fill="url(#d)"></path>
                            <path
                                d="M584.38 751.19l6.32-2.25c1.75-1.41 1.19-3 .31-4.19a3.35 3.35 0 00-2.5-1.26 3.09 3.09 0 01-1.21-.43 2.79 2.79 0 01-1-.92 4.67 4.67 0 01-.73-2.44s-6.94-2-8.84 0a5.36 5.36 0 00-.84 1.23 10.33 10.33 0 00-.88 4.47s-.35 2.21-.93 4.73 10.3 1.06 10.3 1.06zM553.44 748.08l6.32-2.26c1.74-1.41 1.19-3 .31-4.19a3.35 3.35 0 00-2.5-1.25 2.7 2.7 0 01-.73-.2 4.28 4.28 0 01-.48-.24c-1.77-1-1.73-3.36-1.73-3.36s-6.94-2-8.84 0a5.42 5.42 0 00-.66.91 10 10 0 00-1.06 4.8s-.36 2.21-.93 4.73 10.3 1.06 10.3 1.06z"
                                fill="#3f3d56"></path>
                            <path
                                d="M543.89 729.09a18.2 18.2 0 011.24 2.65v7c1.77 2.91 11 1.94 12.2.35s2.56-5.75 1.15-6.45-2.57-4.25-2.57-4.25 1.51.36 3.89-2.47 1.68-9.11 1.24-10.61 0-6.54 0-6.54-.09-3.54.62-4.69 2.21-7.69 2.21-7.69a5.2 5.2 0 011.24-3.36c1.24-1.15 2-5.66 2-5.66a5.78 5.78 0 00.88-3.8c-.26-2.21 1.51-4.59 1.51-4.59l3-9.55 2.83-7.16 1.59 4.15s.45 9.73.09 11.76-.88 7.43-.88 7.43 1.77 3.53 1 6.54-.53 9.46-.53 9.46-.8 13.35-.09 14.41.62 3.71.62 3.71-3.62 7.78-2.47 8.84.79 4 .79 4-2.47 0-1.41 1.06 1.85 6.63 1.85 6.63l10.69 1.24a22.5 22.5 0 002.4-4.51c1.41-3.27-.27-2.92-1.69-3.27s-.52-1.24 1.16-2.3.7-3.45.7-3.45-2.56-4.33-1.68-4.68 1-6.46 1-6.46 1.76-7.25 1.32-9.19 1.42-6.63 1.42-6.63l.62-5.57a15.32 15.32 0 001.93-10.55v-8.58s2.48-16.62 2.83-25c.23-5.38.16-12.72.09-17.3 0-2.57-.09-4.27-.09-4.27l-38.19-4a31.47 31.47 0 01-.69 5.67c-.39 2.1-1 4.81-2 8.21a37.27 37.27 0 00-1.06 17l.35 12.29s-3.36 8.22-2.65 11a23.75 23.75 0 01.7 5.13s-7.51 17.94-6.71 23.16-2.48 13.44-2.48 13.44-.85 5.86.03 7.45z"
                                fill="#65617d"></path>
                            <g opacity=".05">
                                <path
                                    d="M588.09 729.03a2.06 2.06 0 00.95-1.51l.11.18s1 2.39-.71 3.45l-.54.36c-.31-.06-.65-.1-1-.18-1.39-.3-.49-1.24 1.19-2.3zM574.65 728.32c-.28-.26-.27-.94-.1-1.81a4.81 4.81 0 01.59 2.56 2.17 2.17 0 00-.49-.75zM576.26 684.34a12 12 0 01.7 3.25 12.43 12.43 0 00-.81-2.23s.04-.4.11-1.02zM552.37 679.7a4.57 4.57 0 01-.09-1c.13.66.22 1.28.29 1.81-.06-.24-.12-.48-.2-.81zM576.51 715.77a5.56 5.56 0 01-.27-2 6.61 6.61 0 01.52 2.48 2.1 2.1 0 00-.25-.48zM588.44 716.57s-.09 6.1-1 6.45c-.45-1-.75-2-.35-2.12.88-.36 1-6.46 1-6.46s1.77-7.25 1.33-9.19 1.41-6.63 1.41-6.63l.62-5.57a15.32 15.32 0 001.94-10.52v-8.58s2.48-16.62 2.83-25c.23-5.38.17-12.72.09-17.3v-2.18h.31s0 1.7.08 4.27c.08 4.58.14 11.92-.08 17.3-.36 8.4-2.83 25-2.83 25v8.57a15.36 15.36 0 01-2 10.52l-.62 5.57s-1.85 4.69-1.41 6.63-1.32 9.24-1.32 9.24zM543.53 726.73a16.93 16.93 0 011.24 2.65v1.24c-.2-.45-.49-1.05-.88-1.77a5.29 5.29 0 01-.39-2.19zM556.43 728.12a15.68 15.68 0 01-.87-2.1s1.5.36 3.89-2.47c1.73-2.06 1.83-5.95 1.58-8.49.45 1.51 1.16 7.78-1.23 10.61-1.56 1.85-2.74 2.36-3.37 2.45zM561.04 708.52a46.38 46.38 0 00-.18 5.24 7.72 7.72 0 00-.18-.82c-.44-1.5 0-6.54 0-6.54s-.08-3.54.62-4.69 2.21-7.69 2.21-7.69a5.2 5.2 0 011.24-3.36c1.24-1.15 2-5.65 2-5.65a5.86 5.86 0 00.89-3.81c-.27-2.21 1.5-4.59 1.5-4.59l3-9.55 2.83-7.16 1.59 4.15v1.35l-1.2-3.37-2.83 7.16-3 9.55s-1.76 2.39-1.5 4.6a5.78 5.78 0 01-.88 3.8s-.8 4.51-2 5.65a5.23 5.23 0 00-1.23 3.36s-1.51 6.55-2.21 7.7-.67 4.67-.67 4.67z">
                                </path>
                            </g>
                            <path
                                d="M553.62 545.87l.66 3.23v2.5l3.69.38.41-.77a33.82 33.82 0 012.87-4.63c.68-.57 1.89-9.55.43-9a3.88 3.88 0 00-2.05 1.86s-7.32.82-6.01 6.43z"
                                fill="#ffcdd3"></path>
                            <path d="M554.21 551.6l3.69.38.41-.77a3.24 3.24 0 00-4.07-.67z" opacity=".1"></path>
                            <path d="M553.28 553.34l4.86 1.13.11-.72.27-2a3.34 3.34 0 00-4.71-.64l-.24 1z" fill="#dce6f2">
                            </path>
                            <path
                                d="M632.08 546.23l5.19 2.78s.19-.41.47-1c.49-1 1.23-2.59 1.43-3.15.31-.86 2.47-2 2.47-2 5.44-5.19-1-9.65-1-9.65-3.42-6.9-7.24 2.34-7.24 2.34s-.54 4.86-.16 5.19.37 1.66.37 1.66a21 21 0 00-1.25 3c-.2.52-.28.83-.28.83z"
                                fill="#ffcdd3"></path>
                            <path
                                d="M632.08 546.23l5.19 2.78s.19-.41.47-1c-.74-.61-3.33-2.72-4.19-2.62a6.72 6.72 0 01-1.23 0c-.16.53-.24.84-.24.84z"
                                opacity=".1"></path>
                            <path
                                d="M631.54 547.8l5.84 2.87.12-1.25.08-.87s-3.38-2.9-4.38-2.79a5.36 5.36 0 01-1.52 0l-.07 1z"
                                fill="#dce6f2"></path>
                            <path
                                d="M567.76 567.31s25.44 2.87 20.69 1.33c-3.31-1.08-4.63-3.18-4.9-5.52a13.21 13.21 0 01.94-5.89 25.52 25.52 0 012.28-4.59s-19.45-10.7-15.56-1a15.46 15.46 0 011.1 4.6 12.79 12.79 0 01-.5 4.67 13.88 13.88 0 01-4.05 6.4z"
                                fill="#ffcdd3"></path>
                            <path
                                d="M571.21 551.67a15.46 15.46 0 011.1 4.6c1.83 1.54 3.84 1.44 6.42 1.44 2 0 4.18.48 5.76-.48a25.52 25.52 0 012.28-4.59s-19.45-10.7-15.56-.97z"
                                opacity=".1"></path>
                            <circle cx="579.08" cy="547.86" r="10.52" fill="#ffcdd3"></circle>
                            <path
                                d="M567.76 567.31s25.44 2.87 20.69 1.33c-3.31-1.08-4.63-3.18-4.9-5.52-1.27-1.37-3.82-2.36-5.45-2.89a7.64 7.64 0 00-4.61-.07 6.52 6.52 0 00-1.68.78 13.88 13.88 0 01-4.05 6.37zM553.28 553.34l4.86 1.13.11-.72a4.29 4.29 0 00-4.68-1.6zM631.54 547.8l5.84 2.87.12-1.25a43.62 43.62 0 00-5.89-2.61zM557.7 631.42c9.85 1.56 23.87 3.58 26.1 2.9 1.84-.56 7.74-.5 12.87-.32 0-2.57-.09-4.27-.09-4.27l-38.19-4a31.47 31.47 0 01-.69 5.69z"
                                opacity=".1"></path>
                            <path
                                d="M547.87 629.11s32.44 5.57 35.93 4.51 21.35.08 21.35.08c8.05 5.4 4.69-2.56 4.69-2.56a19.61 19.61 0 00-.27-7.51 45.92 45.92 0 01-1.32-7.52s.18-5.3-.8-6.54-2.12-10.08-2.12-10.08-.88-6-.79-7.34-.27-5-.27-5l-1.15-6.19c6.63-.89 26.79-13.26 26.79-13.26 1-4.16 8.48-13.88 8.48-13.88a10.18 10.18 0 01.62-2.39c.53-1.41-7.42-4.24-7.42-4.24s-5.93 7.25-7.16 9.19-5.48 5.57-5.48 5.57a4.38 4.38 0 00-2 .25h-.1a15.8 15.8 0 00-4 2.27 7.7 7.7 0 00-5.39 2s-3.62-.53-4.24.09-3.71 0-3.71 0-3.1-6.55-5.13-4.65-10.62 1.87-10.62 1.87c-1.15-1.53-3.95-2.63-5.7-3.19a7.64 7.64 0 00-4.61-.08 5.88 5.88 0 00-1.82.88l-5.24 5.13s-1.5-2-1.32-2.39-1.77-.8-1.77-.8-2.56-.79-3.54-1.06-1.86.79-1.94.88a10.27 10.27 0 00.44-3.88 4.45 4.45 0 011.06-3.18c-3.09-7.61-10.08-1.24-10.08-1.24s-.79 4.15-.09 5.74-.7 5-.53 5.84-.35 2.39-.35 4.07a23.69 23.69 0 001.42 6.27c.53 1.42 4.77 4.6 4.77 4.6s.26 5 2.12 8 .71 12.9.71 12.9-1.77 7.78-4 10.26-5.42 16.58-5.42 16.58z"
                                fill="#3f3d56"></path>
                            <path
                                d="M581.92 557.4a2.23 2.23 0 01-.82 1.42 2.11 2.11 0 01-1 .22c-3.21.2-6.55.34-9.52-.89a3.72 3.72 0 01-1.44-1 5.82 5.82 0 01-.84-2.33 34.5 34.5 0 00-1.94-4.47 15 15 0 01-1.05-8 5.54 5.54 0 01.81-2.35c.85-1.21 2.4-1.7 3.52-2.67s1.85-2.45 3.17-3.17a6 6 0 014-.35 20.74 20.74 0 017.41 2.78 3.77 3.77 0 002.48.84 3.46 3.46 0 001.82-1.4 9.76 9.76 0 01.78 4.59 2 2 0 000 .69 2 2 0 00.49.73c.79.92 1.28 2.37.5 3.3-.34.4-.86.62-1.19 1-.6.74-.4 1.81-.38 2.75a1.42 1.42 0 01-.24.93 1.32 1.32 0 01-1.29.31 3.66 3.66 0 00-1.39-.13 2.33 2.33 0 00-1.2.93 16.37 16.37 0 00-2.68 6.27z"
                                fill="#2d293d"></path>
                            <path d="M583.76 563.78s-13.15 1.74-14.33-.24" opacity=".1"></path>
                            <path
                                d="M409.93 667.72h-10a1 1 0 000 2h2v13.36h-34.25a1 1 0 00-.75-.36h-10a1 1 0 000 2h2v13.72h-33.06a1 1 0 00-.94-.72h-10a1 1 0 000 2h1v14.09h-33.59a1 1 0 00-.41-.09h-10a1 1 0 000 2h1v13.45h-33.17a1 1 0 00-.81-.45h-10a1 1 0 000 2h1v15h226v-78z"
                                fill="#3f3d56"></path>
                            <path
                                d="M190.53 802.15a8 8 0 003.41 3.72 29.36 29.36 0 014.26 2.91c1.54 1.46 2.54 3.48 4.35 4.6a8.81 8.81 0 002.2.91 13.86 13.86 0 002.71.55 19.16 19.16 0 007-1.2 6.49 6.49 0 002.1-.92 5.85 5.85 0 00.8-.77 4.5 4.5 0 001.1-1.74 1.42 1.42 0 00-.1-1.05 2.42 2.42 0 00-.89-.85 15.1 15.1 0 00-2-1.11 10.27 10.27 0 01-2.62-1.39 6.1 6.1 0 01-1.27-1.71 16.56 16.56 0 01-1.44-3.45 11.23 11.23 0 00-.8-2.35c-.43-.79-1.12-1.47-1.58-2.24.24 0 .49 0 .73-.1a6.82 6.82 0 00-.8-3.54c1 .08 1.47-1.23 1.31-2.2s-.63-2-.21-2.88a5.34 5.34 0 011.13-1.3c1.59-1.68 1.54-4.24 2.2-6.44a18.68 18.68 0 011.65-3.58c1.91-3.45 2.79-7.77 5.87-10.26l2.77-2.24a1.18 1.18 0 00.43-.51c.16-.43-.18-.88-.16-1.34.05-.81 1.15-1.14 1.52-1.87a4.62 4.62 0 00.27-1.11c.29-1.27 1.53-2.06 2.42-3a6.81 6.81 0 001.77-5.44 4.61 4.61 0 01-.08-1.48 7.14 7.14 0 01.39-1 9 9 0 00.33-3.24 29 29 0 01.63-5.15l13.66-3.1c.09.1.17.2.27.3 1.21 1.23 1.81 3 3 4.28l1.56 1.72c.3.33.61.77.43 1.17s-.41.41-.6.63a1.07 1.07 0 00.92 1.69 2.06 2.06 0 001.07 3.09 8.28 8.28 0 01-1.14 1.74 1.44 1.44 0 01.3.88 4.18 4.18 0 01-.2.56 2.37 2.37 0 00.11 1.26 18.93 18.93 0 010 9.8 5.66 5.66 0 00-.26 1.35 4 4 0 00.17 1.13c.46 1.65 1.38 3.38.74 5a10.3 10.3 0 00-.54 1.17c-.36 1.2.47 2.38.92 3.55a12 12 0 01.44 5c-.11 2.32-.23 4.63-.34 6.94a2.76 2.76 0 00.13 1.25 2.13 2.13 0 001.4 1.08c-.14.47-.28.94-.44 1.4a.83.83 0 00-1.4-.06 1.48 1.48 0 00-.18.66 16.61 16.61 0 00.81 4.91 2.28 2.28 0 01.07.78 4.92 4.92 0 01-.27.79 1.17 1.17 0 00-.06.2 4.87 4.87 0 00.22 2.38 2.1 2.1 0 00.69 1.27 2 2 0 00.9.28c4.78.55 9.44-2.56 14.22-2 1 .11 1.94.37 2.92.47a15.34 15.34 0 003.45-.17c1.6-.21 3.19-.48 4.76-.79a11.84 11.84 0 003.47-1.11 4.32 4.32 0 002.23-2.73 2.05 2.05 0 00-.2-1.54 1.78 1.78 0 00-.4-.42 4.3 4.3 0 00-1.24-.59l-1.85-.67a11.12 11.12 0 00-2.76-.72c-.69-.06-1.4 0-2.09 0-2.44-.13-4.59-1.53-6.6-2.87l-2.74-1.82a1.77 1.77 0 00-1.87-.31l-.38.14 1.69-.94q.12-12.36-.06-24.71a25.89 25.89 0 00-.58-6.09c-.3-1.14-.62-2.63.38-3.27.26-.89-.27-1.78-.51-2.66s.1-2.15 1-2.16c-.92-1.62-.89-3.58-.93-5.44 0-1.53-.12-3-.3-4.57a12.93 12.93 0 00-1.58-5.38l13.48-3.06-.44-1.95 2-.45-10.86-47.81a1.27 1.27 0 00.83-1.14c-.05-.47-.51-.9-.36-1.35.09-.27.36-.42.53-.65a1.55 1.55 0 00-.17-1.78.79.79 0 01-.19-.44.87.87 0 01.1-.31 2.34 2.34 0 00-.67-2.78.91.91 0 00-.39-.2c-.32 0-.6.1-.92 0s-.33-.28-.69-.31h-.11l-4.11-18.09a18 18 0 00.72-2.68 8.52 8.52 0 00-.43-4.85 9.91 9.91 0 002.38-1.79 1.34 1.34 0 00.32-1.7 12.11 12.11 0 00-4-5.47c-.57-.43-1.92-1.57-2.75-1.32q.31-.45.66-.87a8.81 8.81 0 001.31-1.64 11.42 11.42 0 006.81-13 3.47 3.47 0 00-.13-.46 1.85 1.85 0 001.54-.56 2 2 0 00.18-2 15.91 15.91 0 00-1-1.8c-.75-1.36-.57-3.12-1.34-4.39a14.66 14.66 0 00-2.73-3 8.75 8.75 0 00-7.28-1.66 15.82 15.82 0 00-6.85 3.44 9 9 0 01-1.92 1.33c-1.14.52-2.54.5-3.49 1.31-1.26 1.07-1.1 3-.62 4.6s1.19 3.23.64 4.79a10 10 0 00-.55 1.41 4.08 4.08 0 00.67 2.59 3.2 3.2 0 00.32-.57.13.13 0 010 .06c.07.26.15.52.22.78a.78.78 0 00-.33.07c-.47.21-.68.76-1.07 1.1s-1.36.56-1.55 1.19c-.09.3 0 .63-.11.92-.24.57-1.08.57-1.52 1a1.28 1.28 0 00-.25 1.3 2.71 2.71 0 00.34.68 1.44 1.44 0 00.09.87l-5.58 1.35a12.28 12.28 0 00-2.59.85 4 4 0 00-1.91 1.87c0 .1-.1.23-.21.27a.45.45 0 01-.28 0 5 5 0 00-2.89.14 15.63 15.63 0 00-7.39 5.4 2.72 2.72 0 00-.71 1.4c-.05.6.28 1.27 0 1.79l-.29.12a14.23 14.23 0 00-2.37 1c-.81.48-1.52 1.11-2.28 1.67-3.11 2.28-7.22 3.41-9.42 6.56-.72 1-1.24 2.29-2.34 2.93a15.11 15.11 0 00-1.5.77c-.92.71-1 1.94-1.21 3.11l-19.65 4.47.44 1.94-2 .45 18.16 79.91 16.76-3.8a4.81 4.81 0 00.16 1.13 9.71 9.71 0 001.15 3.32 1.91 1.91 0 00-1.32 1.77c-.09.77.05 1.57-.11 2.33-.3 1.36-1.48 2.33-2.46 3.34-4.46 4.58-5.4 11.34-7.68 17.26-1.07 2.76-2.46 5.41-3.16 8.27-.8 3.25-.85 7-3.41 9.25a1.79 1.79 0 00-.58.68 1.09 1.09 0 000 .62 3 3 0 00.95 1.52l-.12.23a.92.92 0 00-.3 0c-.52 0-.81.66-1 1.06a11.43 11.43 0 00-1.32 4.51 1.29 1.29 0 00-.44 0 1.87 1.87 0 00-1.35 1.11 3 3 0 00.13 2.06zm65.13-165.88h-.2a8.6 8.6 0 01.59-1.36 8.36 8.36 0 00-.39 1.36zM202.16 796a1.65 1.65 0 01-.57.87h-.05a2.57 2.57 0 01.1-.32l.22-.63z"
                                transform="translate(-16.24 -72.97)" fill="url(#e)"></path>
                            <path
                                d="M244.42 719.03c-3 1.11-6.2 2.1-9.4 1.81-.49 0-1.09-.24-1.14-.73a1.13 1.13 0 01.11-.5 29.8 29.8 0 001.61-6 .47.47 0 01.12-.28.45.45 0 01.3-.07c1.46 0 2.85.66 4.31.73a5.72 5.72 0 002.17-.32c.61-.21 1.34-.92 1.91-1 .12 2.09-.22 4.19.01 6.36zM184.3 727.19c-2.37-.94-4.83-1.94-6.54-3.84a.79.79 0 01-.24-.4.93.93 0 01.07-.46 18 18 0 013.31-5.73 13 13 0 013 1.7c.64.43 2.27 1 2.46 1.8.12.48-.31 1.14-.48 1.57-.22.59-.43 1.18-.62 1.78a22.26 22.26 0 00-.96 3.58z"
                                fill="#3f3d56"></path>
                            <path
                                d="M233.64 728.03a2.14 2.14 0 00.68 1.27 1.8 1.8 0 00.9.28c4.71.57 9.29-2.52 14-2 1 .11 1.92.38 2.88.47a15 15 0 003.41-.16c1.57-.2 3.14-.46 4.69-.77a11.43 11.43 0 003.41-1.09 4.36 4.36 0 002.2-2.73 2.16 2.16 0 00-.21-1.54 1.78 1.78 0 00-.4-.42 4.34 4.34 0 00-1.22-.6l-1.83-.67a11 11 0 00-2.72-.73c-.68-.07-1.38 0-2.06 0-2.41-.15-4.53-1.55-6.52-2.9l-2.7-1.83a2.27 2.27 0 00-.9-.43 2.19 2.19 0 00-.95.12 12.79 12.79 0 00-5.49 3.35 8.38 8.38 0 01-1.27 1.19 5.35 5.35 0 01-4.22.42c-.63-.17-.54-.37-.9-.85s-1-.69-1.39-.09a1.36 1.36 0 00-.18.66 16.94 16.94 0 00.81 4.91 2.31 2.31 0 01.08.78 4.92 4.92 0 01-.27.79 1.46 1.46 0 00-.05.2 4.87 4.87 0 00.22 2.37z"
                                fill="#65617d"></path>
                            <path
                                d="M233.64 728.03a2.14 2.14 0 00.68 1.27 1.8 1.8 0 00.9.28c4.71.57 9.29-2.52 14-2 1 .11 1.92.38 2.88.47a15 15 0 003.41-.16c1.57-.2 3.14-.46 4.69-.77a11.43 11.43 0 003.41-1.09 4.36 4.36 0 002.2-2.73 2.16 2.16 0 00-.21-1.54 1.78 1.78 0 00-.4-.42c-.14.59-.16 1.34-.26 1.63a3.13 3.13 0 01-1.71 1.93 5.08 5.08 0 01-1.91.18c-4.17-.08-8.37.86-12.49.24a29.34 29.34 0 00-4.26-.61 30.31 30.31 0 00-4.3.62c-2.26.32-4.57.14-6.85.29a4.87 4.87 0 00.22 2.41z"
                                fill="#3f3d56"></path>
                            <path
                                d="M174.28 729.17a8.13 8.13 0 003.38 3.73 28.23 28.23 0 014.21 2.93c1.52 1.46 2.51 3.49 4.31 4.61a8.69 8.69 0 002.17.92 14.24 14.24 0 002.67.56 18.54 18.54 0 006.92-1.18 6.27 6.27 0 002.08-.92 5.6 5.6 0 00.74-.79 4.43 4.43 0 001.07-1.74 1.47 1.47 0 00-.09-1 2.47 2.47 0 00-.88-.85 15.52 15.52 0 00-2-1.11 10.14 10.14 0 01-2.59-1.41 6.11 6.11 0 01-1.26-1.71 16.57 16.57 0 01-1.42-3.46 11.43 11.43 0 00-.8-2.35c-.63-1.15-1.8-2.06-2-3.36a.91.91 0 00-.17-.54.77.77 0 00-.49-.17 8.19 8.19 0 00-2.37 0 2.67 2.67 0 00-1.9 1.29c-.23.46-.32 1-.75 1.32a1.7 1.7 0 01-.71.19 5.9 5.9 0 01-3.49-.27 4.2 4.2 0 01-2.05-2.68c-.08-.43 0-.92-.67-.86s-.79.66-1 1.06a11.34 11.34 0 00-1.29 4.51 1.3 1.3 0 00-.44 0 1.84 1.84 0 00-1.32 1.11 3.07 3.07 0 00.14 2.17z"
                                fill="#65617d"></path>
                            <path
                                d="M174.28 729.17a8.13 8.13 0 003.38 3.73 28.23 28.23 0 014.21 2.93c1.52 1.46 2.51 3.49 4.31 4.61a8.69 8.69 0 002.17.92 14.24 14.24 0 002.67.56 18.54 18.54 0 006.92-1.18 6.27 6.27 0 002.08-.92 5.6 5.6 0 00.74-.79 4.43 4.43 0 001.07-1.74 3.41 3.41 0 00-1.49 0c-1 .28-1.52 1.41-2.43 1.92-1.29.74-2.89.07-4.37.06-1 0-1.93.27-2.89.18a7.29 7.29 0 01-2.35-.77 11.17 11.17 0 01-2.69-1.63 14.27 14.27 0 01-1.87-2.29 38.38 38.38 0 00-3.75-4.4 3.79 3.79 0 00-.69-.58 8.76 8.76 0 00-.84-.35 5.67 5.67 0 01-2.34-2.65 5 5 0 00-.61-.93 1.84 1.84 0 00-1.32 1.11 3.07 3.07 0 00.09 2.21z"
                                fill="#3f3d56"></path>
                            <path
                                d="M239.51 560.26a10.34 10.34 0 00-2.06 3.92c-.36 1.44-1.88 12.31-1.33 13.69-1.52-1-6.46-.06-8-1-.64-.4-4-2.37-4.6-2.88s-4-1.09-4.48-1.63c-1.81-2 6.59-13.07 4.75-15a.43.43 0 01-.08-.65 16.39 16.39 0 012.54-2.73 5 5 0 001.67-3.25 10 10 0 013.06 1.2q3.41 1.78 6.75 3.72c.87.5 2.46 1.07 3 1.94s-.65 1.98-1.22 2.67z"
                                fill="#a1616a"></path>
                            <path
                                d="M221.88 560.41a30.8 30.8 0 015.27 2.62 9.17 9.17 0 013.86 3.89c.29.67.44 1.39.7 2.07 1.16 3 4.34 4.62 6.17 7.23a14.87 14.87 0 011.38 2.58 34 34 0 011.76 5.27c.43 1.75-1 3.35-1.28 5.13a29.59 29.59 0 000 5.24 62 62 0 01-.7 9.9c-.86 6.92-4.35 26.32-5.21 33.25-7.51-.17-27.33 0-34.47-2.29-2.39-.77 11-18.66 8.59-19.12a.86.86 0 01-.9-1c0-10.32 5.19-20 6.2-30.23.36-3.56 1.7-6.84 2.49-10.33.71-3.16.72-6.48 1.74-9.56a5.68 5.68 0 01.85-1.75 6.85 6.85 0 011.13-1.09c.82-.69 1.62-1.19 2.42-1.81z"
                                fill="#d7d9e1"></path>
                            <circle cx="236.36" cy="548.15" r="11.39" fill="#a1616a"></circle>
                            <path
                                d="M226.25 555.94a3.84 3.84 0 00-4.32.34 2.09 2.09 0 00-.78 2.29l-5.49 1.34a11.27 11.27 0 00-2.56.83 3.93 3.93 0 00-1.87 1.86c-.05.11-.1.23-.21.27s-.18 0-.27 0a4.91 4.91 0 00-2.86.13 15.21 15.21 0 00-7.26 5.37 2.67 2.67 0 00-.7 1.39c0 .67.37 1.42 0 2 1.18 5.17.5 10.4.46 15.71a6.85 6.85 0 01-1.12 2.77 9.92 9.92 0 00-1.18 3.07c-.41 2.84 1.67 5.59 1.29 8.44a13.84 13.84 0 01-1.22 3.42 7.82 7.82 0 00-.73 4.21c.1.64.33 1.26.45 1.9a11.87 11.87 0 01.11 2.6c0 1.61-.13 3.22-.23 4.83-.15 2.6-.49 5.45-2.38 7.25 5.49-.3 11.26-.69 15.88-3.68a8.4 8.4 0 001.76-1.44c1.53-1.71 1.9-4.13 2.2-6.4a26.78 26.78 0 00.3-7.68 8.4 8.4 0 01-.2-2.44c.2-1.48 1.37-2.61 2.45-3.65a15.57 15.57 0 003.09-3.78 6 6 0 00.52-4.73c-.27-.76-.74-1.43-1-2.21a1.89 1.89 0 01.63-2.14c3.59-2 4.39-7 4.35-11.14a31.61 31.61 0 00-.9-6.26l-.85-4a5.45 5.45 0 00.86-4.19 4.71 4.71 0 01-.26-1.27 3.46 3.46 0 01.58-1.54 12.44 12.44 0 001.46-3.47zM240.97 565.95a30.45 30.45 0 001 3.7c.21.45.5.85.74 1.28a8.27 8.27 0 01.68 5.35 29.29 29.29 0 01-1.62 5.23 7.18 7.18 0 00-.49 1.8 8.64 8.64 0 00.08 1.9 56.21 56.21 0 01.37 7.67 14.85 14.85 0 01-1.25 6.5 1.8 1.8 0 01-.91 1 2 2 0 01-.95 0l-3.08-.44a1.85 1.85 0 01-.74-.2 1.76 1.76 0 01-.65-1 16.71 16.71 0 01-.28-7c.81-7.07 2.44-14.07 2.41-21.18 0-2-.45-4.92.59-6.73.42-.75.29-.44 1-.27a8.63 8.63 0 011.11.29 3.36 3.36 0 011.99 2.1z"
                                fill="#3f3d56"></path>
                            <path
                                d="M235.23 580.31q.22 6.26.41 12.51l-11.69-.39a8 8 0 01.21-3.52c.44-2.75-.18-5.56 0-8.34.17-2.12.83-4.17 1-6.29.07-1.23 0-2.47 0-3.71a26.53 26.53 0 01.53-3.65 22 22 0 011.39-5c1.53.21 3.18.47 4.27 1.57a5.28 5.28 0 011.22 2.21c.76 2.44.43 5.13 1.28 7.52a22.24 22.24 0 011.38 7.09z"
                                fill="#4299e1"></path>
                            <path
                                d="M233.76 636.57c-.08 2.5 1.38 4.75 2.64 6.91a56.81 56.81 0 014.69 10.25 9.25 9.25 0 001.17 2.6 25.22 25.22 0 001.84 1.89c1.56 1.71 2.07 4.11 2.34 6.41.18 1.52.28 3 .31 4.57.05 1.86 0 3.83.94 5.45-.92 0-1.26 1.26-1 2.15s.77 1.78.52 2.67c-1 .63-.66 2.12-.37 3.27a26.39 26.39 0 01.6 6.09q.22 12.35.14 24.7c-3.7 2.13-8 4.47-12.22 3.63a2.52 2.52 0 01-1.92-1.23 2.73 2.73 0 01-.13-1.24l.31-6.94a12.26 12.26 0 00-.45-5c-.45-1.17-1.27-2.35-.92-3.55.12-.41.37-.77.53-1.17.63-1.59-.29-3.32-.74-5a3.77 3.77 0 01-.18-1.14 6.18 6.18 0 01.25-1.35 19.15 19.15 0 00-.05-9.8 2.34 2.34 0 01-.11-1.25 3.18 3.18 0 00.19-.57 1.4 1.4 0 00-.3-.88 8.31 8.31 0 001.13-1.73 2.08 2.08 0 01-1.07-3.09 1.09 1.09 0 01-.92-1.7c.2-.22.48-.36.6-.63s-.14-.84-.43-1.16l-1.54-1.7c-1.15-1.29-1.75-3.06-2.95-4.3a35.68 35.68 0 01-4.4-5.94l-5.1-8-1.71 2.33a6.8 6.8 0 00-1.3 2.39 8.79 8.79 0 000 2.51c.3 4.91-1.75 9.7-1.8 14.61a9 9 0 01-.31 3.25 6 6 0 00-.38 1 4.64 4.64 0 00.08 1.48 6.8 6.8 0 01-1.72 5.43c-.88 1-2.1 1.75-2.38 3a5.13 5.13 0 01-.26 1.11c-.37.73-1.44 1.05-1.49 1.86 0 .46.32.92.16 1.35a1.22 1.22 0 01-.43.5l-2.71 2.23c-3 2.49-3.89 6.8-5.76 10.25a18.08 18.08 0 00-1.61 3.56c-.65 2.2-.59 4.76-2.15 6.44a5.21 5.21 0 00-1.11 1.29c-.41.89.05 1.91.21 2.88s-.3 2.28-1.28 2.2a6.82 6.82 0 01.8 3.54 18.33 18.33 0 01-11.83-1.92 4.41 4.41 0 01-2.44-2.56 1.09 1.09 0 010-.62 1.77 1.77 0 01.57-.68c2.51-2.2 2.56-6 3.33-9.23.68-2.86 2-5.51 3.08-8.26 2.24-5.92 3.14-12.67 7.52-17.23 1-1 2.12-2 2.41-3.33.16-.77 0-1.56.11-2.34a1.88 1.88 0 011.29-1.76 9.92 9.92 0 01-1.15-3.32 4.61 4.61 0 01-.16-1.52 7.73 7.73 0 01.42-1.62 14.31 14.31 0 00.23-8 12.62 12.62 0 01-.79-4.08c.06-.71.28-1.38.39-2.08a11.93 11.93 0 00-.22-3.67l-.74-4.58a22.26 22.26 0 01-.43-4.6c.15-3.72-2.27-18.61.59-21s10.93 7.66 14.61 7.06a16.58 16.58 0 014.92-.16 23.24 23.24 0 017.36 2.78l7.94 4.09a25.27 25.27 0 004.74 2.2z"
                                fill="#65617d"></path>
                            <path
                                d="M243.99 533.44a8.6 8.6 0 00-7.18-1.69 15.5 15.5 0 00-6.74 3.42 9.09 9.09 0 01-1.89 1.33c-1.13.51-2.5.49-3.44 1.29-1.24 1.07-1.08 3-.59 4.6s1.17 3.24.64 4.79a12.76 12.76 0 00-.54 1.41 4.16 4.16 0 00.67 2.6 18.74 18.74 0 001-2c.37-.65 1.13-1.22 1.83-1s.86 1 1 1.68.54 1.42 1.22 1.49a1.38 1.38 0 001.27-.87c.78-1.55-.13-3.56.63-5.12.44-.9 1.36-1.49 1.75-2.41.3-.72.23-1.54.46-2.29s1-1.45 1.73-1.12a2.65 2.65 0 01.65.56 3 3 0 003.67.25 5.76 5.76 0 011.34-1 1.86 1.86 0 011.9.54 3.72 3.72 0 01.89 1.86 4.58 4.58 0 001 2.61 3 3 0 001 .52 2.4 2.4 0 002.66-.33 2 2 0 00.17-2 15 15 0 00-1-1.8c-.75-1.37-.58-3.13-1.34-4.4a14.85 14.85 0 00-2.76-2.92z"
                                fill="#3f3d56"></path>
                            <path
                                d="M245.57 567.94a1.71 1.71 0 01.12 1 1.61 1.61 0 01-.43.66 11.75 11.75 0 01-4.85 2.89 1.58 1.58 0 00-.68.35 1.32 1.32 0 000 1.53 3.79 3.79 0 01.68 1.47c.09 1-1 1.72-1.93 2.07a5.44 5.44 0 01-4.15.13 6.17 6.17 0 01-2.19-2.09c-4.11-5.58-6.61-12.21-10.75-17.77a4.39 4.39 0 01-.7-1.2 1.32 1.32 0 01.24-1.3c.44-.43 1.27-.43 1.5-1 .11-.28 0-.62.1-.91.19-.64 1-.76 1.53-1.19s.59-.89 1-1.09a1.61 1.61 0 011.41.26c2 1.13 3.27 3.06 4.61 4.86a69.6 69.6 0 006.79 7.76c-.28-.28.37-3.06.83-3.26.8-.37 2.22.87 2.8 1.32a12.18 12.18 0 014.07 5.51z"
                                fill="#4299e1"></path>
                            <path opacity=".1" d="M258.205 656.217l-79.962 18.167-18.167-79.962 79.962-18.167z">
                            </path>
                            <path fill="#ededf4" d="M259.704 653.832l-79.962 18.167-18.167-79.962 79.962-18.167z">
                            </path>
                            <path
                                d="M233.94 615.86a22.58 22.58 0 00-27-17c-.57.13-1.16.29-1.68.45l5.38 23.64 23.64-5.37c-.1-.55-.21-1.15-.34-1.72z"
                                fill="#4299e1"></path>
                            <path d="M231.65 621.73L208 627.1l-5.37-23.64a22.57 22.57 0 1029 18.27z" fill="#4299e1">
                            </path>
                            <path
                                d="M195.6 619.52a22.77 22.77 0 013.14 2.08 5.5 5.5 0 011.94 3.15 1.81 1.81 0 01-.1 1.08.88.88 0 01-.89.5 1.41 1.41 0 01-.56-.31c-.63-.48-1.29-.93-2-1.35-.25-.15-.56-.31-.81-.17a.78.78 0 00-.28.29 2.29 2.29 0 00-.43 1.18 2.51 2.51 0 001.19 1.83 5.23 5.23 0 011.63 1.54.78.78 0 01.11.59.85.85 0 01-.29.39 5.4 5.4 0 01-4.37 1.3c-1-.16-2-.63-3.06-.75a6.35 6.35 0 01-1.31-.17 2.56 2.56 0 01-1.44-1.36 6.75 6.75 0 01-.52-2 23.25 23.25 0 01-.06-7.85 1.08 1.08 0 01.18-.46.94.94 0 01.43-.23c1.17-.4 3-1.46 4.27-1.28a3.25 3.25 0 011.23.68c.33.23 1.93 1.01 2 1.32z"
                                fill="#a1616a"></path>
                            <path
                                d="M195.76 618.37c-.24-1.15.54-4.24-1.76-3.91-.27-1.23 1.28-2.38.67-3.61-.2-.4-.64-.68-.79-1.11-.43-1.22 1.68-2.41 1-3.53-.25-.43-.81-.6-1-1-.5-1 1.33-1.95 1.12-3.08-.08-.37-.38-.68-.45-1.06a3.14 3.14 0 01.36-1.37c.35-1.18-.31-2.74.64-3.53-.7.23-1.18-.77-1-1.48s.62-1.41.46-2.12a3.17 3.17 0 01-.19-.78c0-.73 1.15-1 1.18-1.77a5.12 5.12 0 00-.15-.78 1.5 1.5 0 01.9-1.28 4.51 4.51 0 001.39-.88c.27-.32.56-.83 1-.69.15 0 .25.19.38.28.53.39 1.29 0 1.74-.49a7.4 7.4 0 001.58-5.45c-.08-1.95-.53-3.87-.54-5.81a13.64 13.64 0 01.12-1.81 8.66 8.66 0 00.41-1.86c-.16-1.1-2.23.15-3.05.45a13.12 13.12 0 00-2.34 1 25.4 25.4 0 00-2.24 1.66c-3.06 2.27-7.11 3.39-9.26 6.52-.71 1-1.22 2.29-2.3 2.93a14.78 14.78 0 00-1.48.77c-1.16.9-1 2.66-1.39 4.06a8.12 8.12 0 00-.35 1.16 4.45 4.45 0 00.11 1.36l.65 3.28a124 124 0 004 16.29 14 14 0 011.16 5.37c0 .49-.13 1-.14 1.48a8.35 8.35 0 00.21 1.73l.4 2.13a.65.65 0 00.22.46.7.7 0 00.6 0c2.87-.93 5.46-3.26 8.46-2.89"
                                fill="#3f3d56"></path>
                            <path
                                d="M248.47 597.35a.91.91 0 01.39.2 2.39 2.39 0 01.67 2.78.87.87 0 00-.1.31.76.76 0 00.19.44 1.6 1.6 0 01.17 1.79c-.16.22-.43.37-.52.64-.15.45.31.88.36 1.35.06.63-.59 1.09-1.18 1.31a1.54 1.54 0 01-1.42 0 1.16 1.16 0 01-.28-1.22 3.42 3.42 0 01.7-1.11 1.42 1.42 0 01-1.59-.93 2 2 0 01.39-1.88.73.73 0 00.23-.44c0-.22-.22-.37-.41-.49-.81-.53-1.75-2.09-.54-2.75a3.3 3.3 0 011.35-.25c.36 0 .4.23.69.31s.59-.11.9-.06z"
                                fill="#a1616a"></path>
                            <path
                                d="M224.23 553.03a2.3 2.3 0 011.94.47 5.2 5.2 0 011.26 2.17 20.8 20.8 0 004.47 6.82M222.26 555.47a2.74 2.74 0 012.59.85 7.9 7.9 0 011.1 2.19 13.06 13.06 0 003.39 4.36"
                                opacity=".1"></path>
                        </svg>
                    </div>
                </div>
            </section </div>


            <script>
                // Função para ativar a animação de digitação para cada item
                const items = document.querySelectorAll('.typewriter');
                let delay = 0;

                items.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.animationPlayState = 'running'; // Começa a animação para o item específico
                        item.style.opacity = 1; // Faz o item aparecer
                    }, delay);
                    delay += 5000; // Aumenta o delay para o próximo item (5 segundos de diferença entre cada animação)
                });
            </script>

    </body>

    </html>
@endsection
