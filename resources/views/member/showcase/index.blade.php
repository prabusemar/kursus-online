@extends('layouts.backend.app', ['title' => 'Showcase'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-button-create title="ADD NEW SHOWCASE" :url="route('member.showcase.create')" />
            <x-card title="MY SHOWCASE">
                @if ($showcases->isEmpty())
                    <div class="text-center p-4">
                        <img src="{{ asset('showcase.svg') }}" class="img-fluid mb-3" style="width: 500px" alt="No Showcase">
                        <h3 class="profile-username text-center">Belum ada showcase</h3>
                        <p class="text-center text-secondary">Anda belum menambahkan showcase apapun. Silakan buat showcase
                            pertama Anda!</p>
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Project Name</th>
                                <th>Cover</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($showcases as $i => $showcase)
                                <tr>
                                    <td>{{ $showcases->firstItem() + $i }}</td>
                                    <td>{{ $showcase->title }}</td>
                                    <td>
                                        <img src="{{ $showcase->cover }}" class="img-fluid" width="20">
                                    </td>
                                    <td>{{ $showcase->description }}</td>
                                    <td>
                                        <x-button-edit :url="route('member.showcase.edit', $showcase->id)" />
                                        <x-button-delete :id="$showcase->id" :url="route('member.showcase.destroy', $showcase->id)" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </x-card>

            @if (!$showcases->isEmpty())
                <div class="d-flex justify-content-end">
                    {{ $showcases->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
