<div class="modal fade" id="Update{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Kategori
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.update',['user'=>$item->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-12">
                        <label class="form-label">Nama</label>
                        <div>
                            <input type="text" name="name" class="form-control" value="{{$item->name}}">
                            <div class="text-danger" required>
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Email</label>
                        <div>
                            <input type="email" name="email" class="form-control" value="{{$item->email}}">
                            <div class="text-danger" required>
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Kata Sandi</label>
                        <div>
                            <input type="password" name="password" class="form-control" value="{{$item->password}}">
                            <div class="text-danger" required>
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Komfirmasi Kata Sandi</label>
                        <div>
                            <input type="password" name="password_confirmation" required class="form-control"
                                value="{{$item->password}}">
                            <div class="text-danger">
                                @error('password_confirmation')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<div class="modal fade" id="delete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('user.destroy',['user' => $item->id])}}" method="POST">
            @csrf
            @method('delete')
            <div class="modal-content">
                <div class="modal-body">
                    Data yang barkaitan dengan <strong>{{ $item->name }}</strong> akan terhapus <br>
                    Apakah anda yakin?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->