 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

<div class="row">
<div class="col-lg-6">
 <!-- pesan error -->
 <?= form_error(
        'menu',
        '<div class="alert alert-success" role="alert">
        </div>'
    ); ?>

    <?= $this->session->flashdata('message'); ?>
    <!-- akhir pesan error -->

    <!-- tombol tambah -->
    <a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal"
    data-target="#Addnewrole">Add New Role</a>

<!-- Tabel -->
    <table class="table table-haver">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
    <tbody>
        <?php $i= 1; ?>
            <?php foreach ($role as $r) : ?>
            <tr>
                <th scope="row"> <?= $i; ?></th>
                <td><?= $r['role']; ?></td>
            <td>
                <a href="<?= base_url('admin/roleAccess/') . $r['id'] ?>" 
                class="badge badge-warning">Access</a>
                <a href="#" class="badge badge-success badge-sm" data-toggle="modal" data-target="#editroleModal<?= $r['id'] ?>" data-popup="tooltip" data-placement="top" title="edit" >Edit</a>
                
                <a href="<?= base_url('admin/hapusrole/') . $r['id'] ?>"
                class="badge badge-danger btn-sm tombol-hapus" onclick="return confirm('yakin akan dihapus')">Delete</a>
            </td>
            </tr>
        <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
        </table>
<!-- akhir tabel -->
    </div>
    </div>
    </div>
    </div>
<!-- End of Main Content -->


<!-- button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="Addnewrole" tabindex="-1" aria-labellebdy="newMenuModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
             <h5 class="modal-title" id="newMenuModalLabel">Add new Role</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div>
            <form action="<?= base_url('admin/role');?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control"  id="role" name="role" placeholder="Role Name">
                    </div>
                </div>

                <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->

<!--Modal --> 
<?php foreach ($role as $r) : ?>

<!-- Modal -->
<div class="modal fade" id="editroleModal<?= $r['id'] ?>" tabindex="-1" aria-labelledby="editroleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editroleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/editrole') ?>">
        <div class="modal-body">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" value="<?= $r['role'] ?>" class="form-control" id="role" name="role" placeholder="Role Name ">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?= $r['id'] ?>" readonly>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>