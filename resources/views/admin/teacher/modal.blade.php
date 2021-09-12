<div class="modal fade" id="UpdateNews{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Guru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('teacher.update', ['teacher'=>$item->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-12">
                        <label class="form-label">Nama</label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{$item->name}}">
                            <div class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Nama Lengkap</label>
                        <div>
                            <input type="text" name="fullname" class="form-control" value="{{$item->fullname}}">
                            <div class="text-danger">
                                @error('fullname')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Gambar</label>
                        <div>
                            <input type="file" name="image" class="form-control" placeholder="Enter File"
                                accept="imagejpg/,image/jpeg" value="{{$item->image}}">
                            <div class="text-danger">
                                @error('image')
                                {{$message}}
                                @enderror
                            </div><br>
                            <img src="{{asset('storage/teacher')}}/{{$item->image}}" width="300px">
                        </div><br>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Mengajar</label>
                        <div>
                            <input type="text" name="teach" class="form-control" value="{{$item->teach}}">
                            <div class="text-danger">
                                @error('teach')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
