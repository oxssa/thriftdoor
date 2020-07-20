@extends('layouts.front')

@section('content')
<br><br>
<div class="container">
<h2>Buat Toko</h2>

<form action="{{route('shops.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nama Toko</label>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>
    <button type="submit"class="btn btn-dark">Submit</button>
</form>
</div>
<br><br><br><br>
@endsection
