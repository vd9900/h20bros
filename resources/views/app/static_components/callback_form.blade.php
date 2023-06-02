<form action="{{ route('callback_number') }}" method="POST"
    class="d-flex flex-column gap-3 col-12 col-xl-8 ms-auto text-center pb-4">
    @csrf
    <h4 class="text-green-1 py-1 fs-2">What Serivces You Need?</h4>
    <input id="phone-input" name="phone" type="text"
        class="py-3 border rounded-3 col-12 col-sm-9 px-3 col-md-8 col-xl-10 mx-auto ele2">
    <button type="submit "
        class="py-3 border rounded-5 col-12 col-sm-9 px-3 col-md-6 col-lg-8 col-xl-7 mx-auto bg-lightgreen tex-white">
        WE WILL CALL BACK
    </button>
</form>
