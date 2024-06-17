<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Form</title>
</head>
<body>
    <h1>Edit Contact Form</h1>
    <form action="/contact/update/<?= $contact['id'] ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= $contact['name'] ?>" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $contact['email'] ?>" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required><?= $contact['message'] ?></textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
