@extends('templates.template-header-w-btn')

@section('title')
  Avaliação de Professores
@endsection

@section('content')
    <!-- Container -->
    <section class="h-auto flex flex-col justify-around p-3 md:p-5 border border-blue-600">

      <!-- Carrossel -->
      <form class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events bg-black/80 w-11/12 mx-auto p-3 md:p-5 rounded-md border border-red-600">

        <h1 class="text-white text-lg sm:text-xl md:text-3xl m-3 md:m-5">Catálogo de Apresentações</h1>

        <div class="swiper-wrapper" id="swiper-wrapper-9fd32ebcd2a3ccaa" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1620px, 0px, 0px);">

          <!-- Slide 1 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="0" role="group" aria-label="1 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Administração (Manhã) - Japão</h2>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/2560px-Flag_of_Japan.svg.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-JP" name="mencao" value="I-JP">
                <label class="text-sm sm:text-md md:text-2xl" for="I-JP">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-JP" name="mencao" value="R-JP">
                <label class="text-sm sm:text-md md:text-2xl" for="R-JP">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-JP" name="mencao" value="B-JP">
                <label class="text-sm sm:text-md md:text-2xl" for="B-JP">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-JP" name="mencao" value="MB-JP">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-JP">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-JP" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>
          
          <!-- Slide 2 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="1" role="group" aria-label="2 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Informática (Manhã) - Austrália</h2>

            <img src="https://imagepng.org/wp-content/uploads/2017/10/bandeira-australia.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-AU" name="mencao" value="I-AU">
                <label class="text-sm sm:text-md md:text-2xl" for="I-AU">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-AU" name="mencao" value="R-AU">
                <label class="text-sm sm:text-md md:text-2xl" for="R-AU">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-AU" name="mencao" value="B-AU">
                <label class="text-sm sm:text-md md:text-2xl" for="B-AU">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-AU" name="mencao" value="MB-AU">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-AU">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-AU" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 3 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="2" role="group" aria-label="3 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Logística (Manhã) - Inglaterra</h2>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/2560px-Flag_of_England.svg.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-ING" name="mencao" value="I-ING">
                <label class="text-sm sm:text-md md:text-2xl" for="I-ING">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-ING" name="mencao" value="R-ING">
                <label class="text-sm sm:text-md md:text-2xl" for="R-ING">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-ING" name="mencao" value="B-ING">
                <label class="text-sm sm:text-md md:text-2xl" for="B-ING">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-ING" name="mencao" value="MB-ING">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-ING">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-ING" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 4 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="3" role="group" aria-label="4 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Administração (Manhã) - Espanha</h2>

            <img src="https://static.vecteezy.com/ti/vetor-gratis/p3/8070285-espanha-bandeira-icone-em-cor-oficial-e-proporcao-corretamente-gratis-vetor.jpg" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-ESP" name="mencao" value="I-ESP">
                <label class="text-sm sm:text-md md:text-2xl" for="I-ESP">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-ESP" name="mencao" value="R-ESP">
                <label class="text-sm sm:text-md md:text-2xl" for="R-ESP">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-ESP" name="mencao" value="B-ESP">
                <label class="text-sm sm:text-md md:text-2xl" for="B-ESP">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-ESP" name="mencao" value="MB-ESP">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-ESP">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-ESP" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 5 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="4" role="group" aria-label="5 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Informática (Manhã) - Holanda</h2>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1280px-Flag_of_the_Netherlands.svg.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-HOL" name="mencao" value="I-HOL">
                <label class="text-sm sm:text-md md:text-2xl" for="I-HOL">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-HOL" name="mencao" value="R-HOL">
                <label class="text-sm sm:text-md md:text-2xl" for="R-HOL">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-HOL" name="mencao" value="B-HOL">
                <label class="text-sm sm:text-md md:text-2xl" for="B-HOL">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-HOL" name="mencao" value="MB-HOL">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-HOL">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-HOL" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 6 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="5" role="group" aria-label="6 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Logística (Manhã) - Argentina</h2>

            <img src="https://bandeira.net/wp-content/uploads/2018/08/bandeira-da-argentina.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-ARG" name="mencao" value="I-ARG">
                <label class="text-sm sm:text-md md:text-2xl" for="I-ARG">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-ARG" name="mencao" value="R-ARG">
                <label class="text-sm sm:text-md md:text-2xl" for="R-ARG">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-ARG" name="mencao" value="B-ARG">
                <label class="text-sm sm:text-md md:text-2xl" for="B-ARG">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-ARG" name="mencao" value="MB-ARG">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-ARG">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-ARG" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>
          

          <!-- Slide 7 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="6" role="group" aria-label="7 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Logística (Tarde) - Portugal</h2>

            <img src="https://imagepng.org/wp-content/uploads/2017/09/bandeira-portugal.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-POR" name="mencao" value="I-POR">
                <label class="text-sm sm:text-md md:text-2xl" for="I-POR">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-POR" name="mencao" value="R-POR">
                <label class="text-sm sm:text-md md:text-2xl" for="R-POR">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-POR" name="mencao" value="B-POR">
                <label class="text-sm sm:text-md md:text-2xl" for="B-POR">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-POR" name="mencao" value="MB-POR">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-POR">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-POR" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 8 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="8" role="group" aria-label="9 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Informática (Tarde) - Brasil</h2>

            <img src="https://www.curitiba.pr.leg.br/atividade-parlamentar/legislacao/imagens/bandeira-do-brasil.png/image" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-BRA" name="mencao" value="I-BRA">
                <label class="text-sm sm:text-md md:text-2xl" for="I-BRA">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-BRA" name="mencao" value="R-BRA">
                <label class="text-sm sm:text-md md:text-2xl" for="R-BRA">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-BRA" name="mencao" value="B-BRA">
                <label class="text-sm sm:text-md md:text-2xl" for="B-BRA">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-BRA" name="mencao" value="MB-BRA">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-BRA">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-BRA" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 9 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="8" role="group" aria-label="9 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">1º MTEC Logística (Tarde) - Dinamarca</h2>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/1200px-Flag_of_Denmark.svg.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-DIN" name="mencao" value="I-DIN">
                <label class="text-sm sm:text-md md:text-2xl" for="I-DIN">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-DIN" name="mencao" value="R-DIN">
                <label class="text-sm sm:text-md md:text-2xl" for="R-DIN">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-DIN" name="mencao" value="B-DIN">
                <label class="text-sm sm:text-md md:text-2xl" for="B-DIN">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-DIN" name="mencao" value="MB-DIN">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-DIN">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-DIN" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 10 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="9" role="group" aria-label="10 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Administração (Tarde) - México</h2>

            <img src="https://imagepng.org/wp-content/uploads/2017/10/bandeira-mexico.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-MEX" name="mencao" value="I-MEX">
                <label class="text-sm sm:text-md md:text-2xl" for="I-MEX">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-MEX" name="mencao" value="R-MEX">
                <label class="text-sm sm:text-md md:text-2xl" for="R-MEX">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-MEX" name="mencao" value="B-MEX">
                <label class="text-sm sm:text-md md:text-2xl" for="B-MEX">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-MEX" name="mencao" value="MB-MEX">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-MEX">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-MEX" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 11  -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="10" role="group" aria-label="11 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Informática (Tarde) - França</h2>

            <img src="https://imagepng.org/wp-content/uploads/2017/10/bandeira-fran%C3%A7a.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-FRA" name="mencao" value="I-FRA">
                <label class="text-sm sm:text-md md:text-2xl" for="I-FRA">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-FRA" name="mencao" value="R-FRA">
                <label class="text-sm sm:text-md md:text-2xl" for="R-FRA">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-FRA" name="mencao" value="B-FRA">
                <label class="text-sm sm:text-md md:text-2xl" for="B-FRA">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-FRA" name="mencao" value="MB-FRA">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-FRA">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-FRA" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

          <!-- Slide 12 -->
          <fieldset class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3" data-swiper-slide-index="11" role="group" aria-label="12 / 12">

            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">2º MTEC Logística (Tarde) - Estados Unidos</h2>

            <img src="https://www.gov.br/agricultura/pt-br/assuntos/relacoes-internacionais/agro-mais-investimentos/imagens/bandeira-dos-estados-unidos.png/@@images/image.png" class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

            <div class="flex justify-between items-center text-gray-netflix w-full p-1 border border-red-600">

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="I-EUA" name="mencao" value="I-EUA">
                <label class="text-sm sm:text-md md:text-2xl" for="I-EUA">Insuficiente</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="R-EUA" name="mencao" value="R-EUA">
                <label class="text-sm sm:text-md md:text-2xl" for="R-EUA">Regular</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="B-EUA" name="mencao" value="B-EUA">
                <label class="text-sm sm:text-md md:text-2xl" for="B-EUA">Bom</label>

              </div>

              <div class="flex flex-col justify-center items-center space-y-1">

                <input type="radio" class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5" id="MB-EUA" name="mencao" value="MB-EUA">
                <label class="text-sm sm:text-md md:text-2xl" for="MB-EUA">Muito Bom</label>

              </div>

            </div>

            <textarea required id="CMT-EUA" class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white" placeholder="Comentário (Opcional):" rows="3" cols="50"></textarea>

          </fieldset>

        </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        
        <input type="submit" class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-md text-center mx-auto my-2 w-11/12 hover:bg-red-netflix/95" placeholder="Enviar"></input>

      </form>

    </section>
@endsection

<script>
  window.onload = function() {
      const swiper = new Swiper('.mySwiper', {
          // Optional parameters
          direction: 'horizontal',
          loop: true,
          slidesPerView: 1,
          spaceBetween: 0,
          autoHeight: true,
          watchSlidesProgress: true,

          breakpoints: {

              240: {
                  slidesPerView: 1,
              },

              412: {
                  slidesPerView: 1.1,
              },

              540: {
                  slidesPerView: 1.5,
              },

              768: {
                  slidesPerView: 1.3,
              },

              820: {
                  slidesPerView: 1.5,
              },

              912: {
                  slidesPerView: 1.6,
              },

              1024: {
                  slidesPerView: 1.8,
              },

              1280: {
                  slidesPerView: 2.6,
              },

          },

          // If we need pagination
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
              type: "progressbar",
          },

          // Navigation arrows
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
              el: '.swiper-scrollbar',
          },
      });
  }
</script>
