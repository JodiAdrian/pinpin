<?php

namespace App\Http\Controllers\datatable;

use App\Http\Controllers\Controller;
use DataTables;
use App\Models\TransactionHistory;
use App\Utilities\Helpers;

class History extends Controller
{
    public function render()
    {
        try {
            return Datatables::of(TransactionHistory::query())
        ->filter(function ($query){
            if(request()->has('search') && request()->search['value']){
                $query->orWhere('city', 'like', "%" . request()->search['value'] ."%")
                ->orWhere('product', 'like', "%" . request()->search['value'] ."%")
                ->orWhere('tenor', 'like', "%" . request()->search['value'] ."%")
                ->orWhere('status', 'like', "%" . request()->search['value'] ."%");
            }
        }, true)
        ->editColumn('borrow_date', function($data){
            return Helpers::formatDate($data['borrow_date'], true, true);
        })
        ->editColumn('credit_amount', function($data){
            return Helpers::formatCurrency($data['credit_amount'], 'Rp.');
        })
        ->editColumn('status', function($data){
            return Helpers::statusBadge($data['status']);
        })
        ->addColumn('detail', function($data){
            return Helpers::detailTransaction($data['id'], 'detail_history');
        })
        ->rawColumns(['city', 'product', 'credit_amount', 'tenor', 'status', 'detail'])
        ->toJson();
        } catch (\Throwable $th) {
            
        }
        
    }
}
