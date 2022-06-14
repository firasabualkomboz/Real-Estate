<?php

namespace app\Helper;

use App\Models\Contract;
use App\Models\User;

function successMessage()
{
    $message = array(
        'message' => 'Added Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($message);
}

function errorMessage()
{
    $message = ['message' => 'Removed Successfully', 'alert-type' => 'info'];
    return redirect()->back()->with($message);
}

function updateMessage()
{
    $message = ['message' => 'Updated Successfully', 'alert-type' => 'warning'];
    return redirect()->back()->with($message);
}

function apisuccess($items, $data = null)
{
    return response()->json(['status' => true, 'items' => $items, 'data' => $data]);
}

function getIncomeOwnerBeforeTax(Contract $contract, User $user)
{

    $OwnerID = Contract::select('owner_id')->get();

}

function getIncomeOwnerAfterTex(Contract $contract, User $user)
{

}

function getImage($img)
{
    if (isset($img)) {
        return asset('uploads/' . $img);
    } else {
        return asset('admin_files/assets/img/backgrounds/02.png');
    }
}
