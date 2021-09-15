<div>
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
                        <form wire:submit.prevent="simpan">
                            <!-- One "tab" for each step in the form: -->
                            @if ($currentPage === 1)
                            <h5 class="text-center">Biodata Calon Siswa</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Lengkap Siswa</label>
                                    <input type="text" required wire:model.lazy="fullname" class="form-control"
                                        placeholder="Masukkan Nama Lengkap Siswa">
                                    <div class="text-danger">
                                        @error('fullname')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Jenis
                                        Kelamin</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="gender" required class="form-select">
                                            <option selected>--Select--</option>
                                            <option value="Laki-Laki">Laki - Laki
                                            </option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('gender')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Kewarganegaraan
                                        Siswa</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="country" required class="form-select">
                                            <option selected>--Select--</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('country')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tempat
                                        Lahir</label>
                                    <input type="text" wire:model.lazy="place_birth" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir">
                                    <div class="text-danger">
                                        @error('place_birth')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tanggal
                                        Lahir</label>
                                    <input type="date" wire:model.lazy="date_birth" class="form-control" required
                                        placeholder="Masukkan Masukan Tanggal lahir">
                                    <div class="text-danger">
                                        @error('date_birth')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Anak
                                        Ke..</label>
                                    <input wire:model.lazy="child_to" type="number" class="form-control" required
                                        placeholder="Masukkan Anak Ke">
                                    <div class="text-danger">
                                        @error('child_to')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Dari ...
                                        Bersaudara</label>
                                    <input wire:model.lazy="child_from" type="number" class="form-control" required
                                        placeholder="Masukkan Berapa Saudara">
                                    <div class="text-danger">
                                        @error('child_from')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Induk Kependudukan (NIK) Siswa</label>
                                    <input wire:model.lazy="nik" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Induk Kependudukan (NIK) Siswa">
                                    <div class="text-danger">
                                        @error('nik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Status Siswa
                                        Dalam Keluarga</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="status_student_family" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('status_student_family')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Kartu Keluarga (KK)</label>
                                    <input wire:model.lazy="nik_kk" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Kartu Keluarga (KK)">
                                    <div class="text-danger">
                                        @error('nik_kk')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Status Kepala
                                        Keluarga dalam KK</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="status_head_family" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('status_head_family')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Sesuai KK</label>
                                    <input wire:model.lazy="address" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Sesuai KK">
                                    <div class="text-danger">
                                        @error('address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Kelurahan
                                        Sesuai KK</label>
                                    <input wire:model.lazy="Ward" type="text" class="form-control" required
                                        placeholder="Masukkan Kelurahan Sesuai KK">
                                    <div class="text-danger">
                                        @error('Ward')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Kecamatan
                                        Sesuai KK</label>
                                    <input wire:model.lazy="district" type="text" class="form-control" required
                                        placeholder="Masukkan Kecamatan Sesuai KK">
                                    <div class="text-danger">
                                        @error('district')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Kota/Kabupaten Sesuai KK</label>
                                    <input wire:model.lazy="city" type="text" class="form-control" required
                                        placeholder="Masukkan Kota/Kabupaten Sesuai KK">
                                    <div class="text-danger">
                                        @error('city')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Provinsi
                                        Sesuai KK</label>
                                    <input wire:model.lazy="province" type="text" class="form-control" required
                                        placeholder="Masukkan Provinsi Sesuai KK">
                                    <div class="text-danger">
                                        @error('province')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Tempat
                                        Tinggal Siswa</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="place_address" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('place_address')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Tempat Tinggal Siswa</label>
                                    <input wire:model.lazy="student_address" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Tempat Tinggal Siswa">
                                    <div class="text-danger">
                                        @error('student_address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Kontak Tempat Tinggal Siswa (Telp.
                                        Rumah/Hp)</label>
                                    <input wire:model.lazy="phone" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Kontak Tempat Tinggal Siswa (Telp.Rumah/Hp)">
                                    <div class="text-danger">
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Perkiraan
                                        Jarak Tempat Tinggal Siswa (Km)</label>
                                    <input wire:model.lazy="distance_to_school" type="text" required
                                        class="form-control"
                                        placeholder="Masukkan Perkiraan Jarak Tempat Tinggal Siswa (Km)">
                                    <div class="text-danger">
                                        @error('distance_to_school')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Kendaraan
                                        Siswa Menuju Sekolah</label>
                                    <input wire:model.lazy="vehicle" type="text" required class="form-control"
                                        placeholder="Masukkan Kendaraan Siswa Menuju Sekolah">
                                    <div class="text-danger">
                                        @error('vehicle')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Hobi</label>
                                    <input wire:model.lazy="hobby" type="text" class="form-control" required
                                        placeholder="Masukkan Hobi">
                                    <div class="text-danger">
                                        @error('hobby')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Cita -
                                        Cita</label>
                                    <input wire:model.lazy="goals" type="text" required class="form-control"
                                        placeholder="Masukkan Cita - Cita">
                                    <div class="text-danger">
                                        @error('goals')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center">Jenjang Pendidikan Sebelumnya</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Lengkap Jenjang Pendidikan Sebelumnya</label>
                                    <input type="text" wire:model.lazy="j_name" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Jenjang Pendidikan Sebelumnya">
                                    <div class="text-danger">
                                        @error('j_name')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tahun
                                        Lulus</label>
                                    <input type="number" wire:model.lazy="j_year_graduation" class="form-control"
                                        required placeholder="Masukkan Tahun Lulus">
                                    <div class="text-danger">
                                        @error('j_year_graduation')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Induk Siswa Nasional (NISN)</label>
                                    <input type="number" wire:model.lazy="j_nisn" class="form-control" required
                                        placeholder="Masukkan Nomor Induk Siswa Nasional (NISN)">
                                    <div class="text-danger">
                                        @error('j_nisn')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan
                                        Sebelumnya</label>
                                    <input type="number" wire:model.lazy="j_npsn" class="form-control" required
                                        placeholder="Masukkan Nomor Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan Sebelumnya">
                                    <div class="text-danger">
                                        @error('j_npsn')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Jenjang Pendidikan Sebelumnya</label>
                                    <input type="text" wire:model.lazy="j_address" class="form-control" required
                                        placeholder="Masukkan Alamat Jenjang Pendidikan Sebelumnya">
                                    <div class="text-danger">
                                        @error('j_address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-4 text-center">Khusus Siswa Pindahan</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Sekolah Asal Siswa Pindahan</label>
                                    <input wire:model.lazy="school_from" type="text" class="form-control"
                                        placeholder="Masukkan Nama Sekolah Asal Siswa Pindahan">
                                    <div class="text-danger">
                                        @error('school_from')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Sekolah Asal Siswa Pindahan</label>
                                    <input wire:model.lazy="school_address" type="text" class="form-control"
                                        placeholder="Masukkan Alamat Sekolah Asal Siswa Pindahan">
                                    <div class="text-danger">
                                        @error('school_address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Masuk di
                                        Kelas</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="semester_move" class="form-select">
                                            <option selected>--Pilih--</option>
                                            <option value="Kelas 1">Kelas 1</option>
                                            <option value="Kelas 2">Kelas 2</option>
                                            <option value="Kelas 3">Kelas 3</option>
                                            <option value="Kelas 4">Kelas 4</option>
                                            <option value="Kelas 5">Kelas 5</option>
                                            <option value="Kelas 6">Kelas 6</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('semester_move')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center">Riwayat Kebutuhan Khusus Siswa</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Kelainan
                                        Jasmani/Cacat Tubuh</label>
                                    <input type="text" wire:model.lazy="s_special_needs" class="form-control"
                                        placeholder="Masukkan Kelainan Jasmani/Cacat Tubuh">
                                    <div class="text-danger">
                                        @error('s_special_needs')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Penyakit
                                        Kronis yang di Derita</label>
                                    <input type="text" wire:model.lazy="s_disease" class="form-control"
                                        placeholder="Masukkan Penyakit Kronis yang di Derita">
                                    <div class="text-danger">
                                        @error('s_disease')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Permasalahan
                                        Belajar</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="s_study_problem" class="form-select">
                                            <option selected>--Pilih--</option>
                                            <option value="Tidak Ada">Tidak Ada</option>
                                            <option value="Lamban">Lamban</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('s_study_problem')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Bakat Luar
                                        Biasa</label>
                                    <input wire:model.lazy="s_talent" type="text" class="form-control"
                                        placeholder="Masukkan Bakat Luar Biasa">
                                    <div class="text-danger">
                                        @error('s_talent')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @elseif ($currentPage === 2)

                            <h5 class="text-center">Data Orang Tua Siswa</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        KPS/KKS/PKH (jika ada)</label>
                                    <input wire:model.lazy="p_address" type="number" class="form-control"
                                        placeholder="Masukkan Nomor KPS/KKS/PKH (jika ada)">
                                    <div class="text-danger">
                                        @error('p_address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor
                                        Kontak Orang Tua</label>
                                    <input wire:model.lazy="p_phone" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Kontak Orang Tua">
                                    <div class="text-danger">
                                        @error('p_phone')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Lengkap Orang Tua</label>
                                    <input wire:model.lazy="p_kps_no" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Lengkap Orang Tua">
                                    <div class="text-danger">
                                        @error('p_kps_no')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="text-center">Ayah</h5>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Lengkap Ayah Kandung</label>
                                    <input wire:model.lazy="f_name" type="text" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Ayah Kandung">
                                    <div class="text-danger">
                                        @error('f_name')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Kewarganegaraan
                                        Ayah kandung</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="f_country" required class="form-select">
                                            <option selected>--Select--</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('f_country')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tempat
                                        Lahir Ayah Kandung</label>
                                    <input wire:model.lazy="f_birth_place" type="text" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir Ayah Kandung">
                                    <div class="text-danger">
                                        @error('f_birth_place')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tanggal
                                        Lahir Ayah Kandung</label>
                                    <input wire:model.lazy="f_birth_date" type="date" class="form-control" required
                                        placeholder="Masukkan Tanggal Lahir Ayah Kandung">
                                    <div class="text-danger">
                                        @error('f_birth_date')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">NIK Ayah
                                        Kandung</label>
                                    <input wire:model.lazy="f_nik" type="number" class="form-control" required
                                        placeholder="Masukkan NIK Ayah Kandung">
                                    <div class="text-danger">
                                        @error('f_nik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Pendidikan
                                        Terakhir Ayah</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="f_education" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('f_education')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Pekerjaan
                                        Ayah</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="f_work" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('f_work')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Penghasilan
                                        Ayah</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="f_income" required class="form-select">
                                            <option selected>--Pilih--</option>
                                            <option value="1">Tidak Ada</option>
                                            <option value="2">
                                                < Rp.500.000</option> <option value="3">Rp.500.000 s/d Rp.1.000.000
                                            </option>
                                            <option value="4">
                                                Rp.1.000.000 s/d Rp.2.000.000</option>
                                            <option value="5">
                                                Rp.2.000.000 s/d Rp.3.000.000</option>
                                            <option value="6">
                                                Rp.3.000.000 s/d Rp.5.000.000</option>
                                            <option value="7">>Rp.5.000.000
                                            </option>
                                        </select>
                                        <div class="text-danger">
                                            @error('f_income')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-center">Ibu</h5>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Lengkap Ibu Kandung</label>
                                    <input wire:model.lazy="m_name" type="text" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Ibu Kandung">
                                    <div class="text-danger">
                                        @error('m_name')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Kewarganegaraan
                                        Ibu kandung</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="m_country" required class="form-select">
                                            <option selected>--Select--</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('m_country')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tempat
                                        Lahir Ibu Kandung</label>
                                    <input wire:model.lazy="m_birth_place" type="text" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir Ibu Kandung">
                                    <div class="text-danger">
                                        @error('m_birth_place')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Tanggal
                                        Lahir Ibu Kandung</label>
                                    <input wire:model.lazy="m_birth_date" type="date" class="form-control" required
                                        placeholder="Masukkan Tanggal Lahir Ibu Kandung">
                                    <div class="text-danger">
                                        @error('m_birth_date')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">NIK Ibu
                                        Kandung</label>
                                    <input wire:model.lazy="m_nik" type="number" class="form-control" required
                                        placeholder="Masukkan NIK Ibu Kandung">
                                    <div class="text-danger">
                                        @error('m_nik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Pendidikan
                                        Terakhir Ibu</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="m_education" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('m_education')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Pekerjaan
                                        Ibu</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="m_work" required class="form-select">
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
                                        <div class="text-danger">
                                            @error('m_work')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Penghasilan
                                        Ibu</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="m_income" required class="form-select">
                                            <option selected>--Pilih--</option>
                                            <option value="1">Tidak Ada</option>
                                            <option value="2">
                                                < Rp.500.000</option> <option value="3">
                                                    Rp.500.000 s/d Rp.1.000.000
                                            </option>
                                            <option value="4">
                                                Rp.1.000.000 s/d Rp.2.000.000</option>
                                            <option value="5">
                                                Rp.2.000.000 s/d Rp.3.000.000</option>
                                            <option value="6">
                                                Rp.3.000.000 s/d Rp.5.000.000</option>
                                            <option value="7">>Rp.5.000.000
                                            </option>
                                        </select>
                                        <div class="text-danger">
                                            @error('m_income')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- selesai orang tua --}}

                            <h5 class="text-center">Identitas Wali Siswa</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nama
                                        Lengkap Wali</label>
                                    <input type="text" wire:model.lazy="c_name" class="form-control"
                                        placeholder="Masukkan Nama Lengkap Wali">
                                    <div class="text-danger">
                                        @error('c_name')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">NIK
                                        Wali</label>
                                    <input type="number" wire:model.lazy="c_nik" class="form-control"
                                        placeholder="Masukkan NIK Wali">
                                    <div class="text-danger">
                                        @error('c_nik')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Hubungan
                                        Siswa Sebagai</label>
                                    <input type="text" wire:model.lazy="c_homeroom" class="form-control"
                                        placeholder="Masukkan Hubungan Siswa Sebagai">
                                    <div class="text-danger">
                                        @error('c_homeroom')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Alamat
                                        Tempat Tinggal Wali</label>
                                    <input type="text" wire:model.lazy="c_address" class="form-control"
                                        placeholder="Masukkan Alamat Tempat Tinggal Wali">
                                    <div class="text-danger">
                                        @error('c_address')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Nomor Kontak Wali (Telp. Rumah/HP)</label>
                                    <input type="number" wire:model.lazy="c_phone" class="form-control"
                                        placeholder="Masukkan Nomor Kontak Wali (Telp. Rumah/HP)">
                                    <div class="text-danger">
                                        @error('c_phone')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-6 col-form-label">Pendidikan
                                        Terakhir Wali</label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="c_education" class="form-select">
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
                                        <div class="text-danger">
                                            @error('c_education')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Pekerjaan
                                        Wali</label>
                                    <input type="text" wire:model.lazy="c_work" class="form-control"
                                        placeholder="Masukkan Pekerjaan Wali">
                                    <div class="text-danger">
                                        @error('c_work')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Rata -
                                        Rata Penghasilan Perbulan Wali</label>
                                    <input wire:model.lazy="c_income" type="number" class="form-control"
                                        placeholder="Masukkan Rata - Rata Penghasilan Perbulan Wali">
                                    <div class="text-danger">
                                        @error('c_income')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- selesai wali --}}

                            <h5 class="text-center">Pernyataan orang Tua</h5>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label class="col-sm-12 col-form-label">Dengan
                                        mempertimbangkan penghasilan orangtua/wali &
                                        kebutuhan keluarga, serta semangat berinfaq
                                        untuk membantu generasi muslim menuntut ilmu,
                                        yang In syaa Allah menjadi amal jariyah, maka
                                        dipilih nominal SPP </label>
                                    <div class="col-sm-12">
                                        <select wire:model.lazy="spp" required class="form-select">
                                            <option>--Pilih--</option>
                                            <option value="150000">Rp.150.000
                                            </option>
                                            <option value="135000">Rp.135.000
                                            </option>
                                            <option value="120000">Rp.120.000
                                            </option>
                                        </select>
                                        <div class="text-danger">
                                            @error('spp')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label">Silakan
                                        diketik ulang "Kami orangtua/wali siswa mengisi
                                        formulir di atas sesuai keadaan sebenarnya,
                                        dengan ini kami siap berkerjasama dan mematuhi
                                        seluruh peraturan serta kebijakan
                                        sekolah</label>
                                    <textarea wire:model.lazy="statement" required class="form-control" placeholder="">
                                    </textarea>
                                    <div class="text-danger">
                                        @error('statement')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-6">
                                    <div class="form-check">
                                        <input type="checkbox" required class="form-check-input"
                                            id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Cek ulang
                                            pengisian formulir online, pastikan jawaban
                                            sudah benar sebelum menekan
                                            submit/kirim</label>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    @if ($currentPage === 1)
                                    <div></div>
                                    @else
                                    <button wire:click="goToPreviousPage" type="button"
                                        class="btn btn-warning w-md waves-effect waves-light">
                                        Sebelumnya
                                    </button>
                                    @endif
                                    @if ($currentPage === count($pages))
                                    <button type="submit" class="btn btn-success w-md waves-effect waves-light">
                                        Kirim
                                    </button>
                                    @else
                                    <button wire:click="goToNextPage" type="button"
                                        class="btn btn-info w-md waves-effect waves-light">
                                        Selanjutnya
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>