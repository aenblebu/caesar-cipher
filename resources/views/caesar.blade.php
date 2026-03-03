<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher</title>
</head>
<body>

<h2>Caesar Cipher Encrypt & Decrypt</h2>

<form method="POST" action="/caesar">
    @csrf

    <label>Text:</label><br>
    <input type="text" name="text" value="{{ $text ?? '' }}" required><br><br>

    <label>Shift:</label><br>
    <input type="number" name="shift" value="{{ $shift ?? '' }}" required><br><br>

    <button type="submit" name="action" value="encrypt">Encrypt</button>
    <button type="submit" name="action" value="decrypt">Decrypt</button>
</form>

@if(isset($result))
    <h3>Hasil:</h3>
    <p>{{ $result }}</p>
@endif

</body>
</html>