{{--@if (auth()->user()->hasPermission('update_contracts'))--}}

{{--<a href="{{ route('manager.contracts.edit', $id) }}" class="btn btn-icon btn-sm btn-success "><i class="la la-pencil"></i></a>--}}

{{--@endif--}}

<a href="{{ route('manager.contracts.show', $id) }}" class="btn btn-icon btn-sm btn-secondary "><i class="la la-eye"></i></a>


{{--@if (auth()->user()->hasPermission('delete_contracts'))--}}
{{--    <form action="{{ route('manager.contracts.destroy', $id) }}" class="my-1 my-xl-0" method="post"--}}
{{--          style="display: inline-block;">--}}
{{--        @csrf--}}
{{--        @method('delete')--}}
{{--        <button type="submit" class="btn btn-icon btn-danger btn-sm delete"><i class="la la-trash"></i>--}}
{{--        </button>--}}
{{--    </form>--}}
{{--@endif--}}
