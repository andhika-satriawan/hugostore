<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    @include('partials.auth.style')
    @stack('add-style')
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            @yield('auth-content')
        </div>
    </div>

    @stack('add-script')
</body>

</html>
