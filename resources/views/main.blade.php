<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Высота страницы не меньше высоты видимой области */
      }

      .content {
        flex: 1; /* Растягиваем содержимое на всю оставшуюся высоту */
      }

      .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px;
        text-align: center;
      }

      @yield('style')
    </style>
</head>
<body>
  <div style="display: flex;flex-direction: column;min-height: 100%;">
    @include('header')
    <div class="content">
      @yield('content')
    </div>
    @include('footer')
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('script')
</html>
