<html>
<head>
    <title>Caesar Cipher</title>
</head>
<body>

<h2>Caesar Cipher Enkripsi & Dekripsi</h2>

<form method="POST" action="/caesar/process">
    @csrf

    <label>Text:</label><br>
    <input type="text" name="text" value="{{ $plaintext ?? '' }}" required><br><br>

    <label>Shift:</label><br>
    <input type="number" name="shift" value="{{ $shift ?? '' }}" required><br><br>

    <button type="submit" name="action" value="encrypt">Enkripsi</button>
    <button type="submit" name="action" value="decrypt">Dekripsi</button>

</form>

@if(isset($ciphertext))
<h3>Hasil:</h3>
<p>{{ $ciphertext }}</p>
@endif

</body>
</html>