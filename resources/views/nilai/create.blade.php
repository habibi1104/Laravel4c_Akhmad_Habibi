@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header">Tambah Data
               </div>
               <div class="card-body">
                   <form action= "{{ route('nilai.simpan') }}" method="post">
                       @csrf
                       <div class="form-group row">
                          <label for="user_id" class="col-sm-4 text-sm-right">Nama Mahasiswa</label>
                           <div class="col-sm-6">
                               <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                   <option value="" disabled selected>--Pilih Nama--</option>
                                   @foreach ($mahasiswa as $mhs)
                                       <option value="{{ $mhs->id }}">{{$mhs->user->name}}</option>
                                   @endforeach
                               </select>
                           </div>
				    </div>
                        <div class="form-group row">
                           <label for="gender" class="col-sm-4 text-sm-right">Nama Mata Kuliah</label>
                           <div class="col-sm-6">
                              <select name="makul_id" id="makul_id" class="form-control">
                                   <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                   @foreach ($makul as $mk)
                                       <option value="{{ $mk->id }}">{{$mk->nama_makul}}</option>
                                   @endforeach
                               </select>
                           </div>
				    </div>
                        <div class="form-group row">
                           <label for="telepon" class="col-sm-4 text-sm-right">Nilai</label>
                           <div class="col-sm-6">
                               <input type="numeric" name="nilai" class="form-control" placeholder="Masukkan Nilai Mahasiswa" maxlength="3">
                           </div>
				    </div>
                       
                       <div class="form-group row">
                           <label for="" class="col-sm-4 text-sm-right"></label>
                           <div class="col-sm-6 float-right">
                               <button type="submit" class="btn btn-primary">SIMPAN</button>
                               <a href="{{ route('nilai') }}" class="btn btn-danger " name="batal">Batal</a>
                           </div>
				    </div>
                   </form>
                </div>
           </div>
       </div>
   </div>
</div>
@endsection