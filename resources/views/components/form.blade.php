@props([
'method' => 'POST',
'action' => ''
])

<form action="{{$action}}" method="{{$method === 'GET' ? 'GET' : 'POST'}}">
    @csrf
    {{-- if the method is not get or post --}}
    @if (!in_array($method, ['GET', 'POST']))
        {{-- we return put or delete --}}
        @method($method)
    @endif
    {{$slot}}
</form>
