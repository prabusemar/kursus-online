@extends('layouts.backend.app', ['title' => 'Showcase'])

@section('content')
    <div class="row">
        @if ($showcases->isEmpty())
            <div class="col-12">
                <div class="card card-dark card-outline shadow-none">
                    <div class="card-body box-profile text-center">
                        <img src="{{ asset('showcase.svg') }}" class="img-fluid mb-3" width="375px" alt="No Showcase">
                        <h3 class="profile-username text-center">Belum ada showcase</h3>
                    </div>
                </div>
            </div>
        @else
            @foreach ($showcases as $showcase)
                <div class="col-lg-4 col-12">
                    <div class="card card-dark card-outline shadow-none">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-primary">
                                {{ $showcase->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ $showcase->cover }}" alt="cover">
                            </div>
                            <h3 class="profile-username text-center">{{ $showcase->name }}</h3>
                            <h3 class="text-center font-weight-bold">
                                {{ $showcase->title }}
                            </h3>
                            <p class="text-center text-secondary">{{ $showcase->description }}</p>
                            <hr>
                            <div>
                                <div>
                                    <i class="fas fa-circle text-xs"></i>
                                    Course
                                </div>
                                <p>{{ $showcase->course->name }}</p>
                            </div>
                            <hr />
                            <div>
                                <div>
                                    <i class="fas fa-circle text-xs"></i>
                                    User
                                </div>
                                <p>{{ $showcase->user->name }} - ({{ $showcase->user->email }})</p>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <style>
    /* Wrapper untuk sedikit mendorong footer ke bawah */
    .content {
        min-height: 650px;
        padding: 20px 0;
    }
    </style>
@endsection
