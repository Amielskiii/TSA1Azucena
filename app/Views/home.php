<?= view('layout/header') ?>

<section class="hero">

    <div>
        <p class="eyebrow">WELCOME</p>

        <h1>Tasks for Today</h1>

        <p class="hero-text">
            Here are your tasks scheduled for today.
        </p>

        <p class="today-date">
            <?= date('F d, Y') ?>
        </p>
    </div>

</section>

<section class="task-section">

    <div class="section-header">
        <h2>Today's Tasks</h2>

        <span class="task-count">
            <?= count($tasks) ?> task(s)
        </span>
    </div>

    <?php if (empty($tasks)): ?>

        <div class="empty-state">
            <h3>No tasks for today</h3>
            <p>You have no tasks scheduled for today.</p>
        </div>

    <?php else: ?>

        <div class="task-list">

            <?php foreach ($tasks as $task): ?>

                <div class="task-card">

                    <div class="task-info">

                        <h3>
                            <?= esc($task['title']) ?>
                        </h3>

                        <p>
                            Date:
                            <?= date('F d, Y', strtotime($task['task_date'])) ?>
                        </p>

                    </div>

                    <span class="status <?= esc($task['status']) ?>">
                        <?= ucfirst(esc($task['status'])) ?>
                    </span>

                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</section>

<?= view('layout/footer') ?>