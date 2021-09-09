<div class="modal fade" id="Show{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                    <div class="mt-2 mb-2">
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
                    <div class="mt-2 mb-2">
                        <button name="id" value="{{ $item->id }}" class="btn btn-primary btn-sm">tambah</button>
                    </div>
                </form>
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Gambar</th>
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
                                <form action="{{ route('image.destroy', ['image'=> $items->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
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
