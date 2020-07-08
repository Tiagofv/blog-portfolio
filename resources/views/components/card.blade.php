@props([
'value' => 0,
'desc'=> ''
])
<div class=" px-10">
    <div class="max-w rounded overflow-hidden shadow-lg border-b-4 border-purple-500">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$slot}}</div>
            <p class="text-gray-700 text-base text-xl my-5">
                {{$value}}
            </p>
        </div>
        <div class="text-gray-700">
            {{$desc}}
        </div>
    </div>
</div>
