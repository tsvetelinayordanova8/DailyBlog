<footer class="tm-footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" id="firstContainer">

                <div class="tm-footer-content-box">
                    <h3 class="tm-grey-text tm-title tm-footer-content-box-title">Относно Daily Blog</h3>
                    <div class="tm-gray-bg">
                        <p>Блог със статии относно различни книги от много жанрове, автори и издателства. Всеки може да
                            сподели мнението си за определени книги и да даде мнение относно любимите мъ автори и
                            поредици.</p>
                    </div>
                </div>

            </div>

            <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
            <div class="clearfix hidden-lg-up"></div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" id="secondContainer">

                <div class="tm-footer-content-box">

                    <h3 class="tm-grey-text tm-title tm-footer-content-box-title">Контакти</h3>
                    <p class="tm-margin-b-30">
                        Email: dailyblog@gmail.com <br>
                        Phone: +359 88 745 2856 <br>
                        Address: бул.България 136, Пловдив, България
                    </p>
                    <hr class="tm-margin-b-30">
                    <p class="tm-margin-b-30" id="icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </p>
                    <hr class="tm-margin-b-30">
                    <a href="#" class="tm-btn tm-btn-gray text-uppercase">Read More</a>

                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-footer-content-box">

                    <h3 class="tm-grey-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                    <div class="tm-margin-b-30">
                        <img src="<?= get_template_directory_uri() ?>/img/img1.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                        <img src="<?= get_template_directory_uri() ?>/img/img2.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                        <img src="<?= get_template_directory_uri() ?>/img/img3.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                        <img src="<?= get_template_directory_uri() ?>/img/img4.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                        <img src="<?= get_template_directory_uri() ?>/img/img5.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                        <img src="<?= get_template_directory_uri() ?>/img/img6.jpg" alt="Image"
                            class="tm-footer-thumbnail">
                    </div>
                    <a href="http://localhost/dailyBlog/blog" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                </div>


            </div>


        </div>

        <div class="row">
            <div class="col-xs-12 tm-copyright-col">
                <p class="tm-copyright-text">&copy;DailyBlog 2023</p>
            </div>
        </div>
    </div>
</footer>

<!-- load JS files -->
<script src="<?= get_template_directory_uri() ?>/js/jquery-1.11.3.min.js"></script>
<!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
<script src="<?= get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 8000); // Change image every 2 seconds
    }
</script>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>


<?php
wp_footer();
?>
</body>

</html>