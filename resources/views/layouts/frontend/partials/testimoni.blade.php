<!-- Section Testimoni -->
<section class="bg-[#FFFCF2] p-10 border-t-4 border-dashed border-[#BD562D] overflow-hidden">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-[#252422] mb-5">Apa Kata Mereka?</h2>
        <p class="text-[#252422] text-base md:text-lg mb-8">
            Testimoni dari pengguna yang telah belajar di SmartLearn melalui materi video.
        </p>
        <!-- Slider Container -->
        <div class="swiper-container relative">
            <div class="swiper-wrapper">
                <!-- Testimoni 1 -->
                <div class="swiper-slide p-8 text-center flex flex-col items-center">
                    <img src="{{ asset('Eye Patch.svg') }}" alt="John Doe" class="w-24 h-24 rounded-full mb-4 object-cover mx-auto">
                    <p class="text-[#252422] mb-4 italic">"Video pembelajaran di SmartLearn sangat membantu saya untuk memahami konsep-konsep coding dengan lebih cepat. Penjelasannya sangat jelas dan terstruktur!"</p>
                    <h3 class="font-semibold text-[#252422]">John Doe</h3>
                    <p class="text-sm text-[#252422]">Software Engineer</p>
                </div>
                <!-- Testimoni 2 -->
                <div class="swiper-slide p-8 text-center flex flex-col items-center">
                    <img src="{{ asset('Beautiful lady.svg') }}" alt="Jane Smith" class="w-24 h-24 rounded-full mb-4 object-cover mx-auto">
                    <p class="text-[#252422] mb-4 italic">"Materi videonya sangat interaktif, sehingga saya tidak mudah bosan saat belajar. Ditambah lagi, setiap video memberikan studi kasus yang relevan dengan kebutuhan industri."</p>
                    <h3 class="font-semibold text-[#252422]">Jane Smith</h3>
                    <p class="text-sm text-[#252422]">UI/UX Designer</p>
                </div>
                <!-- Testimoni 3 -->
                <div class="swiper-slide p-8 text-center flex flex-col items-center">
                    <img src="{{ asset('Trendy.svg') }}" alt="Michael Johnson" class="w-24 h-24 rounded-full mb-4 object-cover mx-auto">
                    <p class="text-[#252422] mb-4 italic">"Belajar dengan video tutorial di SmartLearn membuat saya bisa belajar kapan saja dan di mana saja. Sangat fleksibel dan sesuai dengan jadwal saya."</p>
                    <h3 class="font-semibold text-[#252422]">Michael Johnson</h3>
                    <p class="text-sm text-[#252422]">Data Analyst</p>
                </div>
                <!-- Testimoni 4 -->
                <div class="swiper-slide p-8 text-center flex flex-col items-center">
                    <img src="{{ asset('Trendy lady.svg') }}" alt="Emily Davis" class="w-24 h-24 rounded-full mb-4 object-cover mx-auto">
                    <p class="text-[#252422] mb-4 italic">"Video yang disajikan sangat lengkap dan menyeluruh. Saya bisa memutar ulang materi yang sulit hingga benar-benar paham."</p>
                    <h3 class="font-semibold text-[#252422]">Emily Davis</h3>
                    <p class="text-sm text-[#252422]">Freelance Developer</p>
                </div>
                <!-- Testimoni 5 -->
                <div class="swiper-slide p-8 text-center flex flex-col items-center">
                    <img src="{{ asset('Chef Woman.svg') }}" alt="Sarah Lee" class="w-24 h-24 rounded-full mb-4 object-cover mx-auto">
                    <p class="text-[#252422] mb-4 italic">"Dengan materi video yang terus di-update, saya selalu mendapatkan pengetahuan terbaru yang up-to-date di bidang teknologi."</p>
                    <h3 class="font-semibold text-[#252422]">Sarah Lee</h3>
                    <p class="text-sm text-[#252422]">Product Manager</p>
                </div>
            </div>
            <!-- Swiper Navigation -->
            <div class="swiper-pagination mt-4"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Include Swiper.js Library -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper.js Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    });
</script>

<!-- Custom Styles for Swiper Navigation -->
<style>
    .swiper-container {
        position: relative;
        overflow: hidden; /* Prevent horizontal scrolling */
    }
    .swiper-button-next,
    .swiper-button-prev {
        color: #252422;
    }
    .swiper-pagination-bullet {
        background: #252422;
    }
    .swiper-button-next,
    .swiper-button-prev {
        top: 50%;
        transform: translateY(-50%);
    }
</style>
