@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Project</h3>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
    </div>

    @if($projects->isEmpty())
        <div class="alert alert-info">Belum ada project yang ditambahkan.</div>
    @else
        <div class="list-group">
            @foreach($projects as $project)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('projects.show', $project) }}" class="fw-bold">{{ $project->title }}</a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
