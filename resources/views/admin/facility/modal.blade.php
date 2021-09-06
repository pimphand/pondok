<div class="modal fade" id="Update{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Facility
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('calender.update',['calender'=>$item->id])}}" method="POST" class="outer-repeater"
                    enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="mb-3">
                                <label class="form-label" for="formname">Name </label>
                                <input type="text" class="form-control" name="name" id="formname"
                                    placeholder="Enter Name">
                                <div class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 inner-repeater">
                                <div data-repeater-list="inner-group" class="mb-3 inner">
                                    <label class="form-label">Image</label>
                                    <div data-repeater-item class="mb-3 inner row">
                                        <div class="col-md-7 col-sm-8">
                                            <input type="file" name="image" class="inner form-control"
                                                placeholder="Enter your phone no..." />
                                        </div>
                                        <div class="col-md-3 col-sm-2">
                                            <div class="d-grid">
                                                <input data-repeater-create type="button" class="btn btn-success inner"
                                                    value="Add Image" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="d-grid">
                                                <input data-repeater-delete type="button"
                                                    class="mt-2 btn btn-primary inner mt-sm-0" value="Delete" />
                                            </div>
                                        </div>
                                        <div class="text-danger">
                                            @error('image')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

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
<div class="modal fade" id="show{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Show Facility
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2 mb-2 records">
                        <label class="form-label">Gambar</label>
                        <div>
                            <input type="file" name="image" class="form-control" placeholder="Enter Name">
                            <div class="text-danger">
                                @error('image')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 records">
                        <button name="id" value="{{ $item->id }}" class="btn btn-primary btn-sm">tambah</button>
                    </div>
                </form>
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item->gallery as $items)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/gallery/'. $items->image) }}" alt="" width="100px">
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $item->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-5 text-center">
                                Data tidak tersedia
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
