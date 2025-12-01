@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Daftar Inventaris Produk</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-lg shadow-sm">
            <i class="fas fa-plus-circle me-2"></i> Tambah Produk
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>SKU</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th class="text-center" width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td><strong>{{ $product->sku }}</strong></td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <span class="badge {{ $product->stock < 50 ? 'bg-danger' : 'bg-success' }} py-2 px-3 rounded-pill">
                                {{ $product->stock }} Unit
                            </span>
                        </td>
                        <td class="text-muted">{{ Str::limit($product->description, 60) ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk {{ $product->name }} ({{ $product->sku }})?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4 text-muted">
                            <i class="fas fa-box-open me-2"></i> Belum ada data produk. Silakan <a href="{{ route('products.create') }}" class="text-primary fw-bold">tambahkan produk baru</a>.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
