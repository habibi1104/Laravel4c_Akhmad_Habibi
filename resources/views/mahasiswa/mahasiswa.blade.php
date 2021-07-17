@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header">Data Mahasiswa
               <a href="{{route ('mahasiswa.create')}}" class="btn btn-md btn-primary float-right">TAMBAH DATA</a></div>
                <div class="card-body">
               <div class="table-responsive">
               <table class="table table-bordered">
               <tr>
               <th>NO</th>
               <th>NPM</th>
               <th>NAMA LENGKAP</th>
               <th>TEMPAT, TANGGAL LAHIR</th>
               <th>JENIS KELAMIN</th>
               <th>TELEPON</th>
               <th>ALAMAT</th>
               <th>AKSI</th>
               </tr>
              @foreach ($mahasiswa as $mhs)
                <tr>
                <td>{{$mhs->id}}</td>
                <td>{{$mhs->npm}}</td>
                <td>{{$mhs->user->name}}</td>
                <td>{{$mhs->tempat_lahir .' '. $mhs->tanggal_lahir}}</td>
                <td>{{$mhs->gender}}</td>
                <td>{{$mhs->telepon}}</td>
                <td>{{$mhs->alamat}}</td>
                <td>
               <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-sm btn-warning">EDIT</a>
               <a href="{{route('mahasiswa.hapus', $mhs->id)}}" class="btn btn-sm btn-danger">HAPUS</a></td>
                </tr>
              @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection