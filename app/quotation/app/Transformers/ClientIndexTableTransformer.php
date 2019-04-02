<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Client;
// use App\Transformers\SharedTableTransformer;


class ClientIndexTableTransformer extends TransformerAbstract
{

    public function transform()
    {
        return ['hello transform','hello transform'];
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
