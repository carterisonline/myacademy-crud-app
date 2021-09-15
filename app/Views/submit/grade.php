<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?= \Config\Services::validation()->listErrors() ?>
<div class="container shadow-lg p-5 mb-5 bg-white rounded" style="margin: auto; margin-top: 80px;">
    <h2> Submit a Grade </h2>
    <form action="/submit/grade" method="post">
        <?= csrf_field() ?>
        <div class="row">
            <div class="col">
                <label for="student"> Student Name </label>
                <input type="input" class="form-control" name="student" placeholder="eg. Bob Ross" required>
            </div>
            <div class="col">
                <label for="grade"> Grade </label>
                <input type="number" class="form-control" name="grade" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="assignment_title"> Assignment Title </label>
            <input type="input" class="form-control" name="assignment_title" required>
        </div>


        <div class="form-group">
            <label for="teacher_comment">Comment</label>
            <textarea class="form-control" name="teacher_comment" placeholder="(Not required)"rows="3"></textarea>
        </div>
        <div id="alert_placeholder"></div>
        <input type="submit" name="submit" value="Submit Grade">
    </form>
</div>