<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="Admin payments - Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='noindex,nofollow,nocrawl'>
    <link rel="stylesheet" href="{{asset('payment/checkout.css')}}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <input id="amount" value="{{$amount}}" hidden>
    <input id="secret" value="{{$client_secret}}" hidden>
    <input id="uniqid" value="{{$uniq}}" hidden>
    <input id="keykey" value="{{env('STRIPE_KEY')}}" hidden>
    <script type="text/javascript">
      const value = $("#amount").val();
      const secret = $("#secret").val();
      const keykey = $("#keykey").val();
      let return_url = "{{route('success')}}?intent="+$("#uniqid").val();
    </script>
    <script src="{{asset('payments/checkout.js')}}" defer></script>
  </head>
  <body>
  	<div bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 100%;" height="100%" width="100%">
	    <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
	        <tbody>
	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
	                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
	                        <tbody>
	                            <tr>
	                                <td style="padding: 0;">
	                                    <a
	                                        href="#"
	                                        style="color: #348eda;"
	                                        target="_blank"
	                                    >
	                                        <img
	                                            src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png"
	                                            alt="Bootdey.com"
	                                            style="height: 60px; max-width: 100%; width: 270px;"
	                                            height="50"
	                                            width="157"
	                                        />
	                                    </a>
	                                </td>
	                                <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
	                                    PristineGreen Cleaning<br />
	                                    Invoice #<?= $uniq?><br />
	                                    <?= $date->format("F j Y")?>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>

	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
	                    <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
	                        <tbody>
	                            <tr>
	                                <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">$<?= $amountnn?></strong></td>
	                                <td align="right" width="50%" style="padding: 20px;">Thanks for using <span class="il">pristinegreencleaning.com</span></td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td style="padding: 0;"></td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>
	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
	                    <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
	                        <tbody>
	                            <tr>
	                                <td valign="top"  style="padding: 20px;">
	                                    <h3
	                                        style="
	                                            border-bottom: 1px solid #000;
	                                            color: #000;
	                                            font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	                                            font-size: 18px;
	                                            font-weight: bold;
	                                            line-height: 1.2;
	                                            margin: 0;
	                                            margin-bottom: 15px;
	                                            padding-bottom: 5px;
	                                        "
	                                    >
	                                        Summary
	                                    </h3>
	                                    <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
	                                        <tbody>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Service Date</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$date_ned?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Your email</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$_POST['email'] ?? 'Not-found'?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Service description</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$_POST['describe']?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Amount to be paid</td>
	                                                <td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">$<?= $amountnn?></td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>

	            <tr style="color: #666; font-size: 12px;">
	                <td width="5px" style="padding: 10px 0;"></td>
	                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
	                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
	                        <tbody>
	                            <tr>
	                                <td width="40%" valign="top" style="padding: 10px 0;">
	                                    <h4 style="margin: 0;">Questions?</h4>
	                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
	                                        Please visit our
	                                        <a
	                                            href="/contact-us"
	                                            style="color: #666;"
	                                            target="_blank"
	                                        >
	                                            Support Center
	                                        </a>
	                                        with any questions.
	                                    </p>
	                                </td>
	                                <td width="10%" style="padding: 10px 0;">&nbsp;</td>
	                                <td width="40%" valign="top" style="padding: 10px 0;">
	                                    <h4 style="margin: 0;"><span class="il">PristineGreen Cleaning,</span> LLC</h4>
	                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
	                                        <a href="#">115 E 23rd St 3rd floor New York, NY 10010</a>
	                                    </p>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 10px 0;"></td>
	            </tr>
	        </tbody>
	    </table>
	    <!-- Display a payment form -->
	    <form id="payment-form"  style="border-collapse: collapse; padding: 40px; width: 100%;">
	      <div id="payment-element">
	        <!--Stripe.js injects the Payment Element-->
	      </div>
	      <button id="submit">
	        <div class="spinner hidden" id="spinner"></div>
	        <span id="button-text">Pay now</span>
	      </button>
	      <div id="payment-message" class="hidden"></div>
	    </form>
	</div>

    
  </body>
</html>