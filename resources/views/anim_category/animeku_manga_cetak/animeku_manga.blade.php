<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh PDF</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  text-align: center;
  background-image: url('{{ asset('/anime/img/background/deadpool.png') }}');
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}

    .container {
      width: 80%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-weight: bold;
    }

    p {
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>{{ old('judul', optional($animeku)->judul) }}</h1>
    <p>{{ old('manga_animeku', optional($animeku->episode)->manga_animeku) }}</p>
  </div>
</body>
</html>
