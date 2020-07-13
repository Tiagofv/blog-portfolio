@props([
    'label' => 'Toggle',
    'name' => 'name',
    'value' => false,
    'iteration' => 1
])
<div class=" w-full ">

    <!-- Toggle Button -->
    <label
        for="{{$iteration}}"
        class="flex items-center cursor-pointer"
    >
        <!-- toggle -->
        <div class="relative">
            <!-- input -->
            <input id="{{$iteration}}" {{$attributes}} type="checkbox" class="hidden" name="{{$name}}"
                   {{$value ? 'checked' : ''}} value="1" />
{{--            <input  type="hidden"  name="{{$name}}" value="0"  />--}}
            <!-- line -->
            <div
                class="toggle__line w-10 h-4 bg-gray-400 rounded-full shadow-inner"
            ></div>
            <!-- dot -->
            <div
                class="toggle__dot absolute w-6 h-6 bg-white rounded-full shadow inset-y-0 left-0"
            ></div>
        </div>
        <!-- label -->
        <div
            class="ml-3 text-gray-700 font-medium"
        >
            {{$label}}
        </div>
    </label>

</div>

<style>
    .toggle__dot {
        top: -.25rem;
        left: -.25rem;
        transition: all 0.3s ease-in-out;
    }

    input:checked ~ .toggle__dot {
        transform: translateX(100%);
        background-color: #48bb78;
    }
</style>
