@extends('layouts.app')

@section('content')
    <div class="card p-5">
        <h3 class="mb-4 text-warning border-bottom pb-2">
            <i class="fas fa-edit me-2"></i> Edit Produk: {{ $product->name }}
        </h3>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            @include('products.form', ['product' => $product])

            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Batal / Kembali
                </a>
                <button type="submit" class="btn btn-warning px-4 text-dark">
                    <i class="fas fa-sync-alt me-2"></i> Update Produk
                </button>
            </div>
        </form>
    </div>
@endsection
