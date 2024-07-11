@extends("layouts.front")

@section("css")
@endsection

@section("content")
<h1>contact sayfası
</h1>
<hr>
<form action="{{route("contact")}}" method="POST">
    @csrf
    <input type="text" class="form-control" name="fullname">
    <br>
    <input type="email" class="form-control" name="email" >
    <br>
    <button class="btn btn-success" type="submit">Gönder</button>
</form>
iletişim sayfası 2
<form action="{{route("user",['id'=> "5",
// "name" => 
//"aygun"
])}}" method="POST">
    @csrf
    <input type="text" class="form-control" name="fullname">
    <br>
    <input type="email" class="form-control" name="email" >
    <br>
    <button class="btn btn-success" type="submit">Gönder</button>
</form>
<hr>
<h1>support sayfası </h1>
<form action="{{route("support-form.supoort")}}">
    @csrf
    <input type="text" class="form-control" name="fullname">
    <br>
    <input type="email" class="form-control" name="email" >
    <br>
    <button class="btn btn-success" type="submit">Gönder</button>
</form>
<hr>
<h1>support sayfası </h1>
<form action="{{route("user.update", ['id' => 9])}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" class="form-control" name="fullname">
    <br>
    <input type="email" class="form-control" name="email" >
    <br>
    <button class="btn btn-success" type="submit">Gönder</button>
</form>
<hr>
@endsection

@section("js")
@endsection  