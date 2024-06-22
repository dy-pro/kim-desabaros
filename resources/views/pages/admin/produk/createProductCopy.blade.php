<x-admin-layout>
    <x-slot:title>t</x-slot:title>
    <x-slot:content>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nama Produk" required>
            <input type="file" name="image" placeholder="" required>
            <input type="number" name="stock" placeholder="stock" required>
            <input type="number" name="price" placeholder="Harga" required>
            <input type="number" name="code" placeholder="code" required>
            <textarea name="description" placeholder="Deskripsi" rows="4" required></textarea>
            <select name="category[]" class="js-example-basic-multiple" multiple id="category" required>
                <option value="Elektronik" selected="selected">Elektronik</option>
                <option value="Fashion">Fashion</option>
                <option value="Olahraga">Olahraga</option>
            </select>
            <button type="submit">Tambah Produk</button>
        </form>
    </div>
    
    <script>
        $(document).ready(function() {

                $(".js-example-basic-multiple").select2({
            maximumSelectionLength: 2
        });
});
    </script>
    </x-slot:content>
</x-admin-layout>