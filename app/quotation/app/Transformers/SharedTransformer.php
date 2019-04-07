<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

class SharedTransformer extends TransformerAbstract
{

    // get a record and return array of field name
    public static function get_field_name($record)
    {
        return array_keys($record->getAttributes());
    }

    public static function get_whatsapp_link($whatsapp_num)
    {
        $whatsapp_num_on_link = $whatsapp_num;
        $not_appear_on_link = ['+','-','(',')'];

        foreach($not_appear_on_link as $char_to_replace)
        {
            $whatsapp_num_on_link = str_replace($char_to_replace, '', $whatsapp_num_on_link);
        }

        return "<a href = \"https://wa.me/$whatsapp_num_on_link\">$whatsapp_num</a>";
    }


    public static function get_email_link($email_address)
    {
        return "<a href = \"mailto: $email_address\">$email_address</a>";
    }


}
