<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>API days, The First International event on APIs in Europe #apidays</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/apidays.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200' rel='stylesheet' type='text/css'>
  </head>
  <body>
   <div class="container">
	   	<div class="row-fluid bloc_share">
	    	<div class="span1">
		    	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://apidays.io" data-via="apidays2012" data-related="apidays2012">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

	    	<div class="span11">
	    		<div class="fb-like" data-href="http://apidays.io" data-send="true" data-width="450" data-show-faces="false" data-action="recommend" data-font="arial"></div>
	    	</div>
		</div>
		<br/>
	 	<div class="row-fluid">
	      	<div class="span4"><img src="img/logo.png" ></div>
				<div class="span8 title">
					The	Web	1.0	was	readable, the Web 2.0 was social, <span class='text_blue'><strong>now the web is programmable;</strong>through application programming interfaces, aka APIs.</span><br/><br/>
					<span class="text1">
						Web	 APIs are a unique opportunity for companies, governments and	
						developers to both better organize the governance of their IT into a scalable	
						and	 flexible model, either leverage a complete ecosystem around the	
						organization, exchanging data through the web for trillion of applications on billion of devices.
					</span><br/><br/>
					Because	each civilization has been	described by the way it	communicates and	
					makes exchanges,	API	are	the	beginning of a programmable	civilization.
				</div>
	  	  	</div>
	  	  	<br/><br/>
		  	<div class="row-fluid bloc_date">
				<div class="span7 date_lieu_event">
					
						DECEMBER 3, 2012 > DECEMBER 4, 2012 - Paris, @EPITA Porte d'Italie<br>
						<span class="textbig">The First	International event	on APIs	in Europe</span>
					
				</div>
				<div class="span5">
					<form action="http://fabernovel.us1.list-manage.com/subscribe/?u=007196e31b139575078fd3780&amp;id=439d4b3d82" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    		<div class="input-prepend form_email">
				      		<input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Your email" required>
					      	 <button action="submit" class="btn btn-large btn-info">Stay tuned</button>
				      	 </div>
				     </form>
				</div>
		    </div>
		    <div class="bloc_press">
		   	 <div class="row-fluid">
		   	 	<div class="span7"></div>
		    	<div class="span5 text_press">PRESS &amp; PARTNERSHIP : <span class="text_blue">contact@apidays.io</span></div>
		    </div>
			</div>
			<?php if (1) {?>
<!--			<img src="http://maps.googleapis.com/maps/api/staticmap?center=paris&zoom=13&size=600x300&sensor=false"/>-->
			<a name="orgnizer"></a>
			<div class="row-fluid">
				<div class="span2 title_section">
					ORGANIZERS
				</div>
				<div class="span10">
				</div>
		    </div>
		    <br/>
		   	<div class="row-fluid">
				<div class="span4">
					<a target='_blank' href='http://fabernovel.com/en/'><img src="http://www.fabernovel.com/images/images/faberlogo_SVG.svg" class="img-rounded"></a>
				</div>
				<div class="span8">
					<?php 
						$text = 'startups';
						if (isset($_GET['spider'])) $text = 'API';
					?>
					<a target='_blank' href="http://fabernovel.com/en/">faberNovel</a> helps large organizations to think and act like <?php echo $text;?>. faberNovel combines technology,design and emerging trends to invent new products, services, and experiences. 
Founded in 2003, faberNovel is based in Paris, San Francisco, New York and Moscow, has a team of 60 passionate people and works for large organizations such as : L'Or&eacute;al, Suez Environnement, Toys "R" Us, Danone, Essilor, bioM&eacute;rieux, SNCF, France TV.
				</div>
		    </div>
		  	 <br/>
		      <div class="row-fluid">
				<div class="span4">
					<a target='_blank' href='http://webshell.io'><img src="http://webshell.io/images/webshell-logo-rc1.png" class="img-rounded"></a>
				</div>
				<div class="span8">
					<a target='_blank' href="http://webshell.io">Webshell</a> enables developers to make advanced web and mobile applications based on APIs easily.
					Webshell has developped a shell for the web that developers can use to combine APIs of the programmable web in minutes and really program the web.
					On the Webshell scripting interface, developers combine efficiently both server-side and client side APIs in a console based Javascripty interface,  with authentication and auhtorization by Oauth1.0 or Oauth2.0 in one line of code.
					Webshell was created in 2012 by its team of 3 co-founders , in Paris, and manages the <a target='_blank' href="http://api500.com/">API rating agency blog</a> and the <a target='_blank' href="http://apijoy.tumblr.com/">{"apis":"the joy"} blog</a>.
				</div>
		    </div>
		    
		     <?php } ?>
		    <?php if (1) {?>
		    <a name="speakers"></a>
		    <div class="row-fluid">
				<div class="span2 title_section">
					SPEAKERS
				</div>
				<div class="span10">
				</div>
		    </div>
		    <br/>
		    <div class="row-fluid">
				<div class="span4">
					<a target='_blank' href="http://elastic.io/"><img src="img/sponsors/elasticio_logo_big.png" class="img-rounded"></a>
				</div>
				<div class="span8">
					Renat Zubairov is a co-founder of <a target='_blank' href="http://elastic.io/">elastic.io</a>, experienced hacker,
product owner and agile evangelist. Renat is passionate about SaaS,
Application Integration and APIs. He is a speaker on international
conferences, user groups and active open source community member.
Before elastic.io he was working as Product Owner at Talend, Sopera
GmbH and Nokia.
				</div>
		    </div>
		    <br/>
		      <div class="row-fluid">
				<div class="span2">
					<a target='_blank' href="http://twitter.com/kinlane"><img src="http://m4.licdn.com/mpr/mpr/shrink_150_150/p/4/000/15a/274/342a544.jpg" class="img-rounded"></a>
				</div>
				<div class="span10 texte_bio">
					Kin Lane is a technology professional with an obsession for APIs. He is a renowned blogger in the API sphere: <a target='_blank' href="http://apivoice.com">apivoice.com</a> and <a target='_blank' href="http://apievangelist.com">apievangelist.com</a>.
				</div>
		    </div>
		 	  <?php } ?>
			
	    </div>
	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#mce-EMAIL').focus(function() {
			 	$('#mce-EMAIL').val('');
			});
		})
	</script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=223599037652849";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
  </body>
</html>