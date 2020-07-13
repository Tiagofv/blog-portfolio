<x-blog>
    <div class="md:mx-10" mx-4>
        <div>
            <h5 class="text-3xl md:text-4xl">{{$post->title}}</h5>
            @auth
            <a href="{{route('post.edit', $post->slug)}}">Editar</a>
            @endauth
        </div>
        <div class="">
        {!! $post->content ?? '' !!}
        </div>
    </div>
    </div>
</x-blog>
