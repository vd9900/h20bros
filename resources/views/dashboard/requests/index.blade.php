{!! $body !!}
<p style="text-align: center;">Sent at: {{\Carbon\Carbon::parse($data->created_at)->setTimezone('America/New_York')->format("D F j, Y h:i A")}}</p>
  