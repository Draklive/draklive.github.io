<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <title>Navigation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/res/image/favicon.png">
		<link rel="stylesheet" type="text/css" href="/res/style/navigation.css">
		<link rel="stylesheet" type="text/css" href="/res/style/footer.css">
		<link rel="stylesheet" type="text/css" href="/res/style/content.css">
    </head>
    <body>
		<nav class="nav-igation">
			<div class="nav-container">
				<div class="nav-header">
					<a class="nav-home-button" href="/start"><image class="nav-logo" src="/res/image/logga-white.png"></image><h1 class="nav-logo-text">Rosendalsgymnasiet</h1></a>
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
					<a class="nav-main-item-button" href="/start/skolan"><div class="nav-main-text">Skolan</div>
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
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+1&t=hd&ia=web">ABC page 1</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ABC+page+2&t=hd&ia=web">ABC page 2</a></li>
					</ul>
					</li>
					
					
					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-2"></input>
					<a class="nav-main-item-button" href="https://duckduckgo.com/?q=XYZ+main+page&t=hd&ia=web"><div class="nav-main-text">XYZ main page</div>
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
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=XYZ+page+1&t=hd&ia=web">XYZ page 1dfhfdghfdgh</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=XYZ+page+2&t=hd&ia=web">XYZ page 2</a></li>
					</ul>
					</li>
					
					
					<li class="nav-main-item">
					<input class="nav-list-check" type="checkbox" id="nav-list-check-3"></input>
					<a class="nav-main-item-button" href="https://duckduckgo.com/?q=ΔλΩ+main+page&t=hd&ia=web"><div class="nav-main-text">ΔλΩ main page</div>
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
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+1&t=hd&ia=web">ΔλΩ page 1</a></li>
						<li class="nav-item"><a class="nav-item-button" href="https://duckduckgo.com/?q=ΔλΩ+page+2&t=hd&ia=web">ΔλΩ page 2</a></li>
					</ul>
					</li>
					
					
				</ul>
			</div>
		</nav>
		<div class="con-container">
			<div class="con-page">
				<div class="con-display-area">
					<?php
						$page_directory = htmlspecialchars($_GET["name"]);
						$filepath = "../pages/" . $page_directory . ".html";
						if (!file_exists($filepath)) {
							$filepath = "../pages/start.html";
						}
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
						<a>
							<div class="foo-social-image-container">
								<image class="foo-social-image" src="/res/image/facebook256.png"></image>
							</div>
						</a>
						<div class="foo-social-image-spacer"></div>
						<a>
							<div class="foo-social-image-container">
								<image class="foo-social-image" src="/res/image/instagram256.png"></image>
							</div>
						</a>
						<div class="foo-social-image-spacer"></div>
						<a>
							<div class="foo-social-image-container">
								<image class="foo-social-image" src="/res/image/twitter256.png"></image>
							</div>
						</a>
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
    </body>
</html>
