<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Confirmation</title>
    <link rel="stylesheet" href="assets/css/confirmation.css">
</head>
<body>
    <div class="confirmation-page">
        <h1>Hello!</h1>
        <p>I'm delighted that you chose me to assist you. Please leave a message so I can help you further.</p>
        <div class="message-form">
            <h2>Leave a Message</h2>
            <form action="traitement_message.php" method="post">
                <textarea name="message" placeholder="Write your message here"></textarea>
                <input type="submit" name="submit" value="Send">
             </form>
        </div>

    </div>
</body>
</html>
