<?php

namespace App\Repositories\Eloquent;

use App\Models\Activity;

class ActivityRepository implements \App\Repositories\ActivityInterface
{

    public function show($id)
    {
        $activity = $this->find($id);
        if($activity != null)
            return response()->json($activity , 200);

        return response()->json('activity not found!' , 404);
    }

    public function find($id)
    {
        return Activity::with(['users'=>function ($q){
            $q->select('email');
        }])->where('id',$id)->first();

    }
}
