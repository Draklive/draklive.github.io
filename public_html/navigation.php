<?php
	$page_directory = htmlspecialchars($_GET["directory"]);
	$filename = htmlspecialchars($_GET["name"]);
	$filepath = "../pages/" . $page_directory . "/" . $filename . ".html";
	if (!file_exists($filepath)) {
		header("Location: http://rosendalsgymnasiet.hexeye.se/hem");
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <title>Rosendalsgymnasiet</title>
		<meta id="the-viewport" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/res/image/favicon.png">
		<link rel="stylesheet" type="text/css" href="/res/style/navigation.css">
		<link rel="stylesheet" type="text/css" href="/res/style/footer.css">
		<link rel="stylesheet" type="text/css" href="/res/style/content.css">
    </head>
    <body>
		<div class="nav-background-image"></div>
		<div class="nav-body">
		<div class="nav-spacer"></div>
		<div class="nav-igation">
			<div class="nav-container">
				<div class="nav-header">
					<a class="nav-home-button" href="/hem"><image class="nav-logo" src="/res/image/logga-white.png"></image><span class="nav-logo-text">Rosendalsgymnasiet</span></a>
					<label class="nav-main-list-button" for="nav-list-check-0">
						<div style="width:80%; height:100%; margin: 0 auto;">
							<div style="height:10%;"></div>
							<div style="height:16%; background:white; border-radius:100px;"></div>
							<div style="height:16%;"></div>
							<div style="height:16%; background:white; border-radius:100px;"></div>
							<div style="height:16%;"></div>
							<div style="height:16%; background:white; border-radius:100px;"></div>
						</div>
					</label>
				</div>
				<input class="nav-list-check" type="checkbox" id="nav-list-check-0"></input>
				<ul class="nav-main-list">
				
				
					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-1"></input>
					<a class="nav-main-item-button" href="/hem/skolan"><div class="nav-main-text">Skolan</div>
						<label class="nav-list-button" for="nav-list-check-1">
							<div class="nav-arrow-spacer"></div>
							<div class="nav-arrow-container">
								<div class="nav-arrow-TL"></div>
								<div class="nav-arrow-TR"></div>
								<div class="nav-arrow-BL"></div>
								<div class="nav-arrow-BR"></div>
							</div>
						</label>
					</a>
					
					<ul class="nav-list">
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+1&t=hd&ia=web">Pedagogisk grundsyn</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+2&t=hd&ia=web">Prisbelönta pedagoger</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+2&t=hd&ia=web">Hitta hit</a></li>
					</ul>
					</li>
					
					
					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-2"></input>
					<a class="nav-main-item-button" href="/hem/kontakt"><div class="nav-main-text">Kontakt</div>
						<label class="nav-list-button" for="nav-list-check-2">
							<div class="nav-arrow-spacer"></div>
							<div class="nav-arrow-container">
								<div class="nav-arrow-TL"></div>
								<div class="nav-arrow-TR"></div>
								<div class="nav-arrow-BL"></div>
								<div class="nav-arrow-BR"></div>
							</div>
						</label>
					</a>
					
					<ul class="nav-list">
						<li class="nav-item"><a class="nav-item-button" href="/hem/kontakt/personallista">Personallista</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+2&t=hd&ia=web">Hitta hit</a></li>
					</ul>
					</li>
					
					
					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-3"></input>
					<a class="nav-main-item-button" href="/hem/program"><div class="nav-main-text">Program</div>
						<label class="nav-list-button" for="nav-list-check-3">
							<div class="nav-arrow-spacer"></div>
							<div class="nav-arrow-container">
								<div class="nav-arrow-TL"></div>
								<div class="nav-arrow-TR"></div>
								<div class="nav-arrow-BL"></div>
								<div class="nav-arrow-BR"></div>
							</div>
						</label>
					</a>
					
					<ul class="nav-list">
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+1&t=hd&ia=web">SA</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">NA</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">SPRINT</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">SA sam-SMIP</a></li>
					</ul>
					</li>

					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-4"></input>
					<a class="nav-main-item-button" href="/hem/arskurs-nio"><div class="nav-main-text">Årskurs nio</div>
						<label class="nav-list-button" for="nav-list-check-4">
							<div class="nav-arrow-spacer"></div>
							<div class="nav-arrow-container">
								<div class="nav-arrow-TL"></div>
								<div class="nav-arrow-TR"></div>
								<div class="nav-arrow-BL"></div>
								<div class="nav-arrow-BR"></div>
							</div>
						</label>
					</a>
					
					<ul class="nav-list">
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+1&t=hd&ia=web">Söka till Rosendal</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">Studiebesök</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">Elevröster</a></li>
					</ul>
					</li>

					<li class="nav-main-item">
						<a class="nav-main-item-button" href="http://rosnet.rosendalsgymnasiet.se"><div class="nav-main-text">Rosnet</div><div class="nav-list-button-spacer"></div></a>
					</li>
					
				</ul>
			</div>
		</div>
		</div>

		<div class="con-container">
			<div class="con-page">
				<div class="con-display-area">
					<?php
						readfile($filepath);
					?>
				</div>
			</div>
		</div>

		<footer class="foo-ter">
			<div class="foo-container">
				<div class="foo-name-social-bar">
					<div class="foo-logo-name"><image class="foo-logo" src="/res/image/logga-white.png"></image><div class="foo-header">Rosendalsgymnasiet</div></div>
					<div class="foo-imagebar">
						<div class="foo-social-image-container">
							<a class="foo-social-link" href="https://www.facebook.com">
								<image class="foo-social-image" src="/res/image/facebook256.png"></image>
							</a>
						</div>
						<div class="foo-social-image-spacer"></div>
						<div class="foo-social-image-container">
							<a class="foo-social-link" href="https://www.instagram.com">
								<image class="foo-social-image" src="/res/image/instagram256.png"></image>
							</a>
						</div>
						<div class="foo-social-image-spacer"></div>
						<div class="foo-social-image-container">
							<a class="foo-social-link" href="https://twitter.com">
								<image class="foo-social-image" src="/res/image/twitter256.png"></image>
							</a>
						</div>
					</div>
				</div>
				<address class="foo-adress">
					Rosendalsgymnasiet<br> 
					Husargatan 8<br>
					753 75 Uppsala<br>
					018-727 33 30<br>
				</address>
			</div>
		</footer>

		<script type="text/javascript" src="/res/script/navigation.js"></script>
    </body>
</html>
