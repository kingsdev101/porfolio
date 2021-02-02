	let myChart = document.getElementById('myChart').getContext('2d');
	let background_1 = myChart.createLinearGradient(0, 0, 0, 600);
	background_1.addColorStop(0,"#F75901");
	background_1.addColorStop(1, 'red');

	Chart.defaults.global.defaultWidth =2;
	Chart.defaults.global.defaultFontColor = '#fefefe';
	var yLabels = {
    50 : 'Biginners', 
    100 : 'Intermediate',
    150: 'Expert',
    200:'Advance' 
   
}

	let barGraph =  new Chart(myChart,{
		type:"bar",
		data:{
			labels:['HTML','CSS','JS','PHP','LARAVEL','SQL'],

			datasets:[{
				label:'SKILL LEVEL', 
				data:[99,90,50,100,99,56],
				backgroundColor:background_1,

			}]
		},
		options:{
			 maintainAspectRatio: false,
			title:{
				display:true,
				text:'Skill-Level',
				fontSize:18,
				fontColor: "#fefefe",	
	

			},
			legend:{
				display:false,
				
			},
			scales: {
        yAxes: [{
            ticks: {
                callback: function(value, index, values) {
                    // for a value (tick) equals to 8
                    return yLabels[value];
                    // 'junior-dev' will be returned instead and displayed on your chart
                },
                min:0,
 
                beginAtZero:true,
                fontColor:"#fefefe",
                fontSize:14,




            }
        }]
    },
    layout:{
    	padding:15,


    	
    },


		}
	});