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
