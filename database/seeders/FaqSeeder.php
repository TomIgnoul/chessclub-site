<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Categories*/

        $membership = FaqCategory::create([
           'name' => 'Membership'
        ]);

        $training = FaqCategory::create([
            'name' => 'Training'
        ]);

        $tournaments = FaqCategory::create([
            'name' => 'Tournaments'
        ]);

        /*end Categories*/

        /* Membership */
        Faq::create([
            'faq_category_id' => $membership->id,
            'question' => 'How do I join the club?',
            'answer' => 'Come along on any Wednesday evening and speak to a board member. First two visits are free.'
        ]);

        Faq::create([
            'faq_category_id' => $membership->id,
            'question' => 'What does membership cost?',
            'answer' => '€120 per year for adults, €60 for under-18s and students. Payable by transfer after your trial visits.'

        ]);

        Faq::create([
            'faq_category_id' => $membership->id,
            'question' => 'Do I need my own set?',
            'answer' => 'No, the club provides boards, pieces and clocks for all sessions.'

        ]);

        /* training */
        Faq::create([
            'faq_category_id' => $training->id,
            'question' => 'Are there sessions for beginners?',
            'answer' => 'Yes. From October a beginners group runs from 19:00, before the regular club night.'


        ]);

        Faq::create([
            'faq_category_id' => $training->id,
            'question' => 'Do you offer coaching for stronger players?',
            'answer' => 'A FIDE-rated coach visits monthly for group analysis. Individual lessons can be arranged.'

        ]);
        Faq::create([
            'faq_category_id' => $training->id,
            'question' => 'What should I bring?',
            'answer' => 'Just yourself. A notebook is useful if you want to record your games.'

        ]);

        /*Tournaments*/

        Faq::create([
            'faq_category_id' => $tournaments->id,
            'question' => 'How do I enter the club championship?',
            'answer' => 'Sign up at the desk before the first round. Open to all members.'

        ]);
        Faq::create([
            'faq_category_id' => $tournaments->id,
            'question' => 'What time control is used?',
            'answer' => '90 minutes plus 30 seconds increment for the championship; rapid events use 15+10.'

        ]);

        Faq::create([
            'faq_category_id' => $tournaments->id,
            'question' => 'Are there fees?',
            'answer' => 'Club events are free for members. External tournaments have their own entry fees.'

        ]);
    }
}
