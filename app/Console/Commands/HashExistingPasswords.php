<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HashExistingPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hash:existing-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash existing plain-text passwords in the students table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $students = DB::table('students')->select('student_id', 'password')->get();

        foreach ($students as $student) {
            // Check if the password is already hashed to avoid re-hashing
            if (!Hash::needsRehash($student->password)) {
                continue;
            }

            DB::table('students')
                ->where('student_id', $student->student_id)
                ->update(['password' => Hash::make($student->password)]);
        }

        $this->info('Existing passwords have been hashed successfully.');
        return 0;
    }
}
