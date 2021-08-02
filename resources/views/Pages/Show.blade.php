@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header clearfix">
                        <div class="float-left">
                            <h5>Tambah Data Penduduk</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                    id="nik" placeholder="NIK" value="{{ $data->nik }}" disabled>
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="no_kartu_keluarga">No Kartu Keluarga</label>
                                <input type="text" name="no_kartu_keluarga"
                                    class="form-control @error('no_kartu_keluarga') is-invalid @enderror"
                                    id="no_kartu_keluarga" placeholder="No Kartu Keluarga"
                                    value="{{ $data->no_kartu_keluarga }}" disabled>
                                @error('no_kartu_keluarga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" placeholder="Nama" value="{{ $data->nama }}" disabled>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                                    placeholder="Tempat Lahir" value="{{ $data->tempat_lahir }})" disabled>
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                                    value="{{ $data->tgl_lahir }}" disabled>
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="jenis_kelamin_id">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin_id"
                                    class="form-control @error('jenis_kelamin_id') is-invalid @enderror"
                                    id="jenis_kelamin_id" value="{{ $data->JenisKelamin->jenis_kelamin }}" disabled>
                                @error('jenis_kelamin_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="agama_id">agama</label>
                                <input type="text" name="agama_id"
                                    class="form-control @error('agama_id') is-invalid @enderror" id="agama_id"
                                    value="{{ $data->Agama->agama }}" disabled>
                                @error('agama_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status_id">status</label>
                                <input type="status_id" name="status_id"
                                    class="form-control @error('status_id') is-invalid @enderror" id="status_id"
                                    value="{{ $data->Status->status }}" disabled>
                                @error('status_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" name="pendidikan"
                                    class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan"
                                    placeholder="Pendidikan" value="{{ $data->pendidikan }}" disabled>
                                @error('pendidikan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan"
                                    class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
                                    placeholder="Pekerjaan" value="{{ $data->pekerjaan }}" disabled>
                                @error('pekerjaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                cols="30" rows="10" disabled>{{ $data->alamat }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
