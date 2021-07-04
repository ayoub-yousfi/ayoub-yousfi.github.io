var sponsorkac = -1;
var stanesboyut = 250;
var sboyut;
var stoplamkac;

function sponsorbak(){
	sboyut = Math.floor((jQuery("#team .col-sm-12").width()-100)/stanesboyut);
	if(sboyut>3){sboyut=3;}else if(sboyut==2){sboyut=1}
	var kucukb = 0;
	if(sboyut==1){
		kucukb = 1;
	}	
	jQuery(".bottom").removeClass("plat").removeClass("gold").removeClass("silv").removeClass("bronze").removeClass("media").removeClass("sup");
	if(sponsorkac==-1+kucukb){
		jQuery(".sponsors .bottom").addClass("plat");
		jQuery(".sponsors .bottom").html("Platinium Sponsor");
	}
	if(sponsorkac==0+kucukb || sponsorkac==1+kucukb){
		jQuery(".sponsors .bottom").addClass("gold");
		jQuery(".sponsors .bottom").html("Gold Sponsor");
	}
	if(sponsorkac==2+kucukb){
		jQuery(".sponsors .bottom").addClass("silv");
		jQuery(".sponsors .bottom").html("Silver Sponsor");
	}
	if(sponsorkac==3+kucukb){
		jQuery(".sponsors .bottom").addClass("bronze");
		jQuery(".sponsors .bottom").html("Bronze Sponsor");
	}
	if(sponsorkac==4+kucukb){
		jQuery(".sponsors .bottom").addClass("media");
		jQuery(".sponsors .bottom").html("Main Technology Media Sponsor");
	}
	
	if(sponsorkac>=5+kucukb){
		jQuery(".sponsors .bottom").addClass("sup");
		jQuery(".sponsors .bottom").html("Supporter");
	}
	

	jQuery(".sponsors .kisi").removeClass("active");
	jQuery(".sponsors .kisi:nth-child("+(sponsorkac+2-kucukb)+")").addClass("active");
	
	stoplamkac = jQuery(".innerbox .kisi").length-sboyut;
	jQuery(".sponsors .box").css("width",((sboyut)*stanesboyut)+"px");
	jQuery(".sponsors").css("width",(((sboyut)*stanesboyut)+100)+"px");
	jQuery(".sponsors .innerbox").css("width", ((jQuery(".sponsors .innerbox .kisi").length)*stanesboyut)+"px");
	jQuery(".sponsors .innerbox").css("left", -(sponsorkac)*stanesboyut+"px")
}
sponsorbak();
jQuery(".sponsors .left").click(function(){
	if(sboyut==3){
		if(sponsorkac!=-1){
			sponsorkac--;
		}else{
			sponsorkac = stoplamkac+1;
		}
	}else{
		if(sponsorkac!=0){
			sponsorkac--;
		}else{
			sponsorkac = stoplamkac;
		}
	}
	sponsorbak();
});

jQuery(".sponsors .right").click(function(){
	if(sboyut==3){
		if(sponsorkac!=stoplamkac+1){
			sponsorkac++;
		}else{
			sponsorkac = -1;
		}
	}else{
		if(sponsorkac!=stoplamkac){
			sponsorkac++;
		}else{
			sponsorkac = 0;
		}
	}
	sponsorbak();
});

var sustunde = 0;
jQuery(".sponsors").mouseenter(function(){
	sustunde = 1;
});

jQuery(".sponsors").mouseleave(function(){
	sustunde = 0;
});

setInterval(function(){
	if(sustunde == 0){
		jQuery(".sponsors .right").click();
		sponsorbak();
	}
},3000);