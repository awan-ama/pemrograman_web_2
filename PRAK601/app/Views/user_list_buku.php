<?= $this->extend('layout/user/user_layout') ?>

<?= $this->section('content') ?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
    </tr>
    <?php foreach ($books as $buku) { ?>
        <tr>
            <td><?= $buku['id'] ?></td>
            <td><?= $buku['judul'] ?></td>
            <td><?= $buku['penulis']; ?></td>
            <td><?= $buku['penerbit']; ?></td>
            <td><?= $buku['tahun_terbit']; ?></td>
            <td>
                <a href="<?= base_url('user/buku/'.$buku['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                <a href="#" data-href="<?= base_url('user/buku/'.$buku['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Are you sure?</h2>
                <p>The data will be deleted and lost forever</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>
<?= $this->endSection() ?>