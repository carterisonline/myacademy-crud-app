<?php

namespace App\Models;

use CodeIgniter\Model;

class ReferralModel extends Model
{
    protected $table = 'student-referrals';
    protected $allowedFields = ['student', 'reason', 'start_date', 'end_date', 'student_ident'];

    public function getReferral($student = false)
    {
        if ($student === false) {
            return $this->findAll();
        }

        return $this->asArray()->select('*')->where(['student_ident' => $student])->get();
    }
}
