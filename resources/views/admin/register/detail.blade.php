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
                        <div class="float-end">
                            <div>
                                @if ($data->education == "RA")
                                    <a href="{{ route('ra.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i class="fas fa-undo"> Back</i></a>
                                @endif
                                @if ($data->education == "SD")
                                    <a href="{{ route('sd.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i class="fas fa-undo"> Back</i></a>
                                @endif
                                @if ($data->education == "SMP")
                                    <a href="{{ route('smp.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i class="fas fa-undo"> Back</i></a>
                                @endif
                                @if ($data->education == "SMA")
                                    <a href="{{ route('sma.index') }}" class="btn btn-dark waves-effect waves-light me-1"><i class="fas fa-undo"> Back</i></a>
                                @endif
                            </div>
                        </div>
                        <br><br>
                            <h5 class="text-center">Biodata Calon Siswa</h5>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$data->fullname}}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis
                                    Kelamin</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$data->gender}}" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Kewarganegaraan
                                    Siswa</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$data->country}}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->place_birth}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input value="{{ Date::parse($data->date_birth)->format('j F Y') }}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-password-input" class="col-sm-2 col-form-label">AnaK Ke</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->child_to}}" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">Dari Bersaudara</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->child_from}}"
                                    class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Nomor
                                    Induk Kependudukan (NIK) Siswa</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->nik}}"class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Status Siswa
                                    Dalam Keluarga</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input value="{{$data->status_family}}"class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-month-input" class="col-sm-2 col-form-label">Nomor
                                    Kartu Keluarga (KK)</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->nik_kk}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-week-input" class="col-sm-2 col-form-label">Status Kepala
                                    Keluarga dalam KK</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input value="{{$data->status_head_family}}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-time-input" class="col-sm-2 col-form-label">Alamat
                                    Sesuai KK</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->address}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-time-input" class="col-sm-2 col-form-label">Kelurahan
                                    Sesuai KK</label >
                                <div class="col-sm-10">
                                    <input value="{{$data->Ward}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-lg" class="col-sm-2 col-form-label">Kecamatan
                                    Sesuai KK</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->Ward}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kota/Kabupaten Sesuai KK</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->city}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Provinsi
                                    Sesuai KK</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->province}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat Tinggal Siswa</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->place_address}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                    Tempat Tinggal Siswa</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->student_address}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                    Kontak Tempat Tinggal Siswa (Telp.
                                    Rumah/Hp)</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->phone}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Perkiraan
                                    Jarak Tempat Tinggal Siswa (Km)</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->distance_to_school}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kendaraan
                                    Siswa Menuju Sekolah</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->vehicle}}" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hobi</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->hobby}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Cita-Cita</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->goals}}" class="form-control" readonly>
                                </div>
                            </div>
                            <h5 class="text-center " style="color: red">Jenjang Pendidikan Sebelumnya</h5>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                    Lengkap Jenjang Pendidikan Sebelumnya</label>
                                <div class="col-sm-10">
                                    <input value="" class="form-control" readonly>
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
                                    <input value="{{$data->need->disease}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penyakit
                                    Kronis yang di Derita</label>
                                    <div class="col-sm-10">
                                        <input value="{{$data->need->special_needs}}" class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Permasalahan
                                    Belajar</label>
                                    <div class="col-sm-10">
                                        <input value="{{$data->need->study_problem}}" class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Bakat Luar
                                    Biasa</label>
                                    <div class="col-sm-10">
                                        <input value="{{$data->need->talent}}" class="form-control" readonly>
                                    </div>
                            </div>

                            <h5 class="mt-4 text-center" style="color: red">Khusus Siswa Pindahan</h5>
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
                                    <input value="{{$data->father->name}}"
                                    class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                                    Ayah kandung</label>
                                <div class="col-sm-10">
                                    <input value="{{$data->father->country}}"
                                    class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                                    Lahir Ayah Kandung</label>
                                <div class="col-sm-10">
                                    <input value="{{ $data->father->birth_place }}"
                                    class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                                    Lahir Ayah Kandung</label>
                                <div class="col-sm-10">
                                    <input value="{{ Date::parse($data->father->birth_date)->format('j F Y') }}"
                                    class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ayah
                                    Kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->father->nik }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                    Lengkap Ibu Kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->mather->name }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Kewarganegaraan
                                    Ibu kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->mather->country }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tempat
                                    Lahir Ibu Kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->mather->birth_place }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Tanggal
                                    Lahir Ibu Kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ Date::parse($data->mather->birth_date)->format('j F Y') }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK Ibu
                                    Kandung</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->mather->nik }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                    Lengkap Orang Tua</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->parent->address }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                    Kontak Orang Tua</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->parent->phone }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                    KPS/KKS/PKH (jika ada)</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->parent->kps_no }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                    Terakhir Ayah</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input value="{{ $data->father->education }}"
                                        class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                    Terakhir Ibu</label>
                                    <div class="col-sm-10">
                                        <input value="{{ $data->mather->education }}"
                                        class="form-control" readonly>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                    Ayah</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input value="{{ $data->father->work }}"
                                        class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                    Ibu</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->mather->work }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                                    Ayah</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input value="{{ $data->father->income }}"
                                        class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Penghasilan
                                    Ibu</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->father->income }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>

                            {{-- selesai orang tua --}}

                            <h5 class="text-center">Identitas Wali Siswa</h5>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nama
                                    Lengkap Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->cutodian->name }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">NIK
                                    Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->nik }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Hubungan
                                    Siswa Sebagai</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->homeroom }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Alamat
                                    Tempat Tinggal Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->address }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Nomor
                                    Kontak Wali (Telp. Rumah/HP)</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->phone }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pendidikan
                                    Terakhir Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->education }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Pekerjaan
                                    Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->work }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Rata -
                                    Rata Penghasilan Perbulan Wali</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input value="{{ $data->custodian->income }}"
                                            class="form-control" readonly>
                                        </div>
                                    </div>
                            </div>
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
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
