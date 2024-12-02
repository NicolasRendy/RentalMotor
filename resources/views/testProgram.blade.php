<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Icon Sampah</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .btn-trash {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px;
      background-color: #e74c3c;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-trash:hover {
      background-color: #c0392b;
    }
    .btn-trash i {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <button class="btn-trash">
    <i class="fas fa-trash"></i>
  </button>
</body>
</html>
