<?= $this->extend('layout')?>
<?= $this->section('content')?>
<h2>List Buku</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Gambar</th>
        <th>Stok</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($bukus as $index => $buku): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $buku->judul ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$buku->gambar) ?>" />
                </td>
				<td><?= $buku->stok ?></td>
                <td><?= $buku->pengarang ?></td>
                <td><?= $buku->penerbit ?></td>
                <td><?= $buku->kategori ?></td>
				<td>
					<a href="<?= site_url('pinjam/view/'.$buku->id) ?>" class="btn btn-primary">View</a>
				</td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>