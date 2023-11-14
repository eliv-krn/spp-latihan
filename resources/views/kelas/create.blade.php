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
                        <form id="quickForm" action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputNama">Nama Kelas</label>
                                    <input type="text" name="nama_kelas"
                                        class="form-control @error('nama_kelas') is-invalid @enderror" id="exampleInputEmail1"
                                        placeholder="Nama Kelas" value="{{ old('nama_kelas') }}">
                                    @error('nama_kelas')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNama">Kompetensi Keahlian</label>
                                    <input type="text" name="kompetensi_keahlian"
                                        class="form-control @error('kompetensi_keahlian') is-invalid @enderror" id="exampleInputEmail1"
                                        placeholder="Kompetensi Keahlian" value="{{ old('kompetensi_keahlian') }}">
                                    @error('kompetensi_keahlian')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input"
                                            id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a
                                                href="#">terms of service</a>.</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
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
