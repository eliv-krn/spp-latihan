@extends('layout.app')
@section('title', 'dashboard')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!--ini judul-->
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"> Tambah Kelas </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('kelas.update', $post->id_kelas) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kelas</label>
                                <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                    name="nama_kelas" value="{{ old('nama_kelas', $post->nama_kelas) }}" placeholder="masukkan nama">
                                @error('nama_kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kompetensi Keahlian</label>
                                <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror"
                                    name="kompetensi_keahlian" value="{{ old('kompetensi_keahlian', $post->kompetensi_keahlian) }}" placeholder="masukkan nisn">
                                @error('kompetensi_keahlian')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
