<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Nama Produk" required>
            <input type="number" name="price" placeholder="Harga" required>
            <textarea name="description" placeholder="Deskripsi" rows="4" required></textarea>
            <select name="category" required>
                <option value="Elektronik">Elektronik</option>
                <option value="Fashion">Fashion</option>
                <option value="Olahraga">Olahraga</option>
            </select>
            <button type="submit">Tambah Produk</button>
        </form>
    </div>
</body>
</html>
