{{--CONTACT--}}
<div class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)"
>
    <div class="container mx-auto px-6"  x-data="{ open: false }">
        <h2 class="text-4xl font-bold mb-2 text-white">
            Gostou ?
        </h2>
        <h3 class="text-2xl mb-8 text-gray-200">
            Entre em contato para saber em que posso te ajudar!
        </h3>

        <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider  m-2" @click="open = !open" x-show="!open" >
            Contato
        </button>
        <div class="w-100 mx-auto  " >
            <div class="m-auto block text-center">
                <a class="inline-block" href="https://github.com/Tiagofv" target="_blank">
                    <i class="fab fa-github fa-3x cursor-pointer"></i>
                </a>
                <a class="inline-block  ml-2" href="https://www.linkedin.com/in/tiago-felipe-vivaldi-braga/" target="_blank">
                    <i class="fab fa-linkedin fa-3x cursor-pointer"></i>
                </a>
                <a class="inline-block ml-2" target="_blank">
                    <i class="fas fa-sticky-note fa-3x cursor-pointer"></i>
                </a>

            </div>
        </div>
        <div x-show="open"
             x-transition:enter="ease-out duration-700"
             x-transition:enter-start="opacity-0 transform"
             x-transition:enter-end="opacity-100 transform"
             x-transition:leave="ease-in duration-500"
             x-transition:leave-start="opacity-100 transform"
             x-transition:leave-end="opacity-0 transform"
        >
            <x-contact.create ></x-contact.create>
        </div>
    </div>
</div>
{{--ENDCONTACT--}}
