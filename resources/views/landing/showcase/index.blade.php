@extends('layouts.frontend.app', ['title' => 'Showcase'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Showcase" subtitle="Kumpulan showcase project dari para member yang sudah belajar di sini"
        details="Di sini project para member yang sudah belajar kami tampilkan agar mampu meningkatkan motivasi belajar para member untuk saling sharing project dan menjadi inspirasi dalam membangun sebuah project."
        :data="$showcases" cardtitle="Showcase">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-source-code w-10 h-10 md:w-20 md:h-20"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
            <path d="M6 5l-2 2l2 2"></path>
            <path d="M10 9l2 -2l-2 -2"></path>
        </svg>
    </x-landing.hero-section>

    <!-- search section -->
    <x-landing.search-section :url="route('showcase')" />

    <!-- showcase section -->
    <div class="w-full bg-[#ccc5b9] p-3 border border-dashed border-[#403d39]">
        <div class="container mx-auto">
            <div class="flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @forelse ($showcases as $showcase)
                    <div class="min-w-full bg-[#333333] rounded-lg border border-[#4A90E2]">
                        <div>
                            <img src="{{ $showcase->cover }}" class="rounded-t-lg" />
                        </div>
                        <div class="p-4 space-y-2 text-sm text-[#CCC5B9] border-t border-dashed border-[#403d39]">
                            <h1 class="text-center font-semibold text-2xl text-[#FFFCF2]">
                                {{ $showcase->title }}
                            </h1>
                        </div>
                        <div class="p-4 border-t border-dashed border-[#403d39] text-[#CCC5B9] text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-info-circle w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg>
                                Tentang Showcase:
                            </p>
                            <p>{{ $showcase->description }}</p>
                        </div>
                        <div class="p-4 border-t border-dashed border-[#403d39] text-[#CCC5B9] text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="3" y1="19" x2="21" y2="19"></line>
                                    <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                                </svg>
                                Hasil Belajar:
                            </p>
                            <a href="{{ route('course.show', $showcase->course->slug) }}"
                                class="underline underline-offset-1 font-semibold text-[#EB5E28]">
                                {{ $showcase->course->name }}
                            </a>
                        </div>
                        <div class="flex p-4 space-x-4 border-t border-dashed border-[#403d39]">
                            <div>
                                <img src="{{ $showcase->user->avatar }}" alt=""
                                    class="object-cover w-12 h-12 rounded-full border">
                            </div>
                            <div>
                                <h4 class="font-bold text-[#FFFCF2]">{{ $showcase->user->name }}</h4>
                                <span class="text-xs text-[#CCC5B9]">
                                    {{ $showcase->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center">
                        <img src="{{ asset('showcase.svg') }}" alt="No Showcases Available" class="w-1/2 mx-auto">
                        <p class="text-xl font-semibold text-[#252422] mt-4">Belum ada showcase</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
