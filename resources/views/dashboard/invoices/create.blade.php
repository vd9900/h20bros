@extends('dashboard.master')
@section('Title')
    Create Invoice
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoice</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <div class="card">
                    @if($errors->any())
                        {{ implode('', $errors->all('message')) }}
                    @endif
                    <form id="myform" action="{{route('invoices.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body invoice-head">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <img id="blah" src="{{asset('assets/logo/PGUpholsteryAndCarpetCleaning.png')}}" alt="logo-large" class="logo-lg" height="50">
                            </div><!--end col-->
                            <div class="col-md-8">

                                <ul class="list-inline mb-0 contact-detail float-right">
                                    <li class="list-inline-item">
                                        <div class="pl-3 d-flex">
                                            <i class="mdi mdi-web"></i>
                                            <p class="text-muted mt-2">https://pristinegreencleaning.com/</p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3 d-flex">
                                            <i class="mdi mdi-phone"></i>
                                            <p class="text-muted mt-2">347-871-6530</p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3 d-flex">
                                            <i class="mdi mdi-map-marker"></i>
                                            <p class="text-muted mt-2">
                                                PristineGreen Upholstery and Carpet Cleaning
                                                6705 Myrtle Ave #1015
                                                Queens, NY 11385
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    <div class="card-body">
                        <div class="row">

                                <div class="col-md-6">
                                    <h6 class="mb-0"><b>Start Date :</b> <input type="date" class="form-control" name="start_date" data-date-format="DD/MM/YYYY" value="{{\Carbon\Carbon::now()->toDateString()}}"></h6>
                                </div>

                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Charge To :</b> <input type="text" class="form-control" name="charge_to" placeholder="eg: James Jord"></h6>
                                <h6 class="mb-0"><b>Send Invoice To :</b> <input type="email" class="form-control" name="send_to" placeholder="eg:abdulrehmankhan0072@gmail.com"></h6>
                                <h6 class="mb-0"><b>Send Invoice Copy :</b> <input type="email" class="form-control" name="send_copy_to" placeholder="eg:abdulrehmankhan0081@gmail.com"></h6>
                                <h6 class="mb-0"><b>Invoice No :</b> <input type="text" class="form-control" name="invoice_no" value="PG-{{uniqId()}}" readonly></h6>
                                <h6 class="mb-0"><b>Payment Method :</b> <select class="form-control paymentmethod" name="payment_method">
                                        <option value="">Select Payment Method</option>
                                        <option value="Venmo">Venmo</option>
                                        <option value="CreditCard">Credit Card</option>
                                        <option value="Paypal">Paypal</option>
                                        <option value="Zelle">Zelle</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Check">Check</option>
                                    </select></h6>
                            </div><!--end col-->

                        </div><!--end row--><br>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive project-invoice">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Project</th>
                                            <th>Package</th>
                                            <th>Price</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr><!--end tr-->
                                        </thead>
                                        <tbody class="appendData">
                                        <tr>
                                            <td>
                                                <h5 class="mt-0 mb-1"><input type="text" class="form-control" name="item_name[]" placeholder="Service Provided"></h5>
                                            </td>
                                            <td><select class="form-control" name="package[]" placeholder="Fixed price">
                                                    <option value="">Select Package</option>
                                                    <option value="Gold">Gold</option>
                                                    <option value="Gold+">Gold Plus</option>
                                                    <option value="Premium">Premium</option>
													<option value="Premium+">Premium Plus</option>
                                                </select></td>
                                           <td><input type="number" class="form-control fixed_price" name="fixed_price[]" placeholder="Fixed price"></td>
                                            <td><input type="number" class="form-control subtotal" name="subtotal[]" readonly="readonly"></td>
                                            <td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>
                                        </tr><!--end tr-->
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2" class="border-0"></td>
                                            <td colspan="1" class="border-0"></td>
                                            <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                            <td class="border-0 font-14 text-dark"><b>$ <span class="main_sub_total"></span></b></td>
                                        </tr><!--end tr-->
                                        <tr class="showCharge">
                                            <td colspan="2" class="border-0"></td>
                                            <td colspan="1" class="border-0"></td>
                                            <td class="border-0 font-14 text-dark"><b>Electronic Surcharges</b></td>
                                            <td class="border-0 font-14 text-dark"><b><span class="surcharges"></span></b></td>
                                        </tr><!--end tr-->
                                        <tr class="bg-black text-white">
                                            <th colspan="2" class="border-0"></th>
                                            <th colspan="1" class="border-0"></th>
                                            <td class="border-0 font-14"><b>Total</b></td>
                                            <td class="border-0 font-14"><b>$ <span class="grand_total"></span></b></td>
                                        </tr><!--end tr-->
                                        </tfoot>
                                    </table><!--end table-->
                                </div>  <!--end /div-->
                            </div>  <!--end col-->
                        </div><!--end row-->

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Notes :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="notes" class="form-control" rows="5" cols="100" placeholder="notes"></textarea></li>
                                </ul>
                            </div> <!--end col-->

                        </div><!--end row-->
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-md-10 align-self-center">
                                <div class="text-center"><small class="font-12">if you have any Questions about this invoice, please contact us at 347-871-6530 or sales@pristinegreencleaning.com<br>Thank you very much for doing business with us.</small></div>
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="float-right d-print-none">
                                    <a href="javascript:printDiv('myform')" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                    <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
                                    <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    </form>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->
@endsection
@section('page_level_script')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('type') }}");
        </script>
    @endif
{{-- <script type="text/javascript">
    $('.showCharge').hide();
    $(document).on('keyup','.fixed_price',function (){
        let fixed_price=$(this).val();
        $(this).closest('tr').find('.subtotal').val(fixed_price);
        let myform = document.getElementById("myform");
        let fd = new FormData(myform);
        $.ajax({
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success:function (data){
                console.log(data);
                $('.main_sub_total').text(data.subtotalmain);
                $('.surcharges').text((data.surchages).toFixed(2));
                let grand_total= (data.surchages) + (data.subtotalmain);
                $('.grand_total').text(grand_total.toFixed(2));
            }
        })
    });
    $('.paymentmethod').change(function (){
        let method=$(this).val();
        if(method=='creditcard'){
            $('.showCharge').show();
        }else if(method=='venmo'){
            $('.showCharge').show();
        }else{
            $('.showCharge').hide();
        }
        let myform = document.getElementById("myform");
        let fd = new FormData(myform);
        $.ajax({
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success:function (data){
                console.log(data);
                $('.main_sub_total').text(data.subtotalmain);
                $('.surcharges').text((data.surchages).toFixed(2));
                let grand_total= (data.surchages) + (data.subtotalmain);
                $('.grand_total').text(grand_total.toFixed(2));
            }
        })
    });
    //remove row
    $(document).on('click','.remove',function (){
        $(this).closest("tr").remove();
        let myform = document.getElementById("myform");
        let fd = new FormData(myform);
        $.ajax({
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success:function (data){
                $('.main_sub_total').text(data);
                $('.grand_total').text(data.toFixed(2));
            }
        })
    });
    //add row
    $(document).on('click','.add',function (){
        $('.appendData').append('<tr>' +
            '<td>' +
            '<h5 class="mt-0 mb-1"><input type="text" class="form-control" name="item_name[]" placeholder="Service Provided"></h5>' +
            '</td>' +
            '<td><select class="form-control" name="package[]" placeholder="Fixed price">' +
            '<option value="">Select Package</option>' +
            '<option value="premium">Premium</option>' +
            '<option value="gold">Gold</option>' +
            '<option value="gold+">Gold Plus</option>' +
			'<option value="Premium+">Premium+</option>' +
            '</select></td>' +
            '<td><input type="number" class="form-control fixed_price" name="fixed_price[]" placeholder="Fixed price"></td>' +
            '<td><input type="number" class="form-control subtotal" name="subtotal[]" readonly="readonly"></td>' +
            '<td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>' +
            '</tr>');
    });

</script> --}} 


<script type="text/javascript">
    const paymentmethods = {
        'Venmo': 2.9,
        'CreditCard': 3.5,
        'Paypal': 0,
        'Zelle': 0,
        'Cash': 0,
        'Check': 0
    };


    function addItem() {
        $('.appendData').append(
        '<tr>' +
            '<td>' +
            '<h5 class="mt-0 mb-1"><input type="text" class="form-control" name="item_name[]" placeholder="Service Provided"></h5>' +
            '</td>' +
            '<td><select class="form-control" name="package[]" placeholder="Fixed price">' +
            '<option value="">Select Package</option>' +
            '<option value="premium">Premium</option>' +
            '<option value="gold">Gold</option>' +
            '<option value="gold+">Gold Plus</option>' +
            '<option value="Premium+">Premium+</option>' +
            '</select></td>' +
            '<td><input type="number" class="form-control fixed_price" name="fixed_price[]" placeholder="Fixed price"></td>' +
            '<td><input type="number" class="form-control subtotal" name="subtotal[]" readonly="readonly"></td>' +
            '<td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>' +
        '</tr>'

        );
    }


    function removeItem(ele) {
        $(ele).closest("tr").remove();
    }


    async function calulation_logic() {

        var subTotalMain = 0;
        var prom = [0];

        document.querySelectorAll('.appendData tr').forEach(function(ele) {
            // subtotalmain += $(ele).find("[name='subtotal[]']").val();

            var promise = new Promise(function(resolve, reject) {
              prom[0] += Number($(ele).find("[name='subtotal[]']").val())
            });
        });

        try {
            var results = await Promise.all(prom);
            console.log("All promises resolved.");
            return results[0]; // Return the array of resolved values
        } catch (error) {
            console.error("An error occurred:", error);
            throw error; // Throw the error to be caught by the caller
        }

    }


    async function calc_total_sur() {
      try {
        var results = await calulation_logic();
        let vallue = paymentmethods[$("[name='payment_method']").val()];
        let $surchages = 0;
        if (vallue) {
            $surchages = Number.parseFloat((Number(vallue) / 100) * Number.parseFloat(results).toFixed(2)).toFixed(2);
        }
        console.log("Results:", results, "sur:", $surchages);

        return [results, $surchages];

        
        // Do something with the results here
      } catch (error) {
        console.error("An error occurred:", error);
        throw error; // Throw the error to be caught by the caller
      }
    }



    function printDiv(divId) {
      var content = document.getElementById(divId).innerHTML;
      var printWindow = window.open('', '', 'width=500,height=500');
      printWindow.document.write('<html><head><title>Print</title></head><body>');
      printWindow.document.write(content);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
    }



    function parse_sub_total(val) {
        $('.main_sub_total').text(val[0]);
        $('.surcharges').text(Number.parseFloat(val[1]).toFixed(2));
        let grand_total= Number.parseFloat(val[0]) + Number.parseFloat(val[1]);
        $('.grand_total').text(Number.parseFloat(grand_total).toFixed(2));
    }



    $(document).ready(function() {
        
        $(document).on('click','.remove', async function (){
            await removeItem(this);
            let latest = await calc_total_sur();
            parse_sub_total(latest)
        })

        $(document).on('click','.add', async function (){
            await addItem();
            let latest = await calc_total_sur()
            parse_sub_total(latest)

        })


        $(document).on("keyup", '.fixed_price', async function() {
            let fixed_price = $(this).val();
            await $(this).closest('tr').find('.subtotal').val(fixed_price);
            let latest = await calc_total_sur()
            parse_sub_total(latest)
        })


        $(document).on("change", "[name='payment_method']", async function() {
            let latest = await calc_total_sur()
            parse_sub_total(latest)
        })
    })
</script>
@endsection
