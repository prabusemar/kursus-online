@extends('layouts.backend.app', ['title' => 'Category'])

@section('content')
    <div class="content"> <!-- Tambahkan kelas .content -->
        <div class="row">
            <div class="col-12">
                <x-button-create title="ADD NEW CATEGORY" :url="route('admin.category.create')" />

                <x-card title="LIST CATEGORY">
                    @if ($categories->isEmpty())
                        <div class="text-center p-5">
                            <img src="{{ asset('loading-webpage.svg') }}" class="img-fluid mb-4" width="375px" alt="No Data"
                                style="max-width: 200px;">
                            <h3 class="text-muted">Belum ada kategori</h3>
                        </div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>NAME</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $i => $category)
                                    <tr>
                                        <td>{{ $categories->firstItem() + $i }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <img src="{{ $category->image }}" class="img-fluid" width="50">
                                        </td>
                                        <td>
                                            <x-button-edit :url="route('admin.category.edit', $category->id)" />
                                            <x-button-delete :id="$category->id" :url="route('admin.category.destroy', $category->id)" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </x-card>

                @if (!$categories->isEmpty())
                    <div class="d-flex justify-content-end">{{ $categories->links() }}</div>
                @endif
            </div>
        </div>
    </div>
    
    <style>
    /* Wrapper untuk sedikit mendorong footer ke bawah */
    .content {
        min-height: 650px;
        padding: 20px 0;
    }

    /* Spacing untuk alert welcome */
    .alert {
        margin-bottom: 1.5rem;
    }

    /* Spacing untuk baris cards */
    .row {
        margin-bottom: 20px;
    }

    /* Spacing untuk chart card */
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
