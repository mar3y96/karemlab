<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::insert([
            [
                'key'=>'info',
                'value'=>json_encode([
                    'name'=>'ExtremeLab',
                    'currency'=>'USD',
                    'reports_logo'=>'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',
                    'address'=>'Address',
                    'phone'=>'+99',
                    'email'=>'support@extremelab.tech',
                    'website'=>'https://www.extremelab.tech',
                    'footer'=>'All rights are reserved',
                    'socials'=>[
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'instagram'=>'#',
                        'youtube'=>'#',
                    ]
                ])
            ],
            [
                'key'=>'reports',
                'value'=>json_encode([
                    "show_header"=>true,
                    "show_footer"=>true,
                    "show_signature"=>true,
                    "margin-top"=>"0",
                    "margin-right"=>"20",
                    "margin-bottom"=>"20",
                    "margin-left"=>"20",
                    "content-margin-top"=>"270",
                    "content-margin-bottom"=>"220",
                    "footer"=>"footer here",
                    "show_header_image"=>true,
                    "show_background_image"=>true,
                    "show_footer_image"=>true,
                    "branch_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "branch_info"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "patient_title"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "patient_data"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_title"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_head"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "result"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "unit"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "reference_range"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "status"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "comment"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "signature"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "antibiotic_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "sensitivity"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "commercial_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "report_footer"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif",
                        "text-align"=>"center"
                    ],
                ])
            ],
            [
                'key'=>'emails',
                'value'=>json_encode([
                    'host'=>'',
                    'port'=>'',
                    'username'=>'',
                    'password'=>'',
                    'encryption'=>'',
                    'from_address'=>'',
                    'from_name'=>'',
                    'header_color'=>'#c43e00',
                    'footer_color'=>'#363636',
                    'patient_code'=>[
                        'active'=>false,
                        'subject'=>'Patient Code',
                        'body'=>'Welcome , {patient_name}<br>Your patient code is : {patient_code}',
                    ],
                    'reset_password'=>[
                        'active'=>false,
                        'subject'=>'Reset your passwor',
                        'body'=>'Reset your password'
                    ],
                    'receipt'=>[
                        'active'=>false,
                        'subject'=>'Order receipt',
                        'body'=>'Welcome {patient_name},<br> your receipt is attached',
                    ],
                    'report'=>[
                        'active'=>false,
                        'subject'=>'Medical report',
                        'body'=>'welcome , {patient_name}<br>you report is attached'
                    ]
                ])
            ],
            [
                'key'=>'sms',
                'value'=>json_encode([
                    'sid'=>'',
                    'token'=>'',
                    'from'=>'',
                    'patient_code'=>[
                        'active'=>false,
                        'message'=>'welcome {patient_name} , your patient code is {patient_code}'
                    ],
                    'tests_notification'=>[
                        'active'=>false,
                        'message'=>'welcome {patient_name} , your tests are ready now .. you can check tests by using your patient code : {patient_code}'
                    ]
                ])
            ],
            [
                'key'=>'whatsapp',
                'value'=>json_encode([
                    'receipt'=>[
                        'active'=>false,
                        'message'=>'welcome {patient_name} , receipt link is {receipt_link}'
                    ],
                    'report'=>[
                        'active'=>false,
                        'message'=>'welcome {patient_name} , tests report link is {report_link}'
                    ]
                ])
            ],
            [
                'key'=>'api_keys',
                'value'=>json_encode([
                    'google_map'=>''
                ])
            ],
            [
                'key'=>'theme',
                'value'=>json_encode([
                    'dark'=>'true',
                    'light'=>'false'
                ])
            ],
        ]);
    }
}
