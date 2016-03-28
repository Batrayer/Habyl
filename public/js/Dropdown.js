$open = true;

function Dropdown($param){
	$dropdown_speed = $param.speed == undefined ? 100 : $param.speed; 
	$dropdown_type = $param.type == undefined ? "click" : $param.type;
	$dropdown_taille = $param.taille;
	$dropdown_position = $param.position == undefined ? "none" : $param.position;
	dropdownInit();
}


function dropdownInit(){
	$(".dropdown ul li").hide();
	if($dropdown_position =="absolute")
		$(".dropdown").css({"position":"absolute"});
	$(".dropdown ul").find("li:first-child").show();
	if($dropdown_type=="click"){
		$(".dropdown ul li:first-child").bind("click", dropdownClick);
	}else if($dropdown_type=="hover"){
		$(".dropdown ul li:first-child").bind("mouseenter", dropdownEnter);
		$(".dropdown ul").bind("mouseleave", dropdownExit);
	}
}

function dropdownClick(){
	if($open == true){
		$(".dropdown ul").css({"float":"left"});
		$(".dropdown ul li:nth-child(n+2)").animate({"margin-Top":-$dropdown_taille},$dropdown_speed).show();

		$open=false;
	}else{
		$(".dropdown ul li:nth-child(n+2)").animate({"margin-Top":+$dropdown_taille},$dropdown_speed);
		setTimeout(function(){
			$(".dropdown ul li:nth-child(n+2)").hide();
		},$dropdown_speed);
		$(".dropdown ul").find("li:first-child").show();
		$open=true;
	}
}
function dropdownEnter(){
	if($open == true){
		$(".dropdown ul").css({"float":"left"});
		$(".dropdown ul li:nth-child(n+2)").animate({"margin-Top":+$dropdown_taille},$dropdown_speed).show();

		$open=false;
	}
}
function dropdownExit(){
	if($open == false){
		$(".dropdown ul li:nth-child(n+2)").animate({"margin-Top":-$dropdown_taille},$dropdown_speed);
		setTimeout(function(){
			$(".dropdown ul li:nth-child(n+2)").hide();
		},$dropdown_speed);
		$(".dropdown ul").find("li:first-child").show();
		$open=true;
	}
}