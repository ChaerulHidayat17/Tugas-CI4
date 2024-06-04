<?= $this->include('template/header'); ?>
<?php if ($artikel): ?>
    <?php foreach ($artikel as $row): ?>
        <article class="entry">
            <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                    <?= $row['judul']; ?></a>
            </h2>
            <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
            <p><?= substr($row['isi'], 0, 1000); ?></p>
        </article>
        <hr class="divider" />
    <?php endforeach; ?>
<?php else: ?>
    <div class="no-data">
        <h2>Belum ada data.</h2>
    </div>
<?php endif; ?>
<?= $this->include('template/footer'); ?>