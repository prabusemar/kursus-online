@extends('layouts.backend.app', ['title' => 'Category'])

@section('content')
    <div class="content"> <!-- Tambahkan kelas .content di sini -->
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-card-form title="CREATE NEW CATEGORY" url="{{ route('admin.category.index') }}" titleBtn="Create Category">
                        <x-input title="Title" type="text" name="name" placeholder="Enter category title"
                            :value="old('name')" />
                        <x-upload-file title="Image" name="image" :value="old('image')" />
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
