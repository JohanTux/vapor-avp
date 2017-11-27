<!DOCTYPE html><html lang="en">
<head>	
<meta charset="UTF-8" />
{{-- <meta name="viewport" , content="initial-scale=1.000001"> --}}
<meta name="description" content = "Z Gate Crashers is The Monster-Bashing Card Game You've Been Waiting For!">
<meta name="keywords" content= "card, game, party, gatecrashers, fun, dark, doom, zombie, ghost, ghoul, graveyard">
<title>CheesyPoof AVP</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
{{-- Custom styles for this template --}}
@yield('customstyle')
</head>

<body >
@include('layouts.header')


@yield('content')


@include('layouts.footer')
</body>
</html>