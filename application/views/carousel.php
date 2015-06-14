<div id="myCarousel" class="carousel slide">

    <div class="carousel-inner">

        <div class="item active" data-interval="10000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-05.png" alt="slider 01">

        </div>

        <div class="item" data-interval="5000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-06.png" alt="slider 02">

        </div>

        <div class="item" data-interval="5000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-03.png" alt="slider 03">

        </div>

        <div class="item" data-interval="5000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-04.png" alt="slider 04">

        </div>

        <div class="item" data-interval="5000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-01.png" alt="slider 05">

        </div>

        <div class="item" data-interval="5000">

            <img src="<?php echo asset_url(); ?>img/carousel/slide-02.png" alt="slider 06">

        </div>

    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

</div>

<script type="text/javascript">
    $('.carousel').on('slid.bs.carousel', function () {
        var carouselData = $(this).data('bs.carousel');
        var currentIndex = carouselData.getActiveIndex();

        window.setTimeout(function() {
            $('.carousel').carousel('next');
        }, $(carouselData.$items[currentIndex]).data('interval'));
    });

    // init carousel
    $('.carousel').carousel({
        interval: false
    });

    // set initial timeout for active slide data-interval
    window.setTimeout(function () {
        $('.carousel').carousel('next');
    }, $('.carousel .active').data('interval'));

</script>