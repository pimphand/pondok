@if ($message = Session::get('messages'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif
<form action="{{ route('enter') }}" method="get">
    @csrf
    <input type="text" name="password"> <button type="submit">kirim</button>
</form>