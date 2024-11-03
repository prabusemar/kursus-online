@extends('layouts.backend.app', ['title' => 'Review'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-input-search :url="route('admin.review.index')" placeholder="Search rating/course/user.." />
        </div>

        <div class="col-12">
            <x-card title="LIST REVIEW">
                @if ($reviews->isEmpty())
                    <div class="text-center p-4">
                        <img src="{{ asset('review.svg') }}" class="img-fluid mb-3" width="375px" alt="No Reviews">
                        <h3 class="profile-username text-center">Belum ada review</h3>
                        <p class="text-center text-secondary">Belum ada review yang tersedia.</p>
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>COURSE</th>
                                <th>USER</th>
                                <th>RATING</th>
                                <th>REVIEW</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $i => $review)
                                <tr>
                                    <td>{{ $reviews->firstItem() + $i }}</td>
                                    <td>{{ $review->course->name }}</td>
                                    <td>{{ $review->user->name }}</td>
                                    <td>{{ $review->rating }}</td>
                                    <td>{{ $review->review }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </x-card>
            @if (!$reviews->isEmpty())
                <div class="d-flex justify-content-end">
                    {{ $reviews->links() }}
                </div>
            @endif
        </div>
    </div>
    <style>
    /* Wrapper untuk sedikit mendorong footer ke bawah */
    .content {
        min-height: 650px;
        padding: 20px 0;
    }
    </style>
@endsection
