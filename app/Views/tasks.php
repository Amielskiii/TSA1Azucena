
<?= view('layout/header') ?>

<section class="page-heading">

    <p class="eyebrow">TASK MANAGEMENT</p>

    <h1>All Tasks</h1>

    <p>
        View every task in the system, organized by date.
    </p>

</section>

<section class="task-section">

    <?php if (empty($tasks)): ?>

        <div class="empty-state">
            <h3>No tasks available</h3>
            <p>There are currently no tasks in the database.</p>
        </div>

    <?php else: ?>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Created At</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($tasks as $task): ?>

                        <tr>

                            <td>
                                <?= esc($task['id']) ?>
                            </td>

                            <td class="task-title">
                                <?= esc($task['title']) ?>
                            </td>

                            <td>
                                <span class="status <?= esc($task['status']) ?>">
                                    <?= ucfirst(esc($task['status'])) ?>
                                </span>
                            </td>

                            <td>
                                <?= date('F d, Y', strtotime($task['task_date'])) ?>
                            </td>

                            <td>
                                <?= date('M d, Y h:i A', strtotime($task['created_at'])) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    <?php endif; ?>

</section>

<?= view('layout/footer') ?>