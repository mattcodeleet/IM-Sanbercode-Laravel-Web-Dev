<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Laravel</title>
</head>
<body>
    <h1>Buat account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="first_name" required><br><br>
        <label>Last Name:</label><br><br>
        <input type="text" name="last_name" required><br><br>
        <label>Gender:</label><br><br>
        <input type="radio" name="gen" value="m">Male<br>
        <input type="radio" name="gen" value="f">Female<br>
        <input type="radio" name="gen" value="oth">Other<br><br>
        <label>Nationality:</label><br><br>
        <select name="nation">
            <option value="indo">Inonesian</option>
            <option value="singa">Singaporean</option>
            <option value="malay">Malaysian</option>
            <option value="aus">Australian</option>
            <option value="oth">Other</option>
        </select><br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="lang" value="indo">Bahasa Indonesia<br>
        <input type="checkbox" name="lang" value="eng">English<br>
        <input type="checkbox" name="lang" value="oth">Other<br><br>
        <label>Bio:</label><br><br>
        <textarea name="bio" cols="30" rows="10" required></textarea><br>
        <a href="/"><button type="button">Kembali</button></a>
        <input type="submit" value="Sign Up">
        
    </form>
</body>
</html>