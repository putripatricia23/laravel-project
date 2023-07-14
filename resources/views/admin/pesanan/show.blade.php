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
                                    <tbody>
                                        <tr> 
                                            <td scope="row">1</td>
                                            <td scope="row">Tanggal </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$pesanan->tanggal }}</td>
                                        </tr>
                                        
                                        <tr> 
                                            <td scope="row">2</td>
                                            <td scope="row">Nama </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$pesanan->nama }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">3</td>
                                            <td scope="row">Jumlah </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$pesanan->jumlah }}</td>
                                        </tr>

                                        <tr> 
                                            <td scope="row">4</td>
                                            <td scope="row">Produk </td>
                                            <td scope="row">:</td>
                                            <td scope="row">{{$pesanan->produk->nama }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection