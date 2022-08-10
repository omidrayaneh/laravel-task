<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\ActivityRepository;
use Illuminate\Http\JsonResponse;


class ActivityController extends Controller
{

    private $activity;

    public function __construct(ActivityRepository $activity)
    {

        $this->activity = $activity;
    }


    /**
     * @method GET
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        return $this->activity->show($id);
    }

}
