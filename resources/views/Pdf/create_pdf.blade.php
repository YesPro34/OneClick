<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>contacts</title>
</head>
<body>
  @foreach ( $data as  $contact)
  <h1>Les informations de contacts</h1>
    <p>name:{{ $contact->name }}</p>
    <p>email:{{ $contact->email }}</p>
    <p>phone:{{ $contact->phone }}</p>
    <p>message:{{ $contact->message }}</p>
  @endforeach
  
</body>
</html>