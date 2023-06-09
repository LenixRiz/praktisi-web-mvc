<!--Section: Contact v.2-->
<section class="mb-4 container">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Hubungi Kami</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Anda mempunyai pertanyaan? Tolong hubungi kami secara langsung. Tim kami akan segera menghubungi anda dalam 4 menit.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">
                    <div class="md-form mb-0">
                        <label for="name" class="">Nama</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">
                    <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="md-form mb-0">
                        <label for="subject" class="">Subjek</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form mb-2">
                        <label for="message">Pesan</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left mt-3">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Kirim</a>
            <a href="<?= BASEURL; ?>/home" class="btn btn-secondary" onclick="document.getElementById('contact-form').submit();">Kembali</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Malang, Jawa Timur, Indonesia. 65391.</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 62 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>contact@stimata.ac.id</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->