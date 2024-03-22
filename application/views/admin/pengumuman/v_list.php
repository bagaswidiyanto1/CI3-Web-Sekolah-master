<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('pengumuman/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
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
                            <th>Judul Pengumuman</th>
                            <th>Isi Pengumuman</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengumuman as $key => $value) { ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->judul_pengumuman; ?></td>
                                <td><?= $value->isi_pengumuman; ?></td>
                                <td><?= $value->tgl; ?></td>
                                <td>
                                    <a href="<?= base_url('pengumuman/edit/' . $value->id_pengumuman); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="<?= base_url('pengumuman/delete/' . $value->id_pengumuman); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin di hapus ?')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>