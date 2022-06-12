{{--@if (auth()->user()->hasPermission('update_apartments'))--}}

<a href="{{ route('manager.apartments.edit', $id) }}" class="btn btn-icon btn-sm btn-success "><i class="la la-pencil"></i></a>

{{--@endif--}}

<a href="{{ route('manager.apartments.show', $id) }}" class="btn btn-icon btn-sm btn-secondary "><i class="la la-eye"></i></a>


{{--@if (auth()->user()->hasPermission('delete_apartments'))--}}
{{--    <form action="{{ route('manager.apartments.destroy', $id) }}" class="my-1 my-xl-0" method="post"--}}
{{--          style="display: inline-block;">--}}
{{--        @csrf--}}
{{--        @method('delete')--}}
{{--        <button type="submit" class="btn btn-icon btn-danger btn-sm delete"><i class="la la-trash"></i>--}}
{{--        </button>--}}
{{--    </form>--}}
{{--@endif--}}
