<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Berita</li>
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
            <div class="col-lg-8">
                <div class="courses_search_container">
                    <h2>Berita</h2>
                </div>
                <div class="courses_container">
                    <div class="row courses_row">

                        <!-- Course -->
                        <?php foreach ($berita as $key) { ?>
                            <div class="col-lg-6 course_col">
                                <div class="course">
                                    <div class="course_image"><img src="<?= base_url('foto_berita/' . $key->gambar_berita); ?>" alt="" style="width: 100%; height: 200px;"></div>
                                    <div class="course_body">
                                        <h3 class="course_title"><a href="<?= base_url('home/detail_berita/' . $key->slug_berita); ?>"><?= substr(strip_tags($key->judul_berita), 0, 28); ?>...</a></h3>
                                        <!-- <div class="course_teacher">User : <?= $key->nama_user; ?></div> -->
                                        <div class="course_text">
                                            <p><?= substr(strip_tags($key->isi_berita), 0, 100); ?>...</p>
                                        </div>
                                    </div>
                                    <div class="course_footer">
                                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                            <div class="course_info">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                <span><?= $key->nama_user; ?></span>
                                            </div>
                                            <div class="course_info">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span><?= $key->tgl_berita; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="row pagination_row">
                        <div class="col">
                            <?php
                            if (isset($paginasi)) {
                                echo $paginasi;
                            }
                            ?>
                        </div>
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