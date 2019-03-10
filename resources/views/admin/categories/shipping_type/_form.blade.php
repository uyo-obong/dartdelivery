
<div class="form-group">
    <input class="form-control" type="text"  name="name" value="{{ old('name') ?? $shipping->name }}"  placeholder="Enter Shipping Type e.g Package" required="true" />
</div>

<div class="card-footer text-center">
    <button type="submit" class="btn btn-primary">{{ $addEdit ?? 'Submit' }}</button>
</div>