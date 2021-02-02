

ScrollTrigger.matchMedia({
	"(min-width:801px)": function(){

// menuevent
let menutimeline  =  gsap.timeline();
menutimeline.pause();

menutimeline.to(".main-content-container", {

	}).to(".menu-content-container",{
		width:"20vw",
		opacity:1
	},"<").to(".bgd",{
		position:"absolute",
		width:"100%",
		height:"100%",
		top:"0",
		left:"0",


		zIndex:"1000"
	},"<").from(".menu-content ul li" ,{
		x:80,
		duration:1.1,	
		opacity:0,
		stagger:{
		each:0.18,
		
	}
	},"-=1");

let menuIsOpen =false;
let closemenubtnt =  document.getElementById("closebtn").addEventListener("click", function(){
	if(menuIsOpen==true){
		menuIsOpen = false;
	menutimeline.reverse(0.90);
	}
});


let menu = document.getElementById("line-wrapper").addEventListener("click", function(){




	if (menuIsOpen == false) {
		menuIsOpen = true;
		menutimeline.play().timeScale(1);
	
	
	}else{
		menuIsOpen = false;
		menutimeline.reverse(0.90);
	
	}
	
	
		
	});
	


let dsection1 =  gsap.timeline();
dsection1.reverse(1);
dsection1.from(".coding ul li",{


	opacity:0,

	ease:"back(5)",
	duration:1,
	stagger:{
		each:0.1,


	
	}
}).to(".coding ul li",{
	color:"#ffff",

	
}).from(".world ul li",{


	opacity:0,

	ease:"back(5)",
	duration:1,
	stagger:{
		each:0.1,


	}

},"-=2.5").from(".binary",{
	
	opacity:0,
	letterSpacing:"100px"

},"-=2");


ScrollTrigger.create({
	animation:dsection1,
	trigger:".section1",
	
	start:"0px 30%",
	end:"70% bottom",
	toggleActions: "restart reverse restart reset",

});

let drevealname = gsap.timeline();
drevealname.from(".hi",{
	opacity:0,
	
}).from(".brian",{
	opacity:0,
	
}).to(".name",{
	fontSize:"50",
	x:"47vw"
},"<").to(".world",{
	background:"red",
	width:"15vw",
	right:"0"
},"-=0.60").to(".name",{
	y:200
}).to(".world",{y:100});

ScrollTrigger.create({
	animation:drevealname,
	trigger:".section1",
	
	start:"26% center",
	end:"46% 46%",
	scrub:1,
	toggleActions: "restart reverse restart reset",

});


let dsignwrapper = gsap.timeline();

dsignwrapper.from(".a",{
	
	opacity:0,
	y:-50
}).from(".diamond-big",{
	rotate:90,
	scale:0,
	duration:2
}).from(".a",{

	borderColor:"transparent"
}).from(".dp",{
	width:0,
	overflowX:"hidden",


}).to(".a",{
	borderRadius:"50%"
}).from(".diamond-small",{
	y:-50,
	opacity:0,
		duration:1.5,
	stagger:{
		each:1,


	
	}
}).from(".wrapper-design .diamond-cirlce",{
	y:-50,
	opacity:0,
		duration:1,

},"+=0.50");

ScrollTrigger.create({
	animation:dsignwrapper,
	trigger:".wrapper-section",
	
	start:"33% bottom",
	end:"50% bottom",
	toggleActions: "restart reverse restart reset",
	scrub:1

});


let dsection2 = gsap.timeline();

dsection2.from(".service",{
	width:0,
	opacity:0

},"<").from(".service-circle",{
		y:-30,
		opacity:0
}).from(".service-diamond",{
		y:15,
		opacity:0,
		scale:0,

},"-=1.50").from(".service-front-end",{
	y:15,
	duration:1.5,
	opacity:0,
			ease:"back(6)"
}).from(".back-end-text",{
	y:-15,
	duration:1,
	opacity:0,
		ease:"back(6)"
},"<").from(".sevice-cload-image-wrapper",{
	scale:0,
	y:15,
	duration:1,
	opacity:0,
},"<").from(".div-laptop-wrapper",{
	y:10,
	duration:1,
	opacity:0,
	scale:0,
},"<").from(".service-content p",{
	opacity:0,
	y:10,
	duration:2
},"<").from(".service-content ul",{
	opacity:0,
	y:10,
	duration:2
},"-=0.90");


ScrollTrigger.create({
	animation:dsection2,
	trigger:".section2",
	start:"-20% bottom",
	end:"50% bottom",
	toggleActions: "restart none complete reset",

});

gsap.to(".see-all-wrapper",{
	y:10,
	yoyo:true,
	duration:1,
	repeat:-1
})




}

});