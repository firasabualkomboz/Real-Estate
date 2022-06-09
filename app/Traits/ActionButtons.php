<?php
/**
 * Dev Feras Abu Alkomboz
 * Phone Number : 0598082086
 * Email : feras.out@gmail.com
 */

namespace App\Traits;

trait ActionButtons
{

    public function getActionButtonsAttribute()
    {
        $button = '';
        $button .= '<a href="' . route('manager.' . self::manager_route . '.edit', $this->id) . '" class="btn btn-icon btn-sm btn-success "><i class="la la-pencil"></i></a> ';
        $button .= '<a href="' . route('manager.' . self::manager_route . '.show', $this->id) . '" class="btn btn-icon btn-sm btn-secondary "><i class="la la-eye"></i></a> ';
        $button .= '<button type="button" data-id="' . $this->id . '" data-toggle="modal" data-target="#deleteModel" class="deleteRecord btn btn-sm btn-icon btn-danger"><i class="la la-trash"></i></button>';

        return $button;
    }
}

