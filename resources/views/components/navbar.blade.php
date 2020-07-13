<nav class="flex items-center justify-between flex-wrap p-6"  x-data="{open: false}">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
{{--        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>--}}
        <img src="{{asset('images/animat-rocket-color.gif')}}" width="40px">
        <span class="font-semibold text-xl tracking-tight">Tiago Braga</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded " @click="open = !open" >
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
{{--    desktop --}}
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto md:block hidden"
    >
        <div class="text-md lg:flex-grow">
            @guest
                <a href="{{route('index')}}#skills" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Habilidades
                </a>
                <a href="{{route('index')}}#projects" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Projetos
                </a>
                <a href="{{route('blog')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Blog
                </a>
            @endguest
            @auth
                <a href="{{route('home')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                        Painel
                    </a>
                    <a href="{{route('post.create')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                        Novo Post
                    </a>
                    <a href="{{route('contact.index')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                        Contatos
                    </a>
                    <a href="{{ route('logout') }}"
                       class="block mt-4 lg:inline-block lg:mt-0   mr-4 float-right"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    <span class="block mt-4 lg:inline-block lg:mt-0   mr-4 float-right">{{ Auth::user()->name }}</span>
            @endauth
        </div>
            @guest
                <div>
                    <a href="#" class="inline-block text-sm px-4 py-4 leading-none border rounded bg-teal-500  hover:border-transparent hover:text-white  mt-4 lg:mt-0">CV</a>
                </div>
            @endguest
    </div>
{{--    responsive navbar --}}
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto md:hidden lg:hidden"
         x-show="open"
         x-transition:enter="ease-out duration-700"
         x-transition:enter-start="opacity-0 transform"
         x-transition:enter-end="opacity-100 transform"
         x-transition:leave="ease-in duration-500"
         x-transition:leave-start="opacity-100 transform"
         x-transition:leave-end="opacity-0 transform"
    >
        <div class="text-md lg:flex-grow">
            @guest
                <a href="{{route('index')}}#skills" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Habilidades
                </a>
                <a href="{{route('index')}}#projects" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Projetos
                </a>
            <a href="{{route('blog')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                Blog
            </a>
            @endguest
            @auth
                <a href="{{route('home')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                    Painel
                </a>
                    <a href="{{route('post.create')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                        Novo Post
                    </a>
                    <a href="{{route('contact.index')}}" class="block mt-4 lg:inline-block lg:mt-0   mr-4">
                        Contatos
                    </a>
                <span class="block mt-4 lg:inline-block lg:mt-0   mr-4">{{ Auth::user()->name }}</span>

                <a href="{{ route('logout') }}"
                   class="block mt-4 lg:inline-block lg:mt-0   mr-4"
                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endauth
        </div>
        @guest
                <div>
                    <a href="#" class="inline-block text-sm px-4 py-4 leading-none border rounded bg-teal-500  hover:border-transparent hover:text-white  mt-4 lg:mt-0">CV</a>
                </div>
        @endguest
    </div>
</nav>
