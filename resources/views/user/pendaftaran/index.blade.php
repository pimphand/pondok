@extends('user.layouts.app')

@section('css')
<link href="{{ asset('style.css') }}" id="app-style" rel="stylesheet" type="text/css">

<!-- Bootstrap Css -->
<link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
<!-- App Css-->
<link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
@endsection

@section('js')
    <script src="{{ asset('test.js') }}"></script>
@endsection
@section('content')

<div class="kingster-page-title-wrap kingster-style-medium kingster-center-align"
    style="background-image: url({{asset('storage/profil')}}/{{$image->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="p"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <h1 class="kingster-page-title">Pendaftaran</h1>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper" style="padding: 50px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
        <div class="pt-10 my-10 account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="overflow-hidden card">
                            <div class="bg-primary">
                                <div class="p-4 text-center text-primary">
                                    <h5 class="text-white font-size-20">Fomulir Pendaftaran</h5>
                                </div>
                            </div>
                            <div class="p-4 card-body">
                                <div class="p-3">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <!-- One "tab" for each step in the form: -->
                                        <div class="tab">
                                            <h5 class="text-center">Biodata Calon Siswa</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Lengkap Siswa</label>
                                                    <p><input type="text" required name="name" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example" >
                                                            <option selected>--Select--</option>
                                                            <option value="Laki-Laki">Laki - Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Kewarganegaraan Siswa</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Select--</option>
                                                            <option value="WNI">WNI</option>
                                                            <option value="WNA">WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tempat Lahir</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tanggal Lahir</label>
                                                    <p><input type="date" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Anak Ke..</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Dari ... Bersaudara</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Induk Kependudukan (NIK) Siswa</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Status Siswa Dalam Keluarga</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Anak Kandung Ayah & Ibu">Anak Kandung Ayah & Ibu</option>
                                                            <option value="Anak Kandung Ayah">Anak Kandung Ayah</option>
                                                            <option value="Anak Kandung Ibu">Anak Kandung Ibu</option>
                                                            <option value="Anak Angkat">Anak Angkat</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Kartu Keluarga (KK)</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Status Kepala Keluarga dalam KK</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Ayah Kandung">Ayah Kandung</option>
                                                            <option value="Ibu Kandung">Ibu Kandung </option>
                                                            <option value="kakek">Kakek</option>
                                                            <option value="Nenek">Nenek</option>
                                                            <option value="Kakak">Kakak</option>
                                                            <option value="Paman">Paman</option>
                                                            <option value="Bibik">Bibik</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Sesuai KK</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Kelurahan Sesuai KK</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Kecamatan Sesuai KK</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Kota/Kabupaten Sesuai KK</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Provinsi Sesuai KK</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Tempat Tinggal Siswa</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Ikut Orang Tua">Ikut Orang Tua</option>
                                                            <option value="Asrama">Asrama</option>
                                                            <option value="Ikut Wali (Saudara/Kerabat/Orangtua Asuh)">Ikut Wali (Saudara/Kerabat/Orangtua Asuh)</option>
                                                            <option value="Panti Asuhan">Panti Asuhan</option>
                                                            <option value="Kost">Kost</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Tempat Tinggal Siswa</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Kontak Tempat Tinggal Siswa (Telp. Rumah/Hp)</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Perkiraan Jarak Tempat Tinggal Siswa (Km)</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Kendaraan Siswa Menuju Sekolah</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Hobi</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Cita - Cita</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Riwayat Kebutuhan Khusus Siswa</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Kelainan Jasmani/Cacat Tubuh</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Penyakit Kronis yang di Derita</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Permasalahan Belajar</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Ada">Tidak Ada</option>
                                                            <option value="Lamban">Lamban</option>
                                                            <option value="Sulit">Sulit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Bakat Luar Biasa</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Jenjang Pendidikan Sebelumnya</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Lengkap Jenjang Pendidikan Sebelumnya</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tahun Lulus</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Induk Siswa Nasional (NISN)</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan Sebelumnya</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Jenjang Pendidikan Sebelumnya</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Khusus Siswa Pindahan</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Sekolah Asal Siswa Pindahan</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Sekolah Asal Siswa Pindahan</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Masuk di Kelas</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="1">Kelas 1</option>
                                                            <option value="1">Kelas 2</option>
                                                            <option value="1">Kelas 3</option>
                                                            <option value="1">Kelas 4</option>
                                                            <option value="1">Kelas 5</option>
                                                            <option value="1">Kelas 6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Data Orang Tua Siswa</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Lengkap Ayah Kandung</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Kewarganegaraan Ayah kandung</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Select--</option>
                                                            <option value="WNI">WNI</option>
                                                            <option value="WNA">WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tempat Lahir Ayah Kandung</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tanggal Lahir Ayah Kandung</label>
                                                    <p><input type="date" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">NIK Ayah Kandung</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Lengkap Ibu Kandung</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Kewarganegaraan Ibu kandung</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Select--</option>
                                                            <option value="WNI">WNI</option>
                                                            <option value="WNA">WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tempat Lahir Ibu Kandung</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Tanggal Lahir Ibu Kandung</label>
                                                    <p><input type="date" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">NIK Ibu Kandung</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Lengkap Orang Tua</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Kontak Orang Tua</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" required placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor KPS/KKS/PKH (jika ada)</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Pendidikan Terakhir Ayah</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Tamat">Tidak Tamat</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D4">D4</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Pendidikan Terakhir Ibu</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Tamat">Tidak Tamat</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D4">D4</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Pekerjaan Ayah</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)">Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)</option>
                                                            <option value="Guru/Dosen">Guru/Dosen</option>
                                                            <option value="TNI/Polisi">TNI/Polisi</option>
                                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                                            <option value="Petani/Peternak">Petani/Peternak</option>
                                                            <option value="Dokter">Dokter</option>
                                                            <option value="Hakim">Hakim</option>
                                                            <option value="Pedagang">Pedagang</option>
                                                            <option value="Nelayan">Nelayan</option>
                                                            <option value="Bidan/Perawat">Bidan/Perawat</option>
                                                            <option value="Pengacara/Notaris/Jaksa">Pengacara/Notaris/Jaksa</option>
                                                            <option value="Pengusaha/Wiraswata">Pengusaha/Wiraswata</option>
                                                            <option value="Pilot/Pramugari">Pilot/Pramugari</option>
                                                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                                            <option value="Pensiunan">Pensiunan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Pekerjaan Ibu</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Ibu Rumah Tangga (di Rumah Saja)">Ibu Rumah Tangga (di Rumah Saja)</option>
                                                            <option value="Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)">Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)</option>
                                                            <option value="Guru/Dosen">Guru/Dosen</option>
                                                            <option value="TNI/Polisi">TNI/Polisi</option>
                                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                                            <option value="Petani/Peternak">Petani/Peternak</option>
                                                            <option value="Dokter">Dokter</option>
                                                            <option value="Hakim">Hakim</option>
                                                            <option value="Pedagang">Pedagang</option>
                                                            <option value="Nelayan">Nelayan</option>
                                                            <option value="Bidan/Perawat">Bidan/Perawat</option>
                                                            <option value="Pengacara/Notaris/Jaksa">Pengacara/Notaris/Jaksa</option>
                                                            <option value="Pengusaha/Wiraswata">Pengusaha/Wiraswata</option>
                                                            <option value="Pilot/Pramugari">Pilot/Pramugari</option>
                                                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                                            <option value="Pensiunan">Pensiunan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Penghasilan Ayah</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Ada">Tidak Ada</option>
                                                            <option value="< Rp.500.000">< Rp.500.000</option>
                                                            <option value="Rp.500.000 s/d Rp.1.000.000">Rp.500.000 s/d Rp.1.000.000</option>
                                                            <option value="Rp.1.000.000 s/d Rp.2.000.000">Rp.1.000.000 s/d Rp.2.000.000</option>
                                                            <option value="Rp.2.000.000 s/d Rp.3.000.000">Rp.2.000.000 s/d Rp.3.000.000</option>
                                                            <option value="Rp.3.000.000 s/d Rp.5.000.000">Rp.3.000.000 s/d Rp.5.000.000</option>
                                                            <option value=">Rp.5.000.000">>Rp.5.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Penghasilan Ibu</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Ada">Tidak Ada</option>
                                                            <option value="< Rp.500.000">< Rp.500.000</option>
                                                            <option value="Rp.500.000 s/d Rp.1.000.000">Rp.500.000 s/d Rp.1.000.000</option>
                                                            <option value="Rp.1.000.000 s/d Rp.2.000.000">Rp.1.000.000 s/d Rp.2.000.000</option>
                                                            <option value="Rp.2.000.000 s/d Rp.3.000.000">Rp.2.000.000 s/d Rp.3.000.000</option>
                                                            <option value="Rp.3.000.000 s/d Rp.5.000.000">Rp.3.000.000 s/d Rp.5.000.000</option>
                                                            <option value=">Rp.5.000.000">>Rp.5.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Identitas Wali Siswa</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nama Lengkap Wali</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">NIK Wali</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Hubungan Siswa Sebagai</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Alamat Tempat Tinggal Wali</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Nomor Kontak Wali (Telp. Rumah/HP)</label>
                                                    <p><input type="number" name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-6 col-form-label">Pendidikan Terakhir Wali</label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option selected>--Pilih--</option>
                                                            <option value="Tidak Tamat">Tidak Tamat</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D4">D4</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Pekerjaan Wali</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Rata - Rata Penghasilan Perbulan Wali</label>
                                                    <p><input type="text" name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <h5 class="text-center">Pernyataan orang Tua</h5>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="col-sm-12 col-form-label">Dengan mempertimbangkan penghasilan orangtua/wali & kebutuhan keluarga, serta semangat berinfaq untuk membantu generasi muslim menuntut ilmu, yang In syaa Allah menjadi amal jariyah, maka dipilih nominal SPP </label>
                                                    <div class="col-sm-12">
                                                        <select required class="form-select" aria-label="Default select example">
                                                            <option>--Pilih--</option>
                                                            <option value="Rp.150.000">Rp.150.000</option>
                                                            <option value="Rp.135.000">Rp.135.000</option>
                                                            <option value="Rp.120.000">Rp.120.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="useremail">Silakan diketik ulang "Kami orangtua/wali siswa mengisi formulir di atas sesuai keadaan sebenarnya, dengan ini kami siap berkerjasama dan mematuhi seluruh peraturan serta kebijakan sekolah</label>
                                                    <p><input type="text" required name="facebook" class="form-control" id="useremail" placeholder="Enter Facebook" oninput="this.className = ''"></p>
                                                </div>

                                                <div class="mb-3 col-sm-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" required class="form-check-input" id="customControlInline">
                                                        <label class="form-check-label" for="customControlInline">Cek ulang pengisian formulir online, pastikan jawaban sudah benar sebelum menekan submit/kirim</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="overflow:auto;">
                                          <div style="float:right;">
                                            <button type="button" class="btn btn-info w-md waves-effect waves-light" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="btn btn-primary w-md waves-effect waves-light" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                          </div>
                                        </div>

                                        <!-- Circles which indicates the steps of the form: -->
                                        <div style="text-align:center;margin-top:40px;">
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                          <span class="step"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
