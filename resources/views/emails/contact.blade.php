<!DOCTYPE html>
<html>

<head>
    <title>Nouveau message depuis le site OGB</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Vous avez reçu un nouveau message depuis le site OGB</h2>

    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Sujet :</strong> {{ $data['subject'] }}</p>

    <hr>

    <p><strong>Message :</strong></p>
    <p>{{ nl2br(e($data['message'])) }}</p>
</body>

</html>