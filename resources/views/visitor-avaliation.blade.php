@extends('templates.template-header-w-btn')

@section('title')
    Avaliação de Visitante
@endsection

@section('content')
    <!-- Container -->
    <section class="h-auto flex flex-col justify-around p-3 md:p-5 border border-blue-600">

        <h1 class="text-white text-lg sm:text-xl md:text-3xl m-3 md:m-5 text-center">Catálogo de Apresentações</h1>

        <!-- Carrossel -->
        <div
            class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events bg-black/80 w-11/12 mx-auto p-3 md:p-5 rounded-md border border-red-600">
            <div class="swiper-wrapper" id="swiper-wrapper-9fd32ebcd2a3ccaa" aria-live="polite"
                style="transition-duration: 0ms; transform: translate3d(-1620px, 0px, 0px);">

                <!-- Slide Item-->
                @foreach ($project as $projects)
                    <form id="frmAvaliation" name="frmAvaliation" method="POST"
                        action="{{ route('visitor-avaliation.store', ['id_project' => $projects->id]) }}"
                        class="swiper-slide flex flex-col items-left justify-center p-3 md:p-5 space-y-3"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 12">
                        @csrf

                        <fieldset>
                            <h2 class="text-white text-xs sm:text-md md:text-lg lg:text-xl">{{ $projects->classroom }} -
                                {{ $projects->country }}
                            </h2>

                            <img src="{{ url('images/flags/' . $projects->img_flag) }}"
                                class="block w-full h-44 sm:h-52 md:h-60 lg:h-68 xl:h-76 rounded-md">

                            <div class="flex justify-between items-center text-gray-netflix w-full p-1">

                                <div class="flex flex-col justify-center items-center space-y-1">

                                    <input type="radio"
                                        class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5"
                                        id="mention" name="mention" value="I" required>
                                    <label class="text-sm sm:text-md md:text-2xl" for="I">Insuficiente</label>

                                </div>

                                <div class="flex flex-col justify-center items-center space-y-1">

                                    <input type="radio"
                                        class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5"
                                        id="mention" name="mention" value="R" required>
                                    <label class="text-sm sm:text-md md:text-2xl" for="R">Regular</label>

                                </div>

                                <div class="flex flex-col justify-center items-center space-y-1">

                                    <input type="radio"
                                        class="bg-black-netflix border-none checked:bg-red-netflix w-5 h-5" id="mention"
                                        name="mention" value="B" required>
                                    <label class="text-sm sm:text-md md:text-2xl" for="B">Bom</label>

                                </div>

                                <div class="flex flex-col justify-center items-center space-y-1">

                                    <input type="radio"
                                        class="bg-black-netflix border-none active:bg-red-netflix checked:bg-red-netflix w-5 h-5"
                                        id="mention" name="mention" value="MB" required>
                                    <label class="text-sm sm:text-md md:text-2xl" for="MB">Muito Bom</label>

                                </div>

                            </div>

                            <input id="comment" name="comment"
                                class="bg-black-netflix placeholder:text-gray-netflix text-sm sm:text-md md:text-2xl border-none w-full rounded-md text-white"
                                placeholder="Comentário (Opcional):" />

                            <input type="submit"
                                class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-md text-center mx-auto my-2 w-11/12 hover:bg-red-netflix/95"
                                placeholder="Enviar">
                        </fieldset>

                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </form>
                @endforeach
            </div>
        </div>
        
        @if (Session::has('message'))
            <section class="popup">
                <div class="popup-inner">
                    <div class="popup-content">
                        <div class="content text-center">
                            <h6 class=" text-emerald-500 font-bold">{{ Session::get('message') }}</h6>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if (isset($errors) && count($errors) > 0)
            <div class="content text-center">
                @foreach ($errors->all() as $error)
                    <h6 class="text-red-netflix font-bold">{{ $error }}<br></h6>
                @endforeach
            </div>
        @endif

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
