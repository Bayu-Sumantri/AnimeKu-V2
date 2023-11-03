<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lembar Kertas</title>
</head>
<style>
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  width: 210mm;
  height: 297mm;
  background-color: #ffffff;
}

.watermark {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.2;
}

.logo {
  position: absolute;
  bottom: 20px;
  right: 20px;
}

.judul {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
}

.paragraf {
  text-align: justify;
  margin-left: 20px;
  margin-right: 20px;
}

</style>
<body>
  <div class="watermark">
    {{-- <img src="https://example.com/watermark.png" alt="Watermark"> --}}
    <h1>Anime Ku</h1>
  </div>
  <div class="logo">
    {{-- <img src="https://example.com/logo.png" alt="Logo"> --}}
    <h1>Anime Ku</h1>
  </div>
  <div class="judul">
    Judul
  </div>
  <div class="paragraf">
    Isi paragraf
  </div>
</body>
</html>
