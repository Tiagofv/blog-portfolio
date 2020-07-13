<x-form method="POST" action="{{route('contact.store')}}">
    <x-input name="email" type="email" label="E-mail" placeholder="Digite o seu e-mail" color="text-white"></x-input>
    <x-input name="subject"  label="Assunto" placeholder="Digite o assunto" color="text-white"></x-input>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block  tracking-wide text-white text-xs font-bold mb-2" for="grid-password">
                Mensagem
            </label>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48
            resize-none" id="message" name="message" maxlength="1000"></textarea>
        </div>
    </div>
    <button class="shadow bg-white  focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
        Enviar
    </button>
</x-form>
