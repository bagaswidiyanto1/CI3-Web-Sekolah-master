<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('berita/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
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
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($berita as $key => $value) { ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->judul_berita; ?></td>
                                <td><?= $value->isi_berita; ?></td>
                                <td><?= $value->tgl_berita; ?></td>
                                <td>
                                    <img src="<?= base_url('foto_berita/' . $value->gambar_berita); ?>" alt="" width="50" height="50">
                                </td>
                                <td>
                                    <a href="<?= base_url('berita/edit/' . $value->id_berita); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="<?= base_url('berita/delete/' . $value->id_berita); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin di hapus ?')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>