@props([
    'label' => 'Nome'
])

<div class="my-6">
    <label class="md:w-2/3 block ">
        <input class="mr-2 leading-tight" type="checkbox">
        <span class="text-sm">
        {{$label}}
      </span>
    </label>
</div>
