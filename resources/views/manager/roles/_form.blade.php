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
        <div class="col-lg-6">
            <label for="example-date-input" class="col-form-label">Permission
                {{--                @php--}}
                {{--                    $models = ['employers', 'role' , 'tenant' , 'owner', 'estate' , 'apartment' , 'property' , 'tag' , 'contract','invoice','appointment'];--}}
                {{--                    $maps =['create','read','update','delete'];--}}
                {{--                @endphp--}}




                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                @endforeach


{{--                @foreach($permission as $k=>$v)--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12" style="margin-bottom:10px;margin-top:10px">--}}
{{--                            <h4 class="edit-title text-success"><b>{{$k}}</b></h4></div>--}}
{{--                        @foreach($v as $value)--}}
{{--                            <div class="col-sm-3">--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    {{ Form::checkbox('permission[]', $value->id, false,array('class'=>'form-check-input')) }}--}}
{{--                                    <label class="form-check-label">{{ $value->name}}</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endforeach--}}




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
