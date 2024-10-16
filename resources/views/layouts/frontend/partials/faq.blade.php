<!-- Section FAQ -->
<section class="bg-[#FFFCF2] p-10 border-t-4 border-dashed border-[#BD562D]">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-[#252422] mb-5">FAQ</h2>
        <p class="text-[#252422] text-base md:text-lg mb-8">
            Pertanyaan yang sering diajukan tentang pembelajaran di SmartLearn.
        </p>
        <div class="flex flex-col gap-4 text-left">
            <div x-data="{ open: false }" class="bg-[#CCC5B9] rounded-lg p-4">
                <button @click="open = !open" class="w-full text-left font-semibold text-[#252422]">
                    Apa itu SmartLearn?
                    <span x-show="!open" class="float-right">+</span>
                    <span x-show="open" class="float-right">-</span>
                </button>
                <div x-show="open" class="mt-2 text-[#252422]" x-transition>
                    SmartLearn adalah platform pembelajaran online yang menawarkan berbagai kursus dan mentoring dari para profesional.
                </div>
            </div>
            <div x-data="{ open: false }" class="bg-[#CCC5B9] rounded-lg p-4">
                <button @click="open = !open" class="w-full text-left font-semibold text-[#252422]">
                    Bagaimana cara mendaftar?
                    <span x-show="!open" class="float-right">+</span>
                    <span x-show="open" class="float-right">-</span>
                </button>
                <div x-show="open" class="mt-2 text-[#252422]" x-transition>
                    Anda dapat mendaftar dengan mengklik tombol "Daftar Gratis!" di halaman utama dan mengisi formulir pendaftaran.
                </div>
            </div>
            <div x-data="{ open: false }" class="bg-[#CCC5B9] rounded-lg p-4">
                <button @click="open = !open" class="w-full text-left font-semibold text-[#252422]">
                    Apakah ada program diskon?
                    <span x-show="!open" class="float-right">+</span>
                    <span x-show="open" class="float-right">-</span>
                </button>
                <div x-show="open" class="mt-2 text-[#252422]" x-transition>
                    Ya, kami sering menawarkan diskon dan promosi khusus untuk pengguna baru maupun yang sudah terdaftar.
                </div>
            </div>
            <div x-data="{ open: false }" class="bg-[#CCC5B9] rounded-lg p-4">
                <button @click="open = !open" class="w-full text-left font-semibold text-[#252422]">
                    Bagaimana cara mengakses kursus yang sudah dibeli?
                    <span x-show="!open" class="float-right">+</span>
                    <span x-show="open" class="float-right">-</span>
                </button>
                <div x-show="open" class="mt-2 text-[#252422]" x-transition>
                    Setelah pembelian, Anda dapat mengakses kursus melalui dashboard akun Anda dengan masuk ke bagian "My Course".
                </div>
            </div>
            <div x-data="{ open: false }" class="bg-[#CCC5B9] rounded-lg p-4">
                <button @click="open = !open" class="w-full text-left font-semibold text-[#252422]">
                    Apakah ada batas waktu untuk menyelesaikan kursus?
                    <span x-show="!open" class="float-right">+</span>
                    <span x-show="open" class="float-right">-</span>
                </button>
                <div x-show="open" class="mt-2 text-[#252422]" x-transition>
                    Tidak ada batas waktu. Anda dapat menyelesaikan kursus sesuai kecepatan belajar Anda sendiri.
                </div>
            </div>
        </div>
    </div>
</section>
