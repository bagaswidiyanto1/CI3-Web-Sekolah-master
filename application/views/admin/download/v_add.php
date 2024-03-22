<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data
        </div>
        <div class="panel-body">

            <?php if (isset($error_upload)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $error_upload; ?>
                </div>

            <?php } ?>

            <?= form_open_multipart('download/add'); ?>
            <div class="form-group">
                <label>Keterangan File</label>
                <input class="form-control" type="text" name="ket_file" placeholder="Keterangan File">
            </div>

            <div class="form-group">
                <label>File</label>
                <input class="form-control" type="file" name="file" require>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>