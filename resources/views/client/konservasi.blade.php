@extends('layouts.client.app')

@section('title', 'konservasi')

@section('content')
      <!-- sejarah section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">About Our Special</h1>
                  <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}"></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="{{ asset('images/img-9.png') }}" class="about_img"></div>
               <div class="about_taital_box2">
                  <h1 class="about_taital_1">Konsevasi Penyu</h1>
                  <p class=" about_text">Salah satu pantai di Indonesia yang memiliki penangkaran penyu sendiri adalah Pantai Minang Rua. Pasalnya, di pantai ini seringkali menjadi tempat persinggahan bagi penyu-penyu ketika bermigrasi untuk bertelur. Penangkaran penyu ini tentunya menjadi daya tarik bagi para pengunjung yang berwisata ke Pantai Minang Rua. Pada saat musim bertelur penyu, pokdarwis akan berjaga malam untuk menyelamatkan telur tersebut dan berusaha menetaskannya Setelah proses penetasan, kemudian bayi-bayi penyu (tukik) akan dilepas liarkan ketika mereka sudah memasuki USia yang cukup untuk bertahan hidup.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- sejarah section end -->
@endsection
      