<?= $this->include('template/header'); ?>
<article class="entry">
    <h2 a href="<?= base_url('/artikel/' . $artikel['slug']); ?>"></a>
        <?= $artikel['judul']; ?></h2>
        
    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?=
            $artikel['judul']; ?>">
                <p><?= ($artikel['isi']) ?></p></br>  
</article>
<?= $this->include('template/footer'); ?>