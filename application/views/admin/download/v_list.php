<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('download/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
        </div>
        <div class="panel-body">

            <div class="table-responsive">
                <?php if ($this->session->flashdata('pesan')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                <?php } ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($download as $key => $value) { ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->ket_file; ?></td>
                                <td><?= $value->file; ?></td>
                                <td>
                                    <a href="<?= base_url('download/edit/' . $value->id_file); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="<?= base_url('download/delete/' . $value->id_file); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin di hapus ?')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>