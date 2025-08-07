<section class="banner-home">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= URL?>assets/img/fundo-banner1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= URL?>assets/img/fundo-banner2.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden" id="next">Next</span>
        </button>
    </div>
</section>

<script>
    setInterval(function(){
        document.getElementById('next').click();
    }, 5000)
</script>