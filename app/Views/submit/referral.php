<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?= \Config\Services::validation()->listErrors() ?>
<div class="container shadow-lg p-5 mb-5 bg-white rounded" style="margin: auto; margin-top: 80px;">
    <h2> Submit a Referral </h2>
    <form action="/submit/referral" method="post">
        <div class="form-group">
            <label for="student"> Student Name </label>
            <input type="input" class="form-control" name="student" placeholder="eg. Bob Ross" required>
        </div>

        <div class="form-group">
            <label for="reason"> Reason for Referral </label>
            <input type="input" class="form-control" name="reason" required>
        </div>

        <div class="row">
            <div class="col">
                <label for="start_date"> Start Date </label>
                <input type="date" class="form-control" name="start_date" required>
            </div>
            <div class="col">
                <label for="end_date"> End Date </label>
                <input type="date" class="form-control" name="end_date" required>
            </div>
        </div>
        <br/>
        <div id="alert_placeholder"></div>
        <input type="submit" name="submit" value="Submit Grade">
    </form>
</div>