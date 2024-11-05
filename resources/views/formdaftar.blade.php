@extends('layout.template')
@section('title', 'Project Kelompok')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">FORMULIR PENDAFTARAN BEASISWA</h6>
                <form>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama"
                            wire:model="nama"value="{{ @old('nama') }}">
                        @error('nama')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" wire:model="email" id="email"
                            value="{{ @old('email') }}">
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="nohp"
                            wire:model="nohp"value="{{ @old('nohp') }}">
                        @error('nohp')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Ipk</label>
                        <input type="number" step="0.01" class="form-control" id="ipk"
                            wire:model="ipk"value="{{ @old('ipk') }}">
                        @error('ipk')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Semester</label>
                        <select class="form-select" id="semester" wire:model="semester">
                            <option selected>Choose...</option>
                            <option>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                        </select>
                        @error('semester')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Status</label>
                        <select class="form-select" id="status" wire:model="status">
                            <option selected>Choose...</option>
                            <option>Terverifikasi</option>
                            <option>Tidak Terverifikasi</option>
                        </select>
                        @error('status')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Upload Berkas</label>
                        <input type="file" class="form-control" id="dok"
                            wire:model="dok"value="{{ @old('dok') }}">
                        @error('dok')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Tanggal Daftar</label>
                        <input type="date" class="form-control" id="tgl"
                            wire:model="tgl"value="{{ @old('tgl') }}">
                        @error('tgl')
                            <div class="form-text text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" wire:click="store" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection