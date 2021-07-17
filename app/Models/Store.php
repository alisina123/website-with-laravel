<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
class Store extends Model
{
    use HasFactory;
    protected $table='store_value';
    protected $guarded=[];

    public function store_valueList($request)
    {
        $search=$request->get('search');
        $page=$request->get('page');
        $per_page=$request->get('per_page');

        $query=$this->selectRaw("store_value.*")
        ->where('lang',\App::getLocale());
        
        if($search !='')
        {
            $query=$query->where('title','like','%'.$search.'%');
        }
        Paginator::currentPageResolver(function() use ($page)
        { return $page; });
              
        return $query->paginate($per_page);

    }
}
