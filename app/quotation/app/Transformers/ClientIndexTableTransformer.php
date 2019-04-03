<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Client;
// use App\Transformers\SharedTableTransformer;


class ClientIndexTableTransformer extends TransformerAbstract
{
    public function get_button_link($button_text, $link)
    {
        return '<a class="btn bg-teal btn-sm waves-effect" href="'.$link.'" role="button">'.$button_text.'</a>';
    }

    public function get_action_link($client_id)
    {
        $view_link =route('client.show',['id'=>$client_id]);
        $edit_link = route('client.edit',['id'=>$client_id]);

        $view_html = $this->get_button_link('View', $view_link);
        $edit_html = $this->get_button_link('Edit', $edit_link);

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
        $test_array['action'] = $this->get_action_link($client_record->id);

        return $test_array;
    }


}
