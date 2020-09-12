<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up !</title>
</head>
<body>
<h1>Buat Account Baru !</h1>
<form action="/welcome" method="post">
    @csrf
            <label for="first">First Name</label><br>
            <input type="text" id="first" name="first"><br>
            <label for="last">Last Name</label><br>
            <input type="text" id="last" name="last">
            <p>Gender :</p>
            <input type="radio" name="gender" value="Male">Male <br>
            <input type="radio" name="gender" value="Female">Female <br>
            <input type="radio" name="gender" value="Other">Other <br>
            <br><br>
            <label for="ctr">Nationality:</label><br>
            <select name="negara" id="ctr">
                <option value="indonesia">Indonesia</option>
                <option value="Argentina">Argentina</option>
                <option value="Inggris">Inggris</option>
                <option value="Jerman">Jerman</option>
            </select>
            <p>Language Spoken :</p>
                <input type="checkbox" name="bahasa1" value="Indonesia">Bahasa Indonesia <br>
                <input type="checkbox" name="bahasa2" value="English">English <br>
                <input type="checkbox" name="bahasa3" value="Other">Other <br><br><br>
            <label for="bio">Bio :</label><br>
            <textarea name= "Bio" cols="70" rows="7" id="bio"></textarea><br>
            <input type="submit" value="registrasi">
</form>
</body>
</html>