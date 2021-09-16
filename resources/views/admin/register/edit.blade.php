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
                        <form action="{{route('update', $data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                        <div class="float-end">
                            <div>
                                @if ($data->education == "ra")
                                <a href="{{ route('ra.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i
                                        class="fas fa-undo"> Kembali</i></a>
                                @endif
                                @if ($data->education == "sd")
                                <a href="{{ route('sd.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i
                                        class="fas fa-undo"> Kembali</i></a>
                                @endif
                                @if ($data->education == "smp")
                                <a href="{{ route('smp.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i
                                        class="fas fa-undo"> Kembali</i></a>
                                @endif
                                @if ($data->education == "sma")
                                <a href="{{ route('sma.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i
                                        class="fas fa-undo"> Kembali</i></a>
                                @endif
                            </div>
                        </div>
                        <div class="float-end">
                            <div>
                                <button type="submit" name="education" value="{{$title}}" class="btn btn-info waves-effect waves-light me-1">
                                    <i class="fas fa-edit"> Edit</i>
                                </button>
                            </div>
                        </div>
                        <br><br>
                        <h5 class="text-center" style="color: red">Biodata Calon Siswa</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" required name="fullname" class="form-control"
                                        placeholder="Masukkan Nama Lengkap Siswa" value="{{$data->fullname}}">
                                    <div class="text-danger">
                                        @error('fullname')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Jenis
                                Kelamin</label>
                            <div class="col-sm-10">
                                <select name="gender" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $gender = ['Laki-Laki','Perempuan'];
                                    @endphp
                                    @foreach ($gender as $gd)
                                        <option value="{{$gd}}" {{$gd == $data->gender ? "selected"  : ""}} >{{$gd}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('gender')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Kewarganegaraan
                                Siswa</label>
                            <div class="col-sm-10">
                                <select name="country" required class="form-select">
                                    <option>--Pilih--</option>
                                    @php
                                        $country = ['WNI','WNA'];
                                    @endphp
                                    @foreach ($country as $cn)
                                        <option value="{{$cn}}" {{$cn == $data->country ? "selected"  : ""}} >{{$cn}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('country')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-url-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="place_birth" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir" value="{{$data->place_birth}}">
                                    <div class="text-danger">
                                        @error('place_birth')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="date_birth" class="form-control" required
                                        placeholder="Masukkan Masukan Tanggal lahir" value="{{$data->date_birth}}">
                                    <div class="text-danger">
                                        @error('date_birth')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-password-input" class="col-sm-2 col-form-label">AnaK Ke</label>
                            <div class="col-sm-10">
                                <input name="child_to" type="number" class="form-control" required
                                        placeholder="Masukkan Anak Ke" value="{{$data->child_to}}">
                                    <div class="text-danger">
                                        @error('child_to')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Dari Bersaudara</label>
                            <div class="col-sm-10">
                                <input name="child_from" type="number" class="form-control" required
                                        placeholder="Masukkan Berapa Saudara" value="{{$data->child_from}}">
                                    <div class="text-danger">
                                        @error('child_from')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Nomor
                                Induk Kependudukan (NIK) Siswa</label>
                            <div class="col-sm-10">
                                <input name="nik" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Induk Kependudukan (NIK) Siswa" value="{{$data->nik}}">
                                    <div class="text-danger">
                                        @error('nik')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Status Siswa
                                Dalam Keluarga</label>
                            <div class="col-sm-10">
                                <select name="status_student_family" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $status = ['Anak Kandung Ayah & Ibu','Anak Kandung Ayah','Anak Kandung Ibu','Anak Angkat','Lainnya'];
                                    @endphp
                                    @foreach ($status as $sf)
                                        <option value="{{$sf}}" {{$sf == $data->status_family ? "selected" : ""}} >{{$sf}}
                                        </option>
                                    @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('status_student_family')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-month-input" class="col-sm-2 col-form-label">Nomor
                                Kartu Keluarga (KK)</label>
                            <div class="col-sm-10">
                                <input name="nik_kk" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Kartu Keluarga (KK)" value="{{$data->nik_kk}}">
                                    <div class="text-danger">
                                        @error('nik_kk')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-week-input" class="col-sm-2 col-form-label">Status Kepala
                                Keluarga dalam KK</label>
                            <div class="col-sm-10">
                                    <select name="status_head_family" required class="form-select">
                                        <option selected>--Pilih--</option>
                                        @php
                                            $kepala = ['Ayah kandung','Ibu Kandung','Kakek','Nenek','Paman','Bibik','Lainnya'];
                                        @endphp
                                        @foreach ($kepala as $kd)
                                            <option value="{{$kd}}" {{$kd == $data->status_head_family ? "selected" : ""}}>{{$kd}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('status_head_family')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-time-input" class="col-sm-2 col-form-label">Alamat
                                Sesuai KK</label>
                            <div class="col-sm-10">
                                <input name="address" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Sesuai KK" value="{{$data->address}}">
                                    <div class="text-danger">
                                        @error('address')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-time-input" class="col-sm-2 col-form-label">Kelurahan
                                Sesuai KK</label>
                            <div class="col-sm-10">
                                <input name="Ward" type="text" class="form-control" required
                                        placeholder="Masukkan Kelurahan Sesuai KK" value="{{$data->Ward}}">
                                    <div class="text-danger">
                                        @error('Ward')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-lg" class="col-sm-2 col-form-label">Kecamatan
                                Sesuai KK</label>
                            <div class="col-sm-10">
                                <input name="district" type="text" class="form-control" required
                                        placeholder="Masukkan Kecamatan Sesuai KK" value="{{$data->district}}">
                                    <div class="text-danger">
                                        @error('district')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kota/Kabupaten Sesuai
                                KK</label>
                            <div class="col-sm-10">
                                <input name="city" type="text" class="form-control" required
                                        placeholder="Masukkan Kota/Kabupaten Sesuai KK" value="{{$data->city}}">
                                    <div class="text-danger">
                                        @error('city')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Provinsi
                                Sesuai KK</label>
                            <div class="col-sm-10">
                                <input name="province" type="text" class="form-control" required
                                        placeholder="Masukkan Provinsi Sesuai KK" value="{{$data->province}}">
                                    <div class="text-danger">
                                        @error('province')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat Tinggal
                                Siswa</label>
                            <div class="col-sm-10">
                                <select name="place_address" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $tinggal = ['Ikut Orang Tua','Asrama','Ikut Wali (Saudara/Kerabat/OrangTua)','Panti Asuhan','Kost'];
                                    @endphp
                                    @foreach ($tinggal as $tt)
                                        <option value="{{$tt}}"{{$tt == $data->place_address ? "selected" : ""}}>{{$tt}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('place_address')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                Tempat Tinggal Siswa</label>
                            <div class="col-sm-10">
                                <input name="student_address" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Tempat Tinggal Siswa" value="{{$data->student_address}}">
                                    <div class="text-danger">
                                        @error('student_address')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                Kontak Tempat Tinggal Siswa (Telp.
                                Rumah/Hp)</label>
                            <div class="col-sm-10">
                                <input name="phone" type="number" class="form-control" required
                                        placeholder="Masukkan Nomor Kontak Tempat Tinggal Siswa (Telp.Rumah/Hp)" value="{{$data->phone}}">
                                    <div class="text-danger">
                                        @error('phone')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Perkiraan
                                Jarak Tempat Tinggal Siswa (Km)</label>
                            <div class="col-sm-10">
                                <input name="distance_to_school" type="text" required
                                class="form-control" placeholder="Masukkan Perkiraan Jarak Tempat Tinggal Siswa (Km)" value="{{$data->distance_to_school}}">
                                <div class="text-danger">
                                    @error('distance_to_school')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kendaraan
                                Siswa Menuju Sekolah</label>
                            <div class="col-sm-10">
                                <input name="vehicle" type="text" required class="form-control"
                                        placeholder="Masukkan Kendaraan Siswa Menuju Sekolah" value="{{$data->vehicle}}">
                                    <div class="text-danger">
                                        @error('vehicle')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hobi</label>
                            <div class="col-sm-10">
                                <input name="hobby" type="text" class="form-control" required
                                        placeholder="Masukkan Hobi" value="{{$data->hobby}}">
                                    <div class="text-danger">
                                        @error('hobby')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Cita-Cita</label>
                            <div class="col-sm-10">
                                <input name="goals" type="text" required class="form-control"
                                        placeholder="Masukkan Cita - Cita" value="{{$data->goals}}">
                                    <div class="text-danger">
                                        @error('goals')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <h5 class="text-center" style="color: red">Jenjang Pendidikan Sebelumnya</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                Lengkap Jenjang Pendidikan Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="j_name" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Jenjang Pendidikan Sebelumnya" value="{{$data->previous->name}}">
                                    <div class="text-danger">
                                        @error('j_name')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tahun
                                Lulus</label>
                            <div class="col-sm-10">
                                <input type="number" name="j_year_graduation" class="form-control"
                                        required placeholder="Masukkan Tahun Lulus" value="{{$data->previous->year_graduation}}">
                                    <div class="text-danger">
                                        @error('j_year_graduation')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                Induk Siswa Nasional (NISN)</label>
                            <div class="col-sm-10">
                                <input type="number" name="j_nisn" class="form-control" required
                                        placeholder="Masukkan Nomor Induk Siswa Nasional (NISN)" value="{{$data->previous->nisn}}">
                                    <div class="text-danger">
                                        @error('j_nisn')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan
                                Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="number" name="j_npsn" class="form-control" required
                                        placeholder="Masukkan Nomor Pokok Sekolah Nasional (NPSN) Jenjang Pendidikan Sebelumnya" value="{{$data->previous->npsn}}">
                                    <div class="text-danger">
                                        @error('j_npsn')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                Jenjang Pendidikan Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="j_address" class="form-control" required
                                        placeholder="Masukkan Alamat Jenjang Pendidikan Sebelumnya" value="{{$data->previous->address}}">
                                <div class="text-danger">
                                    @error('j_address')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if (!$data->need == null)
                        <h5 class="text-center" style="color: red">Riwayat Kebutuhan Khusus Siswa</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kelainan
                                Jasmani/Cacat Tubuh</label>
                            <div class="col-sm-10">
                                <input type="text" name="s_special_needs" class="form-control"
                                        placeholder="Masukkan Kelainan Jasmani/Cacat Tubuh" value="{{$data->need->special_needs}}">
                                    <div class="text-danger">
                                        @error('s_special_needs')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penyakit
                                Kronis yang di Derita</label>
                            <div class="col-sm-10">
                                <input type="text" name="s_disease" class="form-control"
                                        placeholder="Masukkan Penyakit Kronis yang di Derita" value="{{$data->need->disease}}">
                                <div class="text-danger">
                                    @error('s_disease')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Permasalahan
                                Belajar</label>
                            <div class="col-sm-10">
                                <select name="s_study_problem" class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $masalah =['Tidak Ada','Lamban','Sulit'];
                                    @endphp
                                    @foreach ($masalah as $ms)
                                        <option value="{{$ms}}"{{$ms == $data->need->study_problem ? "selected" : ""}}>{{$ms}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('s_study_problem')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Bakat Luar
                                Biasa</label>
                            <div class="col-sm-10">
                                <input name="s_talent" type="text" class="form-control"
                                        placeholder="Masukkan Bakat Luar Biasa" value="{{$data->need->talent}}">
                                    <div class="text-danger">
                                        @error('s_talent')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        @endif

                        @if (!$data->semester_move == null)
                        <h5 class="mt-4 text-center" style="color: red">Khusus Siswa Pindahan</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                Sekolah Asal Siswa Pindahan</label>
                            <div class="col-sm-10">
                                <input name="school_from" type="text" class="form-control"
                                        placeholder="Masukkan Nama Sekolah Asal Siswa Pindahan" value="{{$data->school_from}}">
                                    <div class="text-danger">
                                        @error('school_from')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                Sekolah Asal Siswa Pindahan</label>
                            <div class="col-sm-10">
                                <input name="school_address" type="text" class="form-control"
                                        placeholder="Masukkan Alamat Sekolah Asal Siswa Pindahan" value="{{$data->school_address}}">
                                    <div class="text-danger">
                                        @error('school_address')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Masuk di
                                Kelas</label>
                                <div class="col-sm-10">
                                    <select name="semester_move" class="form-select">
                                        <option selected>--Pilih--</option>
                                        @php
                                            $pindahan = ['Kelas 1','Kelas 2','Kelas 3','Kelas 4','Kelas 5','Kelas 6'];
                                        @endphp
                                        @foreach ($pindahan as $mk)
                                            <option value="{{$mk}}"{{$mk == $data->semester_move ? "selected" : ""}}>{{$mk}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('semester_move')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        @endif
                        <h5 class="text-center" style="color: red">Data Orang Tua Siswa</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                Lengkap Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input name="f_name" type="text" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Ayah Kandung" value="{{$data->parent->father->name}}">
                                    <div class="text-danger">
                                        @error('f_name')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                                Ayah kandung</label>
                            <div class="col-sm-10">
                                <select name="f_country" required class="form-select">
                                    <option selected>--Pillih--</option>
                                    @php
                                        $country = ['WNI','WNA'];
                                    @endphp
                                    @foreach ($country as $cn)
                                        <option value="{{$cn}}" {{$cn == $data->parent->father->country ? "selected"  : ""}} >{{$cn}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('f_country')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                                Lahir Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input name="f_birth_place" type="text" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir Ayah Kandung" value="{{$data->parent->father->birth_place}}">
                                    <div class="text-danger">
                                        @error('f_birth_place')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                                Lahir Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input name="f_birth_date" type="date" class="form-control" required
                                        placeholder="Masukkan Tanggal Lahir Ayah Kandung" value="{{$data->parent->father->birth_date}}">
                                    <div class="text-danger">
                                        @error('f_birth_date')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ayah
                                Kandung</label>
                            <div class="col-sm-10">
                                <input name="f_nik" type="number" class="form-control" required
                                        placeholder="Masukkan NIK Ayah Kandung" value="{{$data->parent->father->nik}}">
                                    <div class="text-danger">
                                        @error('f_nik')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                Lengkap Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input name="m_name" type="text" class="form-control" required
                                        placeholder="Masukkan Nama Lengkap Ibu Kandung" value="{{$data->parent->mother->name}}">
                                    <div class="text-danger">
                                        @error('m_name')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                                Ibu kandung</label>
                            <div class="col-sm-10">
                                <select name="m_country" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $country = ['WNI','WNA'];
                                    @endphp
                                    @foreach ($country as $cn)
                                        <option value="{{$cn}}" {{$cn == $data->parent->mother->country ? "selected"  : ""}} >{{$cn}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('m_country')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                                Lahir Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input name="m_birth_place" type="text" class="form-control" required
                                        placeholder="Masukkan Tempat Lahir Ibu Kandung" value="{{$data->parent->mother->birth_place}}">
                                    <div class="text-danger">
                                        @error('m_birth_place')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                                Lahir Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input name="m_birth_date" type="date" class="form-control" required
                                        placeholder="Masukkan Tanggal Lahir Ibu Kandung" value="{{$data->parent->mother->birth_date}}">
                                    <div class="text-danger">
                                        @error('m_birth_date')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ibu
                                Kandung</label>
                            <div class="col-sm-10">
                                <input name="m_nik" type="number" class="form-control" required
                                        placeholder="Masukkan NIK Ibu Kandung" value="{{$data->parent->mother->nik}}">
                                    <div class="text-danger">
                                        @error('m_nik')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                Lengkap Orang Tua</label>
                            <div class="col-sm-10">
                                <input name="p_kps_no" type="text" class="form-control" required
                                        placeholder="Masukkan Alamat Lengkap Orang Tua" value="{{ $data->parent->address }}">
                                <div class="text-danger">
                                    @error('p_kps_no')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                Kontak Orang Tua</label>
                            <div class="col-sm-10">
                                <input name="p_phone" type="text" class="form-control" required
                                placeholder="Masukkan Nomor Kontak Orang Tua" value="{{ $data->parent->phone }}">
                                <div class="text-danger">
                                    @error('p_phone')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                KPS/KKS/PKH (jika ada)</label>
                            <div class="col-sm-10">
                                <input name="p_address" type="text" class="form-control"
                                        placeholder="Masukkan Nomor KPS/KKS/PKH (jika ada)" value="{{ $data->parent->kps_no }}">
                                    <div class="text-danger">
                                        @error('p_address')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                Terakhir Ayah</label>
                            <div class="col-sm-10">
                                <select name="f_education" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $pendidikan = ['Tidak Tamat','SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3'];
                                    @endphp
                                    @foreach ($pendidikan as $ptr)
                                        <option value="{{$ptr}}"{{$ptr == $data->parent->father->education ? "selected" : ""}}>{{$ptr}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('f_education')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                Terakhir Ibu</label>
                            <div class="col-sm-10">
                                <select name="m_education" required class="form-select">
                                    <option selected>--Pilih--</option>
                                    @php
                                        $pendidikan = ['Tidak Tamat','SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3'];
                                    @endphp
                                    @foreach ($pendidikan as $pti)
                                        <option value="{{$pti}}"{{$pti == $data->parent->mother->education ? "selected" : ""}}>{{$pti}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('m_education')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                Ayah</label>
                            <div class="col-sm-10">
                                    <select name="f_work" required class="form-select">
                                        <option selected>--Pilih--</option>
                                        @php
                                            $pekerjaan = ['Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)','Guru/Dosen',
                                                         'Pegawai Swasta','Sopir/Masinis/Kondektur','Petani/Peternak','Dokter','Hakim','Pedagang',
                                                         'Nelayan','Bidan/Perawat','Pengacara/Notaris/Jaksa','Pengusaha/Wiraswata','Pilot/Pramugari',
                                                         'Buruh (Tani/Pabrik/Bangunan)','Pensiunan'];
                                        @endphp
                                        @foreach ($pekerjaan as $ayah)
                                            <option value="{{$ayah}}" {{$ayah == $data->parent->father->work ? "selected" : ""}}>{{$ayah}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('f_work')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                Ibu</label>
                            <div class="col-sm-10">
                                    <select name="m_work" required class="form-select">
                                        <option selected>--Pilih--</option>
                                        @php
                                            $pekerjaan = ['Ibu Rumah Tangga (di Rumah Saja)','Pegawai BUMN/PNS (bukan Guru/Dosen, dan bukan Dokter/Bidan/Perawat)','Guru/Dosen',
                                                         'Pegawai Swasta','Sopir/Masinis/Kondektur','Petani/Peternak','Dokter','Hakim','Pedagang',
                                                         'Nelayan','Bidan/Perawat','Pengacara/Notaris/Jaksa','Pengusaha/Wiraswata','Pilot/Pramugari',
                                                         'Buruh (Tani/Pabrik/Bangunan)','Pensiunan'];
                                        @endphp
                                        @foreach ($pekerjaan as $ibu)
                                            <option value="{{$ibu}}" {{$ibu == $data->parent->mother->work ? "selected" : ""}}>{{$ibu}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('m_work')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                                Ayah</label>
                            <div class="col-sm-10">
                                    <select name="f_income" required class="form-select">
                                        <option selected>--Pilih--</option>
                                        <option value="1"{{ $data->parent->father->income == 1 ? "selected" : "" }}>Tidak Ada</option>
                                        <option value="2" {{ $data->parent->father->income == 2 ? "selected" : "" }}>
                                            < Rp.500.000</option>
                                        <option value="3" {{ $data->parent->father->income == 3 ? "selected" : "" }}>
                                                Rp.500.000 s/d Rp.1.000.000
                                        </option>
                                        <option value="4" {{ $data->parent->father->income == 4 ? "selected" : "" }}>
                                            Rp.1.000.000 s/d Rp.2.000.000</option>
                                        <option value="5" {{ $data->parent->father->income == 5 ? "selected" : "" }}>
                                            Rp.2.000.000 s/d Rp.3.000.000</option>
                                        <option value="6" {{ $data->parent->father->income == 6 ? "selected" : ""}}>
                                            Rp.3.000.000 s/d Rp.5.000.000</option>
                                        <option value="7" {{ $data->parent->father->income == 7 ? "selected" : ""}}>>Rp.5.000.000
                                        </option>

                                    </select>
                                    <div class="text-danger">
                                        @error('f_income')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                                Ibu</label>
                            <div class="col-sm-10">
                                    <select name="m_income" required class="form-select">
                                        <option selected>--Pilih--</option>
                                        <option value="1"{{  $data->parent->mother->income == 1 ? "selected" : ""}}>Tidak Ada</option>
                                        <option value="2" {{  $data->parent->mother->income == 2 ? "selected" : ""}}>
                                            < Rp.500.000</option>
                                        <option value="3" {{  $data->parent->mother->income == 3 ? "selected" : ""}}>
                                                Rp.500.000 s/d Rp.1.000.000
                                        </option>
                                        <option value="4" {{  $data->parent->mother->income == 4 ? "selected" : ""}}>
                                            Rp.1.000.000 s/d Rp.2.000.000</option>
                                        <option value="5" {{ $data->parent->mother->income == 5 ? "selected" : ""}}>
                                            Rp.2.000.000 s/d Rp.3.000.000</option>
                                        <option value="6" {{ $data->parent->mother->income == 6 ? "selected" : ""}}>
                                            Rp.3.000.000 s/d Rp.5.000.000</option>
                                        <option value="7" {{ $data->parent->mother->income == 7 ? "selected" : ""}}>>Rp.5.000.000
                                        </option>
                                    </select>
                                    <div class="text-danger">
                                        @error('m_income')
                                        {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>

                        {{-- selesai orang tua --}}

                        @if (!$data->custodian == null)
                        <h5 class="text-center" style="color: red">Identitas Wali Siswa</h5>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                Lengkap Wali</label>
                            <div class="col-sm-10">
                                    <input type="text" name="c_name" class="form-control"
                                        placeholder="Masukkan Nama Lengkap Wali" value="{{ $data->custodian->name }}">
                                    <div class="text-danger">
                                        @error('c_name')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK
                                Wali</label>
                            <div class="col-sm-10">
                                    <input type="number" name="c_nik" class="form-control"
                                        placeholder="Masukkan NIK Wali" value="{{ $data->custodian->nik }}">
                                    <div class="text-danger">
                                        @error('c_nik')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hubungan
                                Siswa Sebagai</label>
                            <div class="col-sm-10">
                                    <input type="text" name="c_homeroom" class="form-control"
                                        placeholder="Masukkan Hubungan Siswa Sebagai" value="{{ $data->custodian->homeroom }}">
                                    <div class="text-danger">
                                        @error('c_homeroom')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                Tempat Tinggal Wali</label>
                            <div class="col-sm-10">
                                    <input type="text" name="c_address" class="form-control"
                                        placeholder="Masukkan Alamat Tempat Tinggal Wali" value="{{ $data->custodian->address }}">
                                    <div class="text-danger">
                                        @error('c_address')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                Kontak Wali (Telp. Rumah/HP)</label>
                            <div class="col-sm-10">
                                    <input type="number" name="c_phone" class="form-control"
                                        placeholder="Masukkan Nomor Kontak Wali (Telp. Rumah/HP)" value="{{ $data->custodian->phone }}">
                                    <div class="text-danger">
                                        @error('c_phone')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                Terakhir Wali</label>
                            <div class="col-sm-10">
                                    <select name="c_education" class="form-select">
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
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                Wali</label>
                            <div class="col-sm-10">
                                    <input type="text" name="c_work" class="form-control"
                                        placeholder="Masukkan Pekerjaan Wali" value="{{ $data->custodian->work }}">
                                    <div class="text-danger">
                                        @error('c_work')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input-sm" class="col-sm-2 col-form-label">Rata -
                                Rata Penghasilan Perbulan Wali</label>
                            <div class="col-sm-10">
                                <div class="col-sm-10">
                                    <input name="c_income" type="number" class="form-control"
                                        placeholder="Masukkan Rata - Rata Penghasilan Perbulan Wali" value="{{ $data->custodian->income }}">
                                    <div class="text-danger">
                                        @error('c_income')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        {{-- selesai wali --}}

                        <h5 class="text-center" style="color: red">Pernyataan orang Tua</h5>
                        <div class="mb-3 row">
                            <label class="mb-3 form-label d-flex">Dengan
                                mempertimbangkan penghasilan orangtua/wali &
                                kebutuhan keluarga, serta semangat berinfaq
                                untuk membantu generasi muslim menuntut ilmu,
                                yang In syaa Allah menjadi amal jariyah, maka
                                dipilih nominal SPP </label>
                            <div class="col-sm-12">
                                <select name="spp" required class="form-select">
                                    <option>--Pilih--</option>
                                    @php
                                        $spp = ['150000','135000','120000'];
                                    @endphp
                                    @foreach ($spp as $sp)
                                        <option value="{{$sp}}" {{$sp == $data->spp ? "selected"  : ""}} >Rp.{{number_format($sp, 2)}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('spp')
                                    {{$message}}
                                    @enderror
                                </div>
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
                                <textarea name="statement" required class="form-control" placeholder="">{{$data->statement}}</textarea>
                                <div class="text-danger">
                                    @error('statement')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
