<form action="sections\tasks\handler.php" method="GET">
    <label for="name">Name:</label>
    <input name="name" id="name" type="text" required> <br><br>

    <label for="age">Age:</label>
    <input name="age" id="age" type="number" required> <br><br>

    <label for="gender">Gender:</label><br>
    <input name="gender" value="male" type="radio" required/>Male 
    <input name="gender" value="female"type="radio"  required/>Female</p>

    <label for="email">Email:</label>
    <input name="email" id="email" type="email" required>

    <br><br>
    <label for="bio">BIO:</label>
    <textarea name="bio" id="bio" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>