var formationkac = -1;
var stanesboyut = 250;
var sboyut;
var stoplamkac;

function formationbak(){
	sboyut = Math.floor((jQuery("#team .col-sm-12").width()-100)/stanesboyut);
	if(sboyut>3){sboyut=3;}else if(sboyut==2){sboyut=1}
	var kucukb = 0;
	if(sboyut==1){
		kucukb = 1;
	}	
	jQuery(".bottom").removeClass("plat").removeClass("gold").removeClass("silv").removeClass("bronze").removeClass("media").removeClass("sup");
	if(formationkac>=-1+kucukb){
		jQuery(".formation .bottom").addClass("red");
		
	}
	
	

	jQuery(".formation .kisi").removeClass("active");
	jQuery(".formation .kisi:nth-child("+(formationkac+2-kucukb)+")").addClass("active");
	
	stoplamkac = jQuery(".innerbox .kisi").length-sboyut;
	jQuery(".formation .box").css("width",((sboyut)*stanesboyut)+"px");
	jQuery(".formation").css("width",(((sboyut)*stanesboyut)+100)+"px");
	jQuery(".formation .innerbox").css("width", ((jQuery(".formation .innerbox .kisi").length)*stanesboyut)+"px");
	jQuery(".formation .innerbox").css("left", -(formationkac)*stanesboyut+"px")
}
formationbak();
jQuery(".formation .left").click(function(){
	if(sboyut==3){
		if(formationkac!=-1){
			formationkac--;
		}else{
			formationkac = stoplamkac+1;
		}
	}else{
		if(formationkac!=0){
			formationkac--;
		}else{
			formationkac = stoplamkac;
		}
	}
	formationbak();
});

jQuery(".formation .right").click(function(){
	if(sboyut==3){
		if(formationkac!=stoplamkac+1){
			formationkac++;
		}else{
			formationkac = -1;
		}
	}else{
		if(formationkac!=stoplamkac){
			formationkac++;
		}else{
			formationkac = 0;
		}
	}
	formationbak();
});

var sustunde = 0;
jQuery(".formation").mouseenter(function(){
	sustunde = 1;
});

jQuery(".formation").mouseleave(function(){
	sustunde = 0;
});

setInterval(function(){
	if(sustunde == 0){
		jQuery(".formation .right").click();
		formationbak();
	}
},3000);