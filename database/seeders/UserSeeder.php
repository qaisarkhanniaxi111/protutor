<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Userdetail::truncate();
        Schema::enableForeignKeyConstraints();

        // Admin
        User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'name' => 'super admin',
            'email' => 'hello@balogunandrew.com',
            'email_verified_at' => now(),
            'role' => 1,
            'user_status' => 1,
            'password' => 'fb9d107a49c0f2a3b25d69c074670665',
            'email_verify' => 1,
            'avatar' => 'avatar.png'
        ]);

        // Student 1
        User::create([
            'first_name' => 'student',
            'last_name' => 'st 1',
            'name' => 'student st 1',
            'email' => 'student1@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'student-avatar-1.png'
        ]);

        // Student 2
        User::create([
            'first_name' => 'student',
            'last_name' => 'st 2',
            'name' => 'student st 2',
            'email' => 'student2@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'student-avatar-2.png'
        ]);

        // Student 3
        User::create([
            'first_name' => 'student',
            'last_name' => 'st 3',
            'name' => 'student st 3',
            'email' => 'student3@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'student-avatar-3.jpeg'
        ]);

        // Student 4
        User::create([
            'first_name' => 'student',
            'last_name' => 'st 4',
            'name' => 'student st 4',
            'email' => 'student4@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'student-avatar-4.jpeg'
        ]);

        // Student 5
        User::create([
            'first_name' => 'student',
            'last_name' => 'st 5',
            'name' => 'student st 5',
            'email' => 'student5@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'student-avatar-5.png'
        ]);

        // ==== Teacher 1  ===== //
        $teacher_1 = User::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 1',
            'name' => 'Teacher tr 1',
            'email' => 'teacher1@example.com',
            'email_verified_at' => now(),
            'role' => 3,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'avatar-1.png'
        ]);

        Userdetail::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 1',
            'subject' => rand(1, 9).','.rand(10, 17),
            'profile_img' => 'avatar-1.png',
            'country' => 1,
            'languages' => 'english',
            'level' => 3,
            'email' => 'teacher1@example.com',
            'teaching_exp' => 'I have formal teaching experience',
            'current_sit' => 'I have another teaching job',
            'timezone' => 'Asia/Karachi',
            'phone' => '9352337856',
            'hourly_rate' => 32,
            'desc_first_last' => 'My Class Heading',
            'desc_about' => 'About Me',
            'over_18' => 'on',
            'student_no' => $teacher_1 ? $teacher_1->id: ''
        ]);

        // Teacher 2
        $teacher_2 = User::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 2',
            'name' => 'Teacher tr 2',
            'email' => 'teacher2@example.com',
            'email_verified_at' => now(),
            'role' => 3,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'avatar-2.png'
        ]);

        Userdetail::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 2',
            'subject' => rand(1, 9).','.rand(10, 17),
            'profile_img' => 'avatar-2.png',
            'country' => 2,
            'languages' => 'english',
            'level' => 3,
            'email' => 'teacher2@example.com',
            'teaching_exp' => 'I have formal teaching experience',
            'current_sit' => 'I have another teaching job',
            'timezone' => 'Asia/Karachi',
            'phone' => '9352337856',
            'hourly_rate' => 32,
            'desc_first_last' => 'My Class Heading',
            'desc_about' => 'About Me',
            'over_18' => 'on',
            'student_no' => $teacher_2 ? $teacher_2->id: ''
        ]);

        // Teacher 3
        $teacher_3 = User::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 3',
            'name' => 'Teacher tr 3',
            'email' => 'teacher3@example.com',
            'email_verified_at' => now(),
            'role' => 3,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'avatar-3.png'
        ]);

        Userdetail::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 3',
            'subject' => rand(1, 9).','.rand(10, 17),
            'profile_img' => 'avatar-3.png',
            'country' => 3,
            'languages' => 'english',
            'level' => 3,
            'email' => 'teacher3@example.com',
            'teaching_exp' => 'I have formal teaching experience',
            'current_sit' => 'I have another teaching job',
            'timezone' => 'Asia/Karachi',
            'phone' => '9352337856',
            'hourly_rate' => 32,
            'desc_first_last' => 'My Class Heading',
            'desc_about' => 'About Me',
            'over_18' => 'on',
            'student_no' => $teacher_3 ? $teacher_3->id: ''
        ]);

        // Teacher 4
        $teacher_4 = User::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 4',
            'name' => 'Teacher tr 4',
            'email' => 'teacher4@example.com',
            'email_verified_at' => now(),
            'role' => 3,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'avatar-4.png'
        ]);

        Userdetail::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 4',
            'subject' => rand(1, 9).','.rand(10, 17),
            'profile_img' => 'avatar-4.png',
            'country' => 4,
            'languages' => 'english',
            'level' => 3,
            'email' => 'teacher4@example.com',
            'teaching_exp' => 'I have formal teaching experience',
            'current_sit' => 'I have another teaching job',
            'timezone' => 'Asia/Karachi',
            'phone' => '9352337856',
            'hourly_rate' => 32,
            'desc_first_last' => 'My Class Heading',
            'desc_about' => 'About Me',
            'over_18' => 'on',
            'student_no' => $teacher_4 ? $teacher_4->id: ''
        ]);


        // Teacher 5
        $teacher_5 = User::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 5',
            'name' => 'Teacher tr 5',
            'email' => 'teacher5@example.com',
            'email_verified_at' => now(),
            'role' => 3,
            'user_status' => 1,
            'password' => md5(123456),
            'email_verify' => 1,
            'avatar' => 'avatar-5.png'
        ]);

        Userdetail::create([
            'first_name' => 'Teacher',
            'last_name' => 'tr 5',
            'subject' => rand(1, 9).','.rand(10, 17),
            'profile_img' => 'avatar-5.png',
            'country' => 1,
            'languages' => 'english',
            'level' => 3,
            'email' => 'teacher5@example.com',
            'teaching_exp' => 'I have formal teaching experience',
            'current_sit' => 'I have another teaching job',
            'timezone' => 'Asia/Karachi',
            'phone' => '9352337856',
            'hourly_rate' => 32,
            'desc_first_last' => 'My Class Heading',
            'desc_about' => 'About Me',
            'over_18' => 'on',
            'student_no' => $teacher_5 ? $teacher_5->id: ''
        ]);

    }
}
