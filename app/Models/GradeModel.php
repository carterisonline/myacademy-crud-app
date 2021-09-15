<?php

namespace App\Models;

use CodeIgniter\Model;

class GradeModel extends Model
{
    protected $table = 'student-grades';
    protected $allowedFields = ['student', 'assignment_title', 'grade', 'teacher_comment', 'student_ident'];

    public function getGrades($student = false)
    {
        if ($student === false) {
            return $this->findAll();
        }

        return $this->asArray()->select('*')->where(['student_ident' => $student])->get();
    }
}
