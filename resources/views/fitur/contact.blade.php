@extends('template.main')

@section('content')

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.096866063073!2d107.5772727143583!3d-6.997873170480654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e94c27f4ee2f%3A0x5cff6a44153d50b4!2sSMK%20Mahaputra%20Cerdas%20Utama%20.%20Yayasan%20Mahaputra!5e0!3m2!1sid!2sid!4v1629273406798!5m2!1sid!2sid"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>JL. KATAPANG ANDIR KM. 4 KP. PASANTREN, Sukamukti, Kec. Katapang, Kab. Bandung Prov. Jawa Barat</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>smkmahaputra@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Hubungi:</h4>
              <p>+628877665587</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{url('RPL/kontak')}}" method="post" role="form" >
            <div class="row">
                @csrf
             <div class="form-group mt-3">
                    <input type="email" placeholder="Email..." class="form-control" name="email" id="email">
                </div>

                <div class="form-group mt-3">
                    <input type="subject" placeholder="Subjek..." class="form-control" name="subject" id="subject">
                </div>

                <div class="form-group mb-2 mt-3">
                    <textarea rows="6" placeholder="Pesan...." class="form-control" name="message"
                        id="message"></textarea>
                </div>

                <div id="cf-submit mt-3">
                    <input type="submit" id="contact-submit" class="btn btn-warning" value="Kirim">
                </div>

          </form>

        </div>

      </div>

    </div>

</section>
@endsection
