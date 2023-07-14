@extends('templates/main')

@section('product')
          <!-- Container Starts -->
          <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-text section-header text-center">  
              <div> 
                <h2 style="color:black">Our Collection</h2>
                <div class="desc-text">
                  <p></p>  
                  <p></p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
        @foreach($produk as $p)
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-11 blog-item mt-4">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="{{ url('/beli', $p->id)}}">
                  <img src="{{ $p->foto }}" class="img-fluid" alt="">
                </a>             
              </div>
              <div class="blog-item-text"> 
                <h3>{{ $p->nama }}<br> Rp {{ $p->harga_jual }}</h3>
                <p>{{ $p->deskripsi }}</p>
                <a href="{{ url('/beli', $p->id)}}" class="read-more">Buy Now</a>
              </div>
              <div class="author">
                <span class="name"><i class="lni-user"></i>Posted by Admin</span>
                <span class="date float-right"><i class="lni-calendar"></i>10 April, 2020</span>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          @endforeach  
          <!-- End Col -->
          <!-- Start Col -->
          <!-- End Col -->
          <!-- Start Col -->
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
@endsection