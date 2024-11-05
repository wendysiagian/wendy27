@extends('layout.template')
@section('title', 'Project Kelompok')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@300&family=Silkscreen&display=swap');

        body {
            color: black
        }
        .carousel-inner {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-item img {
            margin: auto;
            display: block;
        }
        .p-5{
            border-radius : 20px;
            background-color:  #cccccc;
        }


    </style>
</head>
<body>
    <!-- container -->
    <div class="container-fluid py-6" style= "text-align:center;">
            <h1 class="display-6 fw-bold">SELAMAT DATANG DI WEBSITE</h1>
            <p class="lead">PENDAFTARAN BEASISWA</p>
    </div>
    <!-- Akhir container -->
   <!-- Carousel -->
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.istockphoto.com/id/1480277406/id/foto/wisuda-kelompok-dan-pandangan-belakang-siswa-merayakan-keberhasilan-pendidikan-di-balik-para.jpg?s=2048x2048&w=is&k=20&c=zqBmQYvLXXtlEaM39M_4LJmQKZbg4UkEfU0-KGgbxx0=" 
                class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://media.istockphoto.com/id/1469471686/id/foto/wanita-menarik-menunjuk-mengenakan-gaun-kelulusan.jpg?s=2048x2048&w=is&k=20&c=eThRUQOZWIBPDHS4PQSIded6cIDZNykPSTlenQzVvkI="
                class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- Akhir carousel -->
    <br><br>
    <!-- container -->
    <div class="container">
        <div class="row g-1">
            <div class="col-20">
                <div class="p-5">
                    <h3>Beasiswa Akademik dan Non Akademik</h3>
                    <p><b>BEASISWA PRESTASI AKADEMIK</b><br>
                    Jenis calon penerima beasiswa prestasi akademik : <br>      
                    <ul>
                        <li>Calon Mahasiswa Baru Universitas Semarang yang Berprestasi Akademik Adalah Lulusan SMA/SMK/MA sederajat dengan batas tahun lulusan tertentu yang memiliki prestasi akademik.</li>
                        <li>Mahasiswa Universitas Semarang yang Berprestasi Akademik Adalah mahasiswa aktif Universitas Semarang pada tiap tahun angkatan  di setiap program studi yang memiliki prestasi akademik berupa Indeks Prestasi (IP) tertinggi.</li>
                    </ul><br>
                    <b>Syarat calon penerima beasiswa</b><br>
                    Calon Mahasiswa Baru Universitas Semarang yang Berprestasi Akademik :
                    <ul>
                        <li>Rangking 1 sampai 10 di kelas, mulai kelas X-XII atau rangking 1 sampai 3 di kelas XII selama studi di SMA/SMK/MA sederajat.</li>
                        <li>Lulusan SMA/SMK/MA sederajat dari tahun berjalan (lulusan baru).</li>
                        <li>Menyertakan foto copy rapot kelas X-XII yang dilegalisir oleh pihak sekolah.</li>
                        <li>Jika dalam raport tidak ada keterangan rangking kelas, pihak sekolah menerbitkan surat keterangan/lampiran tentang rangking siswa yang bersangkutan.</li>
                    </ul>
                    Mahasiswa Universitas Semarang yang Berprestasi Akademik :
                    <ul>   
                        <li>Calon penerima beasiswa adalah mahasiswa aktif Universitas Semarang pada tiap tahun angkatan di setiap program studi yang memiliki prestasi akademik berupa Indeks Prestasi Semester (IPS) tertinggi.</li>
                        <li>Bagi Mahasiswa Universitas Semarang penerima Beasiswa Mahasiswa Baru Prestasi Akademik (point a) yang telah menjalani studi di Universitas Semarang dengan syarat IPK > 3,30.</li>
                        <li>Bagi mahasiswa Universitas Semarang dengan IP tertinggi pada tahun angkatannya di setiap program studi yang ditentukan oleh Ketua Program Studi, dengan ketentuan :</li>
                    <ol type="1" start="1">
                        <li>Apabila terdapat lebih dari 1 (satu) orang yang memiliki IP tertinggi, maka penentuannya akan dilihat dari prestasi lain yang pernah didapat maupun keaktifan di bidang Kemahasiswaan.</li>
                        <li>Tidak sedang menerima beasiswa dari manapun baik APBN, APBD (Pemda), Yayasan maupun Swasta.</li>
                    </ol>
                    </ul>
                    <br><b>Jumlah kuota penerima Beasiswa Prestasi Akademik</b>
                    <ul>
                        <ol>
                            <li>Untuk Beasiswa Prestasi Akademik dengan sistem rangking disediakan kuota 2 (dua) orang untuk setiap program studi.</li>
                            <li>Untuk Beasiswa Prestasi Akademik IP tertinggi adalah 1 (satu) orang pada tiap tahun angkatan di setiap program studi.</li>
                        </ol>
                    </ul>
                    <br><b>Besaran Beasiswa</b><br>
                    Bagi calon mahasiswa baru Universitas Semarang yang lolos sebagai penerima beasiswa melalui program beasiswa prestasi akademik akan mendapatkan beasiswa berupa :
                    <ul>
                        <li>Potongan 50 % UPP bagi yang memiliki rangking 1 – 5 dari kelas X-XII</li>
                        <li>Potongan 25 % UPP bagi yang memiliki rangking 6 -10 dari kelas X-XII</li>
                        <li>Potongan 25 % UPP bagi yang memiliki rangking 1- 3 di kelas XII</li>
                    </ul><br>
                    Bagi Mahasiswa Universitas Semarang penerima beasiswa mahasiswa baru Universitas Semarang yang berprestasi akademik rangking 1 – 10 dari kelas X – XII yang telah menjalani studi di Universitas Semarang dengan syarat IP > 3,50 akan mendapatkan beasiswa berupa potongan sebesar 50 % dari biaya SPP tetap dan biaya SKS pada semester berjalan. Bagi mahasiswa penerima Beasiswa Prestasi Akademik IP tertinggi akan mendapatkan pembebasan biaya SPP Tetap dan biaya SKS untuk pembiayaan semester berikutnya.
                    </p>
                    <div class="d-grid gap-3 d-md justify-content-md-end">
                        <div class="col-20"><b>Daftar Sekarang.!!</b>
                            <a href="{{route('formdaftar')}}" class="btn btn-primary btn-lg"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><br></div>
        <div class="row g-1">
            <div class="col-20">
                <div class="p-5">
                    <p><b>BEASISWA PRESTASI NON AKADEMIK</b><br>
                        Jenis calon penerima beasiswa prestasi non akademik : <br>      
                        <ul>
                            <li>Calon Mahasiswa Baru Universitas Semarang yang Berprestasi Non Akademik Adalah Lulusan SMA/SMK/MA sederajad dengan batas usia tertentu yang memiliki prestasi non akademik.</li>
                            <li>Mahasiswa Universitas Semarang yang Berprestasi Non Akademik Adalah mahasiswa aktif Universitas Semarang dengan batas usia tertentu yang memiliki prestasi non akademik mewakili Universitas Semarang.</li>
                        </ul><br>
                        <b>Syarat calon penerima beasiswa</b><br>
                        Calon Mahasiswa Baru Universitas Semarang yang Berprestasi Non Akademik :
                        <ul>
                            <li>Juara minimal tingkat provinsi/regional 2 tahun terakhir.</li>
                            <li>Usia maksimal 20 tahun pada bulan oktober tahun berjalan.</li>
                            <li>Rekomendasi dari pengprov cabor atau dinas pendidikan provinsi sebagai bahan pertimbangan.</li>
                            <li>Bersedia mengikuti seleksi teknis yang diselenggarakan oleh kemahasiswaan.</li>
                            <li>Bersedia menandatangani kontrak beasiswa dengan pihak Kemahasiswaaan didampingi orang tua/wali.</li>
                        </ul>
                        Mahasiswa Universitas Semarang yang Berprestasi Non Akademik :
                        <ul>   
                            <li>Juara minimal tingkat provinsi/regional mewakili Universitas Semarang.</li>
                            <li>Usia maksimal 21 tahun pada bulan oktober tahun berjalan.</li>
                            <li>Rekomendasi dari pelatih UKM sebagai bahan pertimbangan.</li>
                            <li>Bersedia mengikuti seleksi teknis yang diselenggarakan oleh kemahasiswaan.</li>
                            <li>Bersedia menandatangani kontrak beasiswa dengan pihak Kemahasiswaaan didampingi orang tua/wali.</li>
                        </ul><br>
                        <b>Skala kebutuhan UKM dan tata cara pengajuan</b><br>
                        Beasiswa diperuntukkan bagi : <br>
                        <ul>
                            <li>Kecabangan olah raga/tangkai seni/jenis kegiatan yang bernaung di bawah UKM.</li>
                            <li>Kecabangan olah raga/tangkai seni/jenis kegiatan yang dilombakan oleh DIKTI/PT lain.</li>
                            <li>Kecabangan olah raga/tangkai seni/jenis kegiatan yang direkomendasikan oleh Pemerintah Daerah.</li>
                            <li>Tidak setiap semester menerima calon penerima beasiswa prestasi namun sesuai kebutuhan.</li>
                        </ul><br>
                        Contoh : <br>
                        UKM sepak bola bila sudah mempunyai 2 atlit masing-masing posisi tidak diperbolehkan menerima beasiswa diposisi yang sama, kecuali ada degradasi pada posisi tersebut atau ada atlet yang sudah semester 7/8 (akan lulus).
                    </p>
                        <div class="d-grid gap-3 d-md justify-content-md-end">
                        <div class="col-20"><b>Daftar Sekarang.!!</b>
                            <a href="{{route('formdaftar')}}" class="btn btn-primary btn-lg"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir container -->
</body>
</html>
    @include('layout.card')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

        </div>
    </div>
@endsection
