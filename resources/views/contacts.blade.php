@extends('layouts.main')

@section('container')


<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="Email" class="form-control" id="inputemail" placeholder="Email" name="email">
        <label for="inputemail">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingtextarea2" placeholder="Tinggalkan Pesan disini" style="height: 100px" name="pesan"></textarea> 
        <label for="floatingtextarea2">Pesan</label>
    </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection