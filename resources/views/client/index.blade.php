@extends('layouts.client.app')

@section('title', 'menu')

@section('content')
      <!-- banner section start --> 
        <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset('images/banner-img1.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">MINANG RUA BEACH</h1>
                                 <h5 class="tasty_text">Pantai Minang Rua</h5>
                                 <p class="banner_text">Pantai Minang Rua adalah destinasi wisata yang berada di Desa Kelawi, Kecamatan Bakauheni, Kabupaten Lampung Selatan. Pantai ini telah dikelola oleh beberapa Pokdarwis (Kelompok Sadar Wisata).  Pantai Minang Rua ini memiliki pasir putih yang bersih, serta beberapa bebatuan yang unik. </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31751.880218891514!2d105.6937826554544!3d-5.857727824038894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4174ceaaaaaaab%3A0x5cb97afc59dd7801!2sMinang%20Rua%20Beach!5e0!3m2!1sen!2sid!4v1720813307673!5m2!1sen!2sid">Location Us</a></div>
                                    <div class="callnow_bt active"><a href="tel:+6282183664157">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset('images/banner-img2.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">MINANG RUA BEACH</h1>
                                 <h5 class="tasty_text">Pantai Minang Rua</h5>
                                 <p class="banner_text">Pantai Minang Rua adalah destinasi wisata yang berada di Desa Kelawi, Kecamatan Bakauheni, Kabupaten Lampung Selatan. Pantai ini telah dikelola oleh beberapa Pokdarwis (Kelompok Sadar Wisata).  Pantai Minang Rua ini memiliki pasir putih yang bersih, serta beberapa bebatuan yang unik. </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31751.880218891514!2d105.6937826554544!3d-5.857727824038894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4174ceaaaaaaab%3A0x5cb97afc59dd7801!2sMinang%20Rua%20Beach!5e0!3m2!1sen!2sid!4v1720813307673!5m2!1sen!2sid">Location Us</a></div>
                                    <div class="callnow_bt active"><a href="tel:+6282183664157">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset('images/banner-img3.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">MINANG RUA BEACH</h1>
                                 <h5 class="tasty_text">Pantai Minang Rua</h5>
                                 <p class="banner_text">Pantai Minang Rua adalah destinasi wisata yang berada di Desa Kelawi, Kecamatan Bakauheni, Kabupaten Lampung Selatan. Pantai ini telah dikelola oleh beberapa Pokdarwis (Kelompok Sadar Wisata).  Pantai Minang Rua ini memiliki pasir putih yang bersih, serta beberapa bebatuan yang unik. </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31751.880218891514!2d105.6937826554544!3d-5.857727824038894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4174ceaaaaaaab%3A0x5cb97afc59dd7801!2sMinang%20Rua%20Beach!5e0!3m2!1sen!2sid!4v1720813307673!5m2!1sen!2sid">Location Us</a></div>
                                    <div class="callnow_bt active"><a href="tel:+6282183664157">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
       <!-- sejarah section start -->
      <div class="sejarah_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Asal Mula Minang rua</h1>
                  <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}"></div>
               </div>
            </div>
            <div class="sejarah_section_2">
               <div class="sejarah_taital_main">
                  <div class="sejarah_right">
                     <p class=" sejarah_text">Deburan ombak merayap di pasir putih pinggiran pantai, ratusan pohon kelapo menari gemulai mengikuti alunan irama hembusan angin laut. Minang Rua adalah sebuah pantai yang berada di pesisir pantai Desa Kelawi, Kecamatan Bakauheni, Kabupaten Lampung Selatan. Tidak banyak yang tahu, pantai nan elok ini memiliki cerita yang secara turun-temurun mengalir di nasyarakat sekitar. Sebuah Legenda (Hikayat) dibalik nama "Minang Rua? </p>
                  </div>
               </div>
               <div class="sejarah_taital_main">
                  <div class="sejarah_right">
                     <p class=" sejarah_text"> Dahulu, pada ratusan tahun silam Saat Gunung Krakatav belum bangun dari tidurnya Ialu memuntahkan dan mengabiskan seluruh badannya dalam letusan dahsyatnya, ditahun 1883 silam. Pesisir pantai Bakauheni yang berada di ujung timur Pulau Sumatera, banyak didiami oleh masyarakat. Mereka dahulu membuat kampung-kampung (pekon) di kawasan pesisir pantai, dimana setiap kampung dipimpin oleh seorang kepala suku (kampung) yang memiliki kelebihan/kesaktian </p>
                  </div>
               </div>
               <div class="sejarah_taital_main">
                  <div class="sejarah_right">
                     <p class=" sejarah_text"> Pekon-pekon itu yakni ekon Kahai/Way Pecokh Emas, Pekon Mikhat (yang konon dikatakar dihuni oleh orang.orang kerdil dan kundul/jalma khebah cakekhi yang tempat tinggalnya meliputi daerah Belebu dan bumbermuli saat ini), Pekon Temu Lapakh, Pekon Batu Tegi, Pekon Cinakawi, Pekon Sulah dan Pekon Tanjung Tuha yang dihuni oleh pasukan Tapak Balak dan Putri Buwok Emas. Dahulu, para pemuda kampung yang memiliki kesaktian ini sering mengadakan perkumpulan untuk mengadu ilmu kesaktiannya masing-masing. Siapa yang kalah harus rela dikorbankan menjadi umpan buaya di muara Sungai Way Tungga dan hartanya diambil oleh pemenangnya</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sejarah section end -->
       <!-- pokdarwis section start -->
       <div class="pokdarwis_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Pokdarwis Minang Rua</h1>
                  <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}"></div>
               </div>
            </div>
            <div class="pokdarwis_section_2">
               <div class="pokdarwis_taital_main">
                  <div class="pokdarwis_right">
                     <p class=" pokdarwis_text"> Kelompok Sadar Wisata Minang Rua Bahari adalah sebuah wadah yang dibentuk oleh masyarakat Desa Kelawi untuk mengembangkan potensi wisata di daerah mereka. Kelompok ini tumbuh berdasarkan keakraban, keselarasan, dan kesamaan kepentingan dalam memanfaatkan sumber daya alam untuk pariwisata. Tujuannya adalah meningkatkan potensi alam di bidang pariwisata dan membantu pertumbuhan ekonomi desa.</p>
                  </div>
               </div>
               <div class="pokdarwis_taital_main">
                  <div class="pokdarwis_right">
                     <p class=" pokdarwis_text"> Terbentuk pada tahun 2013, Kelompok Sadar Wisata Minang Rua Bahari muncul dari kesadaran masyarakat akan pentingnya membantu pemerintah dalam mengentaskan kemiskinan dan mengurangi angka pengangguran di Desa Kelawi. Keinginan kuat untuk memberdayakan masyarakat desa ini mendorong terbentuknya kelompok tersebut sebagai upaya kolektif untuk kemajuan bersama. </p>
                  </div>
               </div>
               <div class="pokdarwis_taital_main">
                  <div class="pokdarwis_right">
                     <p class=" pokdarwis_text"> Dalam perkembangannya, kelompok ini telah melakukan reorganisasi untuk meningkatkan dinamika dan gagasan baru. Dukungan dari Dinas Pariwisata dan Dinas Kelautan dan Perikanan Kabupaten Lampung Selatan serta Provinsi Lampung sangat berperan penting dalam kemajuan kelompok ini. Kelompok ini selalu terbuka terhadap kritik dan saran untuk meningkatkan profesionalisme dan proporsionalitas, dengan harapan dapat memperbaiki perekonomian desa melalui pariwisata. Keberhasilan kelompok ini didukung oleh kerja sama, kekompakan, dan doa kepada Yang Maha Kuasa. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- pokdarwis section end -->
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
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-2.png') }}"></div>
                              <h3 class="types_text">Green Canyon</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-3.png') }}"></div>
                              <h3 class="types_text">Wisata bawah Taman Laut</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-4.png') }}"></div>
                              <h3 class="types_text">Arter Jamara</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-5.png') }}"></div>
                              <h3 class="types_text">Arter Khaja Shaka</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-6.png') }}"></div>
                              <h3 class="types_text">Wisata Batu Alif</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-7.png') }}"></div>
                              <h3 class="types_text">Wisata Goa Lalay</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="wisata_img"><img src="{{ asset('images/img-8.png') }}"></div>
                              <h3 class="types_text">Wisata Spot Jumping</h3>
                              <div class="read_bt"><a href="wisata.html">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- wisata section end -->
      <!-- konservasi section start -->
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
               <div class="about_taital_box1">
                  <h1 class="about_taital_1">Konsevasi Penyu</h1>
                  <p class=" about_text">Salah satu pantai di Indonesia yang memiliki penangkaran penyu sendiri adalah Pantai Minang Rua.</p>
                  <div class="readmore_btn"><a href="konservasi.html">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- konservasi section end -->
      
      <!-- rest section start -->
      <div class="rest_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Rest Area</h1>
                  <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}"></div>
               </div>
            </div>
            <div class="rest_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img1.png') }}"></div>
                        <h4 class="date_text">Modern</h4>
                        <h4 class="prep_text">Kedas Resort</h4>
                        <div class="read_bt"><a href="rest-area.html">Read More</a></div>
                     </div>  
                  </div>
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img2.png') }}"></div>
                        <h4 class="date_text">Modern</h4>
                        <h4 class="prep_text">Dragon Village</h4>
                        <div class="read_bt"><a href="rest-area.html">Read More</a></div> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img3.png') }}"></div>
                        <h4 class="date_text">Authentic</h4>
                        <h4 class="prep_text">Cottage Lombok</h4>
                        <div class="read_bt"><a href="rest-area.html">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img4.png') }}"></div>
                        <h4 class="date_text">Authentic</h4>
                        <h4 class="prep_text">minakha Khua</h4>
                        <div class="read_bt"><a href="re">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img5.png') }}"></div>
                        <h4 class="date_text">Authentic</h4>
                        <h4 class="prep_text">Cottage Dua Putri</h4>
                        <div class="read_bt"><a href="re">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="rest_box">
                        <div class="rest_img"><img src="{{ asset('images/rest-img6.png') }}"></div>
                        <h4 class="date_text">Outdoor</h4>
                        <h4 class="prep_text">Camping</h4>
                        <div class="read_bt"><a href="re">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- rest section end -->
      <!-- lokasi section start -->
      <div class="map_main">
         <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31751.880218891514!2d105.6937826554544!3d-5.857727824038894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4174ceaaaaaaab%3A0x5cb97afc59dd7801!2sMinang%20Rua%20Beach!5e0!3m2!1sen!2sid!4v1720813307673!5m2!1sen!2sid" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
         </div>
      </div>
      <!-- lokasi section end -->
@endsection