<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/landingpage/dashboardAdmin.css">
    <link rel="stylesheet" href="/css/landingpage/yielddashboardAdmin.css">
    <link rel="stylesheet" href="/css/landingpage/checkout.css">
    <link rel="stylesheet" href="/css/landingpage/updateinfo.css">
</head>

<body>
    @include('/landingpage/section/navbar-dashboardAdmin')
    @include('/landingpage/section/sidebar-dashboardAdmin')
    <main>
        @yield('Editlandingpage-dashboardAdmin')
        @yield('landingpage-dashboardAdmin')
        @yield('updateInfo-dashboardAdmin')
        @yield('detailupdateInfo-dashboardAdmin')
        @yield('detailProduct-dashboardAdmin')
        @yield('AllProduct-dashboardAdmin')
        @yield('CreateProduct-dashboarAdmin')
        @yield('EditProduct-dashboarAdmin')
    </main>
</body>

</html>
