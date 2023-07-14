@extends('layouts.app')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <form action="{{url('admin/pesanan/update')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                        <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="date" class="form-control" value ="{{ $pesanan->tanggal }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control" value ="{{ $pesanan->nama }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="jumlah" name="jumlah" type="text" class="form-control" value ="{{ $pesanan->jumlah }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="produk" class="col-4 col-form-label">Produk</label>
                                        <div class="col-8">
                                            <select name="produk" id="produk" class="form-control">

                                                @foreach ($data_produk as $dk)
                                               <option value="{{$dk->id}}" @if ($pesanan->produk === $dk->id) selected @endif>{{$dk->nama}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input value ="{{ $pesanan->id }}" name ="id" type="hidden">
                                    <button type="submit" class="btn btn-success">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection