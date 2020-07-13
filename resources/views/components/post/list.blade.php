@props([
    'posts' => []
])
@forelse($posts as $post)
{{--    <a class="m-5" href="{{route('post.show', $post->slug)}}">--}}
        <x-post.card author="{{$post->author()->first()->name}}"
                     content="{{$post->content}}"
                     created_at="{{$post->created_at}}"
                     slug="{{$post->slug}}"
                     id="{{$post->id}}"
                     published="{{$post->published}}"
                     title="{{$post->title}}"
                     categories="{{$post->categories}}"
        >
            {!!  $post->content !!}
        </x-post.card>
{{--    </a>--}}

@empty
    <x-common.empty></x-common.empty>
@endforelse
<div class="my-4 ">
    {{$posts->links()}}
</div>
