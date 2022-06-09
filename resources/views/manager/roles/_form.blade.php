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
        <div class="col-12">
            <label for="example-date-input" class="col-form-label">Role Name</label>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <label for="example-date-input" class="col-form-label">Permission


                    @foreach($permission as $k=>$v)
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom:10px;margin-top:10px">
                                <h4 class="edit-title text-success"><b>{{ucwords($k)}}</b></h4></div>
                            @foreach($v as $value)
                                <div class="col-sm-3">
                                    <div class="form-check form-check-inline">

                                        <label class="checkbox checkbox-success">
                                            {{ Form::checkbox('permission[]', $value->id, false,array('class'=>'form-check-input')) }}
                                            {{ $value->name}}
                                            <span></span></label>

                                    </div>

                                </div>

                            @endforeach

                        </div>
                    @endforeach




                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

            </div>
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
