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
            <label for="example-date-input" class="col-form-label">Full Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $owner->name) }}" type="text" name="name"
            >
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $owner->email) }}" type="email" name="email"
            >
            @error('email')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>



    </div>



    <div class="form-group row">
        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Phone Number</label>
            <input class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $owner->phone) }}" type="text" name="phone"
            >
            @error('phone')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Address</label>
            <input class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $owner->address) }}" type="text" name="address"
            >
            @error('address')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>



    </div>



    <div class="form-group row">
        <div class="col-6">
            <label for="example-date-input" class="col-form-label">Identification Document</label>

            <input class="form-control @error('document') is-invalid @enderror" value="{{ old('document', $owner->document) }}" type="file" name="document"
            >
            @error('document')
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
