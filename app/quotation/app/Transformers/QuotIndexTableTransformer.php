<?php

namespace App\Transformers;

use Carbon\Carbon;
use DateTime;
use League\Fractal\TransformerAbstract;

use App\Quot;
use App\Transformers\SharedTransformer;


class QuotIndexTableTransformer extends TransformerAbstract
{
    public function get_button_link($button_text, $link)
    {
        return '<a class="btn bg-teal btn-sm waves-effect" href="'.$link.'" role="button">'.$button_text.'</a>';
    }

    public function get_action_link($id)
    {
        $view_link =route('Quot.show',['id'=>$id]);
        $edit_link = route('Quot.edit',['id'=>$id]);

        $view_html = $this->get_button_link('View', $view_link);
        $edit_html = $this->get_button_link('Edit', $edit_link);

        $action_html = implode(' ',array($view_html,$edit_html));

        return $action_html;
    }

    public function transform(Quot $quotation)
    {

        $field_names = SharedTransformer::get_field_name($quotation);

        $test_array = [];
        foreach($field_names as $field_name)
        {
            $test_array[$field_name] = $quotation->$field_name;
        }
        $test_array['action'] = $this->get_action_link($quotation->id);

        return $test_array;
    }


}
