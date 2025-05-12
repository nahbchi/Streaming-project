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

                        <div class="flex justify-start mt-8">
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
                        <img src="/build/assets/img/controller.jpg" class="w-150 h-95 object-cover ml-120 rounded-full" />
                    </div>

                </div>
            </div>





            </div>


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
