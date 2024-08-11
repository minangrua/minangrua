@extends('layouts.client.app')

@section('title', 'wisata')

@section('content')
      <!-- wisata section start -->
      <div class="wisata_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="wisata_taital">WISATA DI MINANG RUA</h1>
               <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}"></div>
            </div>
         </div>
         <div class="wisata_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <h3 class="types_text">Pantai Minang Rua</h3>
                              <p class="looking_text">Pantai Minang Rua merupakan sebuah destinasi wisata pantai yang memiliki bentangan garis pantai sepanjang 10 Km. Namun, selain pantai terdapat banyak spot-spot wisata lainnya yang bisa dikunjungi dan tersebar di sekitar destinasi wisata pantai ini.</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-2.png') }}"></div>
                              <h3 class="types_text">Green Canyon</h3>
                              <p class="looking_text">Green Canyon merupakan sebuah laguna yang memiliki air yang jernih berwarna hijau dan dikelilingi banyak pepohonan rindang. Dasar laut di Green Canyon tidak terdapat pasir laut, melainkan bebatuan sungai. Untuk menuju spot wisata Green Canyon, para pengunjung harus trekking melewati hamparan perkebun jagung yang membutuhkan waktu setidaknya 10-15 menit atau menggunakan perahu nelayan sekitar dan akan dipandu oleh tour guide lokal.</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-3.png') }}"></div>
                              <h3 class="types_text">Wisata bawah Taman Laut</h3>
                              <p class="looking_text">Taman Bawah Laut di Pantai Minang Rua merupakan sebuah keistimewaan bagi para pengunjung yang ingin melakukan kegiatan snorkeling. Lokasi nya yang dekat dengan Green Canyon meniadikannya spot wisata yang wajib untuk dikunjungi. Selain menikmati keindahan terumbu karang, para pengunjung bisa menjumpai ikan-ikan yang cantik dan berfoto dengan Ikan Nemo hanya di kedalaman 1 meter.</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-4.png') }}"></div>
                              <h3 class="types_text">Arter Jamara</h3>
                              <p class="looking_text">Air Terjun Jamara merupakan sebuah air terjun yang memiliki 7 tingkat undakan. Masyarakat lokal sekitar sering juga menyebutnya Curug Jamara, Untuk sampai di spot wisala ini, para pengunlung harus frekking dan menyusuri sungai yang membutuhkan waktu setidaknya sekitar 10.15 menit dan akan dipandu oleh tour guide lokal.</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-5.png') }}"></div>
                              <h3 class="types_text">Arter Khaja Shaka</h3>
                              <p class="looking_text">Air Terjun Khaja Saka merupakan sebuah air teriun yang memiliki karakter bebatuan yang tersusun secara alami. Sehingga seolah-seolah akan terlihat airnya mengalir melalui celah bebatuan yang tersusun. Untuk sampai di spot wisata ini, para pengunjung akan dipandu oleh tour guide lokal dengan kendaraan bermotor dan membutuhkan wakłu setidaknya sekitar 15-30 menit</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-6.png') }}"></div>
                              <h3 class="types_text">Wisata Batu Alif</h3>
                              <p class="looking_text">Batu Alif merupakan sebuah ikon yang sebenarnya dari Desa Kelawi, Kecamatan Bakauheni, Kabupaten Lampung Selatan. Batu alif adalah sebuah batu besar yang berdiri tegak menjulang seperti huruf alif (dalam Bahasa Arab huruf pertama dalam abjad arab). Batu ini sering Iuga F disebut Batu Tegi (batu berdiri) oleh masyarakat lokal.</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-7.png') }}"></div>
                              <h3 class="types_text">Wisata Goa Lalay</h3>
                              <p class="looking_text"> Sesuai dengan namanya, goa ini merupakan sebuah goa yang menjadi rumah bagi hewan kelelawar. Masyarakat sekitar sering juga menyebutnya dengan nama Goa Lalay. Untuk bisa menikmati keindahan goa ini, para pengunjung. cukup berjalan kaki saa sambil menikmati semilir angin laut dan hamparan pasir pantai yang luas</p>
                          </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-8.png') }}"></div>
                              <h3 class="types_text">Wisata Spot Jumping</h3>
                              <p class="looking_text"> Spot Jumping merupakan sebuah salah satu spot wisata yang cocok bagi para pengunjung yang menyukai adrenalin, karena para pengunjung bisa melompat ke laut dari tebing yang memiliki ketinggian 15 meter.</p>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
               </a>
            </div>
         </div>
      </div>
      <!-- wisata section end -->
@endsection