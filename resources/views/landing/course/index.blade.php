@extends('layouts.frontend.app', ['title' => 'Course'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Course"
        subtitle="Kumpulan video tutorial yang dapat membantu proses belajar Anda secara sistematis"
        details="Di sini kita akan mempelajarinya semua dari awal. Jangan terlalu lama berpikir! Karena di sini tidak hanya mengajarkan tentang fundamental, tetapi juga dengan studi kasus di dalamnya."
        :data="$courses" cardtitle="Course">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop w-10 h-10 md:w-20 md:h-20"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="3" y1="19" x2="21" y2="19"></line>
            <rect x="5" y="6" width="14" height="10" rx="1"></rect>
        </svg>
    </x-landing.hero-section>

    <!-- search section -->
    <x-landing.search-section :url="route('course.index')" />

    <!-- course section -->
    <div class="w-full bg-[#ccc5b9] p-3 border border-dashed border-[#403D39]">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-5 items-start">
                @foreach ($courses as $course)
                    <x-landing.course-item :course="$course" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
