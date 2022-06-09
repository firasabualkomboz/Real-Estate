<div class="card-body">
    <div class="form-group mb-8">
        @if ($errors->any())
            <div class="alert alert-custom alert-danger" role="alert">

                <div class="alert-icon">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        @endif
    </div>


    <div class="form-group row">
        <div class="col-6">
            <input type="hidden" name="is_manager" value="1">
            <input type="hidden" name="type" value="1">
            <label for="example-date-input" class="col-form-label">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $employer->name) }}"
                   type="text" name="name"
            >
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Email</label>
            <input class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email', $employer->email) }}"
                   type="text" name="email"
            >
            @error('email')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>


    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Phone Number</label>
            <input class="form-control @error('phone') is-invalid @enderror"
                   value="{{ old('phone', $employer->phone) }}"
                   type="number" name="phone"
            >
            @error('phone')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Email</label>
            <input class="form-control @error('address') is-invalid @enderror"
                   value="{{ old('address', $employer->address) }}"
                   type="text" name="address"
            >
            @error('address')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>


    </div>


    <div class="form-group row">
        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Password : </label>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            @error('phone')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Confirm Password : </label>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            @error('confirm-password')
            <p class="invalid-feedback" >{{ $message }}</p>
            @enderror

        </div>


    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Roles : </label>
            {!! Form::select('roles[]', $roles, isset($userRole) ? $userRole : [], array('class' => 'form-control','multiple')) !!}
            @error('roles')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

    </div>


</div>


<div class="card-footer">
    <div class="row">
        <div class="col-10">
            <button type="submit" class="btn btn-primary mr-2">{{$button}}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</div>
