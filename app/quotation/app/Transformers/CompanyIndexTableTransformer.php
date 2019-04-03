<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Company;
use App\Transformers\SharedTransformer;


class CompanyIndexTableTransformer extends TransformerAbstract
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

    public function transform(Company $company)
    {

        $field_names = SharedTransformer::get_field_name($company);

        $test_array = [];
        foreach($field_names as $field_name)
        {
            $test_array[$field_name] = $company->$field_name;
        }
        $test_array['action'] = $this->get_action_link($company->id);

        return $test_array;
    }


}
