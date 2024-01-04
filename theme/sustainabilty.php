<?php
/*
  Template Name: Sustainablity
*/

get_header();
?>

<script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Set initial opacity and translateY to zero
		gsap.set('#startHeading, #startParagraph, #progress, #progressParagraph, #promise', {
			opacity: 0,
			y: '20px'
		});

		// Create an Intersection Observer
		const observer = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					// Custom delays for each element
					let delay = 0;

					if (entry.target.id === 'start') {
						delay = 0;
					} else if (entry.target.id === 'startParagraph') {
						delay = .25;
					} else if (entry.target.id === 'progress') {
						delay = 0;
					} else if (entry.target.id === 'progressParagraph') {
						delay = .25;
					} else if (entry.target.id === 'promise') {
						delay = 0;
					} 
					const targetIds = ['startHeading', 'startParagraph', 'progress', 'progressParagraph', 'promise'];

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

		observer.observe(document.getElementById('startHeading'));
		observer.observe(document.getElementById('startParagraph'));
		observer.observe(document.getElementById('progress'));
		observer.observe(document.getElementById('progressParagraph'));
		observer.observe(document.getElementById('promise'));
	});
</script>
<section class="overflow-hidden lg:overflow-visible" >
	<div class="relative">
		<img id="susutainImg" class="h-[57.5vh] w-full brightness-[60%] object-cover lg:w-full lg:rounded-[2rem] lg:h-[98vh] 2xl:rounded-[3rem]" src="<?php echo
			get_post_meta( get_the_ID(), "sustainbg", TRUE ) ?>" alt=""/>

		<div class="mx-4  text-[#FFFFFF] absolute top-[5.6rem] left-0 lg:w-[70%] lg:top-[9.5rem] lg:pl-[2.2rem] 2xl:pl-[2.5rem] 2xl:top-[14.8rem] ">
			<h1 id="sustainHeading" class="text-5xl  md:pr-[12rem] lg:pr-0 font-extralight text-[48px] md:text-7xl leading-[54.72px] py-4 lg:text-[75px] lg:leading-[90px] 2xl:text-[105px] 3xl:text-[90px] 2xl:leading-[120px]">Paying our debt to the environment</h1>
			<p id="sustainParagraph" class="text-base md:pr-[8rem] font-light lg:pr-0 md:text-lg md:leading-[1.5rem] leading-[1.375rem] pt-1 pr-4 lg:w-[70%] 2xl:w-[60%] lg:mt-4 2xl:mt-10 2xl:text-[24px] 3xl:text-[20px] 2xl:leading-[30px] ">At VisiOne, we recognize the profound impact that our actions have on the world we share. Guided by an unwavering commitment to responsibility, innovation, and positive change, our sustainability journey is a testament to our dedication to creating a brighter, more sustainable future.</p>
		</div>
		<script>
			gsap.from("#susutainImg", { duration: 1, y: "100%", opacity: 0, ease: "power2.out" });
			gsap.from("#sustainHeading", { duration: 1, y: "150%", opacity: 0, ease: "power2.out", delay: 0.5 });
			gsap.from("#sustainParagraph", { duration: 1, y: "150%", opacity: 0, ease: "power2.out", delay: 0.75 });
		</script>

		<div class="hidden lg:flex z-50 absolute h-[68%] w-[68%] top-[36.5rem] right-0 pl-[22rem] 2xl:top-[55rem] 2xl:pl-[32rem]">
			<svg viewBox="0 0 666 666" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M135.577 549.68L191.397 392.657L342.858 356.076L381.827 480.543L397.336 530.048L353.001 654.678L263.676 578.67L171.7 620.028L189.892 568.886L186.26 567.61L186.228 567.676L135.577 549.68Z" stroke="#B5F158" />
				<path d="M79.2987 419.651H79.3641L81.3927 419.193L186.947 393.704L130.702 551.807L131.389 552.036L131.323 552.232L184.951 571.308L166.857 622.22L72.4929 664.69L1.229 639.332L79.3314 419.684L79.2987 419.651Z" stroke="#B5F158" />
				<path d="M549.68 530.113L392.657 474.293L356.076 322.833L480.543 283.864L530.048 268.354L654.678 312.69L578.67 401.982L620.028 493.991L568.886 475.798L567.61 479.398L567.676 479.43L549.68 530.113Z" stroke="#B5F158" />
				<path d="M419.651 586.392V586.326L419.193 584.298L393.704 478.743L551.807 534.956L552.036 534.302L552.232 534.367L571.308 480.739L622.22 498.833L664.69 593.197L639.332 664.461L419.684 586.359L419.651 586.392Z" stroke="#B5F158" />
				<path d="M530.114 116.011L474.293 273.033L322.833 309.581L283.864 185.148L268.354 135.642L312.69 11.0124L401.983 87.0207L493.991 45.63L475.799 96.804L479.398 98.08L479.431 97.9819L530.114 116.011Z" stroke="#B5F158" />
				<path d="M586.392 246.039H586.327L584.298 246.497L478.744 271.986L534.956 113.884L534.302 113.655L534.367 113.458L480.74 94.3827L498.834 43.4378L593.198 1.00012L664.462 26.358L586.359 246.007L586.392 246.039Z" stroke="#B5F158" />
				<path d="M116.01 135.577L273.033 191.397L309.581 342.858L185.147 381.827L135.642 397.336L11.0122 353.001L87.0205 263.675L45.6299 171.7L96.8038 189.892L98.0798 186.26L97.9817 186.227L116.01 135.577Z" stroke="#B5F158" />
				<path d="M246.039 79.2988V79.3643L246.497 81.3929L271.986 186.947L113.884 130.702L113.655 131.389L113.458 131.323L94.3826 184.951L43.4377 166.857L1 72.4931L26.3579 1.22916L246.007 79.3315L246.039 79.2988Z" stroke="#B5F158" />
			</svg>
		</div>
	</div>
	<div class="ml-4 lg:flex lg:items-center text-black lg:mt-[4rem] 2xl:mt-[6rem] lg:mx-8 2xl:mx-12">
		<div class="lg:w-[60%]">
			<div class="lg:w-[80%]">
				<div class="flex items-end md:justify-end lg:justify-start relative -mt-[1.1rem] lg:mt-0">
					<h1 id="startHeading" class=" opacity-0 text-[32px]  leading-[36.48px] md:text-5xl  font-extralight lg:text-[35px] lg:leading-[40px] 2xl:text-[60px] 3xl:text-[55px] 2xl:leading-[65px] ">it all starts with accountability</h1>
					<div class="w-[70%] pb-2 h-auto md:w-1/2 lg:hidden">
						<svg viewBox="0 0 159 187" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M38.5126 153.942L54.0722 110.172L96.291 99.9756L107.153 134.67L111.477 148.469L99.1183 183.209L74.2194 162.022L48.5817 173.551L53.6526 159.295L52.6403 158.94L52.6312 158.958L38.5126 153.942Z" stroke="#B5F158" />
							<path d="M22.8253 117.696H22.8436L23.409 117.569L52.8318 110.464L37.1536 154.534L37.3452 154.598L37.3269 154.653L52.2754 159.97L47.2318 174.161L20.9283 186L1.06384 178.931L22.8345 117.706L22.8253 117.696Z" stroke="#B5F158" />
							<path d="M153.942 148.487L110.172 132.928L99.9756 90.7091L134.67 79.8465L148.469 75.5234L183.209 87.8817L162.022 112.772L173.551 138.418L159.295 133.347L158.94 134.351L158.958 134.36L153.942 148.487Z" stroke="#B5F158" />
							<path d="M117.697 164.174V164.156L117.569 163.591L110.464 134.168L154.534 149.837L154.598 149.655L154.653 149.673L159.97 134.724L174.162 139.768L186 166.071L178.932 185.936L117.706 164.165L117.697 164.174Z" stroke="#B5F158" />
							<path d="M148.488 33.0587L132.928 76.8279L90.7092 87.0155L79.8467 52.3303L75.5236 38.531L87.8819 3.79102L112.772 24.9779L138.419 13.4405L133.348 27.7049L134.351 28.0606L134.36 28.0333L148.488 33.0587Z" stroke="#B5F158" />
							<path d="M164.175 69.3033H164.157L163.591 69.431L134.168 76.5359L149.837 32.4657L149.655 32.4018L149.673 32.3471L134.725 27.0299L139.768 12.8293L166.072 1L185.936 8.06838L164.166 69.2942L164.175 69.3033Z" stroke="#B5F158" />
							<path d="M33.0586 38.5127L76.8278 54.0722L87.0154 96.291L52.3302 107.153L38.5308 111.477L3.79089 99.1183L24.9778 74.2194L13.4404 48.5817L27.7048 53.6527L28.0605 52.6403L28.0332 52.6312L33.0586 38.5127Z" stroke="#B5F158" />
							<path d="M69.3034 22.825V22.8432L69.4311 23.4087L76.5359 52.8314L32.4657 37.1533L32.4019 37.3448L32.3472 37.3265L27.0299 52.275L12.8293 47.2314L1.00003 20.9279L8.06841 1.06348L69.2943 22.8341L69.3034 22.825Z" stroke="#B5F158" />
						</svg>
					</div>
				</div>
				<p id="startParagraph" class="font-light opacity-0 md:text-lg md:leading-[1.5rem] text-base leading-[1.375rem] pr-10 mt-8 lg:pt-5 lg:pr-2  lg:text-[15px] lg:leading-[20px] 2xl:text-[24px] 3xl:text-[20px] 2xl:leading-[28px] 2xl:pr-0 2xl:pt-10">We firmly believe that true progress begins with accountability. As stewards of the environment, we hold ourselves answerable for the footprint we leave behind. We understand that every decision we make has consequences, and this understanding drives us to take purposeful actions towards a greener tomorrow.</p>
			</div>
		</div>

	</div>
	<div class="flex items-center my-20 mx-4 lg:hidden">
		<img class="w-[60%] h-full rounded-3xl" src="<?php echo
			get_post_meta( get_the_ID(), "stepper", TRUE ) ?>" alt="">
		<div class="w-[110px] h-[98px] -ml-14 mt-5">
			<svg viewBox="0 0 295 271" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M172.179 98.0161L174.586 203.139L93.5158 258.748L42.5575 194.155L22.2808 168.459L20.3885 85.0154L90.1421 109.735L135.055 64.6491L135.839 98.9088L138.268 98.8442L138.265 98.779L172.179 98.0161Z" fill="#B5F158" />
				<path d="M234.6 162.014L234.561 162.029L233.468 162.755L176.974 201.521L174.575 95.6658L174.118 95.6853L174.113 95.5549L138.208 96.3701L137.417 62.2675L183.503 16.0271L231.218 14.9491L234.573 162.002L234.6 162.014Z" fill="#B5F158" />
			</svg>
		</div>
	</div>
</section>

<section class="lg:mt-[3.2rem] lg:pb-8 2xl:mt-20 2xl:pb-28 text-black">
	<div class="mx-4">
		<h1 class="text-[48px] md:text-6xl font-extralight leading-[54.72px] mb-16 lg:mb-0 lg:mx-4 2xl:mx-8 lg:text-[4.8rem] lg:leading-[85px] 2xl:text-[120px] 2xl:leading-[120px] ">
			our <br class="lg:hidden">approach
		</h1>
	</div>
	<div class="lg:flex lg:justify-between lg:items-center lg:pb-[14rem] 2xl:pb-[20rem] lg:mt-14 2xl:mt-24 ">
		<div class="lg:w-[48%] 2xl:w-[50%] lg:relative lg:pt-[10.4rem] 2xl:pt-[16.2rem]">
			<div class="flex mx-4 ">
				<div class="w-3/12 flex flex-col items-center lg:w-[16.5%] 2xl:pl-4">
					<p class="font-light text-[30.63px] md:text-[40px] leading-[36.77px] lg:text-[40px] lg:leading-[40px] lg:pb-4 2xl:text-[60px] 2xl:leading-[68px] lg:p-2 2xl:p-1 bg-white rounded-full pb-4 pt-2">01</p>
					<!-- <div class="pin1 border-2 border-green-900 lg:border-[#B5F158] h-[14vh] w-0 lg:h-full "></div> -->
				</div>
				<div class="w-8/12 lg:w-full lg:pl-8 2xl:pb-8 2xl:w-[55rem]">
					<h1 class="font-extralight text-[37px] leading-[42.18px] 2xl:text-[56px] 2xl:leading-[62px] lg:pb-3">
						Measure
					</h1>
					<p class="text-base text-justify leading-[1.375rem] md:text-lg md:leading-[1.5rem] font-light lg:font-normal lg:text-[15px] my-2 lg:leading-[1.1rem]  lg:pb-6 lg:pr-10 2xl:text-[23px] 2xl:leading-[27px] 2xl:pr-16 ">To create change, we must first understand where we stand. We diligently measure our carbon emissions, resource consumption, and waste generation. This data-driven approach empowers us to make informed decisions that drive meaningful reductions.</p>
				</div>
			</div>
			<div class="flex mx-4 my-4  lg:my-0">
				<div class="w-3/12 flex flex-col items-center lg:w-[16.8%] 2xl:pl-4">
					<p class="font-light text-[30.63px] md:text-[40px] leading-[36.77px]  lg:p-2 2xl:p-1 bg-white rounded-full pb-4 pt-2 lg:text-[40px] lg:leading-[40px] 2xl:text-[60px] 2xl:leading-[68px] ">02</p>
					<!-- <div class="pincircle border-2 p-6 lg:p-10 2xl:p-16 border-[#B5F158] rounded-full lg:-mt-[5rem] 2xl:-mt-[8.4rem]"></div>
					<div class="pin2 border-2 border-green-900 lg:border-[#B5F158] h-full w-0 2xl:h-full"></div> -->
				</div>
				<div class="w-8/12 lg:w-full  lg:pb-6  lg:pr-10 lg:pl-8 lg:pt-6 2xl:pb-12 2xl:w-[55rem]  2xl:pr-8">
					<h1 class="font-extralight text-[37px] leading-[42.18px]   2xl:text-5xl lg:pb-3 2xl:text-[56px] 2xl:leading-[62px] ">
						Reduce
					</h1>
					<p class="text-base text-justify leading-[1.375rem] md:text-lg md:leading-[1.5rem] font-light lg:font-normal lg:text-[15px] my-2 lg:leading-[1.1rem] 2xl:text-[25px] 2xl:leading-[27px] ">Innovation is at the heart of our reduction efforts. Through continuous research and development, we seek eco-friendly alternatives, optimize processes, and design products that embody efficiency and sustainability.</p>

					<div class="relative ">
						<h6 class="mb-3">
							<button class="border-b border-black text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-1 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-1">
								<h1 class="text-[14.18px] md:text-base leading-[16.17px] lg:font-normal lg:text-[15px] 2xl:text-[23px] 2xl:leading-[27px]">
									Renewable Materials
								</h1>
								<div class="open pt-1 w-6  h-6 md:w-12 md:h-12 lg:w-6 lg:h-6 2xl:w-8 2xl:h-8">
									<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
										<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
								<div class=" close w-4 h-4  md:w-8 md:h-8  lg:w-5 lg:h-5 2xl:w-7 2xl:h-7 hidden">
									<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
										<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
							</button>
						</h6>
						<div data-collapse="collapse-1" class="overflow-hidden transition-height duration-300 ease-in-out">
							<p class=" text-justify pl-2 pb-2 text-base md:text-lg md:leading-[1.5rem] font-light pr-2  lg:pr-10 lg:leading-[1.1rem] lg:text-base 2xl:w-[92%]  2xl:pr-0 lg:pt-0 lg:pb-4  leading-[1.375rem] lg:font-normal lg:text-[13px] 2xl:text-[20px] 2xl:leading-[27px] ">
							A eco friendly supply chain is at the centre of what we do. Our production partner use organic cotton, and recyclable materials for our product fabrication. From the latest certifications to materials sourced from regenerative and friendly techniques, we try to resolve every inch of our supply chain to make it cleaner and greener. 
							</p>
						</div>
					</div>


					<div class="relative ">
						<h6 class="mb-3">
							<button class="border-b border-black text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-1 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-2">
								<h1 class="text-[14.18px] md:text-base leading-[16.17px] lg:font-normal lg:text-[15px] 2xl:text-[23px] 2xl:leading-[27px]">
									Resposible Energy
								</h1>
								<div class="open pt-1 w-6  h-6 md:w-12 md:h-12 lg:w-6 lg:h-6 2xl:w-8 2xl:h-8">
									<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
										<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
								<div class=" close w-4 h-4  md:w-8 md:h-8  lg:w-5 lg:h-5 2xl:w-7 2xl:h-7 hidden">
									<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
										<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
							</button>
						</h6>
						<div data-collapse="collapse-2" class="overflow-hidden transition-height duration-300 ease-in-out">
							<p class=" text-justify pl-2 pb-2 text-base md:text-lg md:leading-[1.5rem] font-light pr-2 lg:pr-10 lg:leading-[1.1rem] lg:text-base 2xl:w-[92%]  2xl:pr-0 lg:pt-0 lg:pb-4  leading-[1.375rem] lg:font-normal lg:text-[13px] 2xl:text-[20px] 2xl:leading-[27px] ">
							With more than 30% of our energy basket being renewable, we are working day and night to become carbon neutral in the coming 5 years. 
							</p>
						</div>
					</div>


					<div class="relative ">
						<h6 class="mb-3">
							<button class="border-b border-black text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-1 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-3">
								<h1 class="text-[14.18px] md:text-base leading-[16.17px] lg:font-normal lg:text-[15px] 2xl:text-[23px] 2xl:leading-[27px]">
									Reducing waste
								</h1>
								<div class="open pt-1 w-6  h-6 md:w-12 md:h-12 lg:w-6 lg:h-6 2xl:w-8 2xl:h-8">
									<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
										<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
								<div class=" close w-4 h-4 md:w-8 md:h-8 lg:w-5 lg:h-5  2xl:w-7 2xl:h-7 hidden">
									<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
										<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
									</svg>
								</div>
							</button>
						</h6>
						<div data-collapse="collapse-3" class="overflow-hidden transition-height duration-300 ease-in-out">
							<p class=" text-justify pl-2 pb-2 text-base md:text-lg md:leading-[1.5rem] font-light pr-2  lg:pr-10 lg:leading-[1.1rem] lg:text-base 2xl:w-[92%]  2xl:pr-0 lg:pt-0 lg:pb-4  leading-[1.375rem] lg:font-normal lg:text-[13px] 2xl:text-[20px] 2xl:leading-[27px] ">
							From FSC certified packaging to GRS certified materials, we ensure every material we use is renewable, recyclable and reduces waste. 
							</p>
						</div>
					</div>


					<script>
						document.addEventListener('DOMContentLoaded', function() {

							const accordionButtons = document.querySelectorAll('[data-collapse-target]');


							const accordionStates = new Array(accordionButtons.length).fill(false);

							// Function to close all accordions
							function closeAllAccordions() {
								accordionButtons.forEach((button, index) => {
									const targetId = button.getAttribute('data-collapse-target');
									const target = document.querySelector(`[data-collapse="${targetId}"]`);
									target.style.height = '0';
									accordionStates[index] = false;
									button.querySelector('.close').style.display = 'block';
									button.querySelector('.open').style.display = 'none';
								});
							}

							// Add click event listeners to each button
							accordionButtons.forEach((button, index) => {
								button.addEventListener('click', () => {
									const targetId = button.getAttribute('data-collapse-target');
									const target = document.querySelector(`[data-collapse="${targetId}"]`);

									// Close all accordions first
									closeAllAccordions();

									if (!accordionStates[index]) {
										// If the clicked accordion is closed, open it
										target.style.height = target.scrollHeight + 'px';
										accordionStates[index] = true;

										button.querySelector('.close').style.display = 'none';
										button.querySelector('.open').style.display = 'block';
									}
								});
							});


							const firstAccordion = document.querySelector('[data-collapse="collapse-1"]');
							accordionButtons.forEach((button, index) => {
								if (index !== 0) {
									const targetId = button.getAttribute('data-collapse-target');
									const target = document.querySelector(`[data-collapse="${targetId}"]`);
									target.style.height = '0';
									accordionStates[index] = false;
									button.querySelector('.close').style.display = 'block';
									button.querySelector('.open').style.display = 'none';
								}
							});
							accordionStates[0] = true;
						});
					</script>




					<!-- <div class="border-b-[1px] border-black flex justify-between items-center py-1 lg:pt-4 2xl:pt-8">
						<h1 class="text-[14.18px] leading-[16.17px] lg:font-normal lg:text-[15px] 2xl:text-[23px] 2xl:leading-[27px]">
							Renewable Materials
						</h1>
						<div class="w-8 h-8 lg:w-5 lg:h-5 2xl:w-7 2xl:h-7">
							<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
								<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
							</svg>
						</div>
					</div> -->

				</div>
			</div>
			<div class="flex mx-4 mt-4 mb-12 ">
				<div class="w-3/12 flex flex-col items-center lg:w-[16.8%] 2xl:pl-4">
					<p class="font-light text-[30.63px] md:text-[40px] leading-[36.77px] lg:text-[40px] lg:leading-[40px] lg:pb-4 2xl:text-[60px] 2xl:leading-[68px] lg:mt-1 2xl:mt-0 lg:p-2 2xl:p-1 bg-white rounded-full pb-4  pt-2    ">03</p>
					<!-- <div class="pin3 border-2 lg:border-[#B5F158]  border-green-900 h-[10vh] w-0 "></div> -->
				</div>
				<div class="w-8/12 lg:w-full lg:pr-12  lg:pl-8 2xl:w-[55rem] 2xl:pr-4">
					<h1 class="font-extralight text-[37px] leading-[42.18px]  2xl:text-5xl lg:pb-3 2xl:text-[56px] 2xl:leading-[62px] ">
						Offset
					</h1>
					<p class=" text-base text-justify leading-[1.375rem] md:text-lg md:leading-[1.5rem] font-light lg:font-normal lg:text-[15px] my-2 lg:leading-[1.1rem] 2xl:text-[23px] 2xl:leading-[27px]  2xl:pr-16">While we strive to minimize our impact, we recognize that some emissions are inevitable. To offset these, we invest in projects that restore ecosystems, promote renewable energy, and support communities. By balancing our emissions through offset initiatives, we're committed to creating a net-positive impact.</p>
				</div>
			</div>

			<div class="pin 2xl:pin2xl hidden lg:block absolute w-full lg:w-[6.6rem] 2xl:w-[8rem] h-full  lg:top-[-2rem] lg:left-[.35rem] 3lg:top-[-2rem] 3lg:left-[.6rem] 3xl:top-[1.4rem] 3xl:left-[1.2rem] 2xl:top-[1.5rem] 2xl:left-[1.8rem] -z-20">
				<svg  viewBox="0 0 115 696" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="59" width="696" height="0.99997" transform="rotate(90 59 0)" fill="#B5F158" />
					<circle cx="57.5" cy="248.5" r="57" fill="white" stroke="#B5F158" />
				</svg>
			</div>
		</div>
		<div class=" pinContainer 2xl:pinContainer2xl hidden lg:flex lg:pb-[20rem] items-center lg:flex-row-reverse my-20 mx-4 lg:w-[50%]  lg:pr-4 lg:-mt-2   2xl:w-[50%]">
			<div class="lg:w-[80%] flex justify-end">
				<img class="rounded-[2rem] lg:rounded-[2.5rem] 2xl:rounded-[4rem] object-cover w-full h-auto lg:h-[630px] 2xl:h-[920px]" src="<?php echo
					get_post_meta( get_the_ID(), "stepper", TRUE ) ?>" alt="">
			</div>
			<div class="w-24 h-24 lg:pb-[14rem]  2xl:pb-[18rem] lg:pr-[6.2rem] 2xl:pr-[9.5rem] relative">
				<svg class="absolute w-[12rem] 2xl:w-[18rem]" viewBox="0 0 295 271" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M172.179 98.0161L174.586 203.139L93.5158 258.748L42.5575 194.155L22.2808 168.459L20.3885 85.0154L90.1421 109.735L135.055 64.6491L135.839 98.9088L138.268 98.8442L138.265 98.779L172.179 98.0161Z" fill="#B5F158" />
					<path d="M234.6 162.014L234.561 162.029L233.468 162.755L176.974 201.521L174.575 95.6658L174.118 95.6853L174.113 95.5549L138.208 96.3701L137.417 62.2675L183.503 16.0271L231.218 14.9491L234.573 162.002L234.6 162.014Z" fill="#B5F158" />
				</svg>
			</div>
			<script>
				gsap.registerPlugin(ScrollTrigger);

				const pin = document.querySelector(".pinContainer");

				function setupPinAnimation(start, end) {
					gsap.to(pin, {
					scrollTrigger: {
						trigger: pin,
						start: start,
						end: end,
						pin: true,
						// markers: true
					}
					});
				}

				function handleMediaQueryChanges() {
					const mqSmall = window.matchMedia("(max-width: 1350px)");
					const mqMedium = window.matchMedia("(min-width: 1351px) and (max-width: 1600px)");
					const mqLarge = window.matchMedia("(min-width: 1601px) and (max-width: 1800px)");
					const mqExtraLarge = window.matchMedia("(min-width: 1801px)");

					function applyAnimationBasedOnMediaQuery(mq) {
					if (mq.matches) {
						if (mq === mqSmall) {
						setupPinAnimation("top 6%", "bottom 45%");
						} else if (mq === mqMedium) {
						setupPinAnimation("top 10%", "99% 50%");
						} else if (mq === mqLarge) {
						setupPinAnimation("-12% 0%", "114% 60%");
						} else if (mq === mqExtraLarge) {
						setupPinAnimation("0% 10%", "111% 59.5%");
						}
					} else {
						// Remove animation or do cleanup if needed
					}
					}

					mqSmall.addListener(applyAnimationBasedOnMediaQuery);
					mqMedium.addListener(applyAnimationBasedOnMediaQuery);
					mqLarge.addListener(applyAnimationBasedOnMediaQuery);
					mqExtraLarge.addListener(applyAnimationBasedOnMediaQuery);

					// Initial check on page load
					applyAnimationBasedOnMediaQuery(mqSmall);
					applyAnimationBasedOnMediaQuery(mqMedium);
					applyAnimationBasedOnMediaQuery(mqLarge);
					applyAnimationBasedOnMediaQuery(mqExtraLarge);
				}

				// Call the function to handle media query changes
				handleMediaQueryChanges();
				</script>

			<script>
			gsap.registerPlugin(ScrollTrigger);

			const pinContainer = document.querySelector(".pin");

			function setupPinAnimation(start, end) {
				gsap.to(pinContainer, {
				scrollTrigger: {
					trigger: pinContainer,
					start: start,
					end: end,
					pin: true,
					// markers: true
				}
				});
			}

			function handleMediaQueryChanges() {
				const mqSmall = window.matchMedia("(max-width: 1350px)");
				const mqMedium = window.matchMedia("(min-width: 1351px) and (max-width: 1600px)");
				const mqLarge = window.matchMedia("(min-width: 1601px) and (max-width: 1800px)");
				const mqExtraLarge = window.matchMedia("(min-width: 1801px)");

				function applyAnimationBasedOnMediaQuery(mq) {
				if (mq.matches) {
					if (mq === mqSmall) {
					setupPinAnimation("3.6% 6%", "bottom 54.5%");
					} else if (mq === mqMedium) {
					setupPinAnimation("1.2% 10%", "95.3% 50%");
					} else if (mq === mqLarge) {
					setupPinAnimation("-7.5% 0%", "100% 60%");
					} else if (mq === mqExtraLarge) {
					setupPinAnimation("top 10%", "bottom 59.5%");
					}
				} else {
					// Remove animation or do cleanup if needed
				}
				}

				mqSmall.addListener(applyAnimationBasedOnMediaQuery);
				mqMedium.addListener(applyAnimationBasedOnMediaQuery);
				mqLarge.addListener(applyAnimationBasedOnMediaQuery);
				mqExtraLarge.addListener(applyAnimationBasedOnMediaQuery);

				// Initial check on page load
				applyAnimationBasedOnMediaQuery(mqSmall);
				applyAnimationBasedOnMediaQuery(mqMedium);
				applyAnimationBasedOnMediaQuery(mqLarge);
				applyAnimationBasedOnMediaQuery(mqExtraLarge);
			}

			// Call the function to handle media query changes
			handleMediaQueryChanges();
			</script>

			<!-- <script>
				gsap.registerPlugin(ScrollTrigger);
				gsap.to(".pinContainer2xl", {
				scrollTrigger: {
					trigger: ".pinContainer2xl",
					start: "top 6% ", 
					end: "bottom 55%", 
					pin: true,
					markers: true 
				}
				});
			</script> -->
			<!-- <script>
				gsap.registerPlugin(ScrollTrigger);
				gsap.to(".pin2xl", {
				scrollTrigger: {
					trigger: ".pin2xl",
					start: "0.5% 6% ", 
					end: "160% 54%", 
					pin: true,
					markers: true 
				}
				});
			</script> -->

		</div>
	</div>
</section>

<section class="overflow-hidden">
	<div class="bg-[#1C1C1C] text-white pl-4 pt-12 relative lg:pt-14 pb-40 lg:pb-[18.5rem] 2xl:pt-20 lg:pl-8 2xl:pl-12 2xl:pb-[29.5rem]">
		<h1 id="progress" class="text-5xl opacity-0 font-extralight md:text-6xl lg:font-light lg:text-[75px] lg:leading-[80px] 2xl:text-[110px] 2xl:leading-[125px] 3xl:text-[90px]">our progress</h1>
		<p id="progressParagraph" class="my-8 opacity-0 pr-12 text-base leading-[1.375rem] font-extralight lg:w-[68%] md:text-lg md:leading-[1.5rem] lg:font-light lg:text-[15px] 3xl:text-[20px] lg:leading-[20px] 2xl:text-[24px] 2xl:leading-[28px] 2xl:pt-2 ">Our sustainability journey is marked by meaningful progress. We've embraced renewable energy sources, reduced waste across our operations, and initiated collaborations that amplify our impact. While we're proud of how far we've come, we remain dedicated to pushing boundaries, exploring new frontiers, and leaving an even lighter footprint.</p>
		<button class="left absolute z-20 w-[.8rem] top-[21.5rem] right-[2.5rem] lg:w-[1rem] lg:top-[11rem] lg:right-[5rem] 3xl:right-[6rem] 3xl:w-[1.4rem] 3xl:top-[16rem]  2xl:right-[7rem] 2xl:w-[1.6rem] 2xl:top-[16rem]" id="scrollLeftButton">
			<svg viewBox="0 0 20 37" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 1L18 18.5L1 36" stroke="white" stroke-width="2"/>
			</svg>
		</button>

		<button class="right absolute w-[.8rem] top-[21.5rem] right-[21.3rem] lg:w-[1rem] z-20  lg:top-[11rem] lg:right-[9rem]  3xl:right-[10rem] 3xl:w-[1.4rem] 3xl:top-[16rem] 2xl:right-[12rem] 2xl:w-[1.6rem] 2xl:top-[16rem]" id="scrollRightButton">
			<svg viewBox="0 0 20 37" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M19 36L2 18.5L19 1" stroke="white" stroke-width="2"/>
			</svg>
		</button>
	</div>
	<div id="scrollerSustain" class="scroller mt-[-8rem] lg:-mt-[17rem] lg:pl-0 2xl:-mt-[25.5rem] lg:overflow-x-auto lg:inline-flex lg:whitespace-no-wrap   " style="overflow: auto; scrollbar-width: thin; scrollbar-color: transparent transparent;">
		<style>
			.scroller {
				/* Hide scrollbar for Internet Explorer, Edge, and Firefox */
				scrollbar-width: none;
				-ms-overflow-style: none;

				/* Hide scrollbar for Chrome, Safari, and newer versions of Edge */
				&::-webkit-scrollbar {
					display: none;
				}
			}
		</style>
		<div id="scrollContainer" class="flex flex-row gap-x-[2.5rem] " style="transform: translateX(2.5%); ">
			<div class="flex-shrink-0 w-full lg:w-[31.5%]">
				<div class="w-full h-[20rem] lg:h-[20rem] 2xl:h-[30rem] px-4 lg:px-0">
					<img class="rounded-[3rem] h-full w-full object-cover  lg:w-[140rem]  2xl:rounded-[4rem]" src="<?php echo
						get_post_meta( get_the_ID(), "sustainScroll1", TRUE ) ?>" alt="">
				</div>
				<hr class="ml-4 bg-black my-4 lg:mt-6 lg:h-[2px] 2xl:h-[3px] 2xl:mt-10 2xl:mb-6 ">
				<p class="ml-4 lg:text-[15px] lg:font-normal 2xl:text-[24px] ">All renewable materials since 2021</p>
			</div>

			<div class="flex-shrink-0 w-full lg:w-[31.5%]">
				<div class="w-full h-[20rem] px-4 lg:h-[20rem] 2xl:h-[30rem] lg:px-0">
					<img class="rounded-[3rem] w-96 h-[20rem] object-cover lg:h-full  lg:w-[140rem]  2xl:rounded-[4rem]" src="<?php echo
						get_post_meta( get_the_ID(), "sustainScroll2", TRUE ) ?>" alt="">
				</div>
				<hr class="ml-4 bg-black my-4 lg:mt-6 lg:h-[2px] 2xl:h-[3px] 2xl:mt-10 2xl:mb-6 ">
				<p class="ml-4 lg:text-[15px] lg:font-normal 2xl:text-[24px]">Effluent treatment plant installed at our fabric manufacturing facility. </p>
			</div>

			<div class="flex-shrink-0 w-full lg:w-[31.5%]">
				<div class="w-full h-[20rem] px-4 lg:h-[20rem] 2xl:h-[30rem] lg:px-0">
					<img class="rounded-[3rem] w-96 h-[20rem] object-cover  lg:w-[140rem] lg:h-full  2xl:rounded-[4rem]" src="<?php echo
						get_post_meta( get_the_ID(), "sustainScroll3", TRUE ) ?>" alt="">
				</div>
				<hr class="ml-4 bg-black my-4 lg:mt-6 lg:h-[2px] 2xl:h-[3px] 2xl:mt-10 2xl:mb-6 ">
				<p class="ml-4 lg:text-[15px] lg:font-normal 2xl:text-[24px] ">Urban forestation project. Planted 10,000 trees</p>
			</div>

			<div class="flex-shrink-0 w-full lg:w-[31.5%]">
				<div class="w-full h-[20rem] lg:h-[20rem] 2xl:h-[30rem] px-4 lg:px-0">
					<img class="rounded-[3rem] h-full w-full object-cover  lg:w-[140rem]  2xl:rounded-[4rem]" src="<?php echo
						get_post_meta( get_the_ID(), "sustainScroll1", TRUE ) ?>" alt="">
				</div>
				<hr class="ml-4 bg-black my-4 lg:mt-6 lg:h-[2px] 2xl:h-[3px] 2xl:mt-10 2xl:mb-6 ">
				<p class="ml-4 lg:text-[15px] lg:font-normal 2xl:text-[24px] ">All renewable materials since 2021</p>
			</div>

			<div class="flex-shrink-0 w-full lg:w-[31.5%]">
				<div class="w-full h-[20rem] px-4 lg:h-[20rem] 2xl:h-[30rem] lg:px-0">
					<img class="rounded-[3rem] w-96 h-[20rem] object-cover lg:h-full  lg:w-[140rem]  2xl:rounded-[4rem]" src="<?php echo
						get_post_meta( get_the_ID(), "sustainScroll2", TRUE ) ?>" alt="">
				</div>
				<hr class="ml-4 bg-black my-4 lg:mt-6 lg:h-[2px] 2xl:h-[3px] 2xl:mt-10 2xl:mb-6 ">
				<p class="ml-4 lg:text-[15px] lg:font-normal 2xl:text-[24px]">Effluent treatment plant installed at our fabric manufacturing facility. </p>
			</div>

		</div>
	</div>
	<script>
document.addEventListener('DOMContentLoaded', function () {
  const scrollContainer = document.getElementById('scrollerSustain');
  const scrollAmount = 500;

  const scrollLeftButton = document.querySelector('#scrollLeftButton');
  const scrollRightButton = document.querySelector('#scrollRightButton');

  console.log('Script loaded');

  if (scrollLeftButton && scrollRightButton && scrollContainer) {
	console.log('Buttons and container found');

	scrollLeftButton.addEventListener('click', function () {
	  console.log('Scrolling left');
	  scrollContainer.scrollTo({
		left: scrollContainer.scrollLeft + scrollAmount,
		behavior: 'smooth'
	  });
	});

	scrollRightButton.addEventListener('click', function () {
	  console.log('Scrolling right');
	  scrollContainer.scrollTo({
		left: scrollContainer.scrollLeft - scrollAmount,
		behavior: 'smooth'
	  });
	});
  } else {
	console.error('One or more elements not found.');
  }
});

  </script>
</section>

<section class="hidden lg:block">
	<div class="mx-4 my-20 lg:mx-8 2xl:mx-12 2xl:mt-[10rem]">
		<h1 id="promise" class="text-5xl opacity-0 md:text-6xl border-b-1 pb-4 my-8 border-green-900 lg:border-[#B5F158] lg:mb-10 lg:border-b-2 lg:font-extralight lg:text-[75px] lg:leading-[100px] 2xl:text-[110px] 3xl:text-[90px] 2xl:leading-[125px] 2xl:pb-8 2xl:mb-14">our promise</h1>
		<div class="lg:flex">
			<div class="lg:w-[50%] lg:relative" onmouseover="this.querySelector('.lg-img').style.filter = 'brightness(40%)'; this.querySelector('.lg-text').style.opacity = 1; this.querySelector('.lg-text').style.bottom = '4.6rem';" onmouseout="this.querySelector('.lg-img').style.filter = 'brightness(100%)'; this.querySelector('.lg-text').style.opacity = 0; this.querySelector('.lg-text').style.bottom = '0';">

				<img class="lg-img h-[23rem] md:h-[28rem] w-full lg:h-[47rem] rounded-[2rem] lg:rounded-[3rem] object-cover 2xl:rounded-[4rem] 2xl:h-[70rem]" src="<?php echo
					get_post_meta( get_the_ID(), "promise1", TRUE ) ?>" alt="" style="filter: brightness(100%); transition: filter 1s;">

				<h1 class="lg-text absolute lg:left-[1.8rem] lg:bottom-[4.6rem] lg:pr-[5rem] lg:text-white lg:text-[45px] border-b-[3px] lg:border-white 2xl:text-[62px] 2xl:left-[2.8rem] 2xl:bottom-[6.2rem] 2xl:pb-2 2xl:border-b-[5px] 2xl:pr-[7.5rem]; " style="opacity: 0; bottom: 0; transition: opacity 1s, bottom 1s;">
					100,000 trees by 2025
				</h1>
			</div>

			<div class="lg:w-[50%] lg:ml-6 2xl:ml-10">
				<div class="lg:relative" onmouseover="this.querySelector('.lg-img').style.filter = 'brightness(40%)'; this.querySelector('.lg-text').style.opacity = 1; this.querySelector('.lg-text').style.bottom = '3.8rem';" onmouseout="this.querySelector('.lg-img').style.filter = 'brightness(100%)'; this.querySelector('.lg-text').style.opacity = 0; this.querySelector('.lg-text').style.bottom = '0';">
					<img class="lg-img h-[18rem] md:h-[23rem] w-full rounded-[2rem] my-2 lg:my-0 lg:w-full lg:h-[28.5rem] lg:rounded-[3rem] lg:object-cover 2xl:rounded-[4rem] 2xl:h-[43rem] " src="<?php echo
						get_post_meta( get_the_ID(), "promise2", TRUE ) ?>" alt="" style="filter: brightness(100%); transition: filter 1s;">

					<h1 class="lg-text  absolute lg:left-[3.2rem] lg:bottom-[3.8rem] lg:pr-[.8rem] lg:text-white lg:text-[45px] border-b-[3px] lg:border-white 2xl:text-[62px] 2xl:left-[4rem]  2xl:bottom-[5.2rem] 2xl:pb-2 2xl:border-b-[5px] 2xl:pr-[1rem]" style="opacity: 0; bottom: 0; transition: opacity 1s, bottom 1s;">Organic cotton usage 2x</h1>
				</div>

				<div class="lg:mt-12 2xl:mt-20 lg:relative" onmouseover="this.querySelector('.lg-img').style.filter = 'brightness(40%)'; this.querySelector('.lg-text').style.opacity = 1; this.querySelector('.lg-text').style.bottom = '3.8rem';" onmouseout="this.querySelector('.lg-img').style.filter = 'brightness(100%)'; this.querySelector('.lg-text').style.opacity = 0; this.querySelector('.lg-text').style.bottom = '0';">

					<img class="lg-img h-[9rem] md:h-[14rem] w-full rounded-[2rem] lg:h-[15.5rem] lg:rounded-[3rem] lg:object-cover 2xl:rounded-[4rem] 2xl:h-[22rem] " src="<?php echo
						get_post_meta( get_the_ID(), "promise3", TRUE ) ?>" alt="" style="filter: brightness(100%); transition: filter 1s;">

					<h1 class="lg-text  absolute text-center lg:left-[3.2rem] lg:bottom-[3.8rem] lg:pr-[.5rem] lg:text-white lg:text-[45px] border-b-[3px] lg:border-white 2xl:text-[62px] 2xl:left-[4rem]  2xl:bottom-[5.2rem] 2xl:pb-2 2xl:border-b-[5px] 2xl:pr-[1rem]" style="opacity: 0; bottom: 0; transition: opacity 1s, bottom 1s;">100% renewable by 2028</h1>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="lg:hidden">
	<div class="mx-4 my-20 lg:mx-8 2xl:mx-12 2xl:mt-[10rem]">
	<h1  class="text-5xl font-light  md:text-6xl border-b-2 pb-4 my-8 border-[#B5F158]">our promise</h1>
		<div class="lg:flex">
			<div class="lg:w-[50%] relative">

				<img class=" h-[23rem] bright md:h-[28rem] brightness-75 w-full lg:h-[47rem] rounded-[2rem] lg:rounded-[3rem] object-cover 2xl:rounded-[4rem] 2xl:h-[70rem]" src="<?php echo
					get_post_meta( get_the_ID(), "promise1", TRUE ) ?>" alt="" >

				<h1 class=" absolute left-[2rem] bottom-[2.6rem] pr-[1rem] text-white text-[25px] border-b-[3px] border-white  " >
					100,000 trees by 2025
				</h1>
			</div>

			<div class="lg:w-[50%] lg:ml-6 2xl:ml-10">
				<div class="relative">
					<img class=" h-[18rem] md:h-[23rem] w-full brightness-75 rounded-[2rem] my-2 lg:my-0 lg:w-full lg:h-[28.5rem] lg:rounded-[3rem] lg:object-cover 2xl:rounded-[4rem] 2xl:h-[43rem] " src="<?php echo
						get_post_meta( get_the_ID(), "promise2", TRUE ) ?>" alt="" >

					<h1 class="  absolute left-[2.5rem] bottom-[2.5rem] pr-[.8rem] text-white text-[25px] border-b-[3px] border-white " >Organic cotton usage 2x</h1>
				</div>

				<div class="lg:mt-12 2xl:mt-20 relative">

					<img class=" h-[9rem] md:h-[14rem] w-full brightness-75 rounded-[2rem] lg:h-[15.5rem] lg:rounded-[3rem] lg:object-cover 2xl:rounded-[4rem] 2xl:h-[22rem] " src="<?php echo
						get_post_meta( get_the_ID(), "promise3", TRUE ) ?>" alt="" >

					<h1 class="  absolute text-center left-[2rem] bottom-[2rem] pr-[.4rem] text-white text-[25px] border-b-[3px] border-white " >100% renewable by 2028</h1>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>


<?php
get_footer();
