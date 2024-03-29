function run_first() {
	if(sessionStorage.item_id) {
		document.getElementById(sessionStorage.item_id.toString()).style.backgroundColor = "rgba(19,29,108,1.00)";
	}
	else {
		document.getElementById("0").style.backgroundColor = "rgba(19,29,108,1.00)";
	}
}
	
function nav_item_selected(item_id) {
	for(i = 0; i < 6; i++) {
		document.getElementById(i.toString()).style.backgroundColor = "";
	}
	document.getElementById(item_id.toString()).style.backgroundColor = "rgba(19,29,108,1.00)";
		
	//store item_id in sessionStorage
	sessionStorage.item_id = item_id;		
}
	
function nav_responsive() {
    var x = document.getElementById("top_menu");
    if (x.className === "top-level-menu") {
        x.className += " responsive";
    } else {
        x.className = "top-level-menu";
    }
}

/* read more */
function show_text(a_id, text_id, display_type) {
	if (document.getElementById(text_id).style.display == 'none'){
		document.getElementById(text_id).style.display = display_type;	
		document.getElementById(a_id).innerHTML = 'Collapt &uArr;';	
	}
	else{
		document.getElementById(text_id).style.display = 'none';
		document.getElementById(a_id).innerHTML = 'Read more ...';
	}
		
}

/* Open Page tab */
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

