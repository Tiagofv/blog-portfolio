
<x-blog>
    {{--HERO--}}
    <div class="w-100  grid grid-cols-2 gap-3" style="background-color: #5de6de;
background-image: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%);height: 100vh"
    >
        <div class="container  px-20 my-auto">
            <h2 class="text-4xl font-bold mb-2 text-white">
                Tiago Braga
            </h2>
            <h3 class="text-2xl mb-8 text-gray-200">
                Desenvolvedor focado em solucionar problemas.
            </h3>

            <a href="#skills">
                <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
                    Conheça Mais
                </button>

            </a>
        </div>

        <div class="container grid grid-cols-2 my-auto">
            <div class="">
                <img src="{{asset('/images/animat-lightbulb-color.gif')}}" alt="">
            </div>
            <div class="">
                <img src="{{asset('/images/animat-rocket-color.gif')}}" alt="">
            </div>
        </div>
    </div>
    {{--ENDHERO--}}
    {{--SKILLS--}}
    <div class="container full-width mx-auto" >
        <!-- index.html -->

        <section class="container mx-auto px-6 p-10" id="skills">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
                Habilidades
            </h2>
            <div class="flex flex-col-reverse md:flex-row  lg:flex-row xl:flex-row items-center flex-wrap mb-20 ">
                <div class="w-full md:w-1/2">
                    <h4 class="text-3xl text-gray-800 font-bold mb-3">Desenvolvimento Web</h4>
                    <p class="text-gray-600 mb-8">Desenvolvimento de aplicações utilizando o framework Django ou Laravel.
                        Foco em desenvolvimento ágil, inteligente e inovador!
                    </p>
                    <x-badge>
                        PHP
                    </x-badge>
                    <x-badge>
                        Python
                    </x-badge>
                    <x-badge>
                        Laravel
                    </x-badge>
                    <x-badge>
                        Django
                    </x-badge>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{asset('images/web_app.svg')}}" alt="Desenvolvimento de Web Apps" />
                </div>
            </div>

            <div class="flex items-center flex-wrap mb-20">
                <div class="w-full md:w-1/2">
                    <img src="{{asset('images/mobile_app.svg')}}" alt="Desenvolvimento de Aplicativos para celulares" class="w-3/4" />
                </div>
                <div class="w-full md:w-1/2 ">
                    <h4 class="text-3xl text-gray-800 font-bold mb-3">Desenvolvimento PWA</h4>
                    <p class="text-gray-600 mb-8">
                        Atráves da tecnologia PWA, é possível desenvolver aplicativos para celulares (Android e Ios)  e computadores! Revolucione o seu negócio!
                    </p>
                    <x-badge>
                        Javascript
                    </x-badge>
                    <x-badge>
                        Vuejs
                    </x-badge>
                    <x-badge>
                        Quasar Framework
                    </x-badge>
                </div>
            </div>

            <div class="flex flex-col-reverse md:flex-row  lg:flex-row xl:flex-row   items-center flex-wrap mb-20">
                <div class="w-full md:w-1/2">
                    <h4 class="text-3xl text-gray-800 font-bold mb-3">Análise de Dados </h4>
                    <p class="text-gray-600 mb-8">
                        Automatize tarefas cotidinas que exigem trabalhos manuais e repetitivos , descubra processos que geram prejuízo e aumente a produtividade de sua empresa!
                    Atráves da análise de dados é possível extrair insigths que melhorem o seu negócio , gerando valor para você!
                    </p>
                    <x-badge>
                        Python
                    </x-badge>
                    <x-badge>
                        Pandas
                    </x-badge>
                    <x-badge>
                        Scikit
                    </x-badge>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{asset('images/data_analysis.svg')}}" alt="Análise de Dados" />
                </div>
            </div>
        </section>
    </div>
    {{--ENDSKILLS--}}
    {{--PROJECTS--}}
    <div class="w-100 container mx-auto px-5" id="projects">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
            Projetos
        </h2>
        <p class="text-gray-600 mb-8">
            Desde Componentes Web , UI/UX até Laravel (PHP), VueJs (JavaScript), Python e Análise de dados.
        </p>
        <div class=" mb-8 ">
            <x-badge >
                PHP
            </x-badge>
            <x-badge >
                Laravel
            </x-badge>
            <x-badge >
                AWS
            </x-badge>
            <x-badge >
                JavaScript
            </x-badge>
            <x-badge >
                VueJs
            </x-badge>
            <x-badge >
                WebScraping
            </x-badge>
            <x-badge >
                DataScience
            </x-badge>
        </div>
        <div class="grid md:grid-cols-3  sm:grid-cols-1 cols gap-4 mb-8">
            <div class="">
                <img src="{{asset('images/port_1.png')}}" alt="">
            </div>
            <div class="">
                <img src="{{asset('images/port_2.png')}}" alt="">
            </div>
            <div class="">
                <img src="{{asset('images/port_3.png')}}" alt="">
            </div>
        </div>
        <div class="w-100 text-center mb-8">
            <button class="bg-teal-500 font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider text-white">Ver mais</button>
        </div>
    </div>
    {{--ENDPROJECTS--}}
</x-blog>
