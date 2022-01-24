<?php

namespace App\Http\Controllers\Datatable;

use App\Http\Controllers\Controller;
use App\Models\User as Users;
use App\Utilities\Helpers;
use DataTables;

class User extends Controller
{
    public function render()
    {
        return Datatables::of(Users::query())
        ->filter(function ($query){
            $query->where('role', 'user');
            if(request()->has('search') && request()->search['value']){
                $query->orWhere('name', 'like', "%" . request()->search['value'] ."%")
                ->orWhere('email', 'like', "%" . request()->search['value'] ."%");
            }
        }, true)
        ->editColumn('created_at', function($data){
            return Helpers::formatDate($data['created_at'], true, true);
        })
        ->addColumn('delete', function($data){
            return Helpers::editButton($data['id'], 'edit_user').Helpers::deleteButton($data['id'], 'modal_delete_user');
        })
        ->rawColumns(['name', 'email', 'delete'])
        ->toJson();
    }
}
