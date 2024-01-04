<?php
/*
	Template Name: About
*/

get_header();
?>
<script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>


<script>
	document.addEventListener('DOMContentLoaded', function() {
		gsap.set('#about, #aboutParagraph, #mission, #missionParagraph, #vision, #visionParagraph, #team, #behind, #leadership, #leadershipParagraph, #message, #messageCeo', {
			opacity: 0,
			y: '20px'
		});

		const observer = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					// Custom delays for each element
					let delay = 0;

					if (entry.target.id === 'about') {
						delay = 0;
					} else if (entry.target.id === 'aboutParagraph') {
						delay = .25;
					} else if (entry.target.id === 'vision') {
						delay = 0;
					} else if (entry.target.id === 'visionParagraph') {
						delay = .25;
					} else if (entry.target.id === 'mission') {
						delay = .5;
					} else if (entry.target.id === 'missionParagraph') {
						delay = .75;
					} else if (entry.target.id === 'team') {
						delay = 0;
					} else if (entry.target.id === 'behind') {
						delay = .5;
					} else if (entry.target.id === 'leadership') {
						delay = 0;
					} else if (entry.target.id === 'leadershipParagraph') {
						delay = .25;
					} else if (entry.target.id === 'message') {
						delay = 0;
					} else if (entry.target.id === 'messageCeo') {
						delay = .25;
					}
					const targetIds = ['about', 'aboutParagraph', 'vision', 'visionParagraph', 'mission', 'missionParagraph', 'team', 'behind', 'leadership', 'leadershipParagraph', 'message', 'messageCeo'];

					gsap.fromTo(
						`#${entry.target.id}`, {
							opacity: 0,
							y: '20px'
						}, {
							opacity: 1,
							y: '0',
							duration: .7,
							ease: 'power2.in',
							delay: delay
						}
					);

					// Unobserve the element to avoid triggering the animation again
					observer.unobserve(entry.target);
				}
			});
		}, {
			threshold: 0.5
		});

		observer.observe(document.getElementById('about'));
		observer.observe(document.getElementById('aboutParagraph'));
		observer.observe(document.getElementById('vision'));
		observer.observe(document.getElementById('visionParagraph'));
		observer.observe(document.getElementById('mission'));
		observer.observe(document.getElementById('missionParagraph'));
		observer.observe(document.getElementById('team'));
		observer.observe(document.getElementById('behind'));
		observer.observe(document.getElementById('leadership'));
		observer.observe(document.getElementById('leadershipParagraph'));
		observer.observe(document.getElementById('message'));
		observer.observe(document.getElementById('messageCeo'));
	});
</script>


<section>
	<div class="lg:flex lg:flex-row-reverse lg:items-center  lg:overflow-hidden">

		<div class="lg:w-1/2 lg:hidden">
			<img class="w-full h-full lg:w-full lg:ml-[3.8rem] lg:h-[85vh] lg:object-cover 2xl:rounded-[4.5rem] lg:object-[60%_70%] lg:rounded-l-[3rem] " src="<?php echo
				get_post_meta( get_the_ID(), "abouthero", TRUE ) ?>" alt="">
		</div>
		<div class="hidden lg:block lg:w-1/2">
			<img class="w-full h-full opacity-0 lg:w-full lg:ml-[3.8rem] lg:h-[85vh] lg:object-cover 2xl:rounded-[4.5rem] lg:object-[60%_70%] lg:rounded-l-[3rem] gsap-img" src="<?php echo
				get_post_meta( get_the_ID(), "abouthero", TRUE ) ?>" alt="">
		</div>

		<script>
			const img = document.querySelector('.gsap-img');

			// Function to be called when the intersection occurs
			const handleIntersection = (entries, observer) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {

						gsap.fromTo(img, {
							x: '100%'
						}, {
							x: 0,
							duration: 1.4,
							opacity: 1,
							ease: 'power2.out',
							delay: .6
						});

						observer.unobserve(entry.target);
					}
				});
			};

			const observer = new IntersectionObserver(handleIntersection, {
				threshold: 0.5,
			});

			observer.observe(img);
		</script>


		<div class="mx-4 md:w-[80%] lg:w-[100vw] lg:ml-8 lg:pb-12 2xl:ml-12">
			<div class="text-black pr-7 lg:pr-0 lg:w-[80%] 2xl:w-[85%]">
				<h1 id="about" class="text-[59px] opacity-0 leading-[67.26px] lg:leading-[95px] font-light lg:font-extralight md:text-6xl my-6 lg:text-[5.45rem] 2xl:text-[7.45rem] 2xl:leading-[135px]">Redefining
					Possibilities</h1>
				<p id="aboutParagraph" class="font-light opacity-0 lg:font-light text-base md:text-lg md:leading-[1.5rem] leading-[1.375rem] lg:text-[1rem] 2xl:text-[1.5rem] 2xl:leading-[27px] 2xl:pr-0 2xl:pt-2 ">At VisiOne, we are more than just a company <b>–</b> we are architects of change, creators of innovation, and cultivators of aspirations. With a passion for building brands that defy conventions, we embark on a journey to reshape the way you experience the world around you. We don't just build brands; we craft experiences that inspire, empower, and elevate.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-[#1C1C1C] text-[#FFFFFF] flex pt-10 lg:pt-12 pb-20 mt-16 lg:-mt-[5.3rem] 2xl:-mt-[8rem] lg:pb-36 2xl:pb-60">
		<div class="mx-4 lg:mx-8 2xl:mx-12">
			<div class="mt-10 pr-2 lg:mt-6 2xl:mt-16">
				<h1 id="vision" class="font-light opacity-0 lg:font-extralight text-[37.5px] leading-[42.75px] lg:text-[38px] 2xl:text-[50px] 2xl:leading-[57px]">Vision</h1>
				<p id="visionParagraph" class="py-7 opacity-0 font-extralight lg:font-light text-base  md:text-lg md:leading-[1.5rem] leading-[1.375rem] lg:text-[15px] lg:w-[50%] 2xl:w-[40%] lg:leading-[19px] lg:pt-3 lg:pb-10 2xl:text-[20px] 2xl:leading-[22.8px] 2xl:mt-3 ">To revolutionise the home and lifestyle industry by building a portfolio of successful brands, driven by sustainability, innovation, and deep care for the planet.</p>
				<h1 id="mission" class="font-light opacity-0 lg:font-extralight text-[37.5px] leading-[42.75px lg:text-[38px] 2xl:text-[50px] 2xl:leading-[57px] 2xl:mt-8">Mission</h1>
				<p id="missionParagraph" class="py-7 pb-9 opacity-0 font-extralight lg:font-light	 text-base  md:text-lg md:leading-[1.5rem] leading-[1.375rem] lg:text-[15px] lg:w-[50%]  2xl:w-[40%]  lg:leading-[19px] lg:pt-0 2xl:text-[20px] 2xl:leading-[22.8px] 2xl:mt-5 2xl:pb-20">We empower homes and inspire lives through sustainable, high-quality products that speak volumes in design and are backed by deep care for our workforce and customers. We disrupt the industry with bold innovation, foster the greatest talent, and make informed decisions driven by the latest technology.</p>
				<hr class="bg-[#B5F158] border-1 border-[#B5F158] lg:my-10">
			</div>
			<div class="font-light lg:flex">
				<div id="counterContainer4" class="my-8 lg:w-1/3">
					<h1 id="myCounter4" class="text-[41px] leading-[46.74px] md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
					<p class="text-base pr-16 font-extralight lg:font-normal leading-[1.375rem]  lg:mt-4  md:text-lg md:leading-[1.5rem] lg:text-sm 2xl:text-[22px] 2xl:pr-24 2xl:leading-[25px]">Brands that made waves in the industry</p>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						var counterElement = document.getElementById("myCounter4");

						var observer = new IntersectionObserver(function(entries) {
							entries.forEach(function(entry) {
								if (entry.isIntersecting) {
									startCounting(10, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
									observer.unobserve(entry.target);
								}
							});
						}, {
							threshold: 0.5
						});

						observer.observe(document.getElementById("counterContainer4"));

						function startCounting(targetCount, duration) {
							var count = 0;
							var startTime = null;

							function updateCounter(timestamp) {
								if (!startTime) startTime = timestamp;

								var progress = timestamp - startTime;
								var percentage = Math.min(progress / duration, 1);

								count = Math.floor(percentage * targetCount);

								counterElement.textContent = count;

								if (count < targetCount) {
									requestAnimationFrame(updateCounter);
								} else {
									counterElement.innerHTML = "10";
								}
							}

							requestAnimationFrame(updateCounter);
						}
					});
				</script>
				<div class="my-8 lg:w-1/3 lg:mx-10">
					<div id="counterContainer5" class="flex flex-row items-center">
						<h1 id="myCounter5" class="text-[41.89px] leading-[47.76px] pr-1 md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
						<h5 class="text-[19.95px] leading-[22.74px] lg:text-[35px] lg:pt-10 lg:pl-8 2xl:text-[50px] 2xl:leading-[57px] 2xl:pt-12 2xl:pl-10">Million</h5>
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var counterElement = document.getElementById("myCounter5");

							var observer = new IntersectionObserver(function(entries) {
								entries.forEach(function(entry) {
									if (entry.isIntersecting) {
										startCounting(50, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
										observer.unobserve(entry.target);
									}
								});
							}, {
								threshold: 0.5
							});

							observer.observe(document.getElementById("counterContainer5"));

							function startCounting(targetCount, duration) {
								var count = 0;
								var startTime = null;

								function updateCounter(timestamp) {
									if (!startTime) startTime = timestamp;

									var progress = timestamp - startTime;
									var percentage = Math.min(progress / duration, 1);

									count = Math.floor(percentage * targetCount);

									counterElement.textContent = count;

									if (count < targetCount) {
										requestAnimationFrame(updateCounter);
									} else {
										counterElement.innerHTML = "<b>$</b>50";
									}
								}

								requestAnimationFrame(updateCounter);
							}
						});
					</script>
					<p class="text-base pr-16 font-extralight lg:font-normal leading-[1.375rem]  md:text-lg md:leading-[1.5rem] lg:mt-4 lg:text-sm 2xl:pr-24 2xl:text-[22px] 2xl:leading-[25px]">in revenue earned in the last fiscal year through sales in the USA and Europe. </p>
				</div>
				<div id="counterContainer6" class="my-8 lg:w-1/3">
					<h1 id="myCounter6" class="text-[41px] leading-[46.74px] text-4xl  md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
					<p class="text-base pr-16 font-normal leading-[1.375rem]  md:text-lg md:leading-[1.5rem] lg:mt-4 lg:text-sm 2xl:text-[22px] 2xl:leading-[25px]">lives impacted through a series of CSR projects.</p>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						var counterElement = document.getElementById("myCounter6");

						var observer = new IntersectionObserver(function(entries) {
							entries.forEach(function(entry) {
								if (entry.isIntersecting) {
									startCounting(6000, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
									observer.unobserve(entry.target);
								}
							});
						}, {
							threshold: 0.5
						});

						observer.observe(document.getElementById("counterContainer6"));

						function startCounting(targetCount, duration) {
							var count = 0;
							var startTime = null;

							function updateCounter(timestamp) {
								if (!startTime) startTime = timestamp;

								var progress = timestamp - startTime;
								var percentage = Math.min(progress / duration, 1);

								count = Math.floor(percentage * targetCount);

								counterElement.textContent = count;

								if (count < targetCount) {
									requestAnimationFrame(updateCounter);
								} else {
									counterElement.innerHTML = "6000";
								}
							}

							requestAnimationFrame(updateCounter);
						}
					});
				</script>
			</div>
			<div class="mt-10 pr-2 lg:hidden">
				<hr class="bg-[#B5F158] border-1 border-[#B5F158]">
			</div>
			<div class="font-light lg:flex">
				<div id="counterContainer7" class="my-8 lg:w-1/3">
					<h1 id="myCounter7" class="text-[41px] leading-[46.74px] md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
					<p class="text-base pr-16 font-extralight	lg:font-normal leading-[1.375rem]   md:text-lg md:leading-[1.5rem] lg:mt-4 lg:text-sm  2xl:text-[22px] 2xl:leading-[25px]">Unique SKUs across brands</p>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						var counterElement = document.getElementById("myCounter7");

						var observer = new IntersectionObserver(function(entries) {
							entries.forEach(function(entry) {
								if (entry.isIntersecting) {
									startCounting(250, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
									observer.unobserve(entry.target);
								}
							});
						}, {
							threshold: 0.5
						});

						observer.observe(document.getElementById("counterContainer7"));

						function startCounting(targetCount, duration) {
							var count = 0;
							var startTime = null;

							function updateCounter(timestamp) {
								if (!startTime) startTime = timestamp;

								var progress = timestamp - startTime;
								var percentage = Math.min(progress / duration, 1);

								count = Math.floor(percentage * targetCount);

								counterElement.textContent = count;

								if (count < targetCount) {
									requestAnimationFrame(updateCounter);
								} else {
									counterElement.innerHTML = "250";
								}
							}

							requestAnimationFrame(updateCounter);
						}
					});
				</script>
				<div class="my-8 lg:w-1/3 lg:mx-10">
					<div id="counterContainer8" class="flex flex-row items-center">
						<h1 id="myCounter8" class="text-[41.89px] leading-[47.76px] pr-1 md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
					
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var counterElement = document.getElementById("myCounter8");

							var observer = new IntersectionObserver(function(entries) {
								entries.forEach(function(entry) {
									if (entry.isIntersecting) {
										startCounting(150, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
										observer.unobserve(entry.target);
									}
								});
							}, {
								threshold: 0.5
							});

							observer.observe(document.getElementById("counterContainer8"));

							function startCounting(targetCount, duration) {
								var count = 0;
								var startTime = null;

								function updateCounter(timestamp) {
									if (!startTime) startTime = timestamp;

									var progress = timestamp - startTime;
									var percentage = Math.min(progress / duration, 1);

									count = Math.floor(percentage * targetCount);

									counterElement.textContent = count;

									if (count < targetCount) {
										requestAnimationFrame(updateCounter);
									} else {
										counterElement.innerHTML = "150";
									}
								}

								requestAnimationFrame(updateCounter);
							}
						});
					</script>
					<p class="text-base pr-16 font-extralight lg:font-normal leading-[1.375rem]  md:text-lg md:leading-[1.5rem] lg:mt-4 lg:text-sm 2xl:pr-24 2xl:text-[22px] 2xl:leading-[25px]">of the finest resources Pakistan has to offer </p>
				</div>
				<div id="counterContainer9" class="my-8 lg:w-1/3">
					<h1 id="myCounter9" class="text-[41px] leading-[46.74px] text-4xl  md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px]">0</h1>
					<p class="text-base pr-16 font-extralight	 lg:font-normal leading-[1.375rem]  md:text-lg md:leading-[1.5rem] lg:mt-4 lg:text-sm 2xl:text-[22px] 2xl:leading-[25px]">lives impacted through a series of CSR projects.</p>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						var counterElement = document.getElementById("myCounter9");

						var observer = new IntersectionObserver(function(entries) {
							entries.forEach(function(entry) {
								if (entry.isIntersecting) {
									startCounting(6000, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
									observer.unobserve(entry.target);
								}
							});
						}, {
							threshold: 0.5
						});

						observer.observe(document.getElementById("counterContainer9"));

						function startCounting(targetCount, duration) {
							var count = 0;
							var startTime = null;

							function updateCounter(timestamp) {
								if (!startTime) startTime = timestamp;

								var progress = timestamp - startTime;
								var percentage = Math.min(progress / duration, 1);

								count = Math.floor(percentage * targetCount);

								counterElement.textContent = count;

								if (count < targetCount) {
									requestAnimationFrame(updateCounter);
								} else {
									counterElement.innerHTML = "6000";
								}
							}

							requestAnimationFrame(updateCounter);
						}
					});
				</script>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="mx-4 lg:flex lg:mx-8 2xl:mx-12 ">
		<div class="flex justify-center mt-[-3rem] h-[354px] lg:w-[50%] lg:-mt-[5.5rem] 2xl:-mt-[8rem]">
			<img class="rounded-3xl lg:rounded-[2.5rem] lg:h-[30rem] 2xl:h-[710px] 2xl:rounded-[4rem] w-full object-cover" src="<?php echo
				get_post_meta( get_the_ID(), "team", TRUE ) ?>" alt="">
		</div>
		<div class=" my-10 text-black lg:w-[50%] lg:px-10 lg:mt-12 lg:pl-12 2xl:pl-20 2xl:mt-20">
			<h1 id="team" class="font-light opacity-0 lg:font-extralight leading-[42.64px] text-[37.4px] mb-8 lg:text-[35px] lg:leading-[40px] lg:pr-8 lg:pt-2 2xl:text-[60px] 2xl:leading-[65px]  ">A team of talented young Pakistanis, catalysts of change, forging the future<b>!</b></h1>
			<p id="behind" class="font-extralight opacity-0 lg:font-light text-base leading-[1.375rem]  md:text-lg md:leading-[1.5rem]  lg:text-[14px] lg:leading-[18px] lg:pr-4 lg:pt-4 2xl:text-[24px] 2xl:leading-[26px]">Behind the scenes at VisiOne, a vibrant team of young Pakistani trailblazers comes together, driven by a shared determination to carve out new paths. With a blend of creativity, resilience, and a relentless pursuit of excellence, we're shaping a company that doesn't just follow trends – we create them.</p>
		</div>
	</div>
</section>

<section class="overflow-hidden">
	<div class="w-full h-auto hidden lg:block lg:relative lg:w-[80%] lg:m-auto lg:mt-[11rem] 2xl:mt-[18rem]">
		<div>
		<svg viewBox="0 0 1303 705" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1300.69 127.729V136.829C1298.21 146.095 1291.76 152.382 1284.64 158.504C1277.86 164.46 1271.57 171.078 1265.45 177.531C1259.99 183.322 1253.54 186.466 1245.43 185.969C1244.44 185.969 1243.45 185.969 1242.46 185.969C1237.49 186.135 1236.33 187.293 1236.33 192.257C1236.33 196.062 1236.67 200.033 1236.5 203.839C1236 211.449 1232.2 217.571 1226.74 222.7C1222.77 226.34 1218.63 229.98 1214.99 233.951C1211.35 237.757 1206.89 239.08 1201.76 239.08C1198.61 239.08 1196.3 237.591 1195.8 234.448C1192.82 218.73 1194.64 205.162 1208.71 195.069C1210.69 193.58 1212.68 191.926 1214.5 190.271C1215.16 189.609 1215.65 188.451 1215.65 187.458C1215.65 186.962 1214.17 186.135 1213.5 186.135C1192.82 186.135 1172.14 185.638 1151.46 186.3C1142.69 186.631 1128.47 205.659 1128.96 214.593C1129.29 219.391 1130.78 221.211 1135.75 222.039C1139.72 222.7 1141.54 224.851 1141.54 228.822V229.153C1142.03 247.519 1142.03 247.519 1129.29 260.424C1122.35 267.373 1115.56 274.488 1108.45 281.437C1103.49 286.235 1100.67 291.861 1101.67 298.975C1102.33 304.601 1099.85 309.233 1096.37 313.37C1093.56 316.679 1089.92 317.837 1085.95 316.513C1081.98 315.19 1080.82 311.881 1080.82 307.91C1080.82 301.457 1080.49 295.004 1075.36 290.206C1070.89 285.904 1066.92 286.235 1063.12 291.199C1057.33 298.975 1057.99 310.888 1064.28 318.664C1066.92 321.973 1069.4 326.11 1070.56 330.081C1072.22 335.872 1069.9 341.332 1065.6 345.634C1056.17 355.065 1046.74 364.495 1036.98 373.595C1034.99 375.415 1032.01 376.243 1029.2 377.07C1026.06 378.063 1022.75 378.559 1019.44 379.221C1016.63 379.883 1015.8 381.703 1017.29 384.185C1018.78 386.832 1020.43 389.479 1022.42 391.63C1031.02 400.896 1031.35 409.334 1023.08 418.93C1018.12 424.721 1013.15 425.217 1007.2 420.254C1005.21 418.599 1003.72 416.117 1001.41 414.959C999.257 413.801 996.61 413.967 994.129 413.47C993.798 415.621 992.474 418.103 993.136 419.923C994.625 423.728 996.61 427.368 999.092 430.678C1001.41 433.821 1004.88 436.303 1007.36 439.447C1008.85 441.267 1010.34 443.914 1010.18 446.065C1010.01 448.381 1008.36 451.359 1006.54 452.187C1005.21 452.849 1001.74 451.028 1000.42 449.374C994.956 442.59 989.662 435.476 984.699 428.361C983.375 426.376 982.548 423.728 982.548 421.412C982.217 414.794 982.382 408.01 982.382 401.392C982.382 397.752 980.893 395.601 977.75 393.781C972.456 390.472 967.493 386.336 962.364 382.696C958.062 379.717 954.092 376.077 949.46 373.761C944.662 371.445 942.18 373.099 940.526 378.394C939.864 380.379 938.871 382.199 937.548 383.688C934.735 386.832 931.757 389.81 928.779 392.623C923.485 397.421 920.838 403.046 921.335 410.327C921.831 416.283 919.68 421.081 914.552 424.721C910.912 427.203 907.107 427.699 903.798 424.721C899.662 421.247 895.526 417.607 892.217 413.305C890.397 410.988 889.901 407.348 889.735 404.37C889.404 395.436 889.57 386.501 889.57 377.732C889.57 374.257 888.081 372.272 885.103 370.452C880.967 367.97 876.5 365.157 873.191 361.683C867.566 355.892 861.279 353.079 853.173 353.41C843.577 353.741 833.982 353.41 824.386 353.575C818.926 353.575 814.294 352.086 810.82 347.785C809.165 345.964 807.346 344.144 805.195 342.821C804.202 342.159 802.382 342.655 801.059 342.655C801.059 344.144 800.562 346.13 801.224 346.792C807.18 352.914 813.136 358.87 819.588 364.33C821.574 365.985 825.213 365.323 828.026 365.985C836.298 367.97 838.118 373.43 831.996 379.717C825.048 386.997 817.934 393.946 810.654 400.896C804.533 406.687 800.232 406.687 793.945 400.896C785.507 392.954 777.401 384.846 769.129 376.739C765.158 372.768 764.993 367.639 764.496 362.51C764.331 360.525 763.173 358.539 762.346 356.388C761.518 358.374 760.36 360.194 760.195 362.179C759.699 369.128 759.037 376.243 759.368 383.357C759.533 387.163 760.526 391.465 762.676 394.277C767.971 400.73 774.092 406.687 780.213 412.477C781.868 413.967 785.176 414.132 787.658 414.297C791.298 414.628 794.938 414.463 798.412 414.628C801.721 414.794 803.044 416.779 803.54 420.088C805.195 431.008 801.886 439.447 793.283 446.561C786.004 452.518 779.882 459.798 773.265 466.581C769.79 470.056 769.294 474.523 769.294 478.99C769.129 488.918 769.129 499.011 769.129 508.938C769.129 515.06 766.978 520.023 762.676 524.16C760.029 526.807 757.217 529.454 754.404 531.771C745.471 538.885 742.493 548.316 744.313 559.236C746.132 570.156 743.651 579.422 735.379 586.867C730.25 591.665 725.287 597.291 719.165 600.434C708.081 606.225 696.831 604.24 687.235 596.133C682.272 591.996 677.64 587.198 673.338 582.4C669.699 578.264 668.871 572.969 668.871 567.509C668.871 549.64 668.871 531.605 669.037 513.736C669.037 508.111 667.217 503.974 662.75 500.5C653.651 493.55 650.673 484.12 651.665 472.869C652.327 464.099 652.162 455.33 651.996 446.727C651.831 442.259 650.177 441.101 644.552 441.101C631.151 440.936 617.915 440.605 604.515 441.267C596.243 441.598 589.956 439.281 584.331 432.994C577.548 425.383 569.938 418.268 562.658 410.988C559.018 407.348 557.033 403.046 557.199 397.917C557.199 385.839 557.199 373.761 557.199 361.683C557.199 356.388 559.184 351.921 562.824 348.115C573.081 337.857 583.504 327.434 593.761 317.175C597.401 313.535 601.868 311.881 606.996 311.715C622.382 311.55 637.768 311.55 653.32 311.55C658.283 311.55 662.585 313.204 665.893 317.175C668.044 319.657 670.36 322.139 672.676 324.455C675.82 327.599 677.805 327.268 681.445 324.952C683.926 323.297 687.07 322.139 690.048 321.643C694.018 321.146 698.154 321.477 702.125 321.477C706.096 321.312 709.57 322.47 712.713 325.283C714.699 327.103 717.842 328.426 720.654 328.592C727.438 328.923 734.221 328.923 741.004 328.261C747.29 327.599 751.757 320.153 750.268 314.197C749.441 310.723 747.125 308.903 743.651 309.233C736.206 310.061 729.919 307.413 724.956 301.953C721.978 298.644 718.504 296.99 713.871 296.99C707.75 296.99 702.621 294.839 698.32 290.206C695.176 286.732 691.702 283.588 688.228 280.279C686.408 278.624 683.926 276.804 682.272 279.121C681.279 280.444 682.603 283.588 683.099 285.904C683.265 286.566 684.257 287.062 684.754 287.724C687.897 291.695 687.732 294.342 684.754 297.321C681.279 300.63 678.136 300.795 674.496 297.486C667.382 290.868 660.599 283.919 653.651 277.135C649.349 272.833 647.364 272.833 643.228 277.135C636.61 283.919 629.993 290.702 623.54 297.486C618.908 302.284 613.779 304.932 606.831 304.27C601.537 303.773 596.243 304.27 590.949 304.104C585.985 303.939 584.165 302.119 584 297.321C583.835 292.853 584 288.386 584 283.919C584.165 273.826 591.776 265.719 601.868 265.057C610.14 264.561 610.802 264.064 610.636 255.626C610.471 249.504 612.787 244.706 617.419 240.57C623.21 235.275 628.504 229.815 634.129 224.355C637.934 220.55 642.401 218.895 647.695 219.06C658.614 219.226 669.699 219.06 680.618 219.06C693.191 219.06 699.974 212.277 699.974 199.702C699.974 193.911 700.14 187.955 699.809 182.164C699.478 175.38 701.794 169.755 706.592 164.957C708.246 163.302 709.239 160.489 709.735 158.173C709.901 157.18 708.743 155.195 707.585 154.698C706.757 154.202 704.772 154.864 703.945 155.691C698.816 160.655 693.688 165.453 689.055 170.913C687.235 173.064 686.739 176.538 686.408 179.517C685.912 187.128 685.912 194.738 685.581 202.349C685.415 206.32 683.265 208.637 679.46 208.968C675.324 209.299 671.187 209.464 667.051 209.133C663.412 208.968 661.592 206.32 661.592 202.846C661.757 198.379 659.276 196.889 655.305 196.889C650.507 196.889 645.875 196.889 641.077 196.724C636.445 196.559 634.956 195.235 634.625 190.437C634.46 186.797 634.625 183.157 634.46 179.517C634.294 174.222 636.114 169.755 639.919 165.949C653.816 152.217 667.548 138.649 681.445 124.916C684.919 121.442 689.551 119.953 694.349 119.953C719 119.787 743.816 119.787 768.632 119.953C773.596 119.953 775.25 121.607 776.077 126.571C777.897 136.333 774.588 143.944 766.482 149.073C764 150.562 760.857 151.389 757.879 151.72C753.412 152.382 751.923 153.706 751.923 158.504C751.923 162.806 753.577 164.626 757.713 164.957C766.316 165.784 773.43 163.137 779.551 156.849C793.779 142.124 808.173 127.729 822.566 113.169C827.033 108.536 832.162 106.055 838.945 106.385C846.39 106.716 854 106.551 861.445 106.385C867.566 106.385 868.724 105.227 869.055 99.2709C869.055 98.94 869.055 98.7745 869.055 98.4436C869.552 90.0054 870.544 89.1781 879.147 89.1781C899.165 89.1781 919.184 88.8472 939.202 89.1781C949.956 89.3436 958.393 85.5381 965.011 77.2654C980.563 57.7417 981.886 61.5471 1000.58 61.3817C1008.85 61.2162 1016.96 61.2162 1025.23 61.3817C1030.19 61.5471 1035.65 61.5471 1037.64 67.0072C1039.62 72.4672 1034.99 75.4454 1031.68 78.7545C1028.87 81.7327 1026.22 85.0418 1023.58 88.1854C1021.92 90.1709 1022.42 91.9909 1024.24 93.6454C1027.88 96.7891 1031.68 98.94 1036.81 98.94C1084.62 98.7745 1132.44 98.7745 1180.25 98.7745C1186.7 98.7745 1191.67 100.76 1195.64 106.22C1201.92 114.824 1211.02 118.133 1221.44 118.629C1226.41 118.795 1231.37 118.298 1236.5 118.298C1254.86 118.298 1273.23 118.133 1291.43 118.464C1297.88 118.629 1297.88 119.126 1299.37 125.413C1300.19 126.736 1300.36 127.233 1300.69 127.729Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M474.147 523.498C474.147 530.281 471.996 535.907 467.033 540.705C459.919 547.654 452.971 554.934 445.857 561.883C440.562 567.013 438.081 573.3 438.412 580.58C438.743 589.018 435.599 595.802 429.478 601.758C415.415 615.491 401.849 629.885 387.456 643.453C379.349 651.064 375.71 659.502 375.875 670.257C376.04 677.702 376.04 685.313 376.206 692.758C376.371 697.226 375.379 700.7 370.746 702.355H363.301C352.382 698.053 345.93 688.953 338.816 680.515C336.665 678.033 336.169 673.566 336.169 669.926C335.838 656.193 336.004 642.46 336.004 628.727C336.004 623.102 337.824 618.304 342.29 614.829C347.75 610.693 349.57 605.067 349.404 598.449C349.239 580.249 349.239 562.049 349.239 543.849C349.239 537.396 349.735 530.778 349.404 524.325C348.908 516.218 344.441 510.096 338.485 504.801C333.026 499.838 327.732 494.709 322.437 489.58C317.64 484.781 317.474 478.66 317.64 472.538C317.805 464.265 317.971 455.827 318.301 447.554C318.632 441.432 316.647 436.468 312.18 432.332C304.735 425.218 297.456 418.103 290.507 410.492C285.048 404.536 278.265 402.55 270.654 402.55C266.518 402.55 262.382 402.55 258.081 402.55C252.456 402.55 247.824 400.565 243.853 396.759C236.408 389.479 229.129 382.034 221.684 374.754C218.706 371.775 217.051 368.135 217.548 363.834C218.21 357.381 215.562 352.417 211.096 347.95C197.695 335.044 184.46 321.808 171.059 308.903C166.096 304.104 163.779 298.644 163.945 291.861C164.11 278.459 163.945 265.222 164.11 251.821C164.11 243.879 161.96 237.426 156.004 231.8C143.43 220.053 131.518 207.644 119.276 195.4C115.14 191.264 110.176 189.113 104.386 189.113C95.7831 188.948 87.1801 188.948 78.5772 189.113C70.9669 189.278 64.6801 192.422 59.8823 198.544C50.9485 210.126 34.0735 211.119 23.8162 201.026C19.5147 196.724 14.8823 192.588 10.9117 187.955C7.76836 184.315 5.28674 179.848 2.47424 175.877V140.304C4.2941 132.693 10.25 127.895 15.3787 122.766C30.7647 107.378 27.9522 109.529 47.3088 109.364C54.4228 109.198 61.5367 109.198 68.4853 109.529C71.2978 109.695 74.1103 111.349 76.9228 112.342C81.0588 113.831 85.0294 116.478 89.1654 116.478C115.305 116.644 141.445 116.313 167.585 116.147C173.375 116.147 178.835 117.14 183.467 121.442C186.941 124.751 191.243 126.075 196.04 126.075C216.721 126.075 237.401 126.075 258.081 126.24C265.195 126.24 266.684 124.586 266.684 117.636C266.684 112.011 266.849 106.551 266.684 100.925C266.518 96.6236 268.669 94.8036 272.64 94.4727C274.625 94.3072 276.61 94.3072 278.43 94.6381C281.573 95.1345 283.393 96.9545 283.393 100.264C283.393 103.076 283.393 105.889 283.393 108.536C283.89 120.78 292.989 128.391 305.066 127.067C312.511 126.24 315.82 129.053 314.827 136.498C314.496 139.807 312.842 143.613 310.691 146.095C305.562 151.886 299.937 157.511 293.982 162.475C283.228 171.409 284.055 179.351 286.537 191.429C287.199 194.904 290.673 197.882 293.32 200.529C298.614 206.155 304.073 211.284 309.533 216.744C314 221.211 319.79 222.039 325.746 221.708C329.882 221.542 330.875 218.399 330.875 214.924C330.875 206.486 330.875 198.048 331.04 189.444C331.04 187.293 331.04 185.308 331.04 183.157C331.04 173.395 331.868 173.395 341.298 172.568C354.202 171.409 364.129 175.711 372.566 185.473C380.838 195.069 389.937 203.839 398.871 212.773C407.143 221.046 405.985 231.139 404.496 241.231C404.331 242.72 401.518 244.706 399.698 245.037C394.404 245.699 388.945 245.864 383.485 246.03C377.033 246.195 375.213 248.181 376.206 254.633C378.522 270.352 373.89 283.092 361.647 293.681C351.721 302.119 342.952 311.881 333.687 321.146C330.71 324.124 329.882 327.764 329.717 331.735C329.551 335.541 328.89 339.512 327.897 343.152C327.566 344.475 325.25 346.13 323.761 346.13C318.301 346.295 313.173 345.799 309.368 340.67C306.059 336.203 300.765 333.886 295.14 333.886C287.86 333.886 280.415 334.217 273.136 334.879C271.316 335.044 269.165 336.203 267.676 337.692C262.382 342.655 258.743 348.612 259.073 356.388C259.239 360.525 258.908 364.661 259.239 368.963C259.57 378.063 265.029 383.688 274.129 383.192C285.379 382.53 293.982 386.336 301.261 394.939C305.893 400.399 311.187 405.363 316.151 410.657C319.956 414.794 324.588 416.779 330.213 416.779C354.037 416.779 377.695 417.11 401.518 416.448C413.926 416.117 422.86 421.081 430.967 429.85C443.044 442.921 455.452 455.661 468.026 468.236C472.327 472.538 474.312 477.501 474.312 483.458C474.147 496.529 474.147 510.096 474.147 523.498Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M544.956 112.507C538.503 118.464 532.382 124.751 526.261 130.873C522.125 135.009 517.492 137.491 511.371 136.829C505.581 136.333 500.948 138.815 496.812 142.786C488.044 151.389 479.276 159.827 470.507 168.266C461.904 176.538 449 178.027 439.073 171.244C429.147 164.46 420.213 156.353 418.062 143.447C417.566 140.304 417.731 137.16 417.731 133.851C417.897 124.089 418.062 114.493 418.062 104.731C418.062 100.264 416.077 96.4581 412.934 93.3145C406.647 87.1926 400.526 80.9053 394.404 74.7835C391.095 71.4744 387.29 69.8198 382.492 69.8198C374.22 69.9853 365.783 69.9853 357.511 69.8198C351.72 69.8198 349.735 67.9998 349.404 62.2089C348.742 50.627 349.901 49.1379 361.481 49.1379C369.092 49.1379 375.213 46.8216 380.342 41.0306C385.636 35.0743 391.426 29.7797 397.051 24.1542C400.856 20.3487 405.489 18.3633 410.948 18.3633C422.86 18.3633 434.772 18.6942 446.684 18.8597C454.128 19.0251 460.746 17.2051 465.709 11.2487C469.349 6.94688 473.651 3.47232 479.276 2.14868H547.603C551.242 3.47232 551.904 6.28506 551.904 9.75962C551.739 33.0888 551.904 56.418 551.904 79.7471C551.904 83.8835 552.07 88.0199 552.401 92.1563C552.897 100.429 550.912 107.047 544.956 112.507Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1180.91 608.211C1179.42 609.369 1177.93 610.527 1177.11 612.016C1172.31 619.462 1165.03 622.44 1156.59 622.936C1148.49 623.433 1141.04 621.944 1135.25 615.16C1130.29 609.204 1124 604.405 1118.87 598.449C1112.58 591.169 1093.72 590.342 1087.6 598.614C1081.15 607.218 1071.39 606.225 1062.29 605.233C1049.22 603.909 1038.96 591.996 1038.8 578.76C1038.8 574.127 1037.8 569.329 1038.47 564.696C1039.96 552.783 1047.4 544.511 1057.49 538.885C1059.81 537.561 1063.12 537.561 1065.93 537.396C1069.74 537.231 1072.38 536.238 1073.37 532.101C1073.37 531.77 1073.54 531.44 1073.71 531.274C1082.47 522.174 1088.76 509.765 1103.15 507.779C1105.31 507.449 1107.62 507.283 1109.77 507.118V507.283C1110.43 507.283 1111.1 507.283 1111.92 507.283C1121.52 507.449 1123.01 508.772 1123.34 518.369C1123.5 525.814 1130.95 531.109 1137.9 528.627C1142.53 526.972 1143.19 522.174 1144.18 518.038C1144.51 516.88 1144.35 515.556 1144.18 514.232C1144.18 510.923 1145.01 508.441 1148.82 508.11C1153.12 507.614 1154.94 508.938 1156.1 513.074C1157.92 520.023 1159.57 526.972 1161.72 533.756C1162.71 536.9 1164.7 540.043 1167.01 542.525C1172.47 548.316 1178.43 553.941 1184.22 559.402C1189.02 564.034 1191.17 569.66 1190.34 576.278C1190.01 579.091 1190.18 582.069 1190.51 585.047C1191.17 594.313 1188.69 602.254 1180.91 608.211Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M387.125 15.5504C381.004 22.1686 374.551 28.4559 368.099 34.7432C362.64 40.2033 356.022 41.6924 348.577 41.6924C337.327 41.8578 337.327 41.8578 337.327 53.1088C337.327 56.5833 337.493 60.0579 337.162 63.5324C336.665 68.6615 335.342 69.8197 330.379 69.9852C325.912 70.1506 321.445 69.9852 316.978 69.9852C312.676 69.9852 308.375 70.1506 304.073 69.9852C298.945 69.8197 296.96 67.8343 296.96 62.8706C296.794 58.5688 296.794 54.2669 296.96 49.9651C296.96 45.9942 295.471 43.5124 291.5 42.3542C286.371 40.8651 284.386 35.2396 288.026 31.1032C294.974 23.3268 302.419 16.0468 309.864 8.76678C311.187 7.44314 313.669 6.78132 315.489 6.78132C338.154 6.61586 360.82 6.61586 383.485 6.78132C385.636 6.78132 388.779 7.77405 389.441 9.26314C389.937 10.9177 388.614 14.0613 387.125 15.5504Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M385.636 157.346C381.831 161.317 377.86 165.287 373.89 169.093C371.077 171.74 368.099 171.575 365.287 169.093C359.827 164.129 354.533 159.166 349.404 153.871C344.441 148.742 342.456 142.289 343.118 135.175C343.283 134.016 343.118 132.858 342.787 131.865C340.305 123.262 329.717 114.658 320.783 114.162C313.504 113.831 306.39 113.831 299.11 113.665C293.32 113.5 291.831 111.845 291.831 106.054C291.831 104.896 291.831 103.904 291.996 102.745C292.493 96.2926 293.982 94.8035 300.434 94.6381C304.404 94.6381 308.209 94.6381 312.18 94.6381C312.18 94.8035 312.18 94.8035 312.18 94.969C318.301 94.4726 324.423 94.3072 330.379 93.6453C343.448 92.1563 353.044 98.4436 361.482 107.378C367.603 113.996 373.724 120.615 380.011 127.067C383.485 130.707 383.816 132.362 380.342 136.333C377.86 139.146 378.026 141.793 380.507 144.44C382.327 146.591 384.147 148.576 385.967 150.727C387.787 152.878 387.621 155.36 385.636 157.346Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1181.9 502.651C1180.91 504.636 1180.42 506.952 1179.42 507.283C1177.93 507.78 1175.29 507.283 1174.13 506.291C1168.83 500.996 1162.88 499.341 1155.6 500.334C1144.85 501.989 1136.41 497.687 1129.63 489.58C1126.48 485.774 1123.17 481.969 1119.2 478.825C1116.72 476.84 1113.25 476.012 1109.94 475.516C1106.46 475.02 1103.65 473.365 1103.49 470.221C1103.32 468.07 1105.31 465.423 1106.96 463.769C1109.11 461.618 1112.09 460.129 1115.23 462.61C1117.38 464.265 1119.37 465.92 1121.35 467.574C1124.99 470.883 1126.98 470.883 1130.95 468.236C1140.05 461.783 1151.63 462.61 1160.23 469.56C1166.19 474.358 1170.49 479.652 1171.15 487.76C1171.48 490.903 1175.12 493.716 1177.44 496.694C1178.76 498.68 1180.25 500.665 1181.9 502.651Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1064.77 449.705C1064.61 449.705 1064.44 449.705 1064.28 449.705V464.596C1064.28 475.185 1049.72 482.796 1040.29 476.508C1035.32 473.199 1031.19 468.07 1027.55 463.107C1024.74 459.301 1026.56 454.668 1030.86 453.51C1037.97 451.525 1043.1 447.057 1047.57 441.597C1050.71 437.957 1054.68 437.296 1058.82 437.461C1060.31 437.461 1062.29 439.281 1062.95 440.77C1063.94 443.748 1064.11 446.727 1064.77 449.705Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M616.261 229.815C613.449 234.778 609.147 238.253 603.688 240.239C597.401 242.555 593.926 240.239 593.761 233.62C593.596 227.829 593.761 222.038 593.761 216.082C593.926 216.082 594.092 216.082 594.257 216.082C594.257 208.802 594.092 201.357 594.257 194.077C594.423 189.278 596.243 187.624 600.544 187.624C605.177 187.624 608.154 189.609 608.154 194.077C608.154 200.529 610.636 205.327 615.434 209.629C619.404 213.6 619.57 224.024 616.261 229.815Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M847.051 77.7616C845.893 79.4161 844.57 81.0707 843.081 82.5598C832.658 92.9835 822.401 103.407 811.978 113.831C806.518 119.291 799.735 117.471 797.75 109.86C797.419 108.536 798.081 106.22 799.239 105.062C810.82 93.1489 822.566 81.2362 834.147 69.4888C835.14 68.4961 836.629 67.9997 838.945 66.8416C841.923 69.6543 844.901 72.3016 847.713 75.2798C848.21 75.6107 847.548 77.0998 847.051 77.7616Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M809.827 527.8C808.173 530.778 807.015 534.418 804.533 536.569C798.412 542.029 795.93 548.482 796.261 556.423C796.426 562.545 795.434 563.538 789.974 563.703C781.868 564.034 779.882 562.711 779.551 556.589C779.221 551.791 778.89 546.992 778.724 542.029C778.559 536.569 780.379 531.605 784.184 527.634C787.824 523.994 791.463 520.52 795.434 517.045C800.562 512.578 806.022 514.067 808.007 520.85C808.669 522.836 808.669 524.987 809 526.972C809.165 527.303 809.496 527.634 809.827 527.8Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1151.3 293.846C1151.13 301.953 1148.82 307.744 1143.03 312.212C1140.05 314.528 1137.4 317.175 1134.92 319.988C1128.47 327.103 1120.36 327.93 1111.76 326.606C1107.79 325.944 1107.13 323.132 1107.29 319.823C1107.46 316.513 1109.28 314.528 1112.58 314.859C1118.04 315.19 1121.52 312.708 1124 308.241C1128.63 299.803 1135.91 293.681 1143.03 287.559C1147 284.084 1149.81 285.242 1150.8 290.537C1151.13 291.695 1151.13 293.35 1151.3 293.846Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1009.85 482.796C1007.53 485.774 1004.22 485.112 1001.41 483.954C996.61 482.134 993.136 478.825 991.812 473.365C991.151 470.718 989.496 468.07 987.676 465.919C984.202 461.948 980.066 458.639 976.757 454.503C974.276 451.525 972.952 447.719 970.636 443.748C978.246 442.094 983.54 442.59 988.173 447.554C993.136 453.014 998.595 457.977 1003.56 463.272C1006.21 466.25 1008.19 469.725 1010.67 472.868C1013.49 476.674 1012.16 479.818 1009.85 482.796Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1264.63 631.043C1262.81 634.518 1261.48 637.827 1259.33 640.309C1255.53 644.942 1251.22 649.409 1246.92 653.711C1243.45 657.185 1240.31 657.185 1236.83 653.711C1233.19 650.236 1233.19 647.754 1237 643.784C1242.62 637.993 1248.41 632.036 1254.37 626.411C1255.86 624.922 1259.5 623.102 1260.16 623.598C1261.98 625.583 1263.14 628.396 1264.63 631.043Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M1054.68 496.694C1050.71 497.356 1047.4 498.349 1044.26 498.514C1037.81 498.68 1031.52 498.183 1025.07 498.018C1024.07 498.018 1022.75 498.183 1022.25 497.687C1020.43 496.198 1018.94 494.212 1017.46 492.558C1019.11 491.234 1020.76 488.752 1022.58 488.752C1030.53 488.256 1038.47 488.421 1046.24 488.587C1050.71 488.587 1052.2 492.392 1054.68 496.694Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
			<path d="M587.64 224.686C587.64 231.8 585.82 233.62 578.54 233.62C570.765 233.62 566.298 226.506 570.268 219.722C573.246 214.593 578.706 217.24 583.173 217.075C586.482 216.909 587.474 219.722 587.64 222.535C587.64 223.362 587.64 224.024 587.64 224.686Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
		</svg>
			</div>
				<div id="element1" class="absolute bg-[#6900FF] lg:w-[1.5rem] lg:h-[1.5rem] rounded-full lg:top-[16.5rem] lg:right-[19.8rem] 3lg:top-[18.5rem] 3lg:right-[22.8rem] 3xl:w-[2rem] 3xl:h-[2rem] 3xl:top-[21.6rem] 3xl:right-[26.5rem] 2xl:w-[2.5rem] 2xl:h-[2.5rem] 2xl:top-[24rem] 2xl:right-[30.5rem]" ></div>
				<div id="element2" class="absolute bg-[#BFFC05] lg:w-[1.5rem] lg:h-[1.5rem] rounded-full lg:top-[8rem] lg:right-[27.4rem] 3lg:top-[10rem] 3lg:right-[31.4rem] 3xl:w-[2rem] 3xl:h-[2rem] 3xl:top-[15.8rem] 3xl:right-[41.5rem] 2xl:w-[2.5rem] 2xl:h-[2.5rem] 2xl:top-[18rem] 2xl:right-[47rem]"  ></div>
				<div id="element3" class="absolute bg-[#BFFC05] lg:w-[1.5rem] lg:h-[1.5rem] rounded-full lg:top-[12.1rem] lg:right-[31.4rem] 3lg:top-[13.8rem] 3lg:right-[35.4rem] 3xl:w-[2rem] 3xl:h-[2rem] 3xl:top-[11.4rem] 3xl:right-[36.5rem] 2xl:w-[2.5rem] 2xl:h-[2.5rem] 2xl:top-[12.5rem] 2xl:right-[41rem]" ></div>
				<div id="element4" class="absolute bg-[#BFFC05] lg:w-[1.5rem] lg:h-[1.5rem] rounded-full lg:top-[11.2rem] lg:left-[8.6rem] 3lg:top-[12.6rem] 3lg:left-[9.4rem] 3xl:w-[2rem] 3xl:h-[2rem] 3xl:top-[14.5rem] 3xl:left-[11.5rem] 2xl:w-[2.5rem] 2xl:h-[2.5rem] 2xl:top-[17rem] 2xl:left-[12.5rem]" ></div>
				<div id="element5" class="absolute bg-[#BFFC05] lg:w-[1.5rem] lg:h-[1.5rem] rounded-full lg:top-[14.9rem] lg:left-[15.6rem] 3lg:top-[16.6rem] 3lg:left-[17.5rem] 3xl:w-[2rem] 3xl:h-[2rem] 3xl:top-[19.5rem] 3xl:left-[21rem] 2xl:w-[2.5rem] 2xl:h-[2.5rem] 2xl:top-[22rem] 2xl:left-[23.5rem]" ></div>
				<div class="absolute w-full h-full lg:w-[14rem] lg:h-[14rem] lg:top-[14.2rem] lg:left-[39.5rem] 3lg:top-[16.4rem] 3lg:left-[44.5rem] 3xl:w-[18rem] 3xl:h-[18rem] 3xl:top-[19rem] 3xl:left-[53rem] 2xl:w-[20rem] 2xl:h-[20rem] 2xl:top-[21rem] 2xl:left-[59rem]">
					<svg viewBox="0 0 308 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M153.473 25.4607V6.56069H156.173V14.4447H166.082V6.56069H168.782V25.4607H166.082V16.9287H156.173V25.4607H153.473ZM172.281 16.0107C172.245 13.1487 173.145 10.7907 174.981 8.93669C176.817 7.06469 179.085 6.14669 181.785 6.18269C184.485 6.14669 186.735 7.06469 188.535 8.93669C190.353 10.7907 191.244 13.1487 191.208 16.0107C191.208 18.3507 190.614 20.3667 189.426 22.0587C190.434 22.9227 191.469 23.3547 192.531 23.3547V25.8387C190.767 25.8387 189.174 25.1727 187.752 23.8407C186.078 25.1727 184.089 25.8387 181.785 25.8387C179.085 25.8747 176.817 24.9657 174.981 23.1117C173.145 21.2397 172.245 18.8727 172.281 16.0107ZM186.024 21.8427L185.592 21.3027C184.746 20.2407 184.017 19.4847 183.405 19.0347C182.793 18.5667 182.046 18.3147 181.164 18.2787C181.002 18.2787 180.858 18.2877 180.732 18.3057V15.7407C181.056 15.7047 181.344 15.6867 181.596 15.6867C182.802 15.6867 183.936 16.1457 184.998 17.0637C185.664 17.6397 186.501 18.5847 187.509 19.8987C188.067 18.7647 188.346 17.4687 188.346 16.0107C188.346 13.8687 187.743 12.1047 186.537 10.7187C185.349 9.33269 183.756 8.63969 181.758 8.63969C179.742 8.63969 178.14 9.33269 176.952 10.7187C175.764 12.0867 175.17 13.8507 175.17 16.0107C175.17 18.1887 175.764 19.9617 176.952 21.3297C178.14 22.6977 179.742 23.3817 181.758 23.3817C183.432 23.3817 184.854 22.8687 186.024 21.8427Z" fill="black"/>
<path d="M8.43987 24.7387L0.229492 1.23779H4.8507L12.4051 23.6565L27.9087 1.23779H32.5466L15.9942 24.7387H8.43987Z" fill="#1C1C1C"/>
<path d="M27.4346 24.7387L31.5983 1.23779H35.3671L31.2034 24.7387H27.4346Z" fill="#1C1C1C"/>
<path d="M43.9554 25.2798C40.1636 25.2359 37.2659 24.4859 35.2603 23.0256C33.2548 21.5674 32.4713 19.6642 32.908 17.3139H36.775C36.5117 18.7679 37.0863 19.9316 38.4964 20.8048C39.9066 21.6781 41.8558 22.1273 44.3482 22.1482C50.8371 22.1816 54.3677 20.8968 54.936 18.2979C55.2306 16.8877 54.5474 15.8891 52.8865 15.2978C51.8148 14.9155 49.899 14.6147 47.1351 14.3974C44.1852 14.1571 42.213 13.9545 41.2186 13.7915C38.3022 13.311 36.4177 12.4211 35.5654 11.1195C34.9971 10.2463 34.8383 9.14736 35.0911 7.82492C35.3857 6.26224 36.1733 4.93145 37.4519 3.83464C38.7304 2.73575 40.3558 1.93142 42.3279 1.41749C44.3001 0.903559 46.5313 0.669574 49.0237 0.713446C52.6839 0.77821 55.4938 1.5303 57.4555 2.96764C59.4172 4.40498 60.2111 6.30193 59.8392 8.66268H55.9722C56.2563 7.23161 55.709 6.0763 54.3343 5.19677C52.9576 4.31724 51.0564 3.8618 48.6309 3.82837C45.7249 3.79495 43.4519 4.08534 41.814 4.69746C40.1761 5.30958 39.236 6.21628 38.9958 7.41754C38.7659 8.56449 39.4115 9.38343 40.9303 9.87647C41.9143 10.2045 43.7381 10.4782 46.4039 10.6954C49.3976 10.9461 51.5014 11.1926 52.7131 11.4329C55.7403 12.0346 57.6352 13.1272 58.3998 14.7108C58.8594 15.6509 58.9576 16.7916 58.6944 18.137C58.3894 19.7101 57.56 21.0451 56.2125 22.144C54.8629 23.2429 53.1456 24.0472 51.0585 24.5611C48.9715 25.0751 46.6065 25.3153 43.9617 25.2819L43.9554 25.2798Z" fill="#1C1C1C"/>
<path d="M57.9341 24.7387L62.0978 1.23779H65.8666L61.7029 24.7387H57.9341Z" fill="#1C1C1C"/>
<path d="M76.6675 25.2798C74.4049 25.2798 72.4015 24.9853 70.6528 24.394C68.9042 23.8049 67.4898 22.9755 66.4077 21.9121C65.3255 20.8467 64.5755 19.5514 64.1535 18.0284C63.7336 16.5033 63.6855 14.8236 64.0135 12.9894C64.6695 9.27484 66.5288 6.29988 69.5936 4.06658C72.6584 1.83327 76.469 0.715576 81.0255 0.715576C85.5819 0.715576 89.0123 1.83327 91.2853 4.06658C93.5583 6.30197 94.3668 9.27484 93.7108 12.9894C93.2742 15.4378 92.2965 17.5855 90.7777 19.4386C89.2588 21.2896 87.2846 22.7269 84.8528 23.7485C82.421 24.7701 79.6926 25.2798 76.6675 25.2798ZM77.7163 19.5117C80.3047 19.5117 82.396 18.9581 83.9858 17.8487C85.5757 16.7394 86.5617 15.1203 86.944 12.9894C87.3264 10.8689 86.9106 9.25604 85.6989 8.1467C84.4872 7.03735 82.5861 6.48373 79.9955 6.48373C77.405 6.48373 75.3346 7.03527 73.751 8.13834C72.1675 9.24141 71.1835 10.8584 70.8012 12.9894C70.4188 15.1098 70.8304 16.7268 72.0379 17.8404C73.2455 18.9539 75.1382 19.5117 77.7163 19.5117Z" fill="#1C1C1C"/>
<path d="M91.9913 24.7387L96.155 1.23779H101.48L114.542 14.2344L116.819 1.23779H123.604L119.441 24.7387H114.065L101.052 11.7755L98.7748 24.7387H91.9893H91.9913Z" fill="#1C1C1C"/>
<path d="M119.879 24.7387L124.043 1.23779H147.709L146.66 7.02266H129.78L129.239 10.0707H145.825L144.891 15.5443H128.305L127.699 18.9705H144.579L143.547 24.7387H119.881H119.879Z" fill="#1C1C1C"/>
				</svg>
				</div>
				<script>
					gsap.to("#element1, #element2, #element3, #element4, #element5", {
						scale: 1.5,
						transformOrigin: "50% 50%", 
						repeat: -1, 
						yoyo: true, 
						duration: .5, 
						ease: "power1.inOut"
					});
				</script>

	</div>
		<div class=" w-full h-auto mt-8 lg:hidden ">
		<svg viewBox="0 0 1305 707" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="1305" height="706.328" fill="white"/>
<path d="M1301.69 128.393V137.493C1299.21 146.759 1292.76 153.046 1285.64 159.168C1278.86 165.124 1272.57 171.742 1266.45 178.195C1260.99 183.986 1254.54 187.13 1246.43 186.633C1245.44 186.633 1244.45 186.633 1243.46 186.633C1238.49 186.799 1237.33 187.957 1237.33 192.921C1237.33 196.726 1237.67 200.697 1237.5 204.503C1237 212.114 1233.2 218.235 1227.74 223.364C1223.77 227.004 1219.63 230.645 1215.99 234.615C1212.35 238.421 1207.89 239.745 1202.76 239.745C1199.61 239.745 1197.3 238.255 1196.8 235.112C1193.82 219.394 1195.64 205.826 1209.71 195.733C1211.69 194.244 1213.68 192.59 1215.5 190.935C1216.16 190.273 1216.65 189.115 1216.65 188.123C1216.65 187.626 1215.17 186.799 1214.5 186.799C1193.82 186.799 1173.14 186.303 1152.46 186.964C1143.69 187.295 1129.47 206.323 1129.96 215.257C1130.29 220.055 1131.78 221.875 1136.75 222.703C1140.72 223.364 1142.54 225.515 1142.54 229.486V229.817C1143.03 248.183 1143.03 248.183 1130.29 261.088C1123.35 268.037 1116.56 275.152 1109.45 282.101C1104.49 286.899 1101.67 292.525 1102.67 299.639C1103.33 305.265 1100.85 309.898 1097.37 314.034C1094.56 317.343 1090.92 318.501 1086.95 317.178C1082.98 315.854 1081.82 312.545 1081.82 308.574C1081.82 302.121 1081.49 295.668 1076.36 290.87C1071.89 286.568 1067.92 286.899 1064.12 291.863C1058.33 299.639 1058.99 311.552 1065.28 319.328C1067.92 322.638 1070.4 326.774 1071.56 330.745C1073.22 336.536 1070.9 341.996 1066.6 346.298C1057.17 355.729 1047.74 365.16 1037.98 374.26C1035.99 376.08 1033.01 376.907 1030.2 377.734C1027.06 378.727 1023.75 379.223 1020.44 379.885C1017.63 380.547 1016.8 382.367 1018.29 384.849C1019.78 387.496 1021.43 390.143 1023.42 392.294C1032.02 401.56 1032.35 409.998 1024.08 419.594C1019.12 425.385 1014.15 425.882 1008.2 420.918C1006.21 419.263 1004.72 416.782 1002.41 415.623C1000.26 414.465 997.61 414.631 995.129 414.134C994.798 416.285 993.474 418.767 994.136 420.587C995.625 424.392 997.61 428.032 1000.09 431.342C1002.41 434.485 1005.88 436.967 1008.36 440.111C1009.85 441.931 1011.34 444.578 1011.18 446.729C1011.01 449.045 1009.36 452.023 1007.54 452.851C1006.21 453.513 1002.74 451.693 1001.42 450.038C995.956 443.254 990.662 436.14 985.699 429.025C984.375 427.04 983.548 424.392 983.548 422.076C983.217 415.458 983.382 408.674 983.382 402.056C983.382 398.416 981.893 396.265 978.75 394.445C973.456 391.136 968.493 387 963.364 383.36C959.062 380.381 955.092 376.741 950.46 374.425C945.662 372.109 943.18 373.763 941.526 379.058C940.864 381.043 939.871 382.863 938.548 384.352C935.735 387.496 932.757 390.474 929.779 393.287C924.485 398.085 921.838 403.711 922.335 410.991C922.831 416.947 920.68 421.745 915.552 425.385C911.912 427.867 908.107 428.363 904.798 425.385C900.662 421.911 896.526 418.271 893.217 413.969C891.397 411.652 890.901 408.012 890.735 405.034C890.404 396.1 890.57 387.165 890.57 378.396C890.57 374.921 889.081 372.936 886.103 371.116C881.967 368.634 877.5 365.821 874.191 362.347C868.566 356.556 862.279 353.743 854.173 354.074C844.577 354.405 834.982 354.074 825.386 354.239C819.926 354.239 815.294 352.75 811.82 348.449C810.165 346.629 808.346 344.809 806.195 343.485C805.202 342.823 803.382 343.319 802.059 343.319C802.059 344.809 801.562 346.794 802.224 347.456C808.18 353.578 814.136 359.534 820.588 364.994C822.574 366.649 826.213 365.987 829.026 366.649C837.298 368.634 839.118 374.094 832.996 380.381C826.048 387.661 818.934 394.611 811.654 401.56C805.533 407.351 801.232 407.351 794.945 401.56C786.507 393.618 778.401 385.511 770.129 377.403C766.158 373.432 765.993 368.303 765.496 363.174C765.331 361.189 764.173 359.203 763.346 357.052C762.518 359.038 761.36 360.858 761.195 362.843C760.699 369.792 760.037 376.907 760.368 384.021C760.533 387.827 761.526 392.129 763.676 394.941C768.971 401.394 775.092 407.351 781.213 413.142C782.868 414.631 786.176 414.796 788.658 414.962C792.298 415.292 795.938 415.127 799.412 415.292C802.721 415.458 804.044 417.443 804.54 420.752C806.195 431.672 802.886 440.111 794.283 447.225C787.004 453.182 780.882 460.462 774.265 467.245C770.79 470.72 770.294 475.187 770.294 479.654C770.129 489.582 770.129 499.675 770.129 509.602C770.129 515.724 767.978 520.687 763.676 524.824C761.029 527.471 758.217 530.118 755.404 532.435C746.471 539.549 743.493 548.98 745.313 559.9C747.132 570.82 744.651 580.086 736.379 587.531C731.25 592.329 726.287 597.955 720.165 601.099C709.081 606.889 697.831 604.904 688.235 596.797C683.272 592.66 678.64 587.862 674.338 583.064C670.699 578.928 669.871 573.633 669.871 568.173C669.871 550.304 669.871 532.269 670.037 514.4C670.037 508.775 668.217 504.638 663.75 501.164C654.651 494.215 651.673 484.784 652.665 473.533C653.327 464.764 653.162 455.994 652.996 447.391C652.831 442.923 651.177 441.765 645.552 441.765C632.151 441.6 618.915 441.269 605.515 441.931C597.243 442.262 590.956 439.945 585.331 433.658C578.548 426.047 570.938 418.932 563.658 411.652C560.018 408.012 558.033 403.711 558.199 398.581C558.199 386.503 558.199 374.425 558.199 362.347C558.199 357.052 560.184 352.585 563.824 348.779C574.081 338.521 584.504 328.098 594.761 317.839C598.401 314.199 602.868 312.545 607.996 312.379C623.382 312.214 638.768 312.214 654.32 312.214C659.283 312.214 663.585 313.868 666.893 317.839C669.044 320.321 671.36 322.803 673.676 325.119C676.82 328.263 678.805 327.932 682.445 325.616C684.926 323.961 688.07 322.803 691.048 322.307C695.018 321.81 699.154 322.141 703.125 322.141C707.096 321.976 710.57 323.134 713.713 325.947C715.699 327.767 718.842 329.09 721.654 329.256C728.438 329.587 735.221 329.587 742.004 328.925C748.29 328.263 752.757 320.818 751.268 314.861C750.441 311.387 748.125 309.567 744.651 309.898C737.206 310.725 730.919 308.077 725.956 302.617C722.978 299.308 719.504 297.654 714.871 297.654C708.75 297.654 703.621 295.503 699.32 290.87C696.176 287.396 692.702 284.252 689.228 280.943C687.408 279.288 684.926 277.468 683.272 279.785C682.279 281.108 683.603 284.252 684.099 286.568C684.265 287.23 685.257 287.727 685.754 288.388C688.897 292.359 688.732 295.007 685.754 297.985C682.279 301.294 679.136 301.459 675.496 298.15C668.382 291.532 661.599 284.583 654.651 277.799C650.349 273.497 648.364 273.497 644.228 277.799C637.61 284.583 630.993 291.367 624.54 298.15C619.908 302.948 614.779 305.596 607.831 304.934C602.537 304.437 597.243 304.934 591.949 304.768C586.985 304.603 585.165 302.783 585 297.985C584.835 293.517 585 289.05 585 284.583C585.165 274.49 592.776 266.383 602.868 265.721C611.14 265.225 611.802 264.728 611.636 256.29C611.471 250.168 613.787 245.37 618.419 241.234C624.21 235.939 629.504 230.479 635.129 225.019C638.934 221.214 643.401 219.559 648.695 219.724C659.614 219.89 670.699 219.724 681.618 219.724C694.191 219.724 700.974 212.941 700.974 200.366C700.974 194.575 701.14 188.619 700.809 182.828C700.478 176.044 702.794 170.419 707.592 165.621C709.246 163.966 710.239 161.153 710.735 158.837C710.901 157.844 709.743 155.859 708.585 155.362C707.757 154.866 705.772 155.528 704.945 156.355C699.816 161.319 694.688 166.117 690.055 171.577C688.235 173.728 687.739 177.203 687.408 180.181C686.912 187.792 686.912 195.403 686.581 203.013C686.415 206.984 684.265 209.301 680.46 209.632C676.324 209.963 672.187 210.128 668.051 209.797C664.412 209.632 662.592 206.984 662.592 203.51C662.757 199.043 660.276 197.553 656.305 197.553C651.507 197.553 646.875 197.553 642.077 197.388C637.445 197.223 635.956 195.899 635.625 191.101C635.46 187.461 635.625 183.821 635.46 180.181C635.294 174.886 637.114 170.419 640.919 166.613C654.816 152.881 668.548 139.313 682.445 125.581C685.919 122.106 690.551 120.617 695.349 120.617C720 120.451 744.816 120.451 769.632 120.617C774.596 120.617 776.25 122.271 777.077 127.235C778.897 136.997 775.588 144.608 767.482 149.737C765 151.226 761.857 152.053 758.879 152.384C754.412 153.046 752.923 154.37 752.923 159.168C752.923 163.47 754.577 165.29 758.713 165.621C767.316 166.448 774.43 163.801 780.551 157.513C794.779 142.788 809.173 128.393 823.566 113.833C828.033 109.2 833.162 106.719 839.945 107.05C847.39 107.38 855 107.215 862.445 107.05C868.566 107.05 869.724 105.891 870.055 99.935C870.055 99.6041 870.055 99.4386 870.055 99.1077C870.552 90.6695 871.544 89.8422 880.147 89.8422C900.165 89.8422 920.184 89.5113 940.202 89.8422C950.956 90.0077 959.393 86.2022 966.011 77.9294C981.563 58.4057 982.886 62.2112 1001.58 62.0457C1009.85 61.8803 1017.96 61.8803 1026.23 62.0457C1031.19 62.2112 1036.65 62.2112 1038.64 67.6712C1040.62 73.1312 1035.99 76.1094 1032.68 79.4185C1029.87 82.3967 1027.22 85.7058 1024.58 88.8495C1022.92 90.8349 1023.42 92.6549 1025.24 94.3095C1028.88 97.4531 1032.68 99.6041 1037.81 99.6041C1085.62 99.4386 1133.44 99.4386 1181.25 99.4386C1187.7 99.4386 1192.67 101.424 1196.64 106.884C1202.92 115.488 1212.02 118.797 1222.44 119.293C1227.41 119.459 1232.37 118.962 1237.5 118.962C1255.86 118.962 1274.23 118.797 1292.43 119.128C1298.88 119.293 1298.88 119.79 1300.37 126.077C1301.19 127.401 1301.36 127.897 1301.69 128.393Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M475.147 524.162C475.147 530.946 472.996 536.571 468.033 541.369C460.919 548.318 453.971 555.598 446.857 562.547C441.562 567.677 439.081 573.964 439.412 581.244C439.743 589.682 436.599 596.466 430.478 602.422C416.415 616.155 402.849 630.55 388.456 644.117C380.349 651.728 376.71 660.166 376.875 670.921C377.04 678.366 377.04 685.977 377.206 693.422C377.371 697.89 376.379 701.364 371.746 703.019H364.301C353.382 698.717 346.93 689.617 339.816 681.179C337.665 678.697 337.169 674.23 337.169 670.59C336.838 656.857 337.004 643.124 337.004 629.391C337.004 623.766 338.824 618.968 343.29 615.493C348.75 611.357 350.57 605.731 350.404 599.113C350.239 580.913 350.239 562.713 350.239 544.513C350.239 538.06 350.735 531.442 350.404 524.989C349.908 516.882 345.441 510.76 339.485 505.465C334.026 500.502 328.732 495.373 323.437 490.244C318.64 485.445 318.474 479.324 318.64 473.202C318.805 464.929 318.971 456.491 319.301 448.218C319.632 442.096 317.647 437.133 313.18 432.996C305.735 425.882 298.456 418.767 291.507 411.156C286.048 405.2 279.265 403.214 271.654 403.214C267.518 403.214 263.382 403.214 259.081 403.214C253.456 403.214 248.824 401.229 244.853 397.423C237.408 390.143 230.129 382.698 222.684 375.418C219.706 372.44 218.051 368.8 218.548 364.498C219.21 358.045 216.562 353.081 212.096 348.614C198.695 335.709 185.46 322.472 172.059 309.567C167.096 304.768 164.779 299.308 164.945 292.525C165.11 279.123 164.945 265.886 165.11 252.485C165.11 244.543 162.96 238.09 157.004 232.465C144.43 220.717 132.518 208.308 120.276 196.064C116.14 191.928 111.176 189.777 105.386 189.777C96.7831 189.612 88.1801 189.612 79.5772 189.777C71.9669 189.943 65.6801 193.086 60.8823 199.208C51.9485 210.79 35.0735 211.783 24.8162 201.69C20.5147 197.388 15.8823 193.252 11.9117 188.619C8.76836 184.979 6.28674 180.512 3.47424 176.541V140.968C5.2941 133.357 11.25 128.559 16.3787 123.43C31.7647 108.042 28.9522 110.193 48.3088 110.028C55.4228 109.862 62.5367 109.862 69.4853 110.193C72.2978 110.359 75.1103 112.013 77.9228 113.006C82.0588 114.495 86.0294 117.142 90.1654 117.142C116.305 117.308 142.445 116.977 168.585 116.811C174.375 116.811 179.835 117.804 184.467 122.106C187.941 125.415 192.243 126.739 197.04 126.739C217.721 126.739 238.401 126.739 259.081 126.904C266.195 126.904 267.684 125.25 267.684 118.3C267.684 112.675 267.849 107.215 267.684 101.59C267.518 97.2877 269.669 95.4677 273.64 95.1368C275.625 94.9713 277.61 94.9713 279.43 95.3022C282.573 95.7986 284.393 97.6186 284.393 100.928C284.393 103.74 284.393 106.553 284.393 109.2C284.89 121.444 293.989 129.055 306.066 127.731C313.511 126.904 316.82 129.717 315.827 137.162C315.496 140.471 313.842 144.277 311.691 146.759C306.562 152.55 300.937 158.175 294.982 163.139C284.228 172.073 285.055 180.015 287.537 192.093C288.199 195.568 291.673 198.546 294.32 201.193C299.614 206.819 305.073 211.948 310.533 217.408C315 221.875 320.79 222.703 326.746 222.372C330.882 222.206 331.875 219.063 331.875 215.588C331.875 207.15 331.875 198.712 332.04 190.108C332.04 187.957 332.04 185.972 332.04 183.821C332.04 174.059 332.868 174.059 342.298 173.232C355.202 172.073 365.129 176.375 373.566 186.137C381.838 195.733 390.937 204.503 399.871 213.437C408.143 221.71 406.985 231.803 405.496 241.895C405.331 243.385 402.518 245.37 400.698 245.701C395.404 246.363 389.945 246.528 384.485 246.694C378.033 246.859 376.213 248.845 377.206 255.297C379.522 271.016 374.89 283.756 362.647 294.345C352.721 302.783 343.952 312.545 334.687 321.81C331.71 324.788 330.882 328.428 330.717 332.399C330.551 336.205 329.89 340.176 328.897 343.816C328.566 345.139 326.25 346.794 324.761 346.794C319.301 346.959 314.173 346.463 310.368 341.334C307.059 336.867 301.765 334.55 296.14 334.55C288.86 334.55 281.415 334.881 274.136 335.543C272.316 335.709 270.165 336.867 268.676 338.356C263.382 343.319 259.743 349.276 260.073 357.052C260.239 361.189 259.908 365.325 260.239 369.627C260.57 378.727 266.029 384.352 275.129 383.856C286.379 383.194 294.982 387 302.261 395.603C306.893 401.063 312.187 406.027 317.151 411.322C320.956 415.458 325.588 417.443 331.213 417.443C355.037 417.443 378.695 417.774 402.518 417.112C414.926 416.782 423.86 421.745 431.967 430.514C444.044 443.585 456.452 456.325 469.026 468.9C473.327 473.202 475.312 478.165 475.312 484.122C475.147 497.193 475.147 510.76 475.147 524.162Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M545.956 113.171C539.503 119.128 533.382 125.415 527.261 131.537C523.125 135.673 518.492 138.155 512.371 137.493C506.581 136.997 501.948 139.479 497.812 143.45C489.044 152.053 480.276 160.491 471.507 168.93C462.904 177.202 450 178.692 440.073 171.908C430.147 165.124 421.213 157.017 419.062 144.111C418.566 140.968 418.731 137.824 418.731 134.515C418.897 124.753 419.062 115.157 419.062 105.395C419.062 100.928 417.077 97.1222 413.934 93.9785C407.647 87.8567 401.526 81.5694 395.404 75.4475C392.095 72.1384 388.29 70.4839 383.492 70.4839C375.22 70.6493 366.783 70.6493 358.511 70.4839C352.72 70.4839 350.735 68.6639 350.404 62.873C349.742 51.2911 350.901 49.802 362.481 49.802C370.092 49.802 376.213 47.4856 381.342 41.6947C386.636 35.7383 392.426 30.4438 398.051 24.8183C401.856 21.0128 406.489 19.0273 411.948 19.0273C423.86 19.0273 435.772 19.3583 447.684 19.5237C455.128 19.6892 461.746 17.8692 466.709 11.9128C470.349 7.61094 474.651 4.13639 480.276 2.81274H548.603C552.242 4.13639 552.904 6.94912 552.904 10.4237C552.739 33.7529 552.904 57.082 552.904 80.4112C552.904 84.5476 553.07 88.684 553.401 92.8203C553.897 101.093 551.912 107.711 545.956 113.171Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1181.91 608.875C1180.42 610.033 1178.93 611.191 1178.11 612.68C1173.31 620.126 1166.03 623.104 1157.59 623.6C1149.49 624.097 1142.04 622.608 1136.25 615.824C1131.29 609.868 1125 605.069 1119.87 599.113C1113.58 591.833 1094.72 591.006 1088.6 599.278C1082.15 607.882 1072.39 606.889 1063.29 605.897C1050.22 604.573 1039.96 592.66 1039.8 579.424C1039.8 574.791 1038.8 569.993 1039.47 565.36C1040.96 553.447 1048.4 545.175 1058.49 539.549C1060.81 538.225 1064.12 538.226 1066.93 538.06C1070.74 537.895 1073.38 536.902 1074.37 532.765C1074.37 532.435 1074.54 532.104 1074.71 531.938C1083.47 522.838 1089.76 510.429 1104.15 508.444C1106.31 508.113 1108.62 507.947 1110.77 507.782V507.947C1111.43 507.947 1112.1 507.947 1112.92 507.947C1122.52 508.113 1124.01 509.436 1124.34 519.033C1124.5 526.478 1131.95 531.773 1138.9 529.291C1143.53 527.636 1144.19 522.838 1145.18 518.702C1145.51 517.544 1145.35 516.22 1145.18 514.896C1145.18 511.587 1146.01 509.105 1149.82 508.774C1154.12 508.278 1155.94 509.602 1157.1 513.738C1158.92 520.687 1160.57 527.636 1162.72 534.42C1163.71 537.564 1165.7 540.707 1168.01 543.189C1173.47 548.98 1179.43 554.606 1185.22 560.066C1190.02 564.698 1192.17 570.324 1191.34 576.942C1191.01 579.755 1191.18 582.733 1191.51 585.711C1192.17 594.977 1189.69 602.918 1181.91 608.875Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M388.125 16.2145C382.004 22.8327 375.551 29.12 369.099 35.4073C363.64 40.8673 357.022 42.3564 349.577 42.3564C338.327 42.5219 338.327 42.5219 338.327 53.7728C338.327 57.2474 338.493 60.7219 338.162 64.1965C337.665 69.3256 336.342 70.4838 331.379 70.6492C326.912 70.8147 322.445 70.6492 317.978 70.6492C313.676 70.6492 309.375 70.8147 305.073 70.6492C299.945 70.4838 297.96 68.4983 297.96 63.5347C297.794 59.2328 297.794 54.931 297.96 50.6292C297.96 46.6582 296.471 44.1764 292.5 43.0182C287.371 41.5291 285.386 35.9037 289.026 31.7673C295.974 23.9909 303.419 16.7109 310.864 9.43084C312.187 8.1072 314.669 7.44538 316.489 7.44538C339.154 7.27993 361.82 7.27993 384.485 7.44538C386.636 7.44538 389.779 8.43811 390.441 9.92721C390.937 11.5818 389.614 14.7254 388.125 16.2145Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M386.636 158.01C382.831 161.981 378.86 165.951 374.89 169.757C372.077 172.404 369.099 172.239 366.287 169.757C360.827 164.793 355.533 159.83 350.404 154.535C345.441 149.406 343.456 142.953 344.118 135.839C344.283 134.68 344.118 133.522 343.787 132.53C341.305 123.926 330.717 115.322 321.783 114.826C314.504 114.495 307.39 114.495 300.11 114.329C294.32 114.164 292.831 112.509 292.831 106.719C292.831 105.56 292.831 104.568 292.996 103.409C293.493 96.9567 294.982 95.4676 301.434 95.3021C305.404 95.3021 309.209 95.3021 313.18 95.3021C313.18 95.4676 313.18 95.4676 313.18 95.633C319.301 95.1367 325.423 94.9712 331.379 94.3094C344.448 92.8203 354.044 99.1076 362.482 108.042C368.603 114.66 374.724 121.279 381.011 127.731C384.485 131.371 384.816 133.026 381.342 136.997C378.86 139.81 379.026 142.457 381.507 145.104C383.327 147.255 385.147 149.241 386.967 151.391C388.787 153.542 388.621 156.024 386.636 158.01Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1182.9 503.315C1181.91 505.3 1181.42 507.616 1180.42 507.947C1178.93 508.444 1176.29 507.947 1175.13 506.955C1169.83 501.66 1163.88 500.005 1156.6 500.998C1145.85 502.653 1137.41 498.351 1130.63 490.244C1127.48 486.438 1124.17 482.633 1120.2 479.489C1117.72 477.504 1114.25 476.676 1110.94 476.18C1107.46 475.684 1104.65 474.029 1104.49 470.885C1104.32 468.735 1106.31 466.087 1107.96 464.433C1110.11 462.282 1113.09 460.793 1116.23 463.274C1118.38 464.929 1120.37 466.584 1122.35 468.238C1125.99 471.547 1127.98 471.547 1131.95 468.9C1141.05 462.447 1152.63 463.275 1161.23 470.224C1167.19 475.022 1171.49 480.316 1172.15 488.424C1172.48 491.567 1176.12 494.38 1178.44 497.358C1179.76 499.344 1181.25 501.329 1182.9 503.315Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1065.77 450.369C1065.61 450.369 1065.44 450.369 1065.28 450.369V465.26C1065.28 475.849 1050.72 483.46 1041.29 477.172C1036.32 473.863 1032.19 468.734 1028.55 463.771C1025.74 459.965 1027.56 455.332 1031.86 454.174C1038.97 452.189 1044.1 447.721 1048.57 442.261C1051.71 438.621 1055.68 437.96 1059.82 438.125C1061.31 438.125 1063.29 439.945 1063.95 441.434C1064.94 444.412 1065.11 447.391 1065.77 450.369Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M617.261 230.479C614.449 235.443 610.147 238.917 604.688 240.903C598.401 243.219 594.926 240.903 594.761 234.284C594.596 228.493 594.761 222.702 594.761 216.746C594.926 216.746 595.092 216.746 595.257 216.746C595.257 209.466 595.092 202.021 595.257 194.741C595.423 189.942 597.243 188.288 601.544 188.288C606.177 188.288 609.154 190.273 609.154 194.741C609.154 201.193 611.636 205.992 616.434 210.293C620.404 214.264 620.57 224.688 617.261 230.479Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M848.051 78.4257C846.893 80.0802 845.57 81.7348 844.081 83.2239C833.658 93.6475 823.401 104.071 812.978 114.495C807.518 119.955 800.735 118.135 798.75 110.524C798.419 109.2 799.081 106.884 800.239 105.726C811.82 93.813 823.566 81.9002 835.147 70.1529C836.14 69.1602 837.629 68.6638 839.945 67.5056C842.923 70.3184 845.901 72.9656 848.713 75.9438C849.21 76.2747 848.548 77.7638 848.051 78.4257Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M810.827 528.464C809.173 531.442 808.015 535.082 805.533 537.233C799.412 542.693 796.93 549.146 797.261 557.087C797.426 563.209 796.434 564.202 790.974 564.367C782.868 564.698 780.882 563.375 780.551 557.253C780.221 552.455 779.89 547.656 779.724 542.693C779.559 537.233 781.379 532.269 785.184 528.298C788.824 524.658 792.463 521.184 796.434 517.709C801.562 513.242 807.022 514.731 809.007 521.515C809.669 523.5 809.669 525.651 810 527.636C810.165 527.967 810.496 528.298 810.827 528.464Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1152.3 294.51C1152.13 302.617 1149.82 308.408 1144.03 312.876C1141.05 315.192 1138.4 317.839 1135.92 320.652C1129.47 327.767 1121.36 328.594 1112.76 327.27C1108.79 326.608 1108.13 323.796 1108.29 320.487C1108.46 317.178 1110.28 315.192 1113.58 315.523C1119.04 315.854 1122.52 313.372 1125 308.905C1129.63 300.467 1136.91 294.345 1144.03 288.223C1148 284.748 1150.81 285.907 1151.8 291.201C1152.13 292.359 1152.13 294.014 1152.3 294.51Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1010.85 483.46C1008.53 486.438 1005.22 485.776 1002.41 484.618C997.61 482.798 994.136 479.489 992.812 474.029C992.151 471.382 990.496 468.734 988.676 466.583C985.202 462.612 981.066 459.303 977.757 455.167C975.276 452.189 973.952 448.383 971.636 444.412C979.246 442.758 984.54 443.254 989.173 448.218C994.136 453.678 999.595 458.642 1004.56 463.936C1007.21 466.914 1009.19 470.389 1011.67 473.533C1014.49 477.338 1013.16 480.482 1010.85 483.46Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1265.63 631.708C1263.81 635.182 1262.48 638.491 1260.33 640.973C1256.53 645.606 1252.22 650.073 1247.92 654.375C1244.45 657.849 1241.31 657.849 1237.83 654.375C1234.19 650.9 1234.19 648.419 1238 644.448C1243.62 638.657 1249.41 632.7 1255.37 627.075C1256.86 625.586 1260.5 623.766 1261.16 624.262C1262.98 626.248 1264.14 629.06 1265.63 631.708Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M1055.68 497.358C1051.71 498.02 1048.4 499.013 1045.26 499.178C1038.81 499.344 1032.52 498.847 1026.07 498.682C1025.07 498.682 1023.75 498.847 1023.25 498.351C1021.43 496.862 1019.94 494.876 1018.46 493.222C1020.11 491.898 1021.76 489.416 1023.58 489.416C1031.53 488.92 1039.47 489.085 1047.24 489.251C1051.71 489.251 1053.2 493.056 1055.68 497.358Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<path d="M588.64 225.35C588.64 232.464 586.82 234.284 579.54 234.284C571.765 234.284 567.298 227.17 571.268 220.386C574.246 215.257 579.706 217.904 584.173 217.739C587.482 217.573 588.474 220.386 588.64 223.199C588.64 224.026 588.64 224.688 588.64 225.35Z" stroke="black" stroke-width="4" stroke-miterlimit="10"/>
<circle cx="658.189" cy="259.95" r="19.2555" fill="#BFFC05"/>
<circle cx="732.586" cy="195.181" r="19.2555" fill="#BFFC05"/>
<circle cx="883.129" cy="347.475" r="19.2555" fill="#6900FF"/>
<circle cx="338.722" cy="314.215" r="19.2555" fill="#BFFC05"/>
<circle cx="191.68" cy="245.07" r="19.2555" fill="#BFFC05"/>
<path d="M951.473 314.461V295.561H954.173V303.445H964.082V295.561H966.782V314.461H964.082V305.929H954.173V314.461H951.473ZM970.281 305.011C970.245 302.149 971.145 299.791 972.981 297.937C974.817 296.065 977.085 295.147 979.785 295.183C982.485 295.147 984.735 296.065 986.535 297.937C988.353 299.791 989.244 302.149 989.208 305.011C989.208 307.351 988.614 309.367 987.426 311.059C988.434 311.923 989.469 312.355 990.531 312.355V314.839C988.767 314.839 987.174 314.173 985.752 312.841C984.078 314.173 982.089 314.839 979.785 314.839C977.085 314.875 974.817 313.966 972.981 312.112C971.145 310.24 970.245 307.873 970.281 305.011ZM984.024 310.843L983.592 310.303C982.746 309.241 982.017 308.485 981.405 308.035C980.793 307.567 980.046 307.315 979.164 307.279C979.002 307.279 978.858 307.288 978.732 307.306V304.741C979.056 304.705 979.344 304.687 979.596 304.687C980.802 304.687 981.936 305.146 982.998 306.064C983.664 306.64 984.501 307.585 985.509 308.899C986.067 307.765 986.346 306.469 986.346 305.011C986.346 302.869 985.743 301.105 984.537 299.719C983.349 298.333 981.756 297.64 979.758 297.64C977.742 297.64 976.14 298.333 974.952 299.719C973.764 301.087 973.17 302.851 973.17 305.011C973.17 307.189 973.764 308.962 974.952 310.33C976.14 311.698 977.742 312.382 979.758 312.382C981.432 312.382 982.854 311.869 984.024 310.843Z" fill="black"/>
<path d="M806.44 313.739L798.229 290.238H802.851L810.405 312.656L825.909 290.238H830.547L813.994 313.739H806.44Z" fill="#1C1C1C"/>
<path d="M825.435 313.739L829.598 290.238H833.367L829.203 313.739H825.435Z" fill="#1C1C1C"/>
<path d="M841.955 314.28C838.164 314.236 835.266 313.486 833.26 312.026C831.255 310.567 830.471 308.664 830.908 306.314H834.775C834.512 307.768 835.086 308.932 836.496 309.805C837.907 310.678 839.856 311.127 842.348 311.148C848.837 311.182 852.368 309.897 852.936 307.298C853.231 305.888 852.547 304.889 850.887 304.298C849.815 303.916 847.899 303.615 845.135 303.397C842.185 303.157 840.213 302.955 839.219 302.792C836.302 302.311 834.418 301.421 833.565 300.12C832.997 299.246 832.838 298.147 833.091 296.825C833.386 295.262 834.173 293.931 835.452 292.835C836.73 291.736 838.356 290.931 840.328 290.417C842.3 289.904 844.531 289.67 847.024 289.713C850.684 289.778 853.494 290.53 855.456 291.968C857.417 293.405 858.211 295.302 857.839 297.663H853.972C854.256 296.232 853.709 295.076 852.334 294.197C850.958 293.317 849.056 292.862 846.631 292.828C843.725 292.795 841.452 293.085 839.814 293.697C838.176 294.31 837.236 295.216 836.996 296.418C836.766 297.564 837.411 298.383 838.93 298.876C839.914 299.204 841.738 299.478 844.404 299.695C847.398 299.946 849.501 300.193 850.713 300.433C853.74 301.035 855.635 302.127 856.4 303.711C856.859 304.651 856.958 305.792 856.694 307.137C856.389 308.71 855.56 310.045 854.212 311.144C852.863 312.243 851.146 313.047 849.059 313.561C846.971 314.075 844.607 314.315 841.962 314.282L841.955 314.28Z" fill="#1C1C1C"/>
<path d="M855.934 313.739L860.098 290.238H863.867L859.703 313.739H855.934Z" fill="#1C1C1C"/>
<path d="M874.668 314.28C872.405 314.28 870.401 313.985 868.653 313.394C866.904 312.805 865.49 311.976 864.408 310.912C863.325 309.847 862.575 308.551 862.153 307.028C861.734 305.503 861.685 303.824 862.013 301.989C862.669 298.275 864.529 295.3 867.594 293.067C870.658 290.833 874.469 289.716 879.025 289.716C883.582 289.716 887.012 290.833 889.285 293.067C891.558 295.302 892.367 298.275 891.711 301.989C891.274 304.438 890.296 306.585 888.778 308.439C887.259 310.29 885.285 311.727 882.853 312.748C880.421 313.77 877.693 314.28 874.668 314.28ZM875.716 308.512C878.305 308.512 880.396 307.958 881.986 306.849C883.576 305.739 884.562 304.12 884.944 301.989C885.326 299.869 884.911 298.256 883.699 297.147C882.487 296.037 880.586 295.484 877.996 295.484C875.405 295.484 873.335 296.035 871.751 297.138C870.167 298.241 869.183 299.858 868.801 301.989C868.419 304.11 868.83 305.727 870.038 306.84C871.245 307.954 873.138 308.512 875.716 308.512Z" fill="#1C1C1C"/>
<path d="M889.991 313.739L894.155 290.238H899.48L912.542 303.234L914.819 290.238H921.604L917.441 313.739H912.065L899.052 300.775L896.775 313.739H889.989H889.991Z" fill="#1C1C1C"/>
<path d="M917.879 313.739L922.043 290.238H945.709L944.66 296.023H927.78L927.239 299.071H943.825L942.891 304.544H926.305L925.699 307.971H942.579L941.547 313.739H917.881H917.879Z" fill="#1C1C1C"/>
		</svg>
		</div>

		<div class=" w-full h-auto mt-16 ">
			<svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 865.13 144.94">
				<defs>
					<style>
						.cls-1 {
							fill: #010101;
						}
					</style>
				</defs>
				<g id="Layer_1-2">
					<g>
						<path class="cls-1" d="M182.55,141.76h-23.09l.1-.59,22.12-124.88-88.37,125.47H48.44l-.12-.33L0,3.1H28.13l.11,.34,43.94,130.37L162.58,3.1h44.54l-.1,.59-24.46,138.07Zm-21.9-1h21.06L205.92,4.1h-42.82L71.87,136.02,27.41,4.1H1.41L49.15,140.76h43.64L183.45,12.04l-22.8,128.72Z" />
						<path class="cls-1" d="M259.55,144.94c-.91,0-1.82,0-2.74-.02-22.21-.26-39.44-4.73-51.21-13.29-11.86-8.63-16.56-20.05-13.97-33.95l.08-.41h23.67l-.11,.59c-1.49,8.25,1.83,14.96,9.85,19.93,8.14,5.05,19.58,7.67,34.01,7.8,37.54,.2,58.26-7.27,61.52-22.17,1.68-8.04-2.14-13.6-11.68-16.99-6.2-2.21-17.49-3.98-33.57-5.25-17.2-1.4-28.88-2.6-34.7-3.56-17.15-2.83-28.41-8.16-33.46-15.87-3.39-5.21-4.35-11.82-2.86-19.66,1.74-9.22,6.45-17.18,13.99-23.66,7.51-6.45,17.18-11.25,28.76-14.26C258.68,1.17,271.91-.22,286.48,.03c21.44,.38,38.16,4.86,49.68,13.3,11.59,8.5,16.36,19.88,14.17,33.84l-.07,.42h-23.69l.12-.6c1.63-8.24-1.43-14.71-9.38-19.78-7.95-5.08-19.1-7.75-33.14-7.94-16.87-.19-30.25,1.51-39.75,5.06-9.38,3.5-14.83,8.74-16.2,15.56-1.3,6.49,2.3,11.01,10.99,13.83,5.7,1.9,16.45,3.51,31.95,4.78,17.47,1.47,29.93,2.92,37.01,4.33,17.8,3.54,29.13,10.09,33.66,19.47,2.72,5.58,3.32,12.44,1.77,20.38-1.81,9.29-6.76,17.29-14.72,23.76-7.93,6.45-18.15,11.24-30.39,14.26-11.48,2.83-24.58,4.25-38.95,4.25Zm-67.01-46.67c-2.34,13.3,2.25,24.25,13.65,32.55,11.6,8.44,28.64,12.85,50.64,13.1,15.36,.2,29.31-1.22,41.44-4.21,12.09-2.98,22.18-7.71,29.99-14.06,7.77-6.33,12.61-14.12,14.37-23.18,1.51-7.72,.94-14.37-1.69-19.75h0c-4.39-9.09-15.48-15.46-32.96-18.93-7.05-1.4-19.46-2.85-36.9-4.31-15.58-1.28-26.41-2.9-32.18-4.82-9.13-2.96-13.06-7.99-11.66-14.97,1.44-7.19,7.1-12.67,16.83-16.3,9.61-3.59,23.09-5.31,40.11-5.12,14.23,.19,25.56,2.92,33.67,8.09,8.02,5.13,11.36,11.93,9.93,20.22h21.62c1.97-13.37-2.68-24.28-13.83-32.45-11.35-8.31-27.87-12.72-49.1-13.1-14.49-.25-27.63,1.13-39.08,4.11-11.42,2.98-20.97,7.7-28.36,14.05-7.37,6.32-11.96,14.09-13.66,23.09-1.44,7.58-.53,13.95,2.71,18.93,4.89,7.46,15.92,12.65,32.78,15.43,5.79,.95,17.44,2.15,34.61,3.55,16.16,1.28,27.54,3.06,33.82,5.31,9.95,3.54,14.1,9.64,12.32,18.14-3.33,15.24-23.89,22.96-61.12,22.96-.46,0-.92,0-1.38,0-14.62-.13-26.24-2.8-34.53-7.95-8.22-5.1-11.72-11.95-10.41-20.37h-21.65Z" />
						<path class="cls-1" d="M361.19,141.76h-23.09l.1-.59L362.66,3.1h23.09l-.1,.59-24.46,138.07Zm-21.9-1h21.06L384.56,4.1h-21.06l-24.21,136.65Z" />
						<path class="cls-1" d="M448.42,144.92c-13.24,0-25.15-1.75-35.39-5.21-10.26-3.46-18.69-8.4-25.05-14.66-6.37-6.27-10.86-14-13.33-22.97-2.47-8.96-2.75-18.96-.83-29.74,3.84-21.79,14.91-39.48,32.88-52.58C424.66,6.67,447.28,.03,473.95,.03s47.1,6.65,60.44,19.77h0c13.37,13.15,18.2,30.88,14.35,52.71-2.56,14.35-8.38,27.14-17.29,38-8.91,10.86-20.65,19.4-34.89,25.39-14.24,5.98-30.43,9.01-48.14,9.01ZM473.95,1.03c-26.45,0-48.88,6.57-66.66,19.53-17.76,12.95-28.69,30.43-32.49,51.95-1.9,10.63-1.63,20.49,.81,29.3,2.43,8.8,6.82,16.38,13.07,22.53,6.25,6.16,14.55,11.01,24.67,14.43,10.14,3.42,21.94,5.16,35.07,5.16,17.57,0,33.64-3.01,47.76-8.94,14.1-5.92,25.71-14.37,34.51-25.1,8.8-10.73,14.54-23.36,17.08-37.54,3.79-21.48-.94-38.92-14.07-51.82h0c-13.15-12.93-33.25-19.49-59.74-19.49Zm-19.39,110.1c-15.16,0-26.47-3.34-33.6-9.92-7.17-6.62-9.66-16.33-7.4-28.87,2.25-12.55,8.14-22.22,17.48-28.74,9.32-6.49,21.72-9.79,36.86-9.79s26.58,3.32,33.74,9.87c7.21,6.59,9.71,16.29,7.45,28.82h0c-2.26,12.56-8.15,22.24-17.53,28.78-9.35,6.53-21.8,9.83-37,9.83Zm13.34-76.32c-14.93,0-27.14,3.23-36.29,9.61-9.12,6.36-14.87,15.81-17.07,28.09-2.2,12.18,.19,21.58,7.09,27.96,6.94,6.41,18.02,9.66,32.92,9.66s27.25-3.25,36.43-9.65c9.15-6.38,14.91-15.85,17.12-28.14h0c2.2-12.18-.21-21.57-7.14-27.91-6.98-6.38-18.1-9.61-33.07-9.61Z" />
						<path class="cls-1" d="M699.39,141.76h-32.11l-.15-.15-75.54-75.25-13.25,75.4h-40.76l.1-.59L562.15,3.1h31.82l.15,.15,75.83,75.45,13.25-75.59h40.76l-.1,.59-24.46,138.07Zm-31.7-1h30.86L722.76,4.1h-38.72l-13.44,76.65L593.56,4.1h-30.57l-24.2,136.65h38.72l13.44-76.46,.68,.68,76.07,75.78Z" />
						<path class="cls-1" d="M840.56,141.76h-139.63l.1-.59L725.49,3.1h139.63l-6.32,34.89h-98.87l-2.99,16.85h97.14l-5.64,33.06h-97.15l-3.37,19.06h98.87l-6.23,34.79Zm-138.44-1h137.6l5.87-32.79h-98.87l3.73-21.06h97.14l5.3-31.06h-97.15l3.35-18.85h98.87l5.96-32.89h-137.6l-24.2,136.65Z" />
					</g>
				</g>
			</svg>
		</div>
</section>


<section>
	<div class="overflow-x-hidden overflow-y-visible lg:overflow-visible relative bg-[#1C1C1C] lg:px-8 text-white mt-16 lg:pb-[6.5rem] lg:flex lg:flex-row-reverse lg:items-center lg:mt-[11rem] 2xl:px-12 2xl:mt-[16rem] 2xl:pb-[9rem] ">
		<div class="h-20 bg-white lg:hidden"></div>
		<div>
			<div class="flex justify-start pl-4 lg:w-[100%]">
				<img class="rounded-3xl -mt-[4.2rem] w-[217px] h-[257px] md:w-[60%] md:h-[30rem] lg:w-full lg:h-[600px] object-cover lg:-mt-[7.5rem] lg:rounded-[2.5rem] 2xl:w-[1300px] 2xl:h-[900px] 2xl:rounded-[58px] 2xl:-mt-[11.2rem]" src="<?php echo
					get_post_meta( get_the_ID(), "aboutend", TRUE ) ?>" alt="">
			</div>
			<div class=" w-[19rem] h-auto absolute top-6 -right-20 md:w-[36rem] md:right-[-9rem]  lg:hidden">
				<svg class="lg:w-full" viewBox="0 0 295 271" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M172.179 98.0161L174.586 203.139L93.5158 258.748L42.5575 194.155L22.2808 168.459L20.3885 85.0154L90.1421 109.735L135.055 64.6491L135.839 98.9088L138.268 98.8442L138.265 98.779L172.179 98.0161Z" fill="#B5F158" />
					<path d="M234.6 162.014L234.561 162.029L233.468 162.755L176.974 201.521L174.575 95.6658L174.118 95.6853L174.113 95.5549L138.208 96.3701L137.417 62.2675L183.503 16.0271L231.218 14.9491L234.573 162.002L234.6 162.014Z" fill="#B5F158" />
				</svg>
			</div>
			<div id="pinContainer" class=" hidden w-[23.5rem] 2xl:w-[35rem]  h-auto absolute -top-32 2xl:-top-56 lg:right-0  lg:flex">
				<svg viewBox="0 0 526 814" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M540.95 294.273L548.176 609.882L304.78 776.837L151.788 582.911L90.9118 505.763L85.2306 255.241L294.651 329.456L429.494 194.095L431.848 296.953L439.138 296.759L439.13 296.563L540.95 294.273Z" fill="#B5F158" />
					<path d="M728.356 486.415L728.24 486.459L724.959 488.64L555.346 605.024L548.143 287.217L546.773 287.276L546.756 286.884L438.958 289.332L436.585 186.946L574.948 48.1182L718.202 44.8816L728.276 486.379L728.356 486.415Z" fill="#B5F158" />
				</svg>
			</div>
			<script>
				gsap.registerPlugin(ScrollTrigger);
				gsap.to("#pinContainer", {
					scrollTrigger: {
						trigger: "#pinContainer",
						start: "top 8% ",
						end: "bottom 55%",
						pin: true,
						// markers: true // Add this line to see the trigger and end markers
					}
				});
			</script>
		</div>
		<div class="mx-4 pr-5 pt-10 pb-24 lg:w-[80%] lg:mx-0 lg:pb-0 lg:pt-[10rem]">
			<h1 id="leadership" class="font-light opacity-0 lg:font-extralight text-[40.74px] leading-[46.45px] md:text-[40px] lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px] ">Leadership</h1>
			<p id="leadershipParagraph" class="font-light opacity-0 lg:font-light text-base leading-[1.375rem] py-7  md:text-lg md:leading-[1.5rem] lg:text-[14px] lg:leading-[18px] lg:pr-[8rem] 2xl:text-[22px] 2xl:leading-[26px] lg:pt-14 2xl:pr-60">At the helm of VisiOne, our leadership embodies a fusion of experience and forward thinking. With a collective dedication to fostering a culture that is inclusive, inspiring, and transformative, our leaders steer us toward a future
				that holds boundless potential.</p>
			<div class="flex justify-start items-end lg:hidden">
				<button class="underline text-sm pr-1">learn more</button>
				<div class="w-6 h-6">
					<svg viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.9385 21.1669L6.61155 21.2398L8.54925 15.9599L8.57239 15.8969L8.52534 15.8489L5.21887 12.4808L7.64536 12.4523L7.75196 12.4511L7.75031 12.3445L7.74739 12.1549L7.74573 12.0469L7.74107 12.0471L7.7135 9.61312L15.7593 9.51874L19.943 15.7663L14.9343 19.6279L14.9343 19.6279L12.9385 21.1669Z" fill="white" stroke="black" stroke-width="0.212422" />
						<path d="M1.27953 4.93251L12.6003 4.8006L12.6248 4.83844L12.6248 4.83845L12.6257 4.83976L15.4938 9.12124L7.42341 9.21402L7.31506 9.21527L7.31625 9.25309L7.30816 9.25335L7.30936 9.35744L7.3405 12.0553L4.82876 12.0854L1.32041 8.50986L1.27953 4.93251Z" fill="white" stroke="black" stroke-width="0.212422" />
					</svg>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="lg:pb-20  2xl:pb-[24rem]">
	<div class="mx-4 relative -mt-7 lg:-mt-10 lg:flex lg:mx-8 2xl:mx-12 2xl:-mt-16 ">
		<div class=" w-[75%] h-[353px] md:h-[40rem] overflow-hidden lg:w-[35%] lg:h-[560px] 2xl:h-[850px]">
			<img class=" object-cover w-full h-full " src="<?php echo
				get_post_meta( get_the_ID(), "ceo", TRUE ) ?>" alt="">
		</div>
		<div class="my-14 lg:w-[65%] lg:flex lg:flex-col lg:justify-center lg:items-center">
			<div class="pr-4 lg:w-[80%] lg:m-auto lg:pl-5  2xl:pt-10 2xl:pl-10">
				<p id="message" class="mb-4 opacity-0  font-light lg:font-extralight text-[23.08px] leading-[26.31px] lg:text-4xl lg:leading-[42px] 2xl:text-5xl lg:pr-5 2xl:text-[55px] 2xl:leading-[63px]">
					"At VisiOne, we believe in the power of dreams and the audacity to chase them. Our journey is a testament to the fact that innovation knows no bounds, and together, we're scripting a story that defies limits."
				</p>
				<span id="messageCeo" class="text-[12px] opacity-0 leading-[13.68px] lg:text-sm 2xl:text-[22px] 2xl:leading-[28px]">
					- Hamza Waheed - CEO
				</span>
			</div>
		</div>
	</div>
	<div class="h-[437px] lg:-mt-8 2xl:-mt-12">
		<img class="w-full h-full object-cover lg:h-[520px] 2xl:h-[800px]  " src="<?php echo
			get_post_meta( get_the_ID(), "bg", TRUE ) ?>" alt="">
	</div>
</section>


<?php
get_footer();
