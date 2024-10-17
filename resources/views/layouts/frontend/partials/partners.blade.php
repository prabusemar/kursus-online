<section class="bg-[#FFFCF2] p-14 text-center overflow-hidden">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-[#252422] mb-8">Partner Kami</h2>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('logo-smea.png') }}" alt="Partner 1" class="w-40 mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('majalengka.png') }}" alt="Partner 2" class="w-40 mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('cikalong.png') }}" alt="Partner 3" class="w-40 mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('smkn1ciamis.png') }}" alt="Partner 4" class="w-40 mx-auto">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('smkn1kawali.png') }}" alt="Partner 5" class="w-40 mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS and CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 2,
            spaceBetween: 20,
            breakpoints: {
                768: {
                    slidesPerView: 4,
                },
            },
        });
    });
</script>

<!-- Custom CSS -->
<style>
    .swiper-container {
        overflow: hidden;
    }
    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
