<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>qrcode</title>

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

  <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>
</head>

<body>
  <main>

    <div class="container-lg">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div id="reader"></div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

    <div id="result"></div>

  </main>

  <script>
    const scanner = new Html5QrcodeScanner('reader', {
      qrbox: {
        width: 250,
        height: 250,
      },
      fps: 20,
    });

    scanner.render(success, error);

    function success(result) {
      document.getElementById('result').innerHTML = `
        <h2>WELCOME</h2>
        <p><a>${result}</a></p>
        `;

      scanner.clear();
      document.getElementById('reader').remove();

        // Redirect to my simple portfolio
        window.location.href = "http://localhost:5173/";
    }
   
    function error(err) {
      console.error(err);
    }
  </script>
</body>

</html>