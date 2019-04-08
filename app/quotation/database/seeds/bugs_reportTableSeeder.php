<?php

use Illuminate\Database\Seeder;

class bugs_reportTableSeeder extends Seeder
{

    public function insert_bugs_record()
    {

        public function get_random_date()
        {
            $min = strtotime("jan 1st -80 years");
            $max = strtotime("dec 31st -16 years");
            $time = rand($min,$max);
            $dob = date("Y-m-d",$time);

            // //Generate a timestamp using mt_rand.
            // $timestamp = mt_rand(1, time());

            // //Format that timestamp into a readable date string.
            // $randomDate = date("d M Y", $timestamp);

            //Print it out.
            return $dob;
        }

        $client_cname = $this->faker[0]->name;
        $client_ename = $this->faker[1]->name;

        DB::table('client')->insert([
            // 'client_name' => $client_ename,
            // 'client_cname' => $client_cname,
            // // 'client_cat' => $this->get_client_cat(),
            // 'client_whatsapp' => $this->get_phone_number(),
            // 'client_mobile' => $this->get_phone_number(),
            // 'client_address' => $this->get_address(),
            // 'client_email' => $this->get_email(),
            'bugsreport_contact_method' => $this->random_from_pool([
                $this->get_phone_number(),
                $this->get_email()
                ]),

            'bugsreport_date' => $this->get_random_date(),
            'bugsreport_date' => $this->get_random_date(),


            // 'client_brithday' => $this->get_random_brithday(),
            // 'client_remarks' => $this->get_random_paragraph(10),
            // 'client_date' => $this->get_random_brithday(),
            // 'client_status' => $this->random_from_pool(array_keys(Client::$client_status_configuration)),
            // 'client_update_at' => $this->get_random_update_at(),
            // 'client_create_at' => $this->get_random_created_at(),
        ]);
    }

    public function run()
    {
        $max_num_bugs = 100;
        DB::table('client')->truncate();
        for($i=0; $i < $max_num_bugs; $i++)
        {
            echo "\r";
            echo "inert bugs $i/$max_num_bugs";
            $this->insert_bugs_record();
        }
        echo "\n";
    }
    }
}
