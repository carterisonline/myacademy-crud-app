<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <?php
    if (!empty($studentGrades) && is_array($studentGrades)) {
        $total = 0;
        foreach ($studentGrades as $student) {
            $total += $student->grade;
        }

    echo '
        <div class="container shadow-lg p-4 bg-white" style="padding: 80px; padding-bottom: 0px; margin: auto; margin-top: 80px;">
            <h1 style="margin-top: 20px; margin-left: 20px;">
                ' . $studentGrades[0]->student . '
                <span class="badge badge-primary"> ' . floor($total / count($studentGrades)) . '% </span>
            </h1>
        </div>
        ';
    }
    ?>
</body>