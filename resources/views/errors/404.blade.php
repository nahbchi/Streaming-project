@extends('layouts.solo')

@section('conteudo')

<!-- component -->
<div class="flex justify-center items-center bg-gray-900 text-white h-screen">
    <div class="flex flex-col lg:flex-row items-center text-center lg:text-left p-4">
        <!-- Second Image - 'Group' -->
<div class="flex justify-center mt-8">
    <img src="https://i.ibb.co/ck1SGFJ/Group.png" alt="404 Graphic" class="max-w-full h-auto" />
</div>

        <div class="lg:w-1/2">
            <div class="lg:w-1/2 mt-8 lg:mt-0">
                <img src="https://i.ibb.co/G9DC8S0/404-2.png" alt="404 Image" class="max-w-full h-auto ml-34" />
            </div>
            <h1 class="text-2xl font-bold text-white mb-4">
                Ops, acho que você se perdeu!
            </h1>
            
            <p class="text-gray-400 mb-6">
               Mas relaxa, estamos aqui pra te salvar! Volte à home para se localizar denovo.
            </p>
            <a href="/" class="rounded-2xl px-6 py-3 bg-indigo-600 text-white text-base font-medium shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50 transition-all duration-300 ease-in-out">
                Me leve lá!
            </a>
            
        </div>
      
    </div>
</div>



@endsection