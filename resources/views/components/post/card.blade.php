@props([
    'title' => 'Título',
    'content' => 'Conteúdo',
    'author' => 'Tiago Braga',
    'created_at' => '',
    'published' => false,
    'id' => 1,
    'categories' => 'Categorias'
])

<div class=" w-full md:w-full lg:max-w-full lg:flex
transition duration-500 ease-in-out bg-blue-500 hover:bg-gray-300 transform hover:-translate-y-1 hover:scale-60
cursor-pointer
">
    <div class="w-full shadow-lg bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
                {{$categories}}
            </p>
            @auth
            <div class="float-right">
                <x-form  method="PUT" action="{{route('post.update', $id)}}">
                    <x-toggle name="published" label="Publicado" :value="$published" iteration="{{$id}}"></x-toggle>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="Submit">
                        Alterar
                    </button>
                </x-form>
            </div>
            @endauth
            <div class="text-gray-900 font-bold text-xl mb-2">{{$title}}</div>
            <p class="text-gray-700 text-base">{{\Illuminate\Support\Str::limit($slot, 120, '...')}}</p>
        </div>
        {{$created_at}}
        <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="https://cdn.quasar.dev/img/boy-avatar.png" alt="Avatar do tiago braga">
            <div class="text-sm">
                <p class="text-gray-900 leading-none">{{$author}}</p>
                <p class="text-gray-600">{{$created_at}}</p>
            </div>
        </div>
    </div>
</div>
