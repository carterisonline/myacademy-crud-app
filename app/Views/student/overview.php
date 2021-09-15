<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h2><?= esc($title) ?></h2>

<?php if (!empty($grades) && is_array($grades)) : ?>

    <?php foreach ($grades as $grades_item) : ?>

        <h3><?= esc($grades_item['student']) ?></h3>

        <div class="main">
            <?= esc($grades_item['grade']) ?>
        </div>
        <p><a href="/student/<?= esc($grades_item['student_ident'], 'url') ?>">View student</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No grades</h3>

    <p>Unable to find any grades for you.</p>

<?php endif ?>