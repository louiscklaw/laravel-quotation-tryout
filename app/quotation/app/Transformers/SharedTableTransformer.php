<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

class CompanyIndexTableTransformer extends TransformerAbstract
{

    // get a record and return array of field name
    public function get_field_name($record)
    {
        return array_keys($record->getAttributes());
    }
}
