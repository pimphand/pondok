<div>
<<<<<<< Updated upstream
    <table id="datatable" class="table table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($data)
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>
                        <button type=" button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#show{{$item->id}}"><i class="fas fa-image"></i></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#delete{{ $item->id }}">
                            Delete
                        </button>
                        @include('admin.facility.modal')
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
            @foreach ($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>
                    <button type=" button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#show{{$item->id}}"><i class="fas fa-image"></i></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#delete{{ $item->id }}">
                        Delete
                    </button>
                    @include('admin.facility.modal')
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
=======
   
</div>
>>>>>>> Stashed changes
