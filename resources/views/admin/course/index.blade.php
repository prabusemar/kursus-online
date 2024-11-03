@extends('layouts.backend.app', ['title' => 'Course'])

@section('content')
    @if ($courses->isEmpty())
        <div class="text-center p-5">
            <img src="{{ asset('no-course.svg') }}" class="img-fluid mb-4" alt="No Courses" style="max-width: 375px;">
            <h3 class="text-muted">Belum ada kursus yang tersedia</h3>
        </div>
    @else
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-lg-4 col-12">
                    <div class="card card-dark card-outline shadow-none">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ $course->image }}" alt="cover">
                            </div>
                            <h3 class="profile-username text-center">{{ $course->name }}</h3>
                            <h3 class="text-success text-center font-weight-bold">
                                <sup>Rp</sup>
                                {{ moneyFormat(discount($course->price, $course->discount)) }}
                            </h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Enrolled</b> <span class="float-right text-bold">{{ $course->enrolled }}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Discount</b>
                                    <span class="float-right text-danger">
                                        {{ $course->discount }} %
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <b>Episodes</b>
                                    <span class="float-right text-dark">
                                        {{ $course->video }} <a href="">
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <a href="{{ Route('admin.video.index', $course->slug) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-list"></i>
                                List Eps
                            </a>
                            <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit mr-1"></i>
                                Edit
                            </a>
                            <a href="#" onclick="deleteData({{ $course->id }})" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash mr-1"></i>
                                Delete
                            </a>
                            <form id="delete-form-{{ $course->id }}"
                                action="{{ route('admin.course.destroy', $course->id) }}" method="POST"
                                style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
            {{ $courses->links() }}
        </div>
    @endif
    <style>
/* Wrapper untuk mendorong footer ke bawah */
.content {
    min-height: 800px; /* Tinggi minimum yang cukup besar */
    padding: 40px 0; /* Tambah padding atas bawah */
}

/* Styling untuk row dengan cards */
.row {
    display: flex;
    flex-wrap: wrap;
}

.col-lg-4 {
    margin-bottom: 30px; /* Tambah margin bottom pada card */
}

.card {
    height: 100%;
}

/* Pagination spacing */
.d-flex.justify-content-end {
    margin: 30px 0;
}

/* Styling untuk empty state */
.text-center.p-5 {
    min-height: 800px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.text-center.p-5 img {
    margin-bottom: 2rem;
}

.text-center.p-5 h3 {
    color: #6c757d;
}

@media (max-width: 767.98px) {
    .content {
        padding: 20px 0;
    }
    
    .text-center.p-5 {
        min-height: 600px;
    }
}
</style>
@endsection
