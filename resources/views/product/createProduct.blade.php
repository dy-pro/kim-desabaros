<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>Tambah Produk</title>
    <style>
        /* Styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
        }
        input, select, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nama Produk" required>
            <input type="file" name="image" placeholder="" required>
            <input type="number" name="stock" placeholder="" required>
            <input type="number" name="price" placeholder="Harga" required>
            <input type="number" name="code" placeholder="code" required>
            <textarea name="description" placeholder="Deskripsi" rows="4" required></textarea>
            <select name="category[]" class="form-control"  id="category" required>
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
</body>
</html>
