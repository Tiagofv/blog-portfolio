@props([
    'title' => 'Oops! Não há nada aqui. Volte em breve.'
])
<div class="w-full text-center h-full">
    <img src="{{asset('images/box.png')}}" width="150px" alt="{{$title}}" class="mx-auto">
    <h5 class="text-xl ">
        {{$title}}
    </h5>
</div>
