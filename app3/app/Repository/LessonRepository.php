<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LessonRepository
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function filterFields(Request $request)
    {
        $fields = $request->get('campos');
        return $this->model = $this->model->selectRaw($fields);
    }
}