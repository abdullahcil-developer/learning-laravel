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
<h1>Support sayfası 1</h1>
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
<h1>Support sayfası 2</h1>
<form action="{{route("user.updateAll", ['id' => 9])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" class="form-control" name="fullname">
    <br>
    <input type="email" class="form-control" name="email" >
    <br>
    <button class="btn btn-success" type="submit">Gönder</button>
</form>
<hr>
<h1>Delete kullanımı</h1>
<form action="{{route("user.delete", ['id' => 9])}}" method="POST">
    @csrf
    @method('DELETE')
   
    <button class="btn btn-success" type="submit">Sil</button>
</form>
<hr>
@endsection

@section("js")
@endsection  