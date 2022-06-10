<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\TenantRequest;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;

class TenantController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:tenant-list|tenant-create|tenant-edit|tenant-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:tenant-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tenant-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tenant-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = User::where('type', '0')->get();
        $emails = $tenants->sortBy('email')->pluck('email')->unique();

        return view('manager.tenants.index', compact('tenants' , 'emails'));
    }

    public function getTenant(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('type', '0')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('rentals', function ($data) {
                    return $data->contract->count();
                })
                ->addColumn('action', function ($tenant) {
                    return $tenant->action_buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.tenants.create', [
            'tenant' => new User(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantRequest $request)
    {
        $data = $request->except('document');
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('/', 'uploads');
        };

        $tenant = new User([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'document' => $data['document'],
            'password' => bcrypt('102030405060'),
        ]);
        $tenant->save();
        return successMessage();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant = User::findOrFail($id);
        return view('manager.tenants.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant = User::find($id);
        return view('manager.tenants.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tenant = User::find($id);
        $tenant->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'document' => $request->document,
        ]);
        return successMessage();
    }

    public function destroy($id)
    {
        $tenant = User::find($id)->delete();
        return errorMessage();

    }


}
