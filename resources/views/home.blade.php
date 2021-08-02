@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-header clearfix">
                        <div class="float-left ">
                            <h5>Data Penduduk</h5>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('penduduk.create') }}" class="btn btn-info">ADD</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No KK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tempat Lahir</th>
                                        <th scope="col">Tgl Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Agama</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Pendidikan</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>#</td>
                                            <td>{{ $data->nik }}</td>
                                            <td>{{ $data->no_kartu_keluarga }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->tempat_lahir }}</td>
                                            <td>{{ $data->tgl_lahir }}</td>
                                            <td>{{ $data->JenisKelamin->jenis_kelamin }}</td>
                                            <td>{{ $data->Agama->agama }}</td>
                                            <td>{{ $data->Status->status }}</td>
                                            <td>{{ Str::limit($data->pendidikan, 10, '...') }}</td>
                                            <td>{{ Str::limit($data->pekerjaan, 10, '...') }}</td>
                                            <td>{{ Str::limit($data->alamat, 10, '...') }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        Action
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('penduduk.show', $data->id) }}">Detail</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('penduduk.edit', $data->id) }}">Edit</a>
                                                        <a class="dropdown-item delete-confirm" href="#">Delete</a>
                                                        <form id="delete"
                                                            action="{{ route('penduduk.destroy', $data->id) }}"
                                                            method="post" class="d-none">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-left ">
                                <p><small>Total data {{ $datas->total() }}</small></p>
                            </div>
                            <div class="float-right">
                                {{ $datas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success btn-sm',
                    cancelButton: 'btn btn-danger btn-sm'
                },
                buttonsStyling: false
            })

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! and data that has a relationship with this data will also be deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete').submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        });
    </script>
@endpush
