@extends('admin.layouts.app')

@section('css')
<!-- DataTables -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css">
<link href="{{ asset('admin') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css">

<!-- Responsive datatable examples -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Facility</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table Facility</h4><br>
                        <a class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i
                                class="fas fa-plus-circle"></i> Add
                            Data </a>
                        <hr>
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
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <button type=" button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#show{{$item->id}}"><i class="fas fa-image"></i></button>
                                    </td>
                                    <td>
                                        <form action="{{ route('putri.destroy', ['putri'=> $item->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        @include('admin.facility.modal')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<!-- Create -->
<div class="modal fade" id="CreateAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Fasility
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('putri.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-12">
                        <label class="form-label">Name</label>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <div class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-2 records">
                        <label class="form-label">Gambar</label>
                        <div>
                            <input type="file" name="image[]" class="form-control" placeholder="Enter Name">
                            <div class="text-danger">
                                @error('image')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <a class="mt-2 extra-fields btn btn-info btn-sm" href="#">Tambah Foto</a>
                    </div>
                    <div class="records_dynamic form-group"></div>
                    <div class="modal-footer">
                        <button type="submit" name="hostel" value="2" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ asset('admin') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ asset('admin') }}/assets/js/pages/datatables.init.js"></script>
<script>
    $('.extra-fields').click(function() {
            $('.records').clone().appendTo('.records_dynamic');
            $('.records_dynamic .records').addClass('single remove');
            $('.single .extra-fields').remove();
            $('.single').append('<a href="#" class="mt-2 remove-field btn btn-info btn-sm">Hapus</a>');
            $('.records_dynamic > .single').attr("class", "remove");

            $('.records_dynamic input').each(function() {
                var count = [];
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
            });

        });

        $(document).on('click', '.remove-field', function(e) {
            $(this).parent('.remove').remove();
            e.preventDefault();
        });
</script>
@endsection