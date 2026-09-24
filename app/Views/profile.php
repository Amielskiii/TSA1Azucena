<?= view('layout/header') ?>

<section class="page-heading">

    <p class="eyebrow">PROFILE</p>

    <h1>My Profile</h1>

    <p>
        Demo user information for the Tasks Management System.
    </p>

</section>

<section class="profile-card">

    <div class="profile-avatar">
        <img src="/images/Amiel sobrang pogi angas daming tattooo.jpg" alt="Profile Picture" class="profile-image">
    </div>

    <div class="profile-content">

        <h2><?= esc($user['full_name']) ?></h2>

        <p class="username">
            @<?= esc($user['username']) ?>
        </p>

        <div class="profile-details">

            <div class="profile-detail">

                <span class="detail-label">
                    Full Name
                </span>

                <span>
                    <?= esc($user['full_name']) ?>
                </span>

            </div>

            <div class="profile-detail">

                <span class="detail-label">
                    Username
                </span>

                <span>
                    <?= esc($user['username']) ?>
                </span>

            </div>

            <div class="profile-detail">

                <span class="detail-label">
                    Email
                </span>

                <span>
                    <?= esc($user['email']) ?>
                </span>

            </div>

            <div class="profile-detail">

                <span class="detail-label">
                    Account Created
                </span>

                <span>
                    <?= date(
                        'F d, Y',
                        strtotime($user['created_at'])
                    ) ?>
                </span>

            </div>

        </div>

    </div>

</section>

<?= view('layout/footer') ?>