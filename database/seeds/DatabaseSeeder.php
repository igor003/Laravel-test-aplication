<?php

use App\Model\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['subject' => 'Algebra']);
        Subject::create(['subject' => 'English']);
        Subject::create(['subject' => 'Geometry']);
        Subject::create(['subject' => 'Computer science']);
        Subject::create(['subject' => 'Physical culture']);
        Subject::create(['subject' => 'Biology']);
        Subject::create(['subject' => 'Physics']);
        Subject::create(['subject' => 'Chemistry']);
        Subject::create(['subject' => 'Astronomy']);
        Subject::create(['subject' => 'Literature']);
    }
}
