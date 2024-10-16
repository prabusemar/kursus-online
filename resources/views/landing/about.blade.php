@extends('layouts.frontend.app', ['title' => 'About Us'])

@section('content')
    <!-- Section Hero/About Us Header -->
    @include('layouts.frontend.partials.about-hero')

    <!-- Section Deskripsi -->
    <section class="bg-[#FFFCF2] p-10 w-full">
        <div class="container mx-auto flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/about-logo.png') }}" alt="SmartLearn Logo" class="w-3/4 mx-auto md:w-full">
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold text-[#252422] mb-4">Tentang SmartLearn</h2>
                <p class="text-lg text-[#252422]">
                    SmartLearn adalah platform pembelajaran online yang didedikasikan untuk meningkatkan keterampilan Anda di bidang teknologi. Kami menyediakan berbagai kursus dan materi pembelajaran yang dirancang untuk membantu Anda menjadi seorang profesional di bidang pengembangan perangkat lunak dan bidang lainnya.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Visi dan Misi -->
    @include('layouts.frontend.partials.visi-misi')

    <!-- Section Mentors -->
    @include('layouts.frontend.partials.mentors')

    <!-- Section Partners -->
    @include('layouts.frontend.partials.partners')
@endsection
