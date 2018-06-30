
$(function(){
	$('[data-page] span').css("cursor", "pointer");
	$('[data-page]').click(function(){
		target_url = $(this).attr("data-page")
		load_page(target_url);
	//	console.dir($(this));
	});	
});

function load_page(url, section_id = "content"){
//	    loaded_page = getCookie("loadPage");
//    if (loaded_page != url){
        $("#" + section_id).load(url, function(e){		
			setCookie("loadPage", url)
        });
//    }
};

function reload_page(section_id = "content"){
        loaded_page = getCookie("loadPage");
        $("#" + section_id).load(loaded_page);
}

function setCookie(cookie, value) {
    document.cookie = cookie + "=" + value + ";";
}

function getCookie(cookie) {
    var name = cookie + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function deleteCookie(cookie){
        document.cookie(cookie,null)
}
