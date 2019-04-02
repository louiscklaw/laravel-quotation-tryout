<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Client;
// use App\Transformers\SharedTableTransformer;


class ClientIndexTableTransformer extends TransformerAbstract
{

    public function transform(Client $client)
    {
        return [
            'id'         => (int) $client->id,
            'name'       => $client->client_name,
            'contact_email'      => $client->client_email,
            'creation_time' => (string) $client->creation_time,
            'last_mod_time' => (string) $client->client_update_at,
            'create_time' => (string) $client->client_create_at,
            'action' => (string) "<span>Edit</span>",
        ];
    }


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
}
