<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Datetime;

class StudentHelper extends Model
{
    use HasFactory;

    public function ifQuizWithinStartAndEndDateTime($startDate,$endDate)
    {

// Convert the start and end date strings to DateTime objects
$startDate = new DateTime($startDate);
$endDate = new DateTime($endDate);
// Get the current date and time
$currentDateTime = new DateTime();

// Compare the current date and time with the start and end dates
if ($currentDateTime <= $endDate && $currentDateTime >= $startDate) {

    return true;
} else {
    // Current time is outside the start and end dates
    return false;
}

    }

    public function ifQuizIsUpcoming($endDate)
    {
$endDate = new DateTime($endDate);
// Get the current date and time
$currentDateTime = new DateTime();

// Compare the current date and time with the start and end dates
if ($currentDateTime <= $endDate) {

    return true;
} else {
    // Current time is outside the start and end dates
    return false;
}

    }
}
