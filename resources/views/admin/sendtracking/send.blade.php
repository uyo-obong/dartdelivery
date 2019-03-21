
<input type="hidden" name="name" value="{{ $sendTracking->shipper_firstN }}">
<input type="hidden" name="trackingNo" value="{{ $sendTracking->tracking_no }}">
<input type="hidden" name="email" value="{{ $sendTracking->shipper_email }}">
<input type="hidden" name="type" value="{{ $sendTracking->type->name }}">
<input type="hidden" name="trackingId" value="{{ $sendTracking->id }}">

<button type="submit" class="btn btn-primary">Send Traacking No</button>

