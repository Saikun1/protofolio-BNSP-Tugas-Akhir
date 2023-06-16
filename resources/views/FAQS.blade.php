@extends('layout')
@section('title') HalalNetwork - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('description') 
@section('content')
<section>
<h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Pertanyaan yang Sering Diajukan</h1>
  <p align="center"></p>
  <div align="center">
    <!--Grid column-->
      <div align="left" class="col-md-6" style="font-family: 'Balsamiq Sans', cursive;">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Q1 -->
          <div class="card p-3">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Di mana produk dibuat?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              ...?
              </div>
            </div>

          </div>
          <!-- Q1 -->
          <!--Q2-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading2" 
                aria-controls="heading2">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Apakah bahan dan komponen Anda aman & Benar Herbal?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading2" class="collapse" role="tabpanel" aria-labelledby="heading2"
              data-parent="#accordionEx">
              <div class="card-body">
              ...?
              </div>
            </div>

          </div>
          
           <!--Q4-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne4">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading4" 
                aria-controls="heading4">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Bagaimana Anda memantau dan mengontrol kualitas produk Anda?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading4" class="collapse" role="tabpanel" aria-labelledby="heading4"
              data-parent="#accordionEx">
              <div class="card-body">
              ...?
              </div>
            </div>

          </div>
          <!-- Q4 -->
            <!--Q5-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne5">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading5" 
                aria-controls="heading5">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>Jika saya memiliki pertanyaan, apa cara tercepat untuk mendapatkan jawaban?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading5" class="collapse" role="tabpanel" aria-labelledby="heading5"
              data-parent="#accordionEx">
              <div class="card-body">
                Anda dapat mengirim email kepada kami kapan saja.
              </div>
            </div>
           
        </div>
        <!-- Accordion wrapper -->


      </div>
      <!--Grid column-->
      </div>

</section>
@endsection