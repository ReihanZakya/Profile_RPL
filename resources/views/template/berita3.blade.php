@extends('template.main9')

@section('content')
<div class="container" data-aos="fade-up">
                <div class="section-title">
                <button  type="button" class="btn btn-warning" style="margin-bottom: 20px;">
            <a href="{{url('RPL/berita')}}" style="color: black;">Kembali</a>
            </button>
                    <h6 style="color: orange;">Berita Global</h6>
                    <p style="font-size: 25px;">Hacker China Membobol BIN.</p>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
            <div>
            <p style="font-size: 25px; "><b></b></p>
            <h5 style="text-align: justify;">Jakarta, CNN Indonesia -- Insikt Group, peneliti keamanan internet The Record membeberkan ada 10 Kementerian dan Lembaga pemerintah Indonesia termasuk Badan Intelijen Negara (BIN) yang dibobol Mustang Panda Group, peretas atau hacker asal China menggunakan private ransomware bernama Thanos.
            Bahkan peretasan tersebut dikaitkan dengan upaya spionase Tingkok dalam menghadapi situasi yang menghangat di Laut China Selatan.

            Pakar keamanan siber CISSReC Pratama Persadha menjelaskan pihaknya belum mengetahui persis kebenaran dari informasi tersebut sehingga ada kemungkinan terjadi klaim sepihak. Menurut dia perlu menunggu buktinya seperti kasus eHAC Kemenkes beberapa waktu lalu.

            "Kalau mereka sudah share bukti peretasannya seperti data dan biasanya upaya deface, baru bisa simpulkan memang benar terjadi peretasan. 10 kementeriannya yang mana juga masih belum jelas," kata Pratama lewat keterangan tertulis, Minggu (12/9).
            Namun bila ini spionase antar negara, memang bukti akan lebih sulit untuk didapatkan, karena motifnya bukan ekonomi maupun popularitas," tambahnya.Peretas atau hacker China sebelumnya dikabarkan telah menembus jaringan internal sedikitnya 10 kementerian dan lembaga pemerintah Indonesia, termasuk Badan Intelijen Negara (BIN).

            Peristiwa ini memang dikabarkan berhubungan dengan Mustang Panda yang selama ini dikenal sebagai peretas asal China yang menargetkan kawasan Asia Tenggara.

            Kendati masih simpang siur, Pratama bilang kondisi ini tetap bagus sebagai trigger untuk semua Kementerian dan Lembaga pemerintah di Indonesia untuk mulai mengecek sistem informasi dan jaringannya.

            Lakukan security assesment pada sistem masing-masing, perkuat pertahanan, upgrade SDM, hingga buat tata kelola pengamanan siber pada institusinya masing-masing.

            "Pada pertengahan 2020 juga terjadi isu serupa di lingkungan Kemenlu dan beberapa BUMN. Saat itu ada warning dari Australia bahwa email salah satu diplomat kita mengirimkan malware aria body ke email salah satu pejabat di Australia Barat," ucap dia.

            Menurutnya email dari diplomat Indonesia juga telah berhasil diambil alih peretas, yang diperkirakan kelompok Naikon asal China.

            amun, belum diketahui persis apakah hanya email atau sampai perangkat yang diretas sebab banyak malware dibuat dengan tujuan menyamai kemampuan malware pegasus yang bisa take over smartphone.

            "Perlu dilakukan deep vulnerable assessment terhadap sistem yang dimiliki. Serta melakukan penetration test secara berkala untuk mengecek kerentanan sistem informasi dan jaringan. Lalu gunakan teknologi Honeypot dimana ketika terjadi serangan maka hacker akan terperangkap pada sistem honeypot ini, sehingga tidak bisa melakukan serangan ke server yang sebenarnya," terang Pratama.

            Ia menambahkan perlu ada memasang sensor Cyber Threads Intelligent untuk mendeteksi malware atau paket berbahaya yang akan menyerang ke sistem. Terakhir dan paling penting membuat tata kelola pengamanan siber sebaik mungkin dan mengimplementasikan standar-standar keamanan informasi yang sudah ada.

            "Kami telah mencoba melakukan profiling threat actor. Mustang Panda adalah hacker group yang sebagian besar anggota dari China dimana grup ini membuat private ransomware yang dinamakan Thanos," ucap dia.

            Ia juga menyebut ransomeware ini dapat mengakses data dan credential Log In pada device PC yang kemudian mengirimkannya ke CNC (command and control) bahkan hacker dapat mengontrol sistem operasi target.

            Private ransome Thanos dikatakan juga mempunyai 43 konfigurasi berbeda untuk mengelabui firewall dan anti virus, sehingga sangat berbahaya. Ia melanjutkan segala langkah yang diperlukan harus segera dilakukan pemerintah untuk mengetahui apakah tindak spionase ini terkait konflik Laut China Selatan atau tidak.

            "Karena dalam beberapa tahun terakhir tensi terkait isu ini memang meningkat di kawasan Asia Tenggara. Semoga ini menjadi momentum perbaikan keamanan siber di lembaga negara," kata Pratama.

            CNNIndonesia.com telah mencoba meminta tanggapan dari perwakilan BSSN serta Kementerian Komunikasi dan Informatika. Namun, mereka belum memberikan tanggapan hingga berita ini ditulis.

            Sementara itu, Deputi VIII Badan Intelijen Negara (BIN) Wawan Purwanto enggan memberi tanggapan saat diminta konfirmasi oleh CNNIndonesia.com.
            </h5>
            </div>
            <button  type="button" class="btn btn-warning" style="margin-bottom: 20px;">
            <a href="{{url('RPL/berita')}}" style="color: black;">Kembali</a>
            </button>
            </div>



@endsection           