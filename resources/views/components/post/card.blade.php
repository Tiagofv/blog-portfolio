@props([
    'title' => 'Título',
    'content' => 'Conteúdo',
    'author' => 'Tiago Braga',
    'created_at' => '',
    'published' => false,
    'id' => 1,
    'categories' => 'Tecnologia',
    'slug' => 'sluggy'
])

<div class=" w-full md:w-full lg:max-w-full lg:flex
transition duration-500 ease-in-out bg-gray-500 hover:bg-gray-900 transform hover:-translate-y-1 hover:scale-60
cursor-pointer
"
     x-data="data{{$id}}()"
     x-init="$watch('published', value => submit('{{$id}}-form'))"
>
    <div class="w-full shadow-lg bg-gray-100 hover:bg-gray-200 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
                {{$categories}}
            </p>

            <div class="text-gray-900 font-bold text-xl mb-2">{{$title}}</div>
            <p class="text-gray-700">{!! \Illuminate\Support\Str::limit($slot, 120, '...') !!}</p>
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
<script>
    function data{{$id}}(){
        return {
            published: @json($published),
            submit(val){
                console.log(this.formId, val)
                let x = document.getElementById(this.formId ).submit()
                console.log(x)
            },
            formId: @json($id.'-form')
        }
    }
</script>
