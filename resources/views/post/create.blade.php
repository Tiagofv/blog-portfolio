<x-blog>
    <script src="https://cdn.tiny.cloud/1/00sq6al4jt0q4onckl018rociwt6hx15ot66vvyw7pxsbifw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <div class="mx-8" x-data="postForm()" x-init="$watch('title', value => setSlug(value))">
        <x-form method="{{isset($post) ? 'PUT' : 'POST'}}"  action="{{isset($post) ?  route('post.update', $post->slug) : route('post.store')}}">
            <x-input
                    name="title"
                    label="Título"
                    placeholder="Titulo"
                    x-model="title"
                    value="{{$post->title ?? ''}}"
                    >
            </x-input>
            <x-input name="slug" label="Slug" placeholder="Slug-do-post" value="{{$post->slug ?? ''}}" x-model="slug"></x-input>
            <x-input name="description" label="Descrição" placeholder="Descrição" value="{{$post->description ?? ''}}"></x-input>
            <x-input name="categories" label="Categorias" placeholder="Categorias" value="{{$post->categories ?? ''}}"></x-input>
            <textarea name="content" placeholder="Conteúdo" x-model="content" rows="30" >
                Welcome to TinyMCE!-
              </textarea>
            <div class=" mt-4">
                <x-toggle name="published" label="Mostrar post" value="{{$post->published ?? false}}"/>
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8">
                {{isset($post) ? 'Editar' : 'Criar'}}
            </button>
        </x-form>
    </div>
    <script>
        function postForm() {
            return {
                title: @json($post->title ?? ''),
                slug: @json($post->slug ?? ''),
                content: @json($post->content ?? ''),
                setSlug(){
                    this.slug = this.title.replace(/ /g, '-').toLowerCase()
                }
            }
        }
    </script>
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed ' +
                        'permanentpen powerpaste table advtable tinycomments tinymcespellchecker image codesample',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table image codesample numlist bullist',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    image_caption: true,
                    codesample_languages: [
                        {text:'HTML/XML',value:'markup'},
                        {text:"XML",value:"xml"},
                        {text:"HTML",value:"html"},
                        {text:"mathml",value:"mathml"},
                        {text:"SVG",value:"svg"},
                        {text:"CSS",value:"css"},
                        {text:"Clike",value:"clike"},
                        {text:"Javascript",value:"javascript"},
                        {text:"ActionScript",value:"actionscript"},
                        {text:"apacheconf",value:"apacheconf"},
                        {text:"apl",value:"apl"},
                        {text:"applescript",value:"applescript"},
                        {text:"asciidoc",value:"asciidoc"},
                        {text:"aspnet",value:"aspnet"},
                        {text:"autoit",value:"autoit"},
                        {text:"autohotkey",value:"autohotkey"},
                        {text:"bash",value:"bash"},
                        {text:"basic",value:"basic"},
                        {text:"batch",value:"batch"},
                        {text:"c",value:"c"},
                        {text:"brainfuck",value:"brainfuck"},
                        {text:"bro",value:"bro"},
                        {text:"bison",value:"bison"},
                        {text:"C#",value:"csharp"},
                        {text:"C++",value:"cpp"},
                        {text:"CoffeeScript",value:"coffeescript"},
                        {text:"ruby",value:"ruby"},
                        {text:"d",value:"d"},
                        {text:"dart",value:"dart"},
                        {text:"diff",value:"diff"},
                        {text:"docker",value:"docker"},
                        {text:"eiffel",value:"eiffel"},
                        {text:"elixir",value:"elixir"},
                        {text:"erlang",value:"erlang"},
                        {text:"fsharp",value:"fsharp"},
                        {text:"fortran",value:"fortran"},
                        {text:"git",value:"git"},
                        {text:"glsl",value:"glsl"},
                        {text:"go",value:"go"},
                        {text:"groovy",value:"groovy"},
                        {text:"haml",value:"haml"},
                        {text:"handlebars",value:"handlebars"},
                        {text:"haskell",value:"haskell"},
                        {text:"haxe",value:"haxe"},
                        {text:"http",value:"http"},
                        {text:"icon",value:"icon"},
                        {text:"inform7",value:"inform7"},
                        {text:"ini",value:"ini"},
                        {text:"j",value:"j"},
                        {text:"jade",value:"jade"},
                        {text:"java",value:"java"},
                        {text:"JSON",value:"json"},
                        {text:"jsonp",value:"jsonp"},
                        {text:"julia",value:"julia"},
                        {text:"keyman",value:"keyman"},
                        {text:"kotlin",value:"kotlin"},
                        {text:"latex",value:"latex"},
                        {text:"less",value:"less"},
                        {text:"lolcode",value:"lolcode"},
                        {text:"lua",value:"lua"},
                        {text:"makefile",value:"makefile"},
                        {text:"markdown",value:"markdown"},
                        {text:"matlab",value:"matlab"},
                        {text:"mel",value:"mel"},
                        {text:"mizar",value:"mizar"},
                        {text:"monkey",value:"monkey"},
                        {text:"nasm",value:"nasm"},
                        {text:"nginx",value:"nginx"},
                        {text:"nim",value:"nim"},
                        {text:"nix",value:"nix"},
                        {text:"nsis",value:"nsis"},
                        {text:"objectivec",value:"objectivec"},
                        {text:"ocaml",value:"ocaml"},
                        {text:"oz",value:"oz"},
                        {text:"parigp",value:"parigp"},
                        {text:"parser",value:"parser"},
                        {text:"pascal",value:"pascal"},
                        {text:"perl",value:"perl"},
                        {text:"PHP",value:"php"},
                        {text:"processing",value:"processing"},
                        {text:"prolog",value:"prolog"},
                        {text:"protobuf",value:"protobuf"},
                        {text:"puppet",value:"puppet"},
                        {text:"pure",value:"pure"},
                        {text:"python",value:"python"},
                        {text:"q",value:"q"},
                        {text:"qore",value:"qore"},
                        {text:"r",value:"r"},
                        {text:"jsx",value:"jsx"},
                        {text:"rest",value:"rest"},
                        {text:"rip",value:"rip"},
                        {text:"roboconf",value:"roboconf"},
                        {text:"crystal",value:"crystal"},
                        {text:"rust",value:"rust"},
                        {text:"sas",value:"sas"},
                        {text:"sass",value:"sass"},
                        {text:"scss",value:"scss"},
                        {text:"scala",value:"scala"},
                        {text:"scheme",value:"scheme"},
                        {text:"smalltalk",value:"smalltalk"},
                        {text:"smarty",value:"smarty"},
                        {text:"SQL",value:"sql"},
                        {text:"stylus",value:"stylus"},
                        {text:"swift",value:"swift"},
                        {text:"tcl",value:"tcl"},
                        {text:"textile",value:"textile"},
                        {text:"twig",value:"twig"},
                        {text:"TypeScript",value:"typescript"},
                        {text:"verilog",value:"verilog"},
                        {text:"vhdl",value:"vhdl"},
                        {text:"wiki",value:"wiki"},
                        {text:"YAML",value:"yaml"}
                    ]
                });
            </script>
</x-blog>
