<div class="container">
<script src="resources\assets\js\_libraries\ChartJs\Chart.min.js?<?php echo rand(0,100) ?>"></script>
<script src="resources\assets\js\_libraries\ChartJs\utils.js?<?php echo rand(0,100) ?>"></script>
 <div class="row">
 <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">ΠΙΝΑΚΑΣ ΕΛΕΓΧΟΥ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Charts and Graphs</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-12">
                    <div class="text_con main_cat title">
                        <h1 class="h2">Charts and Graphs</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
				<?php foreach ($charts  as $key => $value) { ?>
                <div class="col-lg-4">
                    <div class="text_con">
                    <div class="text-right h-0">
                    <?php if($key > 0){ ?>
                    <a href="#" type="button" class="waves-effect waves-light btn-small">προβολη</a>
                    <?php } ?>

                    </div>
                    <div class="flex">
                        <div class="icon1">
                            <img src="public/assets/img/static_images/<?=$value['img']?>" alt="">
                        </div>
                       <div class="text1">   
                       <h1 class="h1"><?=$value['num']?></h1>                             
                            <h4 class="h4"><?=$value['name']?></h4> 
                       </div>
                       </div>
                    </div>
                </div>
                <?php } ?>
 <div class="col-lg-8">
         <div class="text_con">
             <h2 class="h3">pantazis vastardis</h2> 
             <div id="canvas-holder" ><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="canvas2"></canvas>
    <div class="d-flex flex-row flex-xl-wrap justify-content-xl-center mt-auto">
        <button id="randomizeData2" class="waves-effect waves-light btn-small chart-btn">Randomize Data</button>
	    <button id="addDataset2" class="waves-effect waves-light btn-small chart-btn">Add Dataset</button>
	    <button id="removeDataset2" class="waves-effect waves-light btn-small chart-btn">Remove Dataset</button>
	    <button id="addData2" class="waves-effect waves-light btn-small chart-btn">Add Data</button>
        <button id="removeData2" class="waves-effect waves-light btn-small chart-btn">Remove Data</button>
    </div>
	</div>            
         </div> 
     </div>


 
     <div class="col-lg-4">
         <div class="text_con full_height d-flex flex-column">
                 <div id="canvas-holder" >
        <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
                <div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
		<canvas id="chart-area1"  class="chartjs-render-monitor" width="394" height="394"></canvas>
    </div> 
    <div class="d-flex flex-row flex-xl-wrap justify-content-xl-center mt-auto ">
	<button id="randomizeData1" class="waves-effect waves-light btn-small chart-btn">Randomize Data</button>
	<button id="addDataset1" class="waves-effect waves-light btn-small chart-btn">Add Dataset</button>
	<button id="removeDataset1" class="waves-effect waves-light btn-small chart-btn">Remove Dataset</button>
	<button id="addData1" class="waves-effect waves-light btn-small chart-btn">Add Data</button>
	<button id="removeData1" class="waves-effect waves-light btn-small chart-btn">Remove Data</button>
    <button id="changeCircleSize1" class="waves-effect waves-light btn-small chart-btn">Semi/Full Circle</button>
    </div>
	
	<script>
		
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Chart.js Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area1').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
			

            var ctx2 = document.getElementById('canvas2').getContext('2d');
            debugger;
			window.myLine = new Chart(ctx2, config2);
			
		};

		document.getElementById('randomizeData1').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myDoughnut.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset1').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myDoughnut.update();
		});

		document.getElementById('addData1').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				config.data.labels.push('data #' + config.data.labels.length);

				var colorName = colorNames[config.data.datasets[0].data.length % colorNames.length];
				var newColor = window.chartColors[colorName];

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
					dataset.backgroundColor.push(newColor);
				});

				window.myDoughnut.update();
			}
		});

		document.getElementById('removeDataset1').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myDoughnut.update();
		});

		document.getElementById('removeData1').addEventListener('click', function() {
			config.data.labels.splice(-1, 1); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
				dataset.backgroundColor.pop();
			});

			window.myDoughnut.update();
		});

		document.getElementById('changeCircleSize1').addEventListener('click', function() {
			if (window.myDoughnut.options.circumference === Math.PI) {
				window.myDoughnut.options.circumference = 2 * Math.PI;
				window.myDoughnut.options.rotation = -Math.PI / 2;
			} else {
				window.myDoughnut.options.circumference = Math.PI;
				window.myDoughnut.options.rotation = -Math.PI;
			}

			window.myDoughnut.update();
		});


		

	

		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config2 = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		
		
		

		document.getElementById('randomizeData2').addEventListener('click', function() {
			config2.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});

			});

			window.myLine.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset2').addEventListener('click', function() {
			var colorName = colorNames[config2.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + config2.data.datasets.length,
				backgroundColor: newColor,
				borderColor: newColor,
				data: [],
				fill: false
			};

			for (var index = 0; index < config2.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config2.data.datasets.push(newDataset);
			window.myLine.update();
		});

		document.getElementById('addData2').addEventListener('click', function() {
			if (config2.data.datasets.length > 0) {
				var month = MONTHS[config2.data.labels.length % MONTHS.length];
				config2.data.labels.push(month);

				config2.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myLine.update();
			}
		});

		document.getElementById('removeDataset2').addEventListener('click', function() {
			config2.data.datasets.splice(0, 1);
			window.myLine.update();
		});

		document.getElementById('removeData2').addEventListener('click', function() {
			config2.data.labels.splice(-1, 1); // remove the label first

			config2.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myLine.update();
		});  
	</script>             
         </div> 
     </div>

   





 </div>



 
 <div class="row">
     <div class="col-lg-12">
         <div class="text_con">
             <div class="b1 inline-b">
                 <button type="button" class="waves-effect waves-light btn no-menu">no
                     menu</span></button>
                 <button type="button" class="waves-effect waves-light btn only_icons">only
                     icons</span></button>
                 <button type="button" class="waves-effect waves-light btn full_menu"><span
                             class="text">full</span></button>
             </div>
             <div class="b2 inline-b">
                 <button type="button" class="waves-effect waves-light btn full_container">full
                     container</span> </button>
                 <button type="button" class="waves-effect waves-light btn normal_container"><span
                             class="text">normal container</span></button>
             </div>
         </div>
     </div>
 </div>
</div>



