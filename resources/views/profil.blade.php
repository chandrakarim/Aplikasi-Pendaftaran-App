@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil') }}</div>

                <div class="card-body">
                @include('sweetalert::alert')

                    <form enctype="multipart/form-data">
                        @csrf
                    @if(isset($users[0]))
                    <div class="field item form-group">
                <label class="col-form-label col-md-4 col-sm-3  label-align">
                <img src="{{ asset('uploads/profil/'.$users[0]->file_img) }}" width="100%" class="rounded float-left" alt="...">
                </label>
                <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('No.Registrasi') }}<span class="required"></span></label>
                        : {{ $users[0]->kode_pendf }}
                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Nama') }}<span class="required"></span></label>
                        : {{ $users[0]->name }}

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Email') }}<span class="required"></span></label>
                        : {{ $users[0]->email }}

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Asal Kota') }}<span class="required"></span></label>
                        : {{ $users[0]->asal_kota }}

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Tempat,Tanggal Lahir') }}<span class="required"></span></label>
                        : {{ $users[0]->tempat_lahir }},{{ \Carbon\Carbon::parse( $users[0]->tgl_lahir)->format('d-m-Y') }}

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Jenis Kelamin') }}<span class="required"></span></label>
                        : {{ $users[0]->jk }}
                        
                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('No.Tlp') }}<span class="required"></span></label>
                        : {{ $users[0]->no_tlp }}

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">{{ __('Alamat') }}<span class="required"></span></label>
                        : {{ $users[0]->alamat }}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('edit',$users[0]->id) }}" button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}</a>
                            </div>
                        </div>
                    @endif 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
