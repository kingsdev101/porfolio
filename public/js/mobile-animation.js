

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.matchMedia({
	"(max-width:800px)": function(){

$(document).ready(function(){

	$(window).scroll(function(){
		if($(this).scrollTop() ==0 || $(this).scrollTop() <=100){
/*		menuaperance.reverse();*/
		}else if($(this).scrollTop() >100){
			/*menuaperance.play();*/
		}
	});

});



// menuevent
let menutimeline  =  gsap.timeline();
menutimeline.pause();

menutimeline.to(".main-content-container", {

	}).to(".menu-content-container",{
		width:"60vw",
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
	


let t1 =  gsap.timeline();
let exitt1 = gsap.timeline();

ScrollTrigger.create({
	animation:exitt1,
	trigger: ".section1",
	start:"10% top",
	end:"40% top", 
	toggleActions: "restart reverse restart reset",

	scrub:1


});

exitt1.from(".hi",{
	opacity:0,
	x:-20
}).from(".brian",{
	opacity:0,
	x:20
},"<").to(".world",{
	background:"red",
	flexGrow:"0"
})

ScrollTrigger.create({
	animation:t1,
	trigger: ".section1",
	start:"0px bottom",
	end:"20% top", 
	toggleActions: "restart reverse restart reset",
	


});

t1.from(".world ul li",{
	y:300,
	opacity:0,
	duration:1,
	stagger:{
		each:0.1,

	}
}).from(".coding ul li",{
y:-400,
	opacity:0,
	duration:1,
	stagger:{
		each:0.1,

	}
},"<").from(".binary",{
	
	opacity:0
},"-=0.50");

let t6 = gsap.timeline();
ScrollTrigger.create({
	animation: t6,
	trigger: ".section4-diamond-wrapper",
	
	start:"80% 100%",
	end:"bottom 40%",
toggleActions: "restart none none reset",

});

t6.from(".section4-diamond-wrapper",{
	y:15,
	opacity:0,
	duration:1.5
}).from(".language-images img",{
	
	y:10,
	duration:1.5,	
	opacity:0,
	stagger:{
		each:0.1,
		from:"center"

	}
}).from(".ican",{
	opacity:0,
	y:-20,
	ease:"back(1)"
},"<").from(".chart-container",{
	y:15,
	opacity:0,
	duration:1
});


let t2 = gsap.timeline();

ScrollTrigger.create({
animation:t2,
trigger: ".wrapper-design",
start: "-195px 20%",
end:"bottom 25%",
toggleActions: "restart continue restart pause",
scrub:2,


});
t2.to(".name div",{
	fontSize:18
}).from(".wrapper-design",{
	opacity:0,
	y:70,
	ease:"back(23)"
}).from(".a",{
	width:50,
	height:50,
	opacity:0,
	borderRadius:0,
	scale:0,
	top:-100,
	duration:1,
	ease:"linear",
	border: "none"
},"<").to(".d1",{
		rotate:0
},"<").from(".diamond-big",{
	rotate:0
}).from(".diamond-cirlce",{
	y:-190,
	left:200,
	width: "20px",
	height: "20px"
},"<").to(".a",{
	borderRadius:0,
	fontSize: "40"
},"<").from(".dp",{
	opacity:0,
	width: 20,
	overflow: "hidden"
}).to(".d1",{
	y:85,
	width:"90px",
	duration:1,
	height:0

}).to(".a",{
	borderRadius:"50%",
	background:"#F75901",
	color: "#fefefe"
}).to(".d1",{
	height:0,
	left:16,
	width:"120px",
	border:2

}).to(".d2",{

	y:270,
	rotate:0,
	duration:5,
	width:50,
	height:50,

}).to(".diamond-cirlce", {
	y:0,
	x:123,

});

let t3 =  gsap.timeline();
ScrollTrigger.create({
	animation: t3,
	trigger: ".service-wrapper",
	start:"70% 70%",
	end:"bottom 25%",
	toggleActions: "restart none complete reverse",
	
});

t3.from(".service-diamond", {
	scale:0
}).from(".service-circle",{
	scale:0,
	ease:"elastic",
	duration:1.50
}).from(".service",{
	width:0,
	overflow: "hidden",
	opacity:0,
	right:"1px",
	ease:"back",
	duration:0.50
},"-=1");

let t4 = gsap.timeline();
ScrollTrigger.create({
	animation:t4,
	trigger: ".ser-vice-font-end-pic-wrapper",
	
	toggleActions: "restart none complete reverse",
	start:"-10% 50%",
	end:"bottom 20%"
});

t4.from(".service-front-end",{
	y:-15,
	opacity:0,
	duration:1
},"<").from(".div-laptop-wrapper",{
	y:15,
	opacity:0,
	duration:1
},"<0.2").from(".fp",{
	y:15,
	opacity:0,
	duration:1
},"-=1").from(".back-end-text",{
	y:-15,
	opacity:0,
	duration:1
},"-=0.5").from(".sevice-cload-image-wrapper",{
	y:15,
	opacity:0,
	duration:1
},"-=1").from(".bt",{
	y:15,
	opacity:0,
	duration:1
},"-=1");

let t5 = gsap.timeline();
ScrollTrigger.create({
	animation: t5,
	trigger: ".section3-wrapper",

	start:"80% 100%",
	end:"bottom 40%",
toggleActions: "restart none complete reset",


});

t5.from(".section3-diamond", {
	scale:0
}).from(".projecys",{
	width:0,
	opacity:0,
	duration:1.5
}).from(".letter-box",{
	x:-200,

},"<").to(".letter-box",{
	zIndex:"-1",
	borderColor:"orange",
}).from(".section-circle",{
scale:0,
ease:"back(3)"
}).from(".section3-image-wrapper",{
	opacity:0,
	y:10,
	duration:1
},"-=1").to(".letter-box",{
	rotate:180,
	repeat:-1,
	duration:3,
}).from(".see-all-wrapper",{
	opacity:0
},"<").to(".see-all-wrapper",{
	y:5,
	duration:1,
	yoyo:true,
	repeat:-1

});





	}


});