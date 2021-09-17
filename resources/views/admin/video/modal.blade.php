<div class="modal fade" id="UpdateNews{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Video
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('video.update', ['video'=>$item->id])}}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Link Video</label>
                        <div>
                            <input type="text" name="link" class="form-control" value="{{$item->link}}">
                            <div class="text-danger">
                                @error('link')
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
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="Updatevideo{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Video
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('video.update', ['video'=>$item->id])}}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label">Video</label>
                        <div>
                            <input type="file" name="video" class="form-control" placeholder="Enter File" accept="png/jpg/jpeg" value="{{$item->image}}">
                            <small>Ukuran Video Maksimal 2MB</small>
                            <div class="text-danger">
                                @error('video')
                                    {{$message}}
                                @enderror
                            </div>
                            <video width="150px" height="150px" controls>
                                <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                    type="video/mp4">
                            </video>
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
    <!-- /.modal-dialog -->
</div>

