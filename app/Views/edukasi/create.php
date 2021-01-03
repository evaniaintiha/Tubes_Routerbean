<?= $this->extend('layout')?>
<?= $this->section('content')?>
<?php
    $judul = [
        'name' => 'judul',
        'id' => 'judul',
        'value' => null,
        'class' => 'form-control',
    ];

    $stok = [
        'name' => 'stok',
        'id' => 'stok',
        'value' => null,
        'class' => 'form-control',
        'type' => 'number',
        'min' => 0,
    ];

    $gambar = [
        'name' => 'gambar',
        'id' => 'gambar',
        'value' => null,
        'class' => 'form-control',
    ];

    $pengarang = [
        'name' => 'pengarang',
        'id' => 'pengarang',
        'value' => null,
        'class' => 'form-control',
    ];

    $penerbit = [
        'name' => 'penerbit',
        'id' => 'penerbit',
        'value' => null,
        'class' => 'form-control',

    ];

    $kategori = [
        'name' => 'kategori',
        'id' => 'kategori',
        'value' => null,
        'class' => 'form-control',
    ];

    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit',
    ];

?>
<h1>Tambah Buku Kategori Edukasi</h1>
<?= form_open_multipart('Edukasi/create') ?>
    <div class = "form-group">
        <?= form_label("Judul","judul") ?>
        <?= form_input($judul) ?>
    </div>

	<div class="form-group">
		<?= form_label("Stok", "stok") ?>
		<?= form_input($stok) ?>
	</div>

	<div class="form-group">
		<?= form_label("Gambar", "gambar") ?>
		<?= form_upload($gambar) ?>
	</div>

     <div class="form-group">
        <?= form_label("Pengarang", "pengarang") ?>
        <?= form_input($pengarang) ?>
    </div>

     <div class="form-group">
        <?= form_label("Penerbit", "penerbit") ?>
        <?= form_input($penerbit) ?>
    </div>

    <div class="form-group">
        <?= form_label("Kategori", "kategori") ?>
        <?= form_input($kategori) ?>
    </div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>