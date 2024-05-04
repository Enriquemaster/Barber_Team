@extends('layouts.base')

@section('content')
    
<div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative">
  <img src="{{ asset('IMG/Fondo2.png') }}"  alt="Local" class="w-full h-full object-cover">
</div>
<h1 class="absolute md:top-72 top-72 left-20 right-20 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl">Nuestros servicios</h1>  
 <div class="flex-1 p-4 bg-black items-center w-11/12 mx-auto mt-5">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-4">
            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
            <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Corte normal</h1>
                <img class="w-full h-72 object-cover mb-4 rounded-lg"  src="{{ asset('IMG/Normal.png') }}"alt="Servicio 1">
                <p class="text-white text-justify p-5 ">El corte normal se caracteriza por ser casi completamente simétrico y de una longitud corta o media, con un ligero desvanecido.  </p>
            </div>

            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
            <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Corte desvanecido</h1>
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Desvanecido.png') }}" alt="Servicio 2">
                <p class="text-white text-justify p-5 ">El corte fade consiste en hacer una disminución del corte desde el número más corto pedido por el cliente y, a partir de ahí, ir subiendo.</p>
            </div>


            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
            <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Corte con grecas</h1>
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/crecas.png') }}" alt="Servicio 3">
                <p class="text-white text-justify p-5 ">El corte grecas o líneas en el cabello son una forma de expresar la identidad y el estilo de quien las lleva..</p>
            </div>

            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
            <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Barba y bigote</h1>
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/corte3.png') }}" alt="Servicio 4">
                <p class="text-white text-justify p-5 ">El bigote y la barba reciben una atención especial, con opciones que van desde estilos clásicos hasta diseños más modernos. </p>
                
            </div>
            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
                <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Trenzados</h1>
                    <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Trenzas.png') }}" alt="Servicio 5">
                    <p class="text-white text-justify p-5 ">La barbería está especializada en trenzas, la creatividad y la maestría que combinan para ofrecer a cada cliente una experiencia única y un estilo de trenzado.</p>
      
                </div>
    
                <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
                <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Decoloraciones</h1>
                    <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Decoloracion.jpg') }}" alt="Servicio 6">
                    <p class="text-white text-justify p-5 ">En decoloración, la combinación de profesionalismo y atención al detalle garantiza que cada cliente obtenga un resultado de decoloración en base a sus expectativas. </p>
                </div>
    
    
                <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
                <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Corte Militar</h1>
                    <img class="w-full h-72 object-cover mb-4 rounded-lg"  src="{{ asset('IMG/Militar.png') }}" alt="Servicio 7">
                    <p class="text-white text-justify p-5 ">El corte militar es un pelín más largo en los laterales (cortados al 1½ o 2) y algo más largo, muy poco, en la zona de arriba, sobre un 3½.</p>
                </div>
    
                <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-zinc-600 hover:bg-zinc-800 text-white">
                <h1 class="mx-auto text-center text-white p-5 text-2xl Bodoni">Mohicano</h1>
                    <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Moicano.png') }}" alt="Servicio 1">
                    <p class="text-white text-justify p-5 ">Es un corte típico de la tribu americana que has visto en películas de cine. Consiste en rapar ambos lados de la cabeza, dejándose una cresta en la zona central que va desde la frente hasta la nuca.</p>
                </div>  
         </div>
   </div>
<div>
<h1 class="mx-auto text-center text-white p-5 text-3xl Bodoni">"Renueva tu estilo, agenda tu cita con el barbero y deja que tu imagen hable por ti."</h1>
</div>
<div class="flex items-center justify-center mb-10">
    <a href="{{url('/agendar')}}"  class="mt-5 mb-10 Bodoni text-1x5 text-center md:text-xl md:w-[200px] md:h-[50px] bg-red-700 rounded-[40px] text-white px-4 py-2">Agenda una cita</a>
</div>
@endsection