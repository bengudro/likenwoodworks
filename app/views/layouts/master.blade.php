<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
 <head>
{{--<!--
perishablepress.com/content-negotiation-for-xhtml-documents-via-php-and-htaccess
xmlplease.com/xhtml/xhtml5polyglot
schillmania.com/content/entries/2004/10/24/application-xhtml+xml
-->--}}{{--<!--
<¿php header("Vary: Accept");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) {
	header("Content-Type: application/xhtml+xml; charset=UTF-8");
	echo "<¿xml version=\"1.0\" encoding=\"UTF-8\"¿>"."\n"; ¿>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
<¿php } else {
	header("Content-Type: text/html; charset=UTF-8"); ¿>
<!DOCTYPE html>
<html>
 <head>
<¿php } ¿>
-->--}}
  <meta charset="UTF-8" />
  <title>Laravel Quickstart</title>
  <style>
  	html,
  	body {
  		background:  #fdf6e3;
  		color:       #657b83;
  		font-family: "Helvetica", "Arial", sans-serif;
  	}

  	table {
  		background:      #eee8d5;
  		color:           #dc322f;
  		border-collapse: collapse;
  		border:          0px solid #dc322f;
  	}

  	thead,
  	tfoot {
  		background:  #dc322f;
  		color:       #eee8d5;
  		font-weight: 600;
  	}
  	th, td { padding: 6px }
  </style>
 </head>
 <body>

@section('sidebar')
  This is the master sidebar.
@show

  <div class="container">
@yield('content')
  </div>

@yield('footer', 'Default Footer Content')

  <p>The current UNIX timestamp is {{{ time() }}}.</p>

 </body>
</html>
