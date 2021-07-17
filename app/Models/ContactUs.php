<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table='contact_us';
    protected $guarded=[];

    public function clientList($request)
    {
        $search=$request->get('search');
        $page=$request->get('page');
        $per_page=$request->get('per_page');

        $query=$this->selectRaw("clients.*");
        
        if($search !='')
        {
            $query=$query->where('title','like','%'.$search.'%');
        }
        Paginator::currentPageResolver(function() use ($page)
        { return $page; });
              
        return $query->paginate($per_page);

    }
}
