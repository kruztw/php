<html>

    <ol>
        <?php foreach (glob("*") as $log_file) : ?>
            <li><a href="<?= "$log_file" ?>" target="_blank"><?= $log_file ?></a></li>
        <?php endforeach ?>
    </ol>
</html>
