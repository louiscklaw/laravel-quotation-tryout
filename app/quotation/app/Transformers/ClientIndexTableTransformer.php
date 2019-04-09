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
        return '<a class="btn bg-teal btn-xs waves-effect" href="'.$link.'" role="button">'.$button_text.'</a>';
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

    public function transform(Client $client_record)
    {

        $field_names = SharedTransformer::get_field_name($client_record);

        $test_array = [];
        foreach($field_names as $field_name)
        {
            $field_value = $client_record->$field_name;
            if ($field_name == 'client_email')
            {
                $test_array[$field_name] = SharedTransformer::get_email_link($field_value);
            }elseif ($field_name == 'client_whatsapp'){
                $test_array[$field_name] = SharedTransformer::get_whatsapp_link($field_value);
            }
            else{
                $test_array[$field_name] = $field_value;
            }
        }
        $test_array['action'] = $this->get_action_link($client_record->id);

        return $test_array;
    }


}
