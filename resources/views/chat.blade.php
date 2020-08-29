<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body >
    <div id="app">
        <h1 class="mt-5">Chat application</h1>
       <chat-log :messages="messages"></chat-log>
       <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
</body>
</html>