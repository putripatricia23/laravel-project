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
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach($pesanan as $d)
                                            <tr> 
                                                <td scope="col">{{ $no }}</td>
                                                <td scope="col">{{ $d->tanggal }}</td>
                                                <td scope="col">{{ $d->nama }}</td>
                                                <td scope="col">{{ $d->jumlah }}</td>
                                                <td scope="col">{{ $d->produk->nama }}</td>
                                                <td>
                                                @if (Auth::user()->role == 'admin')
                                                    <a href="{{ url('admin/pesanan/delete', $d->id)}}" class="btn btn-success">Hapus</a>
                                                @endif

                                                    <a href="{{ url('admin/pesanan/show', $d->id)}}" class="btn btn-success">View</a>
                                                    
                                                @if (Auth::user()->role == 'admin')
                                                    <a href="{{ url('admin/pesanan/edit', $d->id)}}" class="btn btn-success">Edit</a>
                                                @endif
                                                </td> 
                                            </tr> 
                                        @php $no++ @endphp 
                                        @endforeach                   
                                    </tbody>
                                </table>
                                @if (Auth::user()->role == 'admin')
                                <a href="{{ url('admin/pesanan/create')}}" class="btn btn-success mt-4">Input Baru</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection