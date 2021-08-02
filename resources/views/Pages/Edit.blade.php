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
                        <form action="{{ route('penduduk.update', $data->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" placeholder="NIK" value="{{ old('nik') ? old('nik') : $data->nik }}">
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
                                        value="{{ old('no_kartu_keluarga') ? old('no_kartu_keluarga') : $data->no_kartu_keluarga }}">
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
                                    id="nama" placeholder="Nama" value="{{ old('nama') ? old('nama') : $data->nama }}">
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
                                        placeholder="Tempat Lahir"
                                        value="{{ old('tempa_lahir') ? old('tempat_lahir') : $data->tempat_lahir }})">
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
                                        value="{{ old('tgl_lahir') ? old('tgl_lahir') : $data->tgl_lahir }}">
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
                                    <select name="jenis_kelamin_id" id="jenis_kelamin_id"
                                        class="form-control @error('jenis_kelamin_id') is-invalid @enderror"
                                        value="{{ old('jenis_kelamin_id') }}">
                                        @foreach ($JenisKelamin as $jk)
                                            <option value="{{ $jk->id }}"
                                                {{ $jk->id == $data->jenis_kelamin_id || old('jenis_kelamin_id') ? 'selected' : '' }}>
                                                {{ $jk->jenis_kelamin }}</option>
                                        @endforeach
                                    </select>
                                    @error('jenis_kelamin_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agama_id">agama</label>
                                    <select name="agama_id" id="agama_id"
                                        class="form-control @error('agama_id') is-invalid @enderror"
                                        value="{{ old('agama_id') }}">
                                        @foreach ($Agama as $ag)
                                            <option value="{{ $ag->id }}"
                                                {{ $ag->id == $data->agama_id || old('agama_id') ? 'selected' : '' }}>
                                                {{ $ag->agama }}</option>
                                        @endforeach
                                    </select>
                                    @error('agama_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status_id">status</label>
                                    <select name="status_id" id="status_id"
                                        class="form-control @error('status_id') is-invalid @enderror">
                                        @foreach ($Status as $st)
                                            <option value="{{ $st->id }}"
                                                {{ $st->id == $data->status_id || old('status_id') ? ' selected' : '' }}>
                                                {{ $st->status }}</option>
                                        @endforeach
                                    </select>
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
                                        placeholder="Pendidikan"
                                        value="{{ old('pendidikan') ? old('pendidikan') : $data->pendidikan }}">
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
                                        placeholder="Pekerjaan"
                                        value="{{ old('pekerjaan') ? old('pekerjaan') : $data->pekerjaan }}">
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                    id="alamat" cols="30"
                                    rows="10">{{ old('alamat') ? old('alamat') : $data->alamat }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('home') }}" class="btn btn-warning">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
