<html>
  <head>
    <title>@yield('title')</title>
      <link rel="stylesheet" href="forLending.css">
      <link rel="stylesheet" href="bootstrap-grid.css">
      <link rel="stylesheet" href="forContacts.css">
      <link rel="stylesheet" href="forMenu.css">
      <link rel="stylesheet" href="forOrder.css">
      <link rel="stylesheet" href="forReviews.css">
</head>
<body>
    @include('inc.header')

    @yield('content')

    @include('inc.footer')
</body>
</html>
