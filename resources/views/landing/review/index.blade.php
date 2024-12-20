@extends('layouts.frontend.app', ['title' => 'Review'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Review" subtitle="Kumpulan review dari para member yang sudah membeli premium di sini"
        details="Di sini review yang diberikan kami tampilkan secara menyeluruh tanpa adanya perubahan review agar kami semakin baik dalam menyajikan konten-konten premium maupun gratis."
        :data="$reviews" cardtitle="Review">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-10 h-10 md:w-20 md:h-20"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
            <line x1="8" y1="9" x2="16" y2="9"></line>
            <line x1="8" y1="13" x2="14" y2="13"></line>
        </svg>
    </x-landing.hero-section>

    <!-- search section -->
    <x-landing.search-section :url="route('review')" />

    <!-- review section -->
    <div class="w-full bg-[#ccc5b9] p-3 border border-dashed border-[#0e0d0c]">
        <div class="container mx-auto">
            <div class="flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @forelse ($reviews as $review)
                    <div class="min-w-full bg-[#333333] rounded-lg border border-[#4A90E2]">
                        <div class="flex justify-between p-4">
                            <div class="flex space-x-4">
                                <div>
                                    <img src="{{ $review->user->avatar }}" alt=""
                                        class="object-cover w-12 h-12 rounded-full border">
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#FFFCF2]">{{ $review->user->name }}</h4>
                                    <span class="text-xs text-[#CCC5B9]">
                                        {{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-star fill-yellow-500 w-5 h-5" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                    </path>
                                </svg>
                                <span class="text-xl font-bold">
                                    {{ $review->rating }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4 space-y-2 text-sm text-[#CCC5B9] border-t border-dashed border-[#403d39]">
                            <p class="text-left">
                                {{ $review->review }}
                            </p>
                        </div>
                        <div class="p-4 border-t border-dashed border-[#403d39] text-[#CCC5B9] text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-message-2 w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                    </path>
                                    <line x1="8" y1="9" x2="16" y2="9"></line>
                                    <line x1="8" y1="13" x2="14" y2="13"></line>
                                </svg>
                                Review Course :
                            </p>
                            <a href="{{ route('course.show', $review->course->slug) }}"
                                class="underline underline-offset-1 font-semibold text-[#EB5E28]">
                                {{ $review->course->name }}
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full flex flex-col items-center justify-center text-center min-h-screen mx-auto">
                        <img src="{{ asset('review.svg') }}" alt="No Reviews Available" class="w-1/2 mx-auto">
                        <p class="text-xl font-semibold text-[#252422] mt-4">Belum ada review</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
