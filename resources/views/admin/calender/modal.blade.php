<div class="modal fade" id="Update{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Calender
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('calender.update',['calender'=>$item->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-12">
                        <label class="form-label">Name</label>
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
                        <label class="form-label">Image</label>
                        <div>
                            <input type="file" name="image" class="form-control" value="{{$item->name}}" accept="png/jpg/jpeg">
                            <div class="text-danger">
                                @error('file')
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
        <form action="{{route('calender.destroy',['calender' => $item->id])}}" method="POST">
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