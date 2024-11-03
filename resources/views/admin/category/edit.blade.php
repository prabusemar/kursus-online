@extends('layouts.backend.app', ['title' => 'Category'])

@section('content')
    <div class="content"> <!-- Tambahkan kelas .content di sini -->
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-card-form title="EDIT CATEGORY" url="{{ route('admin.category.index') }}" titleBtn="Update Category">
                        <x-input title="Title" type="text" name="name" placeholder="Enter category title"
                            :value="$category->name" />
                        <x-upload-file title="Image" name="image" :value="$category->image" />
                    </x-card-form>
                </form>
            </div>
        </div>
    </div>
    
    <style>
    /* Wrapper untuk sedikit mendorong footer ke bawah */
    .content {
        min-height: 650px;
        padding: 20px 0;
    }

    /* Spacing untuk row dan card */
    .row {
        margin-bottom: 20px;
    }

    .card-maroon {
        margin-bottom: 30px;
    }

    @media (max-width: 767.98px) {
        .content {
            padding: 15px 0;
        }
    }
    </style>
@endsection
