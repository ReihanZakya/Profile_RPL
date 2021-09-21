@extends('template.main8')

@section('content')
<div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h6 style="color: orange;">Berita Global</h6>
                    <p style="font-size: 25px;">Bulan-bulanan RI di Tangan Peretas.</p>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
            <div>
            <p style="font-size: 25px; "><b></b></p>
            <h5 style="text-align: justify;">Jakarta, CNN Indonesia -- Peretasan di berbagai instansi milik pemerintah belakangan marak terjadi. Tak tanggung-tanggung, hacker membobol hingga ratusan juta data penduduk Indonesia.
            Terbaru, peretas bukan hanya bereaksi untuk menyitat data pribadi lewat aplikasi eHAC, namun hacker asal China dikabarkan telah menembus beberapa lembaga pemerintah Indonesia, termasuk Badan Intelijen Negara (BIN).
            </h5>
            </div>
            </div>

            <div class="container" data-aos="fade-up">
            <div>
            <p style="font-size: 25px; "><b>Hacker China Bobol BIN dan beberapa Kementerian.</b></p>
            <h5 style="text-align: justify;">Peneliti Inskit pertama kali menemukan upaya pembobolan 10 Kementerian termasuk BIN pada April 2021. Peretasan itu dikabarkan terhubung dengan Mustang Panda yang dikenal sebagai peretas asal China, yang menargetkan kawasan Asia Tenggara.Awalnya, mereka saat itu sedang mendeteksi server pengendali dan control (C&C) malware PlugX yang dioperasikan Mustang Panda. Server tersebut ternyata berkomunikasi dengan beberapa host dalam jaringan pemerintah Indonesia.

            Mereka kemudian menelusuri lebih lanjut dan mengklaim hal itu telah berlangsung sejak Maret 2021. Namun, belum jelas metode serta target dari peretasan tersebut.

            Peneliti Insikt Group menyatakan telah memberi tahu celah tersebut ke Indonesia pada Juni 2021 dan dilakukan lagi pada Juli 2021. Namun, pemerintah Indonesia disebut tidak merespons laporan itu.

            BIN juga disebut menjadi salah satu target paling sensitif dari aksi peretasan itu. Mereka juga tidak merespons laporan The Record pada Juli dan Agustus 2021.
            Pakar keamanan siber CISSReC Pratama Persadha mengatakan hingga kini pihaknya belum mengetahui persis kebenaran dari informasi tersebut sehingga ada kemungkinan terjadi klaim sepihak.

            Meski begitu apabila peretasan ini sebagai bentuk spionase antar negara, ia menilai bukti akan lebih sulit didapat karena motifnya bukan ekonomi atau popularitas.

            Kendati masih simpang siur, menurut Pratama kondisi ini tetap bagus sebagai trigger untuk semua Kementerian dan Lembaga pemerintah di Indonesia untuk mulai mengecek sistem informasi dan jaringannya.

            Pratama pun menyarankan perlu dilakukan deep vulnerable assessment terhadap sistem yang dimiliki. Serta melakukan penetrasi tes secara berkala untuk mengecek kerentanan sistem informasi dan jaringan. Lalu gunakan teknologi Honeypot dimana ketika terjadi serangan maka hacker akan terperangkap pada sistem honeypot ini, sehingga tidak bisa melakukan serangan ke server yang sebenarnya.
            </h5>
            </div>
            </div>

            <div class="container" data-aos="fade-up">
            <div>
            <p style="font-size: 25px; "><b>Data eHAC bocor.</b></p>
            <h5 style="text-align: justify;">Tim peneliti siber dari vpnMentor menemukan kebocoran data dari aplikasi tes dan telusur Covid-19 atau Kartu Waspada Elektronik yang dibuat Kementerian Kesehatan Republik Indonesia (Kemenkes) yaitu Electronic Health Alert Card atau eHAC pada akhir Agustus lalu.

            Dalam laporannya vpnMentor menjelaskan pengembang eHAC menggunakan 'database Elasticsearch' tanpa jaminan untuk menyimpan lebih dari 1,4 juta data dari sekitar 1,3 juta pengguna eHAC.

            Selain kebocoran data sensitif pengguna, para peneliti menemukan semua infrastruktur di sekitar eHAC terekspos, termasuk informasi pribadi tentang sejumlah rumah sakit di Indonesia, serta pejabat pemerintah yang menggunakan aplikasi tersebut.

            Data yang bocor itu meliputi ID pengguna yang berisi nomor kartu tanda penduduk (KTP), paspor serta data dan hasil tes Covid-19, alamat, nomor telepon dan nomor peserta rumah sakit, nama lengkap, tanggal lahir, pekerjaan dan foto.Tim juga menemukan data dari 226 rumah sakit dan klinik di seluruh Indonesia serta nama orang yang bertanggung jawab untuk menguji setiap pelancong, dokter yang menjalankan tes, informasi tentang berapa banyak tes yang dilakukan setiap hari, dan data tentang jenis pelancong.

            Data yang bocor bahkan meliputi informasi pribadi yaitu kontak orang tua atau kerabat wisatawan, serta detail hotel yang disewa dan informasi tentang kapan akun eHAC dibuat.

            Bahkan vpnMentor juga menemukan data anggota staf eHAC yang meliputi nama, nomor ID, nama akun, alamat email dan kata sandi juga bocor.

            Di samping itu pengamat menyerukan perlunya dibentuk otoritas perlindungan data pribadi (OPDP) yang independen imbas bocor data eHac dan BPJS Kesehatan. Pembentukan otoritas itu dinilai dapat mendorong kepatuhan sektor publik terhadap prinsip-prinsip pemrosesan data pribadi yang baik dan keamanannya.

            Hal tersebut disampaikan Koalisi Advokasi Perlindungan Data Pribadi (KA-PDP), sebagai respon dari maraknya kasus-kasus kebocoran data pribadi pada sektor publik, seperti kasus kebocoran databases e-HAC dan BPJS Kesehatan.
            </h5>
            </div>
            </div>


@endsection