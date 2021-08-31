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
                <form action="{{route('news.update', ['news'=>$item->id])}}" method="POST" enctype="multipart/form-data">
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
                            <input type="file" name="image" class="form-control" placeholder="Enter File" accept="png/jpg/jpeg" value="{{$item->image}}">
                            <div class="text-danger">
                                @error('image')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Categories</label>
                        <div>
                            <select name="categories" class="form-control">
                                <option value="">--Select Categories--</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id == $item->news_categories ? "selected" : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Description</label>
                        <div>
                            <textarea type="text" id="elm1" name="description" class="form-control" placeholder="Enter Description">{{$item->description}}</textarea>
                            <div class="text-danger">
                                @error('description')
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
