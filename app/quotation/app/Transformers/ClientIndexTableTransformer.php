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

    public function transform(Client $client_record)
    {

        var_dump($client_record);
        die();

        return [
            // $client_id       => (string) $client_record->client_id,
            $client_name       => (string) $client_record->client_name,
            $client_cname       => (string) $client_record->client_cname,
            $client_gender => (string) $client_record->client_gender,
            // $client_desc       => (string) $client_record->client_cname,
            $client_brithday => (string) $client_record->client_brithday,
            $client_whatsapp => (string) $client_record->client_whatsapp,
            $client_mobile => (string) $client_record->client_mobile,
            $client_address => (string) $client_record->client_address,
            $client_email => (string) $client_record->client_email,
            $client_remarks => (string) $trunc_str.' ...',

            $client_date => (string) $client_record->client_date,
            $client_status => (string) $this->get_status_html($client_record->client_status),
            $client_update_at => (string) $client_record->client_update_at,
            $client_create_at => (string) $client_record->client_create_at,

            'client_action' => $this->get_action_link($client_record->client_id)
        ];
    }


}
