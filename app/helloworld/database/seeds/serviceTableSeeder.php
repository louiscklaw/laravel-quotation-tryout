<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function get_sentence()
    {
        $length = random_int(1,10);
        $words = [];
        $word_in_sentence = random_int(1,10);

        foreach(range(1,$word_in_sentence) as $i)
        {
            array_push($words, Str::random(random_int(3,10)));
        }

        $sentence = implode(' ', $words) . [',','.'][random_int(0,1)];

        return $sentence;
    }

    public function get_random_paragraph($repeat=10)
    {
        $sentence_array = [];

        foreach(range(1, $repeat) as $i)
        {
            array_push($sentence_array, $this->get_sentence());
        }

        return implode(' ', $sentence_array);
    }

    public function insert_service_record($service_name, $service_cat,$service_desc, $service_criteria)
    {
        DB::table('service')->insert([
            'service_name' => $service_name,
            'service_cat' => $service_cat,
            'service_desc' => $service_desc,
            'service_criteria' => $service_criteria,
        ]);
    }

    public function run()
    {

        $array_services=[
            '鈣 Calcium'=>[
                'cat'=>'骨骼',
                'desc'=>'正常成年人的血鈣含量應介乎2.15-2.55 mmol/L，若血鈣含量升高，主因可能是有惡性腫瘤、患上副甲狀腺功能亢進症、出現維他命D中毒；若含量降低，則可能患有骨軟化症、佝僂病、甲狀腺功能低下症，或缺乏維他命D。宜與「磷」的檢查結果一同分析，結果較精準。',
                'criteria'=>'#'
            ],
            '大便常規 Stool Routine'=>[
                'cat'=>'大便',
                'desc'=>'糞便常規檢查對消化系統疾病及寄生蟲有臨床意義可能知總急性腸炎，伴發性抱抱子蟲感染，疾病早期，腸道炎症或受刺激，瞳瘤，便秘，上消化道出血，肛裂，痔瘡，直腸癌等等問題。粘液與糞便混合者，為來自小腸疾患，而粘液僅附著於糞便表面者為大腸疾患，全為粘液或血液組成的排泄物則見於急性痢疾，腸炎或原虫性下痢。',
                'criteria'=>'#'
            ],
            '靜臥心電圖 Resting ECG'=>[
                'cat'=>'心臟',
                'desc'=>'透過靜臥心電圖檢查，可以檢查心臟運作是否正常、有否患病，如心律不正、心肌缺氧、心臟肥大、傳導阻滯等。若檢驗出嚴重的症狀，如心肌梗塞、第三度房室傳導阻滯等，則應加以留意及作進一步檢查和治理。',
                'criteria'=>'#'
            ],
            '肺功能測試 Lung Function Test'=>[
                'cat'=>'肺功能',
                'desc'=>'肺功能測試反映氣管及肺部健康，以肺量計（Spirometry）檢查空氣進出肺部的體積、流量及速度，能診斷哮喘病、肺纖維化及慢性氣管阻塞等病症。若吹氣量太少，反映肺容量欠佳；吹氣太慢者，可能反映氣管太窄或阻塞，這都是患上慢性阻塞性肺疾病的警號。如有氣喘、氣促、久咳、痰中帶血等徵狀，又或者屬吸煙、經常接觸二手煙、經常接觸大量塵埃等人士，更應及早接受肺功能測試。',
                'criteria'=>'#'
            ],
            '嗜鹼性白血球 Basophils'=>[
                'cat'=>'血常規',
                'desc'=>'白血球有五大分類，配合血液白血球的檢查，有助更準確檢驗出潛藏的疾病。嗜鹼性白血球過多的話，可能反映患有慢性顆粒性白血病、骨髓增殖疾病。',
                'criteria'=>'#'
            ],
        ];

        DB::table('service')->truncate();
        foreach(range(0,30000) as $num)
        {
            $this->insert_service_record(
                array_keys($array_services)[random_int(0,4)],
                $this->get_sentence(random_int(1,3)),
                $this->get_random_paragraph(random_int(10,40)),
                $this->get_sentence(random_int(1,3))
            );
            echo 'insert';
        }
    }
}
