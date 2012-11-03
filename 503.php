<?php $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--NOTE: you can't use includes in a 503 document so put your header and footer content in here manually-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title><?php bloginfo('name'); ?></title>

	<link rel="copyright" href="#copyright" /> 
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />  
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<!-- add your 503 (maintenance or coming soon page) styles below -->
	<style>
		html, body { background: #EEE; color: #333; }

		/* format the address */
		#company-address { position: absolute; bottom: 1em; right: 0; font-size: .8em; }
		#company-address dt, #company-address dd { display: inline-block; margin: 0 1em; }
		#company-address dt:before { content: "\00a9 \0000a0"; }
		#company-address .locality:after { content: ","; }


	</style>



</head>

<body>

	<img src="/wp-content/themes/theme_condensed/images/img_coming-soon.png" alt="coming soon" />
		<dl id="company-address" class="vcard">

			<dt class="org fn">company name</dt>

			<dd class="adr">
				<span class="locality">City</span>
				<span class="region">State</span>
			</dd>
			<dd class="tel">phone number</dd>
			<dd class="email"><a href="mailto:email@address.com">email@address.com</a></dd>

		</dl>

</body>

</html>