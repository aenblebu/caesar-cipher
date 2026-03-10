<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher</title>
</head>
<body>

<h2>Caesar Cipher</h2>

<form action="/caesar/process" method="POST">
    @csrf

    <label>Plaintext</label><br>
    <input type="text" name="text"><br><br>

    <label>Shift</label><br>
    <input type="number" name="shift"><br><br>

    <button type="submit">Encrypt</button>

</form>

@if(isset($ciphertext))
    <h3>Hasil Ciphertext:</h3>
    <p>{{ $ciphertext }}</p>
@endif

</body>
</html>