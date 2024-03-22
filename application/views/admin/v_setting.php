<?= form_open_multipart('admin/setting'); ?>
<?php if ($this->session->flashdata('pesan')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?= $this->session->flashdata('pesan'); ?>
    </div>
<?php } ?>
<div class="col-sm-4 text-center">
    <label for="">Kepala Sekolah</label><br>
    <img src="<?= base_url('foto_kepsek/' . $setting->foto_kepsek); ?>" alt="" width="150" height="200">

    <div class="form-group">
        <label>Ganti Foto</label>
        <input class="form-control" type="file" name="foto_kepsek">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Nama Sekolah</label>
        <input class="form-control" type="text" name="nama_sekolah" value="<?= $setting->nama_sekolah; ?>" placeholder="Nama Sekolah">
    </div>
    <div class="form-group">
        <label>Alamat Sekolah</label>
        <input class="form-control" type="text" name="alamat" value="<?= $setting->alamat; ?>" placeholder="Alamat Sekolah">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input class="form-control" type="text" name="no_telpon" value="<?= $setting->no_telpon; ?>" placeholder="No Telepon">
    </div>
    <div class="form-group">
        <label>Kepala Sekolah</label>
        <input class="form-control" type="text" name="kepala_sekolah" value="<?= $setting->kepala_sekolah; ?>" placeholder="Kepala Sekolah">
    </div>
    <div class="form-group">
        <label>NIP</label>
        <input class="form-control" type="text" name="nip" value="<?= $setting->nip; ?>" placeholder="NIP">
    </div>
</div>


<div class="col-sm-12">
    <div class="form-group">
        <label>Sejarah</label>
        <textarea class="form-control" name="sejarah" id="editor" rows="5"><?= $setting->sejarah; ?></textarea>
    </div>
    <div class="form-group">
        <label>Visi</label>
        <textarea class="form-control" name="visi" id="editor" rows="5"><?= $setting->visi; ?></textarea>
    </div>
    <div class="form-group">
        <label>Misi</label>
        <textarea class="form-control" name="misi" id="editor" rows="5"><?= $setting->misi; ?></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-success btn-sm">Update</button>
    </div>
</div>
<?= form_close(); ?>