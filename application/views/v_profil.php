<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Profil Sekolah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-4 text-center">
                <img src="<?= base_url('foto_kepsek/' . $profil->foto_kepsek); ?>" alt="">
                <br>
                <h4><?= $profil->kepala_sekolah; ?></h4>
                <h4>NIP : <?= $profil->nip; ?></h4>

            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input type="text" class="form-control" value="<?= $profil->nama_sekolah; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="<?= $profil->alamat; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" class="form-control" value="<?= $profil->no_telpon; ?>" readonly>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <h3>Sejarah</h3>
                <p><?= $profil->sejarah; ?></p>
                <br>
                <h3>Visi</h3>
                <p><?= $profil->visi; ?></p>
                <br>
                <h3>misi</h3>
                <p><?= $profil->misi; ?></p>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>