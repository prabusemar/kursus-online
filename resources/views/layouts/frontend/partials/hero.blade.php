<div class="w-full py-10 text-[#FFFCF2] bg-[#252422]">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="col-span-12 md:col-span-7 flex flex-col gap-4 lg:gap-8">
                <h1
                    class="text-center md:text-start text-2xl font-semibold md:text-6xl text-white flex items-center justify-center md:justify-start">
                    <img src="{{ asset('PPLG.png') }}" alt="PPLG Logo" class="w-16 h-16 md:w-20 md:h-20 mr-3">
                    SmartLearn
                </h1>
                <p class="text-sm md:text-lg text-center md:text-start text-[#CCC5B9]">
                    SmartLearn adalah platform pembelajaran online yang menyediakan kursus coding lengkap dengan materi mudah dipahami. Pelajari bahasa pemrograman dan framework seperti Laravel, Vue.js, React.js, Tailwind CSS, JavaScript, TypeScript, React Native, Python, Java, PHP dan Node.js
                </p>
                <div class="flex flex-row gap-4 items-center justify-center md:justify-start">
                    <a href="{{ route('course.index') }}"
                        class="px-4 py-2 rounded-lg bg-[#6060F6] text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-[#252422]">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="19" x2="21" y2="19"></line>
                            <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                        </svg>
                        Lihat Course
                    </a>
                    <a href="{{ route('showcase') }}"
                        class="px-4 py-2 rounded-lg bg-[#BD562D] text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-[#EB5E28]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-source-code w-5 h-5"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                            <path d="M6 5l-2 2l2 2"></path>
                            <path d="M10 9l2 -2l-2 -2"></path>
                        </svg>
                        Lihat Showcase
                    </a>
                </div>
            </div>
            <div class="hidden md:flex md:col-span-5">
                <img src="{{ asset('learn.svg') }}" class="object-cover">
            </div>
        </div>
    </div>
</div>
