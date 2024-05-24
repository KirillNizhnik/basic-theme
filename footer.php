<?php

?>

<footer class="footer" id="contacts">
    <div class="container">
        <div class="footer-inner">
            <ul class="contacts-list">
                    <?php
                    $phone_numbers = get_field("phone_numbers", "options");
                    $email = get_field("email", "options");
                    $instagram = get_field("instagram", "options");
                    $telegram = get_field("telegram_url", "options");
                    ?>
                <?php if ($phone_numbers): ?>
                <li class="contacts-item">
                    <a href="tel:<?= $phone_numbers ?>"><?= $phone_numbers ?></a>
                </li>
                <?php endif;?>
                <?php if ($email): ?>
                    <li class="contacts-item">
                        <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    </li>
                <?php endif;?>
                <?php if ($instagram): ?>
                    <li class="contacts-item">
                        <a href="<?= $instagram ?>">Instagram</a>
                    </li>
                <?php endif;?>
                <?php if ($telegram): ?>
                    <li class="contacts-item">
                        <a href="<?= $telegram ?>">Telegram</a>
                    </li>
                <?php endif;?>

            </ul>
            <p>&copy; <?php echo date("Y"); ?> Liuba Numerologia. Усі права захищені.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
