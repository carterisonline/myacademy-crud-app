<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <?php
    if (!empty($studentGrades) && is_array($studentGrades)) {
        echo '
        <div class="container shadow-lg p-3 mb-5 bg-white" style="padding: 80px; padding-bottom: 0px; margin: auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Assignment </th>
                        <th scope="col"> Grade </th>
                        <th scope="col"> Date </th>
                        <th scope="col"> Comments </th>
                    </tr>
                </thead>
                <tbody>
        ';

        foreach ($studentGrades as $grades) {
        echo '
                    <tr>
                        <th scope="row"> ' . $grades->assignment_title . ' </th>
                        <td> ' . $grades->grade . '% </td>
                        <td> ' . $grades->timestamp . ' </td>
                        <td>';
        if(!empty($grades->teacher_comment)) {
            echo             '<i> "' . $grades->teacher_comment . '"</i>';
        }
        echo '         </td>
                    </tr>
            ';
        }

        echo '
                </tbody>
            </table>
        </div>
        ';
    } else {
        echo '
        <div class="container" style="padding: 80px; margin: auto;">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No data for the selected student.</h4>
                The student you are trying to access does not have any grades available.
                <a href="../../submit-grade"> Click here </a>
                to submit a grade.
                <hr>
                <a class="mb-0" href="../.." style="text-decoration: underline;"> Go back to the admin page </a>
            </div>
        </div>';
    }
    ?>
</body>