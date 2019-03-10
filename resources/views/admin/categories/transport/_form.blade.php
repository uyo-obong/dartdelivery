
<div class="form-group">
    <input class="form-control" type="text"  name="name" value="{{ old('name') ?? $transports->name }}"  placeholder="Enter Transport Mode e.g Road" required="true" />
</div>

<div class="card-footer text-center">
    <button type="submit" class="btn btn-primary">{{ $addEdit ?? 'Submit' }}</button>
</div>