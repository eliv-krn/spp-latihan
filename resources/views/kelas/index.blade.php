@extends('layout.app')
@section('title', 'Kelas')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('kelas.create') }}" class="btn btn-md btn-success">Tambah Kelas</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr style="text-align: center">
                                <th>ID</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($post as $kelas)
                                <tr>
                                    <td class="text-center">{{ $kelas->id_kelas }}</td>
                                    <td>{{ $kelas->nama_kelas }}</td>
                                    <td>{{ $kelas->kompetensi_keahlian }}</td>
                                    <td class="text-center">
										<form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('kelas.destroy', $kelas->id_kelas) }}" method="POST">
											<a href="{{ route('kelas.edit', $kelas->id_kelas) }}" class="btn btn-sm btn-outline-primary">Edit</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
										</form>
									</td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Post Belum Tersedia
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>

@endsection