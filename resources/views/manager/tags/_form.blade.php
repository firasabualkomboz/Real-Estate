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
            <label for="example-date-input" class="col-form-label">Tag Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $tag->name) }}" type="text" name="name"
            >
            @error('name')
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
