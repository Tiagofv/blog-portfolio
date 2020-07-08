@props([
    'posts' => []
])
@forelse($posts as $post)
    <a class="m-5" href="{{route('post.edit', $post->id)}}">
        <x-post.card author="{{$post->author()->first()->name}}"
                     content="{{$post->content}}"
                     created_at="{{$post->created_at}}"
                     id="{{$post->id}}"
                     published="{{$post->published}}"
                     title="{{$post->title}}"
                     categories="{{$post->categories}}"
        >
            {!!  $post->content !!}
        </x-post.card>
    </a>

@empty
    <div>
        Não há nada aqui :(
    </div>
@endforelse
<div class="my-4 ">
    {{$posts->links()}}
</div>
