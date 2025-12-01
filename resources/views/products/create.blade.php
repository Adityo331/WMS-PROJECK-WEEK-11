@extends('layouts.app')

@section('content')
    <div class="card p-5">
        <h3 class="mb-4 text-primary border-bottom pb-2">
            <i class="fas fa-plus-square me-2"></i> Tambah Produk Baru
        </h3>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            @include('products.form')

            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Batal / Kembali
                </a>
                <button type="submit" class="btn btn-primary px-4">
                    <i class="fas fa-save me-2"></i> Simpan Produk
                </button>
            </div>
        </form>
    </div>
@endsection
