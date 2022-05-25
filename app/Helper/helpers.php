<?php

namespace app\Helper;
function successMessage()
{
    $message = array(
        'message' => 'Added Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($message);
}
