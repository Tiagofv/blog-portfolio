@props([
'name' => 'name',
'label' => 'name',
'placeholder' => 'placeholder',
'value' => '',
])
<div class="my-6">
    <label class="block text-gray-700 text-sm font-bold mb-2"> {{__($label)}}</label>
    <input type="text"
           value="{{$value}}"
           class="shadow appearance-none border rounded w-full py-2 px-2  leading-tight focus:outline-none focus:shadow-outline"
           name="{{__($name)}}"
           placeholder="{{__($placeholder)}}"
    />
</div>
