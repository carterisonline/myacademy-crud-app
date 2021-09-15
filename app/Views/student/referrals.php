<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

        <?php
        if (!empty($studentReferrals) && is_array($studentReferrals)) {
            echo '
            <div class="container shadow-lg p-3 mb-5 bg-white rounded" style="padding: 80px; padding-bottom: 0px; margin: auto;">
                <h2> Referrals </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Issue Date </th>
                            <th scope="col"> Reason </th>
                            <th scope="col"> Start Date </th>
                            <th scope="col"> End Date </th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($studentReferrals as $referrals) {
                echo '
                        <tr>
                            <th scope="row"> ' . $referrals->issue_date . ' </th>
                            <td> ' . $referrals->reason . ' </td>
                            <td> ' . $referrals->start_date . ' </td>
                            <td> ' . $referrals->end_date . ' </td>
                        </tr>
                ';
            }

            echo '
                    </tbody>
                </table>
            </div>
            ';
        } else if (!empty($studentGrades) && is_array($studentGrades)) {
            echo '
            <div class="container">
                <div class="alert alert-dark" role="alert">
                    ' . $studentGrades[0]->student . ' does not have any referrals.
                </div>
            </div>';
        }
        ?>
</body>