<footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
              <img src="{{ asset('logo/emblem2.png')}}" style="height: 50px;float:left" alt="">
              <h3>{{session('konfigurasi')->app_name}}</h3>
    
            <p>{{session('data')->tentang_web}}</p>
            <br>
            {!!session('qrcode')!!}
            
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/profil"> Profil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/bisnis"> Bisnis</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/produk"> Produk</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/kontak"> Kontak</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/kartunama/{{session('username')}}"> Kartu Nama</a></li>
            </ul>
          </div>

  
          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              {{session('data')->city->city_name.' '.session('data')->city->type}} - {{session('data')->province->province}} <br><br>
              <strong>Phone:</strong> {{ session('data')->hp }}<br>
              <strong>Email:</strong> {{ session('data')->email }}<br>
              <strong>Whatsapp:</strong> {{ session('data')->wa }}<br>
            </p>

          </div>

        </div>
      </div>
    </div>
    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span> {{session('konfigurasi')->copyright}}</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href=" {{session('konfigurasi')->url}}">{{session('konfigurasi')->poweredby}}</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="http://twitter.com/{{ session('data')->twitter }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="http://facebook.com/{{ session('data')->fb }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="http://instagram.com/{{ session('data')->ig }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/channel/{{ session('data')->tube }}/featured" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

    </div>
    
  </footer>