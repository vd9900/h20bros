@foreach($invoice->items as $item)
<tr>
    <td>
        <h5 class="mt-0 mb-1"><input value="{{$item->item}}" type="text" class="form-control" name="item_name[]" placeholder="Service Provided"></h5>
    </td>
    <td><select class="form-control" name="package[]" placeholder="Fixed price">
            <option value="">Select Package</option>
            <option value="Gold" {{$item->package == 'Gold' ? 'selected' : ''}}>Gold</option>
            <option value="Gold+" {{$item->package == 'Gold+' || $item->package == 'gold+' ? 'selected' : ''}}>Gold Plus</option>
            <option value="Premium" {{$item->package == 'premium' || $item->package == 'Premium' ? 'selected' : ''}}>Premium</option>
			<option value="Premium+" {{$item->package == 'Premium+' ? 'selected' : ''}}>Premium Plus</option>
        </select></td>
   <td><input type="number" class="form-control fixed_price" value="{{$item->price}}" name="fixed_price[]" placeholder="Fixed price"></td>
    <td><input type="number" class="form-control subtotal" name="subtotal[]" value="{{$item->price}}" readonly="readonly"></td>
    <td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>
</tr><!--end tr-->
@endforeach