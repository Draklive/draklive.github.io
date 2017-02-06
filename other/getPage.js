var Pages = {} // object to hold all the pages

function loadPage(page_name)
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{
			Pages[page_name] = {};
			Pages[page_name]['content'] = this.responseText;
			// Pages[page_name]['title'] = page_name; // can add more atributes to a page like title top image maybe
			switchPage(page_name); // switch the page when loading is complete
		}
	};
	xhttp.open("GET", 'pages/' + page_name + '.html', true);
	xhttp.send();
}

function switchPage(page_name)
{
	if (typeof Pages[page_name] != 'undefined')
	{
		document.getElementById("content").innerHTML = Pages[page_name]['content'];
		document.getElementById("menu-check-input").checked = false; // remove the menu
	}
	else
	{
		loadPage(page_name);
	}
}

switchPage('start'); // loading the startpage as soon as the sript is run