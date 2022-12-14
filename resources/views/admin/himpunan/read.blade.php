@extends('layouts.admin.app')

@section('title', 'Detail Himpunan')

@section('content')

  <!--Detail Himpunan-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-himpunan">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data Himpunan</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.himpunan.show',$himpunan->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.himpunan.show',$himpunan->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 3)
        <form method="POST" action="{{ route('himpunans.himpunan.show',$himpunan->id) }}" enctype='multipart/form-data'>
    @endif
    @method('PUT')
      @csrf
      <input type="hidden" name="id" value="{{ $himpunan->id }}">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" value="{{ $himpunan->namaLengkap }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" value="{{ $himpunan->namaSingkat }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Pembina</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" disabled value="{{ $himpunan->pembina }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Ketua Himpunan</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Ketua Himpunan" name="ketuaHimpunan" id="ketuaHimpunan" disabled value="{{ $himpunan->ketuaHimpunan }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri" disabled value="{{ $himpunan->tahunBerdiri }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Visi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Visi" name="visi" id="visi" disabled value="{{ $himpunan->visi }}">{{ $himpunan->visi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Misi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" disabled value="{{ $himpunan->misi }}">{{ $himpunan->misi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Logo</label>
          <div class="col-sm-9">
         <img src="{{ asset('assets/himpunan') }}/{{ $himpunan->logo }}" alt="logo" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Filosofi Logo</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" disabled value="{{ $himpunan->filosofiLogo}}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9 ">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" disabled value="{{ $himpunan->deskripsi }}" >{{ $himpunan->deskripsi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.himpunan.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.himpunan.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 3)
                    <a class="btn btn-primary" href="{{ route('himpunans.himpunan.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Edit Himpunan-->

@endsection
