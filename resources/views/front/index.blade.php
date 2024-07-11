@extends("layouts.front")

@section("css")

@endsection

@section("content")

<x-input-text :type="'text'"></x-input-text>
<hr>
<form action="">
    @csrf
    @method('DELETE')

</form>


<hr> 
<hr>
<hr>
<hr>
<h1> İçerik Alanı</h1>
<hr>
Gelen yaş değeri : {{ $age ??  $person->age }}
<hr>
Gelen yaş değeri : {{ $age ?? "Yaş değeri gönderilmedi" }}
<hr>
@if(isset($person) && isset($person->age))
@switch($person->age)
    @case(10)
        çocuk
        @break
    @case(20)
        
        @break
    @default
        Yaşlandın
@endswitch

@else 
gelmedi
@endif
@endsection

@section("js")

@endsection
