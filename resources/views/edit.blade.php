@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Edit') }}</div>

                <div class="card-body">
                    <form action="{{ route('update.profil', $users[0]->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('No.Registrasi') }}<span class="required"></span></label>
                       
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="kode_pendf" value="{{ $users[0]->kode_pendf }}" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" value="{{ $users[0]->name }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}<span class="required"></span></label>
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="email" value="{{ $users[0]->email }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Asal Kota') }}<span class="required"></span></label>
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="asal_kota" value="{{ $users[0]->asal_kota }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}<span class="required"></span></label>
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tempat_lahir" value="{{ $users[0]->tempat_lahir }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}<span class="required"></span></label>
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2"  name="tgl_lahir" value="{{ ($users[0]->tgl_lahir) }}" type="date" />
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}<span class="required"></span></label>
                        : 
                        <div class="col-md-6">
                            <select name="jk" class="form-control" id="exampleFormControlSelect1">
                            <option selected value="{{ $users[0]->jk }}">{{ $users[0]->jk }}</option>
                            <option  value="Laki-laki">Laki-laki</option>
                            <option  value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('No.Tlp') }}<span class="required"></span></label>
                        <div class="col-md-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="no_tlp" value="{{ $users[0]->no_tlp }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="alamat" value="{{ $users[0]->alamat }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Upload Foto') }}</label>
                            <div class="col-md-6">
                            <input class="form-control" class='optional' name="file_img" data-validate-length-range="5,15" type="file"/></div>
                            <img src="{{ asset('uploads/profil/'.$users[0]->file_img) }}" width="100%" class="rounded float-left" alt="...">

                        </div>
                        </div>
                       
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                            <button type='submit' class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
