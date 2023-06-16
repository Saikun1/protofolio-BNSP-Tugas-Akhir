@extends('layout')
@section('title') HalalNetwork About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')
 
<div align="center" style="background:#1CD5E8;padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">
  Kisah Perjalanan HalalNetwork</h3>
<p class="white-text" style="font-weight:bold;"> PERJALANAN HALAL NETWORK DARI SEBUAH UMKM KECIL MENJADI PERUSAHAN BESAR</p>
  

</div>

<div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5"> 
        <div   class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/Logo.webp')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                   </p>  
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .</p>

<h1 class="black-text" style="font-weight:bold;">.............</h1>

    <div align="center">
               <p class="col-md-4">
                    <img src="{{url('Img/About/1.jpg')}}" class="img-fluid">
                </p>
    </div>
 

<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ............................


</p> 
 
        </div>
        <div align="center" class="col-md-12">
        <div class="col-md-8  ">
            
<h1 align="center" class="black-text" style="font-weight:bold;">GALERY</h1>

                                    <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                          <!--Indicators-->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                          </ol>
                          <!--/.Indicators-->
                          <!--Slides-->
                              <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/1.jpg')}}"
                                      alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                  </div>
                                </div>
                              
                                
                                  <div class="carousel-item">
                                  <!--Mask color-->
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/2.jpg')}}"
                                      alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                  </div>
                                </div>
                              </div>

                          <!--/.Slides -->
                          <!--Controls-->
                          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Sebelumnya</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Lanjut</span>
                          </a>
                          <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
                <span class="black-text" style="font-weight:bold;font-size:25px;">Missi:</span> Menjadi perusahaan jaringan pemasaran papan atas kebanggaan Ummat.
                Menjadi wadah perjuangan penyediaan Produk Halal bagi ummat Islam.
                Menghasilkan pengusaha-pengusaha muslim yang dapat dibanggakan, baik sebagai pemasar, pembangun jaringan maupun produsen. <br>
        
            <span class="black-text" style="font-weight:bold;font-size:25px;">Visi:</span>Menjadi Pemimpin Industri Halal Kelas Dunia (dari Indonesia)
             
        </div>
    </div>
 <br><br>
   
</div>


@endsection