<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Detail Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_content">
                    <div class="blog_title"><?= $berita->judul_berita; ?></div>
                    <div class="blog_meta">
                        <ul>
                            <li>Post on <a href="#"><?= date('d M Y H:i:s', strtotime($berita->tgl_berita)); ?></a></li>
                            <li>By <a href="#"><?= $berita->nama_user; ?></a></li>
                        </ul>
                    </div>
                    <div class="blog_image"><img src="<?= base_url('foto_berita/' . $berita->gambar_berita); ?>" alt=""></div>
                    <p><?= $berita->isi_berita; ?></p>
                    <div class="blog_images">
                        <div class="row">
                            <div class="col-lg-6 blog_images_col">
                                <div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div>
                            </div>
                            <div class="col-lg-6 blog_images_col">
                                <div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                    <div class="blog_social ml-lg-auto">
                        <span>Share: </span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Top Berita</div>
                        <div class="sidebar_latest">
                            <?php foreach ($latest_berita as $key) { ?>

                                <!-- Latest Course -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('foto_berita/' . $key->gambar_berita); ?>" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="<?= base_url('home/detail_berita/' . $key->slug_berita); ?>"><?= $key->judul_berita; ?></a></div>
                                        <div class="latest_date"><?= date('d M Y', strtotime($key->tgl_berita)) ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>