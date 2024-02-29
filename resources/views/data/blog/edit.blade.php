<!-- Custom styles for this page -->
@extends('halaman_dashboard.index')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit blog</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('data.blog.index')}}" class="text-white text-decoration-none">Kelola Prrestasi</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit blog</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit blog</h4>
                    </div>

                    <div class="card-body">
                    <form action="{{ route('data.blog.post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gambar" value="{{$blog->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <input type="hidden" name="id" value="{{$blog->id}}">
                            <div class="form-group">
                                <label>NAMA LOMBA</label>
                                <input type="text" name="nama_lomba" value="{{ $blog->nama_lomba }}" placeholder="Masukkan Nama Lomba" class="form-control @error('nama_lomba') is-invalid @enderror">

                                @error('nama_lomba')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>BIDANG LOMBA</label>
                                <input type="text" name="bidang_lomba" value="{{ $blog->bidang_lomba }}" placeholder="Masukkan Bidang Lomba" class="form-control @error('bidang_lomba') is-invalid @enderror">

                                @error('bidang_lomba')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUARA</label>
                                <input type="text" name="juara" value="{{ $blog->juara }}" placeholder="Masukkan Juara Ke" class="form-control @error('juara') is-invalid @enderror">

                                @error('juara')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KET</label>
                                <textarea name="ket" id="" cols="30" rows="8" class="form-control @error('ket') is-invalid @enderror">{{$blog->ket}}</textarea>
                                @error('ket')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>
    @endsection
    