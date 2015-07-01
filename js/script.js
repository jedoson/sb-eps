




function fnInitThis() {
	try {
		if(sbeps) {
			jQuery("#"+sbeps+"-menu").addClass('active');
			jQuery("#"+sbeps+"-panel").removeClass('hidden');
		}
	} catch (e) {
		
	}
}


function fnClickSBEPS(sbm) {
	
	console.log("fnClickSBEPS sbm:"+sbm);
	var sID = jQuery(".sbm-menu > a.active").removeClass('active').attr("id");
	if(sID) {
		var prevSbm = sID.substring(0,5);
		console.log("sID:"+sID+" prevSbm:"+prevSbm);
		jQuery("#"+prevSbm+"-panel").addClass('hidden');
	}
	jQuery("#"+sbm+"-menu").addClass('active');
	jQuery("#"+sbm+"-panel").removeClass('hidden');
	return false;
}


jQuery(document).ready(function() {
	fnInitThis();
});
