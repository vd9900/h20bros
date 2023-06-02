<form action="{{route('callback_number')}}" method="POST" class="d-flex flex-column flex-md-row mx-auto mx-md-0 gap-4 w-100">
    @csrf
    <input id="phone-input" type="text" class="col-12 col-md-6 col-lg-4 p-3 outline-none rounded-1">
    <button class="btn py-2 btn-success px-5 fs-5 rounded-1">
        Book Now
    </button>
</form>
