@extends('layouts.frontend.app', ['title' => 'About Us'])

@section('content')
    <!-- Section Hero/About Us Header -->
    @include('layouts.frontend.partials.about-hero')

    <!-- Section Deskripsi -->
    <section class="bg-[#FFFCF2] p-10 w-full border-b-4 border-dashed border-[#FF6600]">
        <div class="container mx-auto flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('PPLG.png') }}" alt="SmartLearn Logo" class="w-3/4 mx-auto md:w-full">
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold text-[#252422] mb-4">Tentang SmartLearn</h2>
                <p class="text-lg text-[#252422]">
                    SmartLearn adalah platform pembelajaran online yang merupakan bagian dari RPLSmart, sebuah produk digital hasil karya jurusan Rekayasa Perangkat Lunak (RPL)/PPLG di SMKN 1 Banjar. Kami berfokus menyediakan pembelajaran IT yang berkualitas tinggi sesuai dengan kurikulum SMK, dengan tujuan untuk mendukung siswa dan masyarakat umum dalam mengembangkan keterampilan di bidang teknologi. Dari SMKN 1 Banjar untuk semua, kami hadir untuk membangun generasi yang lebih siap menghadapi dunia kerja.
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
