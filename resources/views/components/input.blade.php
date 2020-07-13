@props([
'name' => 'name',
'label' => 'name',
'placeholder' => 'placeholder',
'value' => '',
'type' => 'text',
'color' => 'text-gray-700'
])
<div class="my-6">
    <label class="block  text-sm font-bold mb-2 {{$color}}"> {{__ ($label)}}</label>
    <input type="{{$type}}"
           value="{{$value}}"
           class="shadow appearance-none border rounded w-full py-2 px-2  leading-tight focus:outline-none focus:shadow-outline"
           name="{{__($name)}}"
           placeholder="{{__($placeholder)}}"
        {{$attributes}}
    />
</div>
