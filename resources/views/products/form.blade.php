<div class="card p-4">
    <div class="mb-3">
        <label for="sku" class="form-label fw-bold">SKU (Kode Produk)</label>
        <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku"
               value="{{ old('sku', $product->sku ?? '') }}" placeholder="Contoh: WID-001" required>
        @error('sku')
            <div class="invalid-feedback"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Nama Produk</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
               value="{{ old('name', $product->name ?? '') }}" placeholder="Contoh: Wireless Mouse X-treme" required>
        @error('name')
            <div class="invalid-feedback"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label fw-bold">Stok Saat Ini</label>
        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
               value="{{ old('stock', $product->stock ?? 0) }}" required min="0">
        @error('stock')
            <div class="invalid-feedback"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Deskripsi (Opsional)</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Detail produk seperti spesifikasi atau fitur...">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')
            <div class="invalid-feedback"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
        @enderror
    </div>
</div>
