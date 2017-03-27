function handleDropdown() {
    var menyer = document.getElementsByClassName('nav-list-check');
    for(var i = 0; i < menyer.length; i++) {
        menyer[i].addEventListener('change', function(){closeOthers(this.index)}.bind({index:i}), false);
    }
    function closeOthers(selected) {
        if(selected != 0) {
            for(var j = 0; j < menyer.length; j++) {
                if(j != 0) {
                    if(j != selected) {
                        menyer[j].checked = false;
                    }
                }
                
            }
        }
        
    }
}
handleDropdown();

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

function updateHeight() {
    document.getElementsByClassName("nav-spacer")[0].style.height = document.getElementsByClassName("nav-igation")[0].clientHeight + 'px';
}

if(document.body.clientWidth > 800) {
    document.addEventListener('scroll', pageScroll, false);
    window.addEventListener('resize', updateHeight, false);
    pageScroll();
    updateHeight();
}
