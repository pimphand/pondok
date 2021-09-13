@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">
 <!-- start page title -->
 <div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">{{$title}} {{$data->education}}</h6>

        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">{{$title}} {{$data->education}}</h4>
                <form class="outer-repeater">
                    <div class="float-end">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Edit
                            </button>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                    <h5 class="text-center">Biodata Calon Siswa</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Jenis
                            Kelamin</label>
                        <div class="col-sm-10">
                            <select name="gender" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Select--</option>
                                <option value="Laki-Laki">Laki - Laki
                                </option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Kewarganegaraan
                            Siswa</label>
                        <div class="col-sm-10">
                            <select name="country" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Select--</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" required name="place_birth"
                            class="form-control" id="useremail" required placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="date_birth" class="form-control"
                            id="useremail" required placeholder="Masukan Tanggal lahir">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-password-input" class="col-sm-2 col-form-label">AnaK Ke</label>
                        <div class="col-sm-10">
                            <input name="child_to" type="number" name="facebook" class="form-control"
                            id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Dari Bersaudara</label>
                        <div class="col-sm-10">
                            <input name="child_from" type="number" name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Nomor
                            Induk Kependudukan (NIK) Siswa</label>
                        <div class="col-sm-10">
                            <input name="nik" type="number" name="facebook" class="form-control"
                            id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Status Siswa
                            Dalam Keluarga</label>
                        <div class="col-sm-10">
                            <select name="status_student_family" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Anak Kandung Ayah & Ibu">Anak
                                    Kandung Ayah & Ibu</option>
                                <option value="Anak Kandung Ayah">Anak
                                    Kandung Ayah</option>
                                <option value="Anak Kandung Ibu">Anak
                                    Kandung Ibu</option>
                                <option value="Anak Angkat">Anak Angkat
                                </option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-month-input" class="col-sm-2 col-form-label">Nomor
                            Kartu Keluarga (KK)</label>
                        <div class="col-sm-10">
                            <input name="nik_kk" type="number" name="facebook" class="form-control"
                            id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-week-input" class="col-sm-2 col-form-label">Status Kepala
                            Keluarga dalam KK</label>
                        <div class="col-sm-10">
                            <select name="status_head_family" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Ayah Kandung">Ayah Kandung
                                </option>
                                <option value="Ibu Kandung">Ibu Kandung
                                </option>
                                <option value="kakek">Kakek</option>
                                <option value="Nenek">Nenek</option>
                                <option value="Kakak">Kakak</option>
                                <option value="Paman">Paman</option>
                                <option value="Bibik">Bibik</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-time-input" class="col-sm-2 col-form-label">Alamat
                            Sesuai KK</label>
                        <div class="col-sm-10">
                            <input name="address" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-time-input" class="col-sm-2 col-form-label">Kelurahan
                            Sesuai KK</label>
                        <div class="col-sm-10">
                            <input name="Ward" type="text" required name="facebook"
                                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-lg" class="col-sm-2 col-form-label">Kecamatan
                            Sesuai KK</label>
                        <div class="col-sm-10">
                            <input name="district" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kota/Kabupaten Sesuai KK</label>
                        <div class="col-sm-10">
                            <input name="city" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Provinsi
                            Sesuai KK</label>
                        <div class="col-sm-10">
                            <input name="province" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat Tinggal Siswa</label>
                        <div class="col-sm-10">
                            <select name="place_address" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Ikut Orang Tua">Ikut Orang
                                    Tua</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Ikut Wali (Saudara/Kerabat/Orangtua Asuh)">
                                    Ikut Wali (Saudara/Kerabat/Orangtua
                                    Asuh)</option>
                                <option value="Panti Asuhan">Panti Asuhan
                                </option>
                                <option value="Kost">Kost</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                            Tempat Tinggal Siswa</label>
                        <div class="col-sm-10">
                            <input name="student_address" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            Kontak Tempat Tinggal Siswa (Telp.
                            Rumah/Hp)</label>
                        <div class="col-sm-10">
                            <input name="phone" type="number" name="facebook" class="form-control"
                            id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Perkiraan
                            Jarak Tempat Tinggal Siswa (Km)</label>
                        <div class="col-sm-10">
                            <input name="distance_to_school" type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kendaraan
                            Siswa Menuju Sekolah</label>
                        <div class="col-sm-10">
                            <input name="vehicle" type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hobi</label>
                        <div class="col-sm-10">
                            <input name="hobby" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Cita-Cita</label>
                        <div class="col-sm-10">
                            <input name="goals" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <h5 class="text-center">Jenjang Pendidikan Sebelumnya</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                            Lengkap Jenjang Pendidikan Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook" class="form-control" id="useremail"
                            required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tahun
                            Lulus</label>
                        <div class="col-sm-10">
                            <input type="number" name="facebook" class="form-control" id="useremail" required
                            placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            Induk Siswa Nasional (NISN)</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan
                            Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                            Jenjang Pendidikan Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <h5 class="text-center">Riwayat Kebutuhan Khusus Siswa</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kelainan
                            Jasmani/Cacat Tubuh</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penyakit
                            Kronis yang di Derita</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Permasalahan
                            Belajar</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="Lamban">Lamban</option>
                                <option value="Sulit">Sulit</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Bakat Luar
                            Biasa</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>

                    <h5 class="mt-4 text-center">Khusus Siswa Pindahan</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                            Sekolah Asal Siswa Pindahan</label>
                        <div class="col-sm-10">
                            <input name="school_from" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                            Sekolah Asal Siswa Pindahan</label>
                        <div class="col-sm-10">
                            <input name="school_address" type="text" required name="facebook"
                            class="form-control" id="useremail" required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Masuk di
                            Kelas</label>
                        <div class="col-sm-10">
                            <select name="semester_move" required class="form-select"
                                aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Kelas 1">Kelas 1</option>
                                <option value="Kelas 2">Kelas 2</option>
                                <option value="Kelas 3">Kelas 3</option>
                                <option value="Kelas 4">Kelas 4</option>
                                <option value="Kelas 5">Kelas 5</option>
                                <option value="Kelas 6">Kelas 6</option>
                            </select>
                        </div>
                    </div>
                    <h5 class="text-center">Data Orang Tua Siswa</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                            Lengkap Ayah Kandung</label>
                        <div class="col-sm-10">
                            <input type="text" required name="facebook"
                            class="form-control" id="useremail" placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                            Ayah kandung</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Select--</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                            Lahir Ayah Kandung</label>
                        <div class="col-sm-10">

                            <input type="text" required name="facebook" class="form-control" id="useremail"
                            required placeholder="Enter Facebook">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                            Lahir Ayah Kandung</label>
                            <div class="col-sm-10">

                                <input type="date" name="facebook" class="form-control" id="useremail" required
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ayah
                            Kandung</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail" required
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                            Lengkap Ibu Kandung</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                required placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                            Ibu kandung</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Select--</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                            Lahir Ibu Kandung</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                required placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                            Lahir Ibu Kandung</label>
                            <div class="col-sm-10">

                                <input type="date" name="facebook" class="form-control" id="useremail" required
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ibu
                            Kandung</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail" required
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                            Lengkap Orang Tua</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                required placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            Kontak Orang Tua</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail" required
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            KPS/KKS/PKH (jika ada)</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                            Terakhir Ayah</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Tamat">Tidak Tamat
                                </option>
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
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                            Terakhir Ibu</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Tamat">Tidak Tamat
                                </option>
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
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                            Ayah</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option
                                    value="Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)">
                                    Pegawai BUMN/PNS (bukan Guru/Dosen, dan
                                    bukan Dokter/Bidan/Perawat)</option>
                                <option value="Guru/Dosen">Guru/Dosen
                                </option>
                                <option value="TNI/Polisi">TNI/Polisi
                                </option>
                                <option value="Pegawai Swasta">Pegawai
                                    Swasta</option>
                                <option value="Sopir/Masinis/Kondektur">
                                    Sopir/Masinis/Kondektur</option>
                                <option value="Petani/Peternak">
                                    Petani/Peternak</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Hakim">Hakim</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Bidan/Perawat">Bidan/Perawat
                                </option>
                                <option value="Pengacara/Notaris/Jaksa">
                                    Pengacara/Notaris/Jaksa</option>
                                <option value="Pengusaha/Wiraswata">
                                    Pengusaha/Wiraswata</option>
                                <option value="Pilot/Pramugari">
                                    Pilot/Pramugari</option>
                                <option value="Buruh (Tani/Pabrik/Bangunan)">
                                    Buruh (Tani/Pabrik/Bangunan)</option>
                                <option value="Pensiunan">Pensiunan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                            Ibu</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Ibu Rumah Tangga (di Rumah Saja)">
                                    Ibu Rumah Tangga (di Rumah Saja)
                                </option>
                                <option
                                    value="Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)">
                                    Pegawai BUMN/PNS (bukan Guru/Dosen, dan
                                    bukan Dokter/Bidan/Perawat)</option>
                                <option value="Guru/Dosen">Guru/Dosen
                                </option>
                                <option value="TNI/Polisi">TNI/Polisi
                                </option>
                                <option value="Pegawai Swasta">Pegawai
                                    Swasta</option>
                                <option value="Sopir/Masinis/Kondektur">
                                    Sopir/Masinis/Kondektur</option>
                                <option value="Petani/Peternak">
                                    Petani/Peternak</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Hakim">Hakim</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Bidan/Perawat">Bidan/Perawat
                                </option>
                                <option value="Pengacara/Notaris/Jaksa">
                                    Pengacara/Notaris/Jaksa</option>
                                <option value="Pengusaha/Wiraswata">
                                    Pengusaha/Wiraswata</option>
                                <option value="Pilot/Pramugari">
                                    Pilot/Pramugari</option>
                                <option value="Buruh (Tani/Pabrik/Bangunan)">
                                    Buruh (Tani/Pabrik/Bangunan)</option>
                                <option value="Pensiunan">Pensiunan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                            Ayah</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="< Rp.500.000">
                                    < Rp.500.000</option> <option value="Rp.500.000 s/d Rp.1.000.000">
                                        Rp.500.000 s/d Rp.1.000.000
                                </option>
                                <option value="Rp.1.000.000 s/d Rp.2.000.000">
                                    Rp.1.000.000 s/d Rp.2.000.000</option>
                                <option value="Rp.2.000.000 s/d Rp.3.000.000">
                                    Rp.2.000.000 s/d Rp.3.000.000</option>
                                <option value="Rp.3.000.000 s/d Rp.5.000.000">
                                    Rp.3.000.000 s/d Rp.5.000.000</option>
                                <option value=">Rp.5.000.000">>Rp.5.000.000
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                            Ibu</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="< Rp.500.000">
                                    < Rp.500.000</option> <option value="Rp.500.000 s/d Rp.1.000.000">
                                        Rp.500.000 s/d Rp.1.000.000
                                </option>
                                <option value="Rp.1.000.000 s/d Rp.2.000.000">
                                    Rp.1.000.000 s/d Rp.2.000.000</option>
                                <option value="Rp.2.000.000 s/d Rp.3.000.000">
                                    Rp.2.000.000 s/d Rp.3.000.000</option>
                                <option value="Rp.3.000.000 s/d Rp.5.000.000">
                                    Rp.3.000.000 s/d Rp.5.000.000</option>
                                <option value=">Rp.5.000.000">>Rp.5.000.000
                                </option>
                            </select>
                        </div>
                    </div>

                {{-- selesai orang tua --}}

                <h5 class="text-center">Identitas Wali Siswa</h5>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                            Lengkap Wali</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK
                            Wali</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hubungan
                            Siswa Sebagai</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                            Tempat Tinggal Wali</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                            Kontak Wali (Telp. Rumah/HP)</label>
                            <div class="col-sm-10">

                                <input type="number" name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                            Terakhir Wali</label>
                        <div class="col-sm-10">
                            <select required class="form-select" aria-label="Default select example">
                                <option selected>--Pilih--</option>
                                <option value="Tidak Tamat">Tidak Tamat
                                </option>
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
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                            Wali</label>
                            <div class="col-sm-10">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Rata -
                            Rata Penghasilan Perbulan Wali</label>
                            <div class="col-sm-10">

                                <input type="text" name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook">
                            </div>
                    </div>
                {{-- selesai wali --}}

                <h5 class="text-center">Pernyataan orang Tua</h5>
                    <div class="mb-3 row">
                        <label class="mb-3 form-label d-flex">Dengan
                            mempertimbangkan penghasilan orangtua/wali &
                            kebutuhan keluarga, serta semangat berinfaq
                            untuk membantu generasi muslim menuntut ilmu,
                            yang In syaa Allah menjadi amal jariyah, maka
                            dipilih nominal SPP </label>
                        <div class="col-sm-12">
                            <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="mb-3 form-label d-flex">Silahkan
                            diketik ulang "Kami orangtua/wali siswa mengisi
                            formulir di atas sesuai keadaan sebenarnya,
                            dengan ini kami siap berkerjasama dan mematuhi
                            seluruh peraturan serta kebijakan
                            sekolah"</label>
                            <div class="col-sm-12">

                                <input type="text" required name="facebook" class="form-control" id="useremail"
                                placeholder="Enter Facebook" readonly>
                            </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



@endsection
