<?php

namespace App\Controllers;

use App\Models\GradeModel;
use CodeIgniter\Controller;
use App\Models\ReferralModel;

class Student extends Controller
{
    public function index()
    {
        $model = new GradeModel();

        $data = [
            'grades' => $model->getGrades(),
            'title' => 'Grades - Overview'
        ];

        echo view('student/overview', $data);
    }

    public function view($ident = null)
    {
        $gradeModel = new GradeModel();
        $referralModel = new ReferralModel();

        $data['grades'] = $gradeModel->getGrades($ident);
        $data['referrals'] = $referralModel->getReferral($ident);
        if (empty($data['grades']) || empty($data['referrals'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($ident . " does not have any grades/referrals available.");
        }

        $data['studentReferrals'] = array();
        $data['studentGrades'] = array();

        foreach ($data['grades']->getResult() as $grade) {
            array_push($data['studentGrades'], $grade);
        }

        foreach ($data['referrals']->getResult() as $referral) {
            array_push($data['studentReferrals'], $referral);
        }

        echo view('student/label', $data);
        echo view('student/grades', $data);
        echo view('student/referrals', $data);
    }

    public function submitGrade()
    {
        $model = new GradeModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
        'student' => 'required|min_length[3]|max_length[255]',
        'assignment_title' => 'required|min_length[3]|max_length[65535]',
        'grade' => 'required',
        'teacher_comment' => 'min_length[0]|max_length[65535]'
        ])) {
            $model->save([
                'student' => $this->request->getPost('student'),
                'assignment_title' => $this->request->getPost('assignment_title'),
                'grade' => $this->request->getPost('grade'),
                'teacher_comment' => $this->request->getPost('teacher_comment'),
                'student_ident' => url_title($this->request->getPost('student'), '-', true)
            ]);

            echo view('submit/success');
        }
        else {
            echo view('submit/grade');
        }
    }

    public function submitReferral()
    {
        $model = new ReferralModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
        'student' => 'required|min_length[3]|max_length[255]',
        'reason' => 'required|min_length[3]|max_length[65535]',
        'start_date' => 'required',
        'end_date' => 'required'
        ])) {
            $model->save([
                'student' => $this->request->getPost('student'),
                'reason' => $this->request->getPost('reason'),
                'start_date' => $this->request->getPost('start_date'),
                'end_date' => $this->request->getPost('end_date'),
                'student_ident' => url_title($this->request->getPost('student'), '-', true)
            ]);

            echo view('submit/success');
        }
        else {
            echo view('submit/referral');
        }
    }
}
