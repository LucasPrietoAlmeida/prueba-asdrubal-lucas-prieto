<?php if (is_user_logged_in()) : ?>
    <section>
        <h2>Section for logged in users</h2>
    </section>
<?php else : ?>
    <section>
        <h2>Section for guests</h2>
    </section>
<?php endif; ?>