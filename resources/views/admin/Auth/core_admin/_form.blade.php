
<div class="form-group">
    <input class="form-control" type="text"  name="name" value="{{ old('name') ?? $viewAdmin->name }}"  placeholder="Enter Name" required="true" />
</div>

<div class="form-group">
    <input id="email" type="email" value="{{ old('email') ?? $viewAdmin->email }}"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter E-mail Address"  email="true">

    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input  type="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" pattern=".{6,}"   title="6 characters minimum" >

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <input  type="password" class="form-control" name="password_confirmation"   placeholder="Retype Password">
        </div>
    </div>
    <div class="col-md-12">
        <small>{{ $notext ?? "Leave password empty if you don't want to chnage" }}</small>
    </div>
</div>
<br>
<label><h6>Assign Role:</h6></label>
<div class="row">
    @foreach($roles as $role)
        <div class="col-md-4">

            <div class="form-group form-check-label">
                <label><input   name="role[]" data-off-color="primary"   type="checkbox" value="{{ old('role[]') ?? $role->id}}"
                    @foreach($viewAdmin->role as $admin)
                        {{ $admin->id == $role->id ? 'checked' : '' }}
                            @endforeach
                    >
                    <span class="form-check-sign"></span>
                    {{ $role->name }}</label>
            </div>

        </div>
    @endforeach
</div>

<div class="card-footer text-center">
    <button type="submit" class="btn btn-primary">{{ $editAdmin ?? 'Submit' }}</button>
</div>