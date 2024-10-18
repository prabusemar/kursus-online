@extends('layouts.backend.app', ['title' => 'Category'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-button-create title="ADD NEW CATEGORY" :url="route('admin.category.create')" />

            <x-card title="LIST CATEGORY">
                @if ($categories->isEmpty())
                    <div class="text-center p-5">
                        <img src="{{ asset('loading-webpage.svg') }}" class="img-fluid mb-4" alt="No Data"
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
@endsection
