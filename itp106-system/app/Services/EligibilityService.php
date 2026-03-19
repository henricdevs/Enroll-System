<?php

namespace App\Services;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Prerequisite;
use App\Models\Completion;

class EligibilityService
{
    public static function canEnroll(Student $student, Subject $subject): bool
    {
        // Get prerequisites for the subject
        $prerequisites = Prerequisite::where('subject_id', $subject->id)->get();

        foreach ($prerequisites as $prereq) {

            // Check if student completed the prerequisite
            $completed = Completion::where('student_id', $student->id)
                ->where('subject_id', $prereq->prerequisite_subject_id)
                ->exists();

            if (!$completed) {
                return false;
            }
        }

        return true;
    }
}