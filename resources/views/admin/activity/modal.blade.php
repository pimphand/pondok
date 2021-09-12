<div class="modal fade" id="UpdateNews{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update News
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('female.update', ['female'=>$item->id])}}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Deskripsi</label>
                        <div>
                            <textarea type="text" id="elm1" name="description" class="form-control">{!!$item->description!!}</textarea>
                            <div class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Image</label>
                        <div>
                            <input type="file" name="image" class="form-control" placeholder="Enter File" accept="jpg/jpeg" value="{{$item->image}}">
                            <div class="text-danger">
                                @error('image')
                                    {{$message}}
                                @enderror
                            </div><br>
                            <img src="{{asset('storage/activity')}}/{{$item->image}}" width="300px">
                        </div><br>
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
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="UpdateMan{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update News
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('man.update', ['man'=>$item->id])}}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Deskripsi</label>
                        <div>
                            <textarea type="text" id="elm2" name="description" class="form-control">{!!$item->description!!}</textarea>
                            <div class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Image</label>
                        <div>
                            <input type="file" name="image" class="form-control" placeholder="Enter File" accept="imagejpg/,image/jpeg" value="{{$item->image}}">
                            <div class="text-danger">
                                @error('image')
                                    {{$message}}
                                @enderror
                            </div><br>
                            <img src="{{asset('storage/activity')}}/{{$item->image}}" width="300px">
                        </div><br>
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
    <!-- /.modal-dialog -->
</div>
