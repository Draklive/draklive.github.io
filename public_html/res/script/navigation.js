(function handleDropdown() {
    var menyer = document.getElementsByClassName('nav-list-check');
    for(var i = 0; i < menyer.length; i++) {
        menyer[i].addEventListener('change', function(){closeOthers(this.index)}.bind({index:i}), false);
    }
    function closeOthers(selected) {
        for(var j = 0; j < menyer.length; j++) {
            if(j != selected) {
            menyer[j].checked = false;
            }
        }
    }
})();

if(document.body.clientWidth > 700) {
    document.addEventListener('scroll', pageScroll, false);
}

function pageScroll()
{
	var percent = document.body.scrollTop/document.body.clientWidth;
	if (percent > 0.15)
	{
		document.getElementsByClassName("nav-igation")[0].classList.remove("nav-static");
		document.getElementsByClassName("nav-igation")[0].classList.add("nav-fixed");
        document.getElementsByClassName("nav-spacer")[0].style.display = "flex";
	}
	else
	{
		document.getElementsByClassName("nav-igation")[0].classList.remove("nav-fixed");
        document.getElementsByClassName("nav-igation")[0].classList.add("nav-static");
        document.getElementsByClassName("nav-spacer")[0].style.display = "none";
	}
}
