<x-blog>
    <script src="https://cdn.tiny.cloud/1/00sq6al4jt0q4onckl018rociwt6hx15ot66vvyw7pxsbifw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <div class="mx-8" >
        <x-form method="{{isset($post) ? 'PUT' : 'POST'}}"  action="{{isset($post) ?  route('post.update', $post->id) : route('post.store')}}">
            <x-input name="title" label="Título" placeholder="Titulo" value="{{$post->title ?? ''}}"></x-input>
            <x-input name="description" label="Descrição" placeholder="Descrição" value="{{$post->description ?? ''}}"></x-input>
            <x-input name="categories" label="Categorias" placeholder="Categorias" value="{{$post->categories ?? ''}}"></x-input>
            <textarea name="content" placeholder="Conteúdo" value="{{$post->content ?? ''}}">
                Welcome to TinyMCE!
              </textarea>
            <div class=" mt-4">
                <x-toggle name="published" label="Mostrar post" />
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8">
                {{isset($post) ? 'Editar' : 'Criar'}}
            </button>

        </x-form>
    </div>
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                });
            </script>
</x-blog>
