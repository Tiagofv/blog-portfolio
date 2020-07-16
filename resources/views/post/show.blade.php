<x-blog>

    <div class="w-full md:w-2/3 my-auto mx-auto" style="min-height: 60vh;">
        <div class="pa-4 md:mx-10 mx-4" >
            <div>


                <a href=" {{ url()->previous() }}" class="underline" >
                    <span class="mx-2"><i class="fas fa-long-arrow-alt-left"></i></span>
                    Voltar</a>

                @auth
                    <a href="{{route('post.edit', $post->slug)}}" class="float-right underline">
                        <span  class="mx-2"><i class="fas fa-pen"></i></span>
                        Editar</a>
                @endauth

                <h5 class="text-3xl md:text-4xl">{{$post->title}}</h5>
            </div>
            <div class="leading-relaxed w-full">
                {!! $post->content ?? '' !!}
            </div>
            <script src="https://utteranc.es/client.js"
                    repo="Tiagofv/blog-portfolio"
                    issue-term="pathname"
                    theme="github-light"
                    crossorigin="anonymous"
                    async>
            </script>
        </div>
    </div>
    </div>
</x-blog>
<style>
    h1{
        font-size: 1.6em;
        margin-bottom: 0em;
    }
    p {
        margin: 0 0 1rem;
    }
    pre {
        background-color: 	rgb(211,211,211);
        border-radius: 10px;
        padding: 1em;
        overflow-y: auto;
    }
</style>
