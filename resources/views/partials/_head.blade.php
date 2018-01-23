<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="{{ url('css/style.css') }}" rel="stylesheet">
<title>Laravel Blog @yield('title')</title> <!--Change this title for each page-->
@yield('stylesheet')
<!-- by adding yield('stylesheet') in the header, it will allows to use different css
  in different pages-->
  <!--
    For example: in create.blade.php, to apply a specific css file to this view
    by just adding: css location into the section area.
  -->
