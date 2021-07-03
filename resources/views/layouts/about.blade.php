@extends('layouts.index')
@section('content')


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Semesta Travel
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Semesta Travel ini terbentu saat dimana pariwisata di Indonesia mengalami lonjakan yang sangat drastis, dimana pada
        saat itu para penjualan tiket dan pilihan destinasi wisata membengkak dalam pemesanan dan menyebabkan kualahan dalam 
        penjualan tiket tepatnya di Lombok. Oleh karena itu mulailah kami berfikir bagaimana caranya agar penjualan bisa berjalan lancar
        dan penjualan tiket semakin cepat dan stabil.
        Destinasi Wisata juga perlu kita paparkan dalam website ini untuk menunjukkan kepada para wisatawan dimana tempat wisata favorit
        di Lombok dan seluruh indonesia. Nantinya bukan hanya tiket, tempat wisata dan ada juga makanan khas dan traditional Show dari daerah tersebut.  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visi & Misi
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Visi dari Semesta Travel adalah membangun wisata di seluruh indonesia menjadi pilihan untuk berwisata yang terbaik di seluruh dunia
      Misi kita adalah menjadikan Indonesia sebagai destinasi wisata terbaik di seluruh dunia
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Feedback Customer
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">.
      Smesta Travel sangat ramah dalam pelayanan, dan paket wisata yang diberikan juga lengkap pooknya mantap dehh
      Semesta Travel itu mood banget selalu menjadi yang terbaik saat mood pingin liburan ada, selalu jadi pilihan, sukses teruss
      </div>
    </div>
  </div>
</div>
@endsection