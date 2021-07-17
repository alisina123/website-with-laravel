<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
class Service extends Model
{
    use HasFactory;
    protected $table='services';
    protected $guarded=[];

    public function serviceList($request)
    {
        $search=$request->get('search');
        $page=$request->get('page');
        $per_page=$request->get('per_page');

        $query=$this->selectRaw("services.*")
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
