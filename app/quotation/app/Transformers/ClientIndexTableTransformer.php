<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Client;
// use App\Transformers\SharedTableTransformer;


class ClientIndexTableTransformer extends TransformerAbstract
{
    public function get_action_link($client_id)
    {
        $view_link =route('client.show',['id'=>$client_id]);
        $edit_link = route('client.edit',['id'=>$client_id]);

        // $view_html = "<a href=\"$view_link\">View</a>";
        // $edit_html = "<a href=\"$edit_link\">edit</a>";

        $view_html = "<a href=\"$view_link\" style=\"text-decoration: underline; color: blue;\">View</a>";
        $edit_html = "<a href=\"$edit_link\" style=\"text-decoration: underline; color: blue;\">Edit</a>";

        $action_html = implode(' ',array($view_html,$edit_html));

        return $action_html;
    }

    // get a record and return array of field name
    public function get_field_name(Client $client_record)
    {
        return array_keys($client_record->getAttributes());
    }

    public function transform(Client $client_record)
    {

        $field_names = $this->get_field_name($client_record);

        $test_array = [];
        foreach($field_names as $field_name)
        {
            $test_array[$field_name] = $client_record->$field_name;
        }

        return $test_array;
    }


}
