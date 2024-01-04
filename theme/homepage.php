<?php
/*
  Template Name: Homepage
*/

get_header();
?>
<script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/MotionPathPlugin.min.js"></script>
<script src="https://unpkg.com/countup.js"></script>


<!-- @font-face {
  font-family: 'AeonikFont';
  src: url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-Bold.otf') format('otf'),
  url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-BoldItalic.otf') format('otf'),
  url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-Light.otf') format('otf'),
  url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-LightItalic.otf') format('otf'),
  url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-Regular.otf') format('otf'),
  url('../tailwind/fonts/New\ Aeonik\ Trials/AeonikTRIAL-RegularItalic.otf') format('otf');

  font-weight: normal;
  font-style: normal;
} 

.aeonik {
  font-family: 'AeonikFont', sans-serif; /* Use the font-family name you specified in @font-face */
} -->
<script>
	document.addEventListener("DOMContentLoaded", function() {

		gsap.registerPlugin(ScrollTrigger);

		ScrollTrigger.create({
			trigger: ".hero",
			start: "start 12%",
			end: "70% 12%",
			pin: true,
			// markers: true,

			onUpdate: (self) => {
				gsap.to(".hero", {
					opacity: 1 - gsap.utils.clamp(0, 1, self.progress * 1.5)
				});
			}

		});
	});
</script>
<!-- <script>
  document.addEventListener('DOMContentLoaded', function() {
	// Create an Intersection Observer
	const observer = new IntersectionObserver(entries => {
	  entries.forEach(entry => {
		if (entry.isIntersecting) {
		  // If the element is in the viewport, use GSAP to create a fade-in animation
		  gsap.fromTo(entry.target, { opacity: 0 }, { opacity: 1, duration: 1, ease: 'power2.in' });

		  // Unobserve the element to avoid triggering the animation again
		  observer.unobserve(entry.target);
		}
	  });
	}, { threshold: 0.5 }); // Adjust the threshold based on when you want the animation to start

	// Observe the elements you want to animate
	observer.observe(document.getElementById('fadeInHero'));
	observer.observe(document.getElementById('fadeInHeroSvg'));
	observer.observe(document.getElementById('fadeInParagraph'));
  });
</script> -->

<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
	// Set initial opacity and translateY to zero
	gsap.set('#fadeInHeading, #fadeInParagraph, building, driving, helm, dynamic, brands, paying, recognise' , { opacity: 0, y: '20px' });

	// Create an Intersection Observer
	const observer = new IntersectionObserver(entries => {
	  entries.forEach(entry => {
		if (entry.isIntersecting) {
		  // Custom delays for each element
		  let delay = 0;

		  if (entry.target.id === 'fadeInHeading') {
			delay = 0; 
		  } else if (entry.target.id === 'fadeInParagraph') {
			delay = 1.1; 
		  } else if (entry.target.id === 'building') {
			delay = 0; 
		  } else if (entry.target.id === 'helm') {
			delay = .2; 
		  } else if (entry.target.id === 'recognise') {
			delay = .2; 
		  }
		  const targetIds = ['fadeInHeading', 'fadeInParagraph', 'building', 'driving', 'helm', 'dynamic', 'brands', 'paying', 'recognise' ];

		  gsap.fromTo(
			`#${entry.target.id}`,
			{ opacity: 0, y: '20px' },
			{ opacity: 1, y: '0', duration: .6, ease: 'power2.in', delay: delay }
		  );

		  // Unobserve the element to avoid triggering the animation again
		  observer.unobserve(entry.target);
		}
	  });
	}, { threshold: 0.5 }); 

	observer.observe(document.getElementById('fadeInHeading'));
	observer.observe(document.getElementById('fadeInParagraph'));
	observer.observe(document.getElementById('building'));
	observer.observe(document.getElementById('dynamic'));
	observer.observe(document.getElementById('brands'));
	observer.observe(document.getElementById('driving'));
	observer.observe(document.getElementById('helm'));
	observer.observe(document.getElementById('paying'));
	observer.observe(document.getElementById('recognise'));
  });
</script>

<section>
	<div class=" hero hidden lg:flex lg:justify-between mt-10 md:mt-16 2xl:mt-24">
		<div  class=" ml-4 md:ml-8 md:mb-16 lg:mt-21 lg:ml-8 lg:flex lg:flex-col lg:justify-start lg:w-[65vw] lg:mt-20 2xl:mt-28 2xl:mx-12 2xl:mr-0">
			<h1 id="fadeInHeading" class="opacity-0 text-[2.40rem] leading-[3rem] md:leading-[5rem] my-10 font-light lg:font-extralight md:pb-2 md:text-7xl lg:my-0 lg:mt-5 lg:text-[5.2rem] lg:leading-[6rem] 2xl:mt-12 lg:pb-0 2xl:text-[105px] lg:text-black 2xl:leading-[8rem] aeonik ">Inspiring <br>Limitless Experiences </h1>
			<p id="fadeInParagraph"  class="opacity-0 lg:font-light w-3/4 2xl:w-4/5 font-light text-base md:text-2xl md:pr-2 lg:w-8/12 lg:text-base lg:leading-5 lg:my-4 2xl:text-[25px] 2xl:leading-[27px] 2xl:pr-0 2xl:mt-8">VisiOne is a company building brands that challenge the status quo. Brands that are ever evolving to provide the best. Brands that make you feel good, and inspire you to live the best life you can.</p>
		</div>
		<div class="flex justify-end items-end mt-12 md:w-full lg:w-[35vw] 2xl:w-[40vw]">
			<!-- <svg class=" hidden lg:block lg:w-full " viewBox="0 0 633 666" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M135.577 549.68L191.397 392.657L342.858 356.076L381.827 480.543L397.336 530.048L353.001 654.678L263.675 578.67L171.7 620.028L189.892 568.887L186.26 567.61L186.227 567.676L135.577 549.68Z" stroke="black" />
				<path d="M79.2987 419.651H79.3642L81.3928 419.193L186.947 393.704L130.702 551.807L131.389 552.036L131.323 552.232L184.951 571.308L166.857 622.22L72.493 664.69L1.22906 639.332L79.3315 419.684L79.2987 419.651Z" stroke="black" />
				<path d="M549.68 530.113L392.657 474.293L356.076 322.833L480.543 283.864L530.048 268.354L654.678 312.69L578.67 401.982L620.028 493.991L568.886 475.798L567.61 479.398L567.676 479.43L549.68 530.113Z" stroke="black" />
				<path d="M419.651 586.392V586.326L419.193 584.298L393.704 478.743L551.807 534.956L552.036 534.302L552.232 534.367L571.308 480.739L622.22 498.833L664.69 593.197L639.332 664.461L419.684 586.359L419.651 586.392Z" stroke="black" />
				<path d="M530.114 116.01L474.293 273.033L322.833 309.581L283.864 185.148L268.354 135.642L312.69 11.0124L401.983 87.0207L493.991 45.63L475.799 96.8039L479.398 98.08L479.431 97.9818L530.114 116.01Z" stroke="black" />
				<path d="M586.392 246.039H586.326L584.298 246.497L478.743 271.986L534.956 113.884L534.302 113.655L534.367 113.458L480.739 94.3827L498.833 43.4378L593.198 1.00009L664.462 26.358L586.359 246.007L586.392 246.039Z" stroke="black" />
				<path d="M116.01 135.577L273.033 191.397L309.581 342.858L185.148 381.827L135.642 397.336L11.0123 353.001L87.0206 263.675L45.63 171.7L96.8039 189.892L98.08 186.26L97.9818 186.227L116.01 135.577Z" stroke="black" />
				<path d="M246.039 79.2988V79.3643L246.497 81.3929L271.986 186.947L113.884 130.702L113.655 131.389L113.458 131.323L94.3827 184.951L43.4378 166.857L1.00012 72.4931L26.358 1.22914L246.007 79.3315L246.039 79.2988Z" stroke="black" />
			</svg> -->
			<svg id="Layer_2" class=" hidden lg:block lg:w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1511.16 1511.16"><defs><style>.cls-1{fill:#050505;} @-webkit-keyframes animate-svg-fill-1 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-1 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-1 {
				-webkit-animation: animate-svg-fill-1 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.2s both;
						animation: animate-svg-fill-1 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.2s both;
				}

				@-webkit-keyframes animate-svg-fill-2 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-2 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-2 {
				-webkit-animation: animate-svg-fill-2 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.3s both;
						animation: animate-svg-fill-2 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.3s both;
				}

				@-webkit-keyframes animate-svg-fill-3 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-3 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-3 {
				-webkit-animation: animate-svg-fill-3 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.4s both;
						animation: animate-svg-fill-3 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.4s both;
				}

				@-webkit-keyframes animate-svg-fill-4 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-4 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-4 {
				-webkit-animation: animate-svg-fill-4 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.5s both;
						animation: animate-svg-fill-4 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.5s both;
				}

				@-webkit-keyframes animate-svg-fill-5 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-5 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-5 {
				-webkit-animation: animate-svg-fill-5 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.6s both;
						animation: animate-svg-fill-5 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.6s both;
				}

				@-webkit-keyframes animate-svg-fill-6 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-6 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-6 {
				-webkit-animation: animate-svg-fill-6 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.7s both;
						animation: animate-svg-fill-6 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.7s both;
				}

				@-webkit-keyframes animate-svg-fill-7 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-7 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-7 {
				-webkit-animation: animate-svg-fill-7 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.8000000000000001s both;
						animation: animate-svg-fill-7 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.8000000000000001s both;
				}

				@-webkit-keyframes animate-svg-fill-8 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				@keyframes animate-svg-fill-8 {
				0% {
					fill: transparent;
				}

				100% {
					fill: rgb(5, 5, 5);
				}
				}

				.svg-elem-8 {
				-webkit-animation: animate-svg-fill-8 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.9s both;
						animation: animate-svg-fill-8 0.25s cubic-bezier(0.77, 0, 0.175, 1) 0.9s both;
				}  </style></defs><g id="Layer_1-2"><g><g><path class="cls-1 svg-elem-1" d="M774.2,808.48l71.49,274.55,28.46,109.27-109.21,265.35-185.56-174.24-.46-.43-.59,.23-202.75,79.6,44.21-107.41,.38-.92-.92-.38-7.77-3.2-.92-.38-.08,.19-106.73-43.92,137.86-334.97,332.61-63.33m.73-1.16l-334.06,63.61-138.44,336.4,108.58,44.69,.08-.19,7.77,3.2-45.1,109.58,204.93-80.46,186.62,175.23,109.88-267.01-28.55-109.59-71.73-275.46h0Z"></path><path class="cls-1 svg-elem-2" d="M429.39,874.12l-138.68,336.98-.38,.93,.92,.38,.51,.21-.18,.43,.92,.38,114,46.92-44.35,107.76-209.42,82.23L1.31,1388l193.1-469.21,3.97-.68,231.01-43.99m1.63-1.33l-232.83,44.34-4.5,.77-.09,.02,.07,.03L0,1388.54l152.73,62.85,210.19-82.53,44.89-109.08-114.92-47.3,.18-.43-1.43-.59,139.38-338.69h0Z"></path></g><g><path class="cls-1 svg-elem-3" d="M1192.3,637.01l265.36,109.21-174.24,185.56-.43,.46,.23,.59,79.6,202.75-107.41-44.21-.92-.38-.38,.92-3.2,7.77-.38,.92,.19,.08-43.92,106.73-334.97-137.86-63.33-332.61,274.55-71.49,109.27-28.46m.07-1.05l-109.59,28.55-275.46,71.73,63.61,334.06,336.4,138.44,44.69-108.58-.19-.08,3.2-7.77,109.58,45.1-80.46-204.93,175.23-186.62-267.01-109.89h0Z"></path><path class="cls-1 svg-elem-4" d="M874.12,1081.77l336.98,138.68,.92,.38,.38-.92,.21-.5,.43,.18,.38-.93,46.92-114,107.76,44.35,82.23,209.42-62.32,151.43-469.21-193.1-.68-3.97-43.99-231.01m-1.33-1.63l44.34,232.83,.77,4.5,.02,.09,.03-.07,470.6,193.67,62.85-152.73-82.53-210.19-109.08-44.89-47.3,114.92-.43-.18-.59,1.43-338.68-139.38h0Z"></path></g><g><path class="cls-1 svg-elem-5" d="M746.22,53.5l185.56,174.24,.46,.43,.59-.23,202.75-79.6-44.21,107.41-.38,.92,.92,.38,7.77,3.2,.92,.38,.08-.19,106.73,43.92-137.86,334.97-332.61,63.33-71.49-274.55-28.46-109.27L746.22,53.5m-.37-1.72l-109.89,267.01,28.55,109.59,71.73,275.46,334.06-63.61,138.44-336.4-108.58-44.69-.08,.19-7.77-3.2,45.1-109.58-204.93,80.46L745.84,51.78h0Z"></path><path class="cls-1 svg-elem-6" d="M1358.42,60.84l151.43,62.32-193.1,469.21-3.97,.68-231.01,43.99,138.68-336.98,.38-.92-.92-.38-.51-.21,.18-.43-.92-.38-114-46.91,44.35-107.76,209.42-82.23m0-1.08l-210.19,82.53-44.89,109.08,114.92,47.3-.18,.43,1.43,.59-139.38,338.68,232.83-44.34,4.5-.77,.09-.02-.07-.03,193.67-470.6-152.73-62.85h0Z"></path></g><g><path class="cls-1 svg-elem-7" d="M304.37,303.73l334.97,137.86,63.33,332.61-274.55,71.49-109.27,28.46L53.5,764.94l174.24-185.56,.43-.46-.23-.59-79.6-202.75,107.41,44.21,.92,.38,.38-.92,3.2-7.77,.38-.92-.19-.08,43.92-106.73m-.54-1.31l-44.69,108.58,.19,.08-3.2,7.77-109.58-45.1,80.46,204.93L51.78,765.31l267.01,109.89,109.59-28.55,275.46-71.73-63.61-334.06-336.4-138.44h0Z"></path><path class="cls-1 svg-elem-8" d="M123.16,1.31l469.21,193.1,.68,3.97,43.99,231.01-336.98-138.68-.92-.38-.38,.93-.21,.51-.43-.18-.38,.92-46.92,114-107.76-44.35L60.84,152.74,123.16,1.31m-.54-1.31L59.76,152.73l82.53,210.19,109.08,44.89,47.3-114.92,.43,.18,.59-1.43,338.68,139.38-44.34-232.83-.77-4.5-.02-.09-.03,.07L122.62,0h0Z"></path></g></g></g></svg>
		</div>
	</div>
</section>

<section class="lg:hidden " >
	<div class=" lg:flex lg:justify-between mt-10 md:mt-16 2xl:mt-24">
		<div  class=" ml-4 md:ml-8 md:mb-16 lg:mt-21 lg:ml-8 lg:flex lg:flex-col lg:justify-start lg:w-[65vw] lg:mt-20 2xl:mt-28 2xl:mx-12 2xl:mr-0">
			<h1 class=" text-[2.40rem] leading-[3rem] md:leading-[5rem] my-10 font-light md:pb-2 md:text-7xl lg:my-0 lg:mt-5 lg:text-[5.2rem] lg:leading-[6rem] 2xl:mt-12 lg:pb-0 2xl:text-[105px] lg:text-black 2xl:leading-[8rem] aeonik ">Inspiring <br>Limitless Experiences </h1>
			<p  class=" w-3/4 2xl:w-4/5 font-light text-base md:text-2xl md:pr-2 lg:w-8/12 lg:text-base lg:font-normal lg:leading-5 lg:my-4 2xl:text-[25px] 2xl:leading-[27px] 2xl:pr-0 2xl:mt-8">VisiOne is a company building brands that challenge the status quo. Brands that are ever evolving to provide the best. Brands that make you feel good, and inspire you to live the best life you can.</p>
		</div>
		<div class="flex justify-end items-end mt-12 md:w-full lg:w-[35vw] 2xl:w-[40vw]">
			<svg class="w-2/4 md:w-[60%] lg:hidden " viewBox="0 0 192 237" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M48.6512 195.278L68.416 139.679L122.045 126.727L135.844 170.798L141.335 188.327L125.637 232.456L94.0084 205.543L61.4416 220.187L67.8831 202.079L66.5971 201.627L66.5855 201.65L48.6512 195.278Z" stroke="black" />
				<path d="M28.7241 149.238H28.7473L29.4656 149.076L66.8403 140.051L46.9249 196.032L47.1682 196.113L47.145 196.182L66.1336 202.937L59.7268 220.964L26.3143 236.002L1.08112 227.023L28.7357 149.25L28.7241 149.238Z" stroke="black" />
				<path d="M195.277 188.348L139.678 168.583L126.726 114.954L170.797 101.156L188.326 95.6641L232.455 111.362L205.542 142.979L220.186 175.558L202.078 169.116L201.626 170.39L201.649 170.402L195.277 188.348Z" stroke="black" />
				<path d="M149.236 208.275V208.252L149.074 207.534L140.049 170.159L196.03 190.063L196.111 189.831L196.181 189.855L202.935 170.866L220.962 177.273L236 210.685L227.021 235.918L149.248 208.264L149.236 208.275Z" stroke="black" />
				<path d="M188.349 41.7218L168.584 97.3205L114.955 110.262L101.156 66.2019L95.665 48.6731L111.363 4.54395L142.98 31.457L175.558 16.8014L169.117 34.9211L170.391 35.3729L170.403 35.3382L188.349 41.7218Z" stroke="black" />
				<path d="M208.276 87.7637H208.253L207.535 87.9259L170.16 96.951L190.064 40.9699L189.832 40.8888L189.855 40.8193L170.867 34.065L177.273 16.0264L210.686 1L235.919 9.97875L208.264 87.7521L208.276 87.7637Z" stroke="black" />
				<path d="M41.723 48.6514L97.3217 68.4162L110.263 122.045L66.2031 135.844L48.6743 141.335L4.54517 125.637L31.4583 94.0085L16.8026 61.4417L34.9223 67.8833L35.3741 66.5973L35.3394 66.5857L41.723 48.6514Z" stroke="black" />
				<path d="M87.7637 28.724V28.7472L87.9259 29.4655L96.951 66.8403L40.9699 46.9248L40.8888 47.1681L40.8193 47.1449L34.065 66.1336L16.0264 59.7268L1 26.3142L9.97875 1.08105L87.7521 28.7356L87.7637 28.724Z" stroke="black" />
			</svg>
	</div>
</section>

<section>
	<div class="-mt-[8.3rem] md:-mt-[21rem] lg:-mt-[25rem] 2xl:-mt-[41rem] 3xl:-mt-[33rem]">
		<div class="flex justify-center items-center px-4  relative z-10 md:hidden">
			<video id="autoplayMobile" class="rounded-[2rem]"  muted onended="restartVideoMobile()">
				<source src="<?php echo get_post_meta( get_the_ID(), "video", TRUE ) ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<script>
				  function restartVideoMobile() {
					var video = document.getElementById('autoplayMobile');
					video.currentTime = 0; // Reset the video to the beginning
					video.play(); // Start playing the video again
				}

				document.addEventListener('DOMContentLoaded', function() {
				var video = document.getElementById('autoplayMobile');

				var options = {
					root: null,
					rootMargin: '0px',
					threshold: 0.5 
				};

				var observer = new IntersectionObserver(function(entries, observer) {
					entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						video.play();
						observer.unobserve(entry.target);
					}
					});
				}, options);

				observer.observe(video);
				});
			</script>
		</div>
	   
		<div id="img-container" class=" hidden md:flex opacity-0 md:mx-8 2xl:mx-12 md:relative lg:mx-8 lg:flex lg:justify-center lg:relative z-10 2xl:mt-[2rem]">
			<!-- <img class="image rounded-[3rem] md:h-full md:w-full lg:w-full lg:h-[330px] object-cover 2xl:h-[510px] " src="http://visione.local/wp-content/uploads/2023/10/Screenshot-2023-08-01-at-6.31-2-scaled.jpg" alt=""> -->
			<!-- <iframe class="image rounded-[3rem] md:h-full md:w-full lg:w-full lg:h-[330px] object-cover 2xl:h-[510px]" src="https://www.youtube.com/embed/UyW8FdzH9dg?si=Gg_MpbQJ2BKts9qK&autoplay=1&muted=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
			</iframe> -->

			<video id="autoplayVideo" class="image rounded-[3rem] md:h-full md:w-full lg:w-full lg:h-[330px] object-cover 2xl:h-[510px]"  muted onended="restartVideo()">
				<source src="<?php echo get_post_meta( get_the_ID(), "video", TRUE ) ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<script>
				  function restartVideo() {
					var video = document.getElementById('autoplayVideo');
					video.currentTime = 0; // Reset the video to the beginning
					video.play(); // Start playing the video again
				}

				document.addEventListener('DOMContentLoaded', function() {
				var video = document.getElementById('autoplayVideo');

				var options = {
					root: null,
					rootMargin: '0px',
					threshold: 0.5 
				};

				var observer = new IntersectionObserver(function(entries, observer) {
					entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						video.play();
						observer.unobserve(entry.target);
					}
					});
				}, options);

				observer.observe(video);
				});
			</script>
		</div>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var imgContainer = document.getElementById("img-container");
				
				
			gsap.fromTo(imgContainer,
			{ opacity: 0 },
			{ opacity: 1, duration: 1, delay: 1.6  });
		});
		</script>


		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Set up variables
				const image = document.querySelector(".image");

				gsap.registerPlugin(ScrollTrigger);

				gsap.set(image, {
					width: "80vw",
					height: "60vh",
				});

				const imageAnimation = gsap.timeline({
					scrollTrigger: {
						trigger: ".image-container",
						start: "8.2% center",
						end: "17% center",
						scrub: true,
						// markers: true, 

					},
				});

				// Define the animation
				imageAnimation.to(image, {
					width: "100vw",
					height: "90vh",
					ease: "linear",
					//   duration: 10,

				});
			});
		</script>

		<!-- <script>
	document.addEventListener("DOMContentLoaded", function () {

	gsap.registerPlugin(ScrollTrigger);

	ScrollTrigger.create({
		trigger: ".img-container",
		start: "start 5%",
		end: "10% 5%",
		pin: true,
		// markers: true,

	});
});
</script> -->

		<div class="bg-[#1C1C1C] font-light text-white flex pt-3 -mt-[4.8rem] lg:-mt-[9rem] relative lg:pt-28 2xl:-my-[12.5rem] 2xl:pb-[4.3rem]">
			<div class="mx-4 w-4/5 pr-2 lg:mx-0 lg:w-11/12">
				<div class="mt-20 pr-2 md:mt-24 md:pr-5 2xl:mt-32">
					<p id="building"  class="opacity-0 py-8 font-light md:ml-8 md:text-2xl lg:text-4xl lg:ml-8 lg:py-16 lg:w-9/12 lg:pb-10 lg:pr-16 2xl:text-[50px] 2xl:px-8 2xl:leading-[57px] 2xl:pt-36 2xl:py-24">Building brands that push the boundaries of what a brand is for people. Building brands that truly care. Fostering culture that is inviting and uplifting. Making products that make premium accessible to all.</p>
					<hr class="mr-8 md:mr-4 md:ml-8 md:mt-4 bg-[#B5F158] lg:mr-[20rem] border-1 2xl:border-2 2xl:mr-[24rem] border-[#B5F158] lg:ml-0">
				</div>
				<div class="font-light md:ml-8 md:mr-32 md:mt-16 md:mb-20 lg:hidden ">
					<div class="my-8 lg:w-[50%]">
						<h1 class="text-4xl md:text-7xl lg:text-7xl 2xl:text-8xl">10</h1>
						<p class="md:text-2xl md:my-4 lg:my-4">Brands that made waves in the industry</p>

					</div>
					<div class="my-8 lg:w-[50%]">
						<div class="flex flex-row items-center">
							<h1 class="text-[41.89px] leading-[47.76px] pr-1 md:text-7xl lg:text-7xl"><b>$</b>50</h1>
							<h5 class="text-[19.95px] leading-[22.74px] md:text-2xl">Million</h5>
						</div>
						<p class="md:text-2xl md:my-4 lg:w-5/6 lg:my-4">in revenue earned in the last fiscal year through sales in the USA and Europe. </p>
					</div>
					<div class="my-8 lg:w-[50%]">
						<h1 class="text-4xl md:text-7xl lg:text-7xl 2xl:text-8xl">6000</h1>
						<p class="md:text-2xl md:my-4 lg:w-5/6 lg:my-4">lives impacted through a series of CSR projects.</p>
					</div>
				</div>
				<div class="hidden lg:flex lg:justify-between lg:items-center lg:mt-8 lg:mb-16 lg:ml-8 2xl:ml-16 lg:w-[70%] 2xl:mt-16">
					<div id="counterContainer1" class="my-8 lg:w-[70%] 2xl:w-[210%]">
						<h1 id="myCounter1" class="lg:text-7xl font-light 2xl:text-[105px]">0</h1>
						<p class="text-base lg:my-4 2xl:text-[20px]">Online Customer Access Points</p>
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var counterElement = document.getElementById("myCounter1");

							var observer = new IntersectionObserver(function(entries) {
								entries.forEach(function(entry) {
									if (entry.isIntersecting) {
										startCounting(100, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
										observer.unobserve(entry.target);
									}
								});
							}, {
								threshold: 0.5
							});

							observer.observe(document.getElementById("counterContainer1"));

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
										counterElement.innerHTML = "100<b>+</b>";
									}
								}

								requestAnimationFrame(updateCounter);
							}
						});
					</script>


					<div id="counterContainer2" class="my-8 lg:w-[60%] 2xl:w-[250%]">
						<h1 id="myCounter2" class="lg:text-7xl font-light 2xl:text-[105px]">0</h1>
						<p class="text-base lg:my-4 2xl:text-[20px]">Unique SKU’s</p>
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var counterElement = document.getElementById("myCounter2");

							var observer = new IntersectionObserver(function(entries) {
								entries.forEach(function(entry) {
									if (entry.isIntersecting) {
										startCounting(500, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
										observer.unobserve(entry.target);
									}
								});
							}, {
								threshold: 0.5
							});

							observer.observe(document.getElementById("counterContainer2"));

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
										counterElement.innerHTML = "500<b>+</b>";
									}
								}

								requestAnimationFrame(updateCounter);
							}
						});
					</script>

					<div id="counterContainer3" class="my-8 lg:w-[30%]">
						<h1 id="myCounter3" class="lg:text-7xl font-light 2xl:text-[105px]">0</h1>
						<p class="text-base lg:my-4 2xl:text-[20px]">Brands</p>
					</div>

					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var counterElement = document.getElementById("myCounter3");

							var observer = new IntersectionObserver(function(entries) {
								entries.forEach(function(entry) {
									if (entry.isIntersecting) {
										startCounting(8, 1000); // Count up to 100 in 3000 milliseconds (3 seconds)
										observer.unobserve(entry.target);
									}
								});
							}, {
								threshold: 0.5
							});

							observer.observe(document.getElementById("counterContainer3"));

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
										counterElement.innerHTML = "8";
									}
								}

								requestAnimationFrame(updateCounter);
							}
						});
					</script>


				</div>
			</div>
			<div class="h-10 w-[18%] absolute z-0 top-[3.3rem] right-0 md:w-[12%] md:top-12 lg:-top-4 lg:w-[5.82rem] 2xl:w-[8.7rem] 2xl:-top-8">
				<svg viewBox="0 0 72 617" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M100.534 582.651L2.21545 617L2.21545 597.667L96.007 566.062L2.21545 501.201L2.21545 481.797L100.534 551.046L100.534 582.651Z" fill="white" />
					<path d="M100.534 503.184L2.21545 485.764L2.21545 469.997L100.534 487.416L100.534 503.184Z" fill="white" />
					<path d="M102.798 434.067C102.615 449.93 99.4769 462.053 93.3675 470.444C87.2668 478.834 79.3044 482.112 69.4717 480.285L69.4717 464.107C75.5549 465.208 80.4232 462.805 84.0766 456.905C87.73 451.005 89.6092 442.851 89.6966 432.424C89.8364 405.276 84.4612 390.505 73.5883 388.128C67.6887 386.896 63.5108 389.754 61.0373 396.702C59.4379 401.186 58.1793 409.201 57.2703 420.764C56.2652 433.105 55.4174 441.356 54.7356 445.516C52.7254 457.718 49.002 465.602 43.5569 469.168C39.9034 471.545 35.3061 472.209 29.7735 471.152C23.2358 469.919 17.6683 466.624 13.0796 461.275C8.48228 455.926 5.11729 449.126 2.96719 440.875C0.81709 432.625 -0.161816 423.29 0.0217283 412.863C0.292675 397.55 3.43916 385.794 9.45244 377.587C15.4657 369.38 23.4019 366.059 33.2783 367.615L33.2783 383.793C27.2913 382.604 22.4579 384.894 18.7783 390.645C15.0986 396.405 13.1933 404.359 13.0534 414.506C12.9136 426.664 14.1285 436.173 16.6894 443.025C19.2503 449.878 23.0435 453.811 28.0692 454.816C32.8676 455.777 36.2937 453.077 38.3564 446.723C39.7286 442.606 40.8736 434.976 41.7826 423.823C42.8314 411.298 43.8628 402.497 44.8679 397.428C47.3851 384.763 51.9562 376.836 58.5813 373.637C62.5144 371.714 67.2866 371.303 72.9153 372.404C79.4967 373.68 85.0817 377.15 89.6791 382.788C94.2765 388.434 97.6415 395.618 99.7916 404.35C101.942 413.081 102.947 422.975 102.807 434.04L102.798 434.067Z" fill="white" />
					<path d="M100.534 375.586L2.21545 358.167L2.21545 342.399L100.534 359.819L100.534 375.586Z" fill="white" />
					<path d="M102.798 297.212C102.798 306.678 101.566 315.06 99.0924 322.375C96.6276 329.691 93.1577 335.608 88.709 340.135C84.2514 344.663 78.8325 347.801 72.4608 349.566C66.0805 351.323 59.0533 351.524 51.3794 350.152C35.8392 347.407 23.3931 339.628 14.0498 326.806C4.70649 313.985 0.0304542 298.042 0.0304534 278.98C0.0304526 259.917 4.70648 245.566 14.0498 236.057C23.4019 226.547 35.8392 223.165 51.3794 225.909C61.6229 227.736 70.6079 231.826 78.3605 238.18C86.1043 244.535 92.1176 252.794 96.3916 262.968C100.666 273.141 102.798 284.556 102.798 297.212ZM78.6664 292.824C78.6664 281.995 76.3502 273.246 71.7092 266.595C67.0681 259.944 60.2944 255.818 51.3794 254.219C42.508 252.619 35.7606 254.359 31.1195 259.428C26.4784 264.497 24.1623 272.451 24.1623 283.289C24.1623 294.127 26.4697 302.788 31.0845 309.413C35.6994 316.038 42.4643 320.155 51.3794 321.755C60.2507 323.354 67.0157 321.632 71.6742 316.58C76.3328 311.529 78.6664 303.61 78.6664 292.824Z" fill="white" />
					<path d="M100.534 233.103L2.21545 215.683L2.21545 193.404L56.5885 138.76L2.21545 129.234L2.21545 100.845L100.534 118.265L100.534 140.753L46.3012 195.196L100.534 204.723L100.534 233.111L100.534 233.103Z" fill="white" />
					<path d="M100.534 116.429L2.21545 99.0094L2.21545 -3.05176e-05L26.4172 4.38753L26.4172 75.0087L39.1692 77.2724L39.1692 7.88363L62.0686 11.7905L62.0686 81.1793L76.4026 83.714L76.4026 13.0928L100.534 17.4105L100.534 116.42L100.534 116.429Z" fill="white" />
				</svg>
			</div>
		</div>
	</div>
</section>

<section>
	<div class=" mx-4 my-8 mt-9 lg:mt-[8rem] 2xl:mt-[24rem] lg:mx-8 text-black ">
		<div class="flex items-center lg:ml-4 2xl:mx-8">
		<a  href="/brands" onclick="setScrollTarget('brandsButton1')" class="w-4/12 h-24 border-[.5px] border-black rounded-3xl md:rounded-[2.5rem] flex items-center md:h-40 lg:w-1/5 lg:rounded-[1.8rem] lg:relative 2xl:rounded-[3rem] 2xl:border-[1px] lg:pl-2 lg:h-48 lg:pb-6 lg:pr-6 lg:items-end 2xl:h-[18rem]" onmouseover="fadeInEffect('img1')" onmouseout="fadeOutEffect('img1')">
			<div id="img1" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo get_post_meta( get_the_ID(), "bostonlinen", TRUE ) ?>" alt="/" />
			</div>

			<p class="text-[9px] pr-6 p-2 text-black md:text-base lg:hidden">
				BOSTON LINEN Co<br>Authentic,<br>premium-quality Bed <b>&</b> Bath essentials
			</p>
			<p class="hidden p-2 lg:text-sm text-black lg:flex lg:flex-col 2xl:text-[22px] 2xl:leading-[26px] 2xl:pr-0 2xl:pb-4">
				BOSTON LINEN Co<br/>Authentic, premium-quality Bed & Bath essentials
			</p>
		</a>

	   

			<a href="/brands" onclick="setScrollTarget('brandsButton3')" class="hidden w-4/12 h-24 border-[1px] border-black rounded-2xl lg:flex items-end md:rounded-[2.5rem] md:h-40 lg:w-1/5  lg:rounded-[1.8rem] lg:pl-2 lg:pb-6 lg:h-48 2xl:rounded-[3rem] 2xl:border-[1px]  2xl:h-[18rem] lg:relative" onmouseover="fadeInEffect('img2')" onmouseout="fadeOutEffect('img2')">
			<div id="img2" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo
					get_post_meta( get_the_ID(), "pawtax", TRUE ) ?>" alt="/" />
			</div>
				<div class=" text-[9px] pr-3 p-2 md:text-base">
					<div class="lg:flex lg:flex-row lg:items-center">
						<div class="w-5 h-5 lg:w-7 lg:h-7 2xl:h-12 2xl:w-12 ">
							<svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_268_1116)">
									<path d="M10.0249 -0.00176436C4.54893 -0.0357169 -0.00313377 4.51497 1.61874e-06 10.0221C0.00261445 15.5167 4.5134 20.0141 10.0223 20.0146C15.5364 20.0151 20.0163 15.5313 20.0163 10.0116C20.0163 4.49199 15.5693 0.0327106 10.0249 -0.00176436ZM6.00532 5.63645C6.03511 5.13396 6.07796 4.6372 6.30998 4.17336C7.03321 2.72802 8.48438 3.05345 9.13915 3.88137C9.72285 4.61892 9.93293 5.48288 10.0103 6.37505C9.9601 6.99612 9.88955 7.58847 9.56243 8.11447C8.94894 9.10066 7.66708 9.21349 6.91093 8.32654C6.25563 7.55712 5.94523 6.65503 6.00532 5.63645ZM2.65829 8.5031C2.63634 8.27535 2.67501 8.03455 2.72414 7.80837C3.0011 6.5328 4.26414 6.34371 5.03596 6.75637C5.3448 6.92143 5.6458 7.13402 5.88827 7.38475C6.74632 8.27065 7.23544 9.3143 7.07972 10.5789C6.96998 11.4685 6.37112 11.9825 5.47022 11.9825C5.10024 12.0054 4.74594 11.8827 4.42195 11.6602C3.31202 10.8991 2.78684 9.80792 2.65829 8.5031ZM13.5412 16.0124C12.7454 16.9129 11.9223 17.055 10.8244 16.5462C10.2188 16.2657 9.6382 16.191 8.99649 16.4527C8.55179 16.634 8.06841 16.7724 7.59183 16.8136C6.29953 16.9259 5.54338 16.1555 5.36884 14.8627C5.35368 14.7514 5.35577 14.6375 5.34689 14.4605C5.38034 13.444 5.74509 12.5544 6.72333 11.9715C6.93863 11.8435 7.10376 11.5964 7.23597 11.3713C7.38385 11.1201 7.48732 10.8375 7.57616 10.558C7.88551 9.58488 8.56224 9.06671 9.55041 8.90792C10.8098 8.70577 11.8288 9.33833 12.2385 10.5873C12.2813 10.7189 12.3205 10.8526 12.3482 10.9884C12.4371 11.4288 12.6712 11.7589 13.0521 12.0044C13.6886 12.4144 14.1563 12.9629 14.2734 13.7354C14.4056 14.6088 14.1014 15.3782 13.5412 16.0124ZM15.7689 11.329C15.4162 11.5912 14.982 11.7662 14.5602 11.9067C13.9436 12.112 12.9215 11.6283 12.8687 10.534C12.8321 9.77083 13.0176 9.07768 13.3871 8.42161C13.3975 8.4028 13.408 8.384 13.4184 8.36467C13.4487 8.30826 13.478 8.2508 13.5083 8.19334H13.5078C13.4906 8.17454 13.4744 8.1573 13.4576 8.13902C13.3719 8.22521 13.2899 8.31453 13.2005 8.39706C12.088 9.42452 10.8892 8.84053 10.4759 7.80942C10.1216 6.92717 10.1477 6.01254 10.4957 5.11985C10.5804 4.90203 10.6614 4.67742 10.7868 4.48311C10.9681 4.20104 11.1547 3.90905 11.3966 3.6834C12.5144 2.64131 13.7236 3.40969 14.0628 4.33633C14.3105 5.01382 14.3115 5.70593 14.2054 6.41266C14.1276 6.93135 13.9196 7.38841 13.663 7.83345C13.6823 7.85016 13.7011 7.86688 13.7205 7.88411C14.0502 7.58011 14.3606 7.25051 14.7154 6.97941C15.1607 6.63936 15.6916 6.54011 16.2434 6.61899C16.8188 6.70152 17.1234 7.09641 17.2948 7.61249C17.4323 8.02776 17.4051 8.45138 17.3048 8.86926C17.067 9.85963 16.5904 10.7184 15.7689 11.329Z" fill="#4A4381" />
									<path d="M17.2948 7.61269C17.1234 7.09661 16.8187 6.70171 16.2434 6.61918C15.6916 6.54031 15.1606 6.63955 14.7154 6.9796C14.3606 7.2507 14.0502 7.5803 13.7204 7.88431C13.7163 7.89841 13.71 7.91199 13.7022 7.92453C13.6692 7.9543 13.6358 7.98408 13.6023 8.01385C13.5997 7.98251 13.5966 7.95065 13.594 7.91878C13.617 7.89058 13.64 7.86185 13.663 7.83364C13.9195 7.3886 14.1275 6.93155 14.2054 6.41286C14.3115 5.70612 14.3104 5.01401 14.0627 4.33653C13.7236 3.40988 12.5144 2.64151 11.3966 3.68359C11.1546 3.90925 10.9681 4.20124 10.7868 4.48331C10.6613 4.67762 10.5803 4.90223 10.4957 5.12005C10.1477 6.01274 10.1215 6.92737 10.4758 7.80961C10.8892 8.84073 12.0879 9.42471 13.2005 8.39725C13.2898 8.31472 13.3719 8.2254 13.4576 8.13921C13.4811 8.1225 13.5046 8.10631 13.5281 8.08959C13.5213 8.12407 13.5146 8.15802 13.5078 8.19302C13.478 8.251 13.4487 8.30845 13.4184 8.36487C13.4079 8.3842 13.3975 8.403 13.387 8.4218C13.0176 9.07787 12.8321 9.77103 12.8687 10.5342C12.9214 11.6285 13.9436 12.1122 14.5602 11.9069C14.9819 11.7664 15.4162 11.5914 15.7689 11.3292C16.5904 10.7186 17.067 9.85983 17.3047 8.86946C17.4051 8.45158 17.4322 8.02795 17.2948 7.61269ZM13.5083 6.63851C13.3688 7.12691 13.1629 7.57874 12.7783 7.93602C12.1318 8.53672 11.4781 8.44113 11.1102 7.63567C10.9493 7.28361 10.9054 6.87775 10.8082 6.49591C10.8312 6.49016 10.8536 6.4839 10.8766 6.47763C10.8688 5.74373 11.0794 5.07565 11.5042 4.47808C11.6035 4.33862 11.7206 4.20437 11.8533 4.09572C12.4412 3.61412 13.0312 3.73217 13.3724 4.40809C13.7351 5.12788 13.7251 5.88058 13.5083 6.63851ZM14.9145 11.1709C14.1145 11.5898 13.4639 11.1547 13.4712 10.2542C13.4722 10.1158 13.4727 9.97422 13.502 9.83998C13.7063 8.9008 14.1683 8.11519 14.9469 7.54113C15.1444 7.39591 15.3838 7.28727 15.6205 7.22093C16.189 7.06266 16.6432 7.38338 16.7205 7.96684C16.7367 8.08698 16.7419 8.20816 16.7518 8.32935C16.5867 9.56783 16.0479 10.577 14.9145 11.1709Z" fill="#FAFAFB" />
									<path d="M14.2733 13.7357C14.1562 12.9632 13.6885 12.4147 13.052 12.0047C12.6711 11.7592 12.437 11.4291 12.3481 10.9887C12.3204 10.8529 12.2812 10.7192 12.2384 10.5876C11.8287 9.33862 10.8097 8.70606 9.55032 8.90821C8.56215 9.067 7.88542 9.58517 7.57607 10.5583C7.48723 10.8378 7.38376 11.1203 7.23588 11.3716C7.10367 11.5967 6.93854 11.8438 6.72324 11.9718C5.745 12.5547 5.38025 13.4443 5.3468 14.4608C5.35569 14.6378 5.3536 14.7517 5.36875 14.863C5.54329 16.1558 6.29944 16.9262 7.59174 16.8139C8.06832 16.7727 8.5517 16.6342 8.9964 16.453C9.63811 16.1913 10.2187 16.266 10.8243 16.5465C11.9222 17.0553 12.7453 16.9132 13.5412 16.0127C14.1013 15.3785 14.4055 14.6091 14.2733 13.7357ZM12.0994 16.2143C11.8172 16.2503 11.5089 16.1375 11.2215 16.0591C10.9895 15.9959 10.7742 15.8732 10.5458 15.7922C9.83094 15.5373 9.15996 15.7275 8.50675 16.02C8.15141 16.1793 7.78771 16.2691 7.39839 16.2394C6.36215 16.1605 5.97597 15.4177 5.94827 14.6164C5.91849 13.7504 6.20067 13.0039 6.96048 12.5171C7.48462 12.1812 7.82376 11.7315 7.98314 11.1334C8.03227 10.9506 8.11953 10.7777 8.18642 10.5996C8.60813 9.48436 10.296 8.97298 11.234 10.061C11.4248 10.2825 11.5335 10.5792 11.6568 10.8519C11.7231 10.9997 11.7378 11.17 11.7817 11.3288C11.916 11.8151 12.182 12.1933 12.6178 12.4732C13.1231 12.7981 13.5344 13.2191 13.6681 13.8386C13.6937 13.9562 13.6979 14.0784 13.712 14.198C13.6964 15.1414 12.9595 16.1051 12.0994 16.2143Z" fill="#FAFAFB" />
									<path d="M5.88819 7.38482C5.64572 7.1341 5.34472 6.9215 5.03589 6.75644C4.26406 6.34379 3.00102 6.53288 2.72406 7.80845C2.67494 8.03462 2.63627 8.27543 2.65821 8.50317C2.78676 9.80799 3.31194 10.8992 4.42187 11.6602C4.74586 11.8828 5.10016 12.0055 5.47014 11.9825C6.37104 11.9825 6.9699 11.4685 7.07964 10.579C7.23536 9.31438 6.74624 8.27073 5.88819 7.38482ZM6.41598 10.6819C6.24406 11.2633 5.84064 11.5229 5.26791 11.3223C4.92876 11.2032 4.59275 11 4.32833 10.7555C3.64952 10.1282 3.27014 9.21356 3.24505 8.37258C3.28059 8.19551 3.29627 8.01164 3.35532 7.84292C3.56121 7.25528 4.01114 7.04634 4.59014 7.27513C5.41736 7.6016 5.91536 8.24618 6.24928 9.0391C6.47242 9.56928 6.58529 10.1099 6.41598 10.6819Z" fill="#FAFAFB" />
									<path d="M9.13914 3.88133C8.48436 3.0534 7.0332 2.72798 6.30997 4.17332C6.07795 4.63716 6.0351 5.13391 6.00531 5.63641C5.94522 6.65499 6.25562 7.55708 6.91092 8.3265C7.66707 9.21345 8.94892 9.10062 9.56241 8.11443C9.88954 7.58843 9.96009 6.99608 10.0103 6.37501C9.93291 5.48284 9.72284 4.61888 9.13914 3.88133ZM8.90764 7.9478C8.57581 8.3662 8.18023 8.46388 7.74598 8.15465C7.46588 7.95511 7.20042 7.68401 7.03372 7.38628C6.57856 6.57559 6.46621 5.69126 6.73847 4.797C6.82678 4.50553 7.0217 4.21928 7.23804 3.9999C7.5312 3.70216 7.91686 3.7147 8.26018 3.96229C8.90816 4.43031 9.18251 5.11302 9.31942 5.86572C9.35496 6.06108 9.35914 6.26218 9.37743 6.46068C9.36697 7.00496 9.25306 7.51321 8.90764 7.9478Z" fill="#FAFAFB" />
									<path d="M10.8767 6.47765C10.8694 5.74323 11.0794 5.07567 11.5043 4.47811C11.6036 4.33812 11.7206 4.20387 11.8528 4.09575C12.4412 3.61414 13.0307 3.73167 13.3719 4.40811C13.7351 5.12791 13.7252 5.88061 13.5083 6.63853C13.3683 7.12745 13.1629 7.57928 12.7783 7.93657C12.1319 8.53727 11.4782 8.44168 11.1103 7.63622C10.9493 7.28363 10.9054 6.87777 10.8082 6.49646C10.8307 6.49019 10.8537 6.48444 10.8762 6.47817L10.8767 6.47765Z" fill="#4A4381" />
									<path d="M16.7518 8.3298C16.5867 9.56828 16.0479 10.5775 14.9144 11.1714C14.1149 11.5903 13.4643 11.1552 13.4711 10.2546C13.4722 10.1162 13.4727 9.97467 13.502 9.84095C13.7063 8.90177 14.1682 8.11616 14.9474 7.5421C15.1444 7.39688 15.3842 7.28771 15.621 7.2219C16.189 7.06363 16.6436 7.38435 16.721 7.96781C16.7372 8.08795 16.7419 8.20913 16.7523 8.33032L16.7518 8.3298Z" fill="#4A4381" />
									<path d="M13.7006 7.9241C13.6676 7.95345 13.6352 7.98281 13.6022 8.01268C13.5996 7.98126 13.5965 7.94985 13.5939 7.91895C13.6295 7.92101 13.665 7.92255 13.7006 7.92461V7.9241Z" fill="#FAFAFB" />
									<path d="M13.7021 7.92442C13.666 7.92233 13.63 7.92076 13.5939 7.91867C13.6169 7.89047 13.6399 7.86174 13.6629 7.83301C13.6817 7.84972 13.7011 7.86696 13.7199 7.88368C13.7157 7.89778 13.7094 7.91136 13.7016 7.9239L13.7021 7.92442Z" fill="#4A4381" />
									<path d="M13.4576 8.13869C13.4808 8.12224 13.5039 8.10578 13.5271 8.08984C13.5204 8.12378 13.5137 8.15823 13.5075 8.19217C13.4911 8.17468 13.4741 8.15669 13.4576 8.13869Z" fill="#4A4381" />
									<path d="M13.7121 14.1989C13.6959 15.1417 12.9596 16.1054 12.0994 16.2151C11.8172 16.2512 11.5084 16.1383 11.2215 16.06C10.9895 15.9968 10.7742 15.874 10.5458 15.7931C9.83098 15.5387 9.16 15.7283 8.5068 16.0208C8.15093 16.1801 7.78722 16.27 7.39791 16.2402C6.36167 16.1613 5.97549 15.4186 5.94779 14.6173C5.91801 13.7512 6.20019 13.0053 6.96 12.5185C7.48414 12.1826 7.82276 11.7323 7.98266 11.1343C8.03126 10.9514 8.11905 10.7791 8.18594 10.6009C8.60765 9.48521 10.2955 8.97435 11.233 10.0624C11.4238 10.2839 11.5325 10.5806 11.6558 10.8532C11.7227 11.0005 11.7368 11.1713 11.7807 11.3296C11.915 11.8159 12.1815 12.1941 12.6168 12.4746C13.1221 12.7995 13.5334 13.22 13.6671 13.84C13.6927 13.9575 13.6969 14.0798 13.711 14.1994L13.7121 14.1989Z" fill="#4A4381" />
									<path d="M3.24506 8.37257C3.28059 8.19549 3.29627 8.01162 3.35532 7.84291C3.56121 7.25526 4.01114 7.04685 4.59014 7.27511C5.41736 7.60158 5.91537 8.24616 6.24929 9.0396C6.47242 9.56926 6.5853 10.1104 6.41598 10.6819C6.24406 11.2632 5.84064 11.5228 5.26791 11.3223C4.92824 11.2032 4.59223 11 4.32833 10.756C3.64952 10.1282 3.27014 9.21355 3.24506 8.37309V8.37257Z" fill="#4A4381" />
									<path d="M9.37744 6.46049C9.36751 7.00425 9.25307 7.5125 8.90765 7.94761C8.57582 8.36601 8.17972 8.46369 7.74599 8.15446C7.46589 7.95492 7.20043 7.68382 7.03321 7.38609C6.57805 6.57488 6.46622 5.69107 6.73796 4.79681C6.82679 4.50534 7.02171 4.21909 7.23805 3.99971C7.53121 3.70197 7.91634 3.71451 8.25967 3.96262C8.90765 4.43065 9.182 5.11283 9.31943 5.86606C9.35497 6.06141 9.35862 6.262 9.37744 6.46049Z" fill="#4A4381" />
								</g>
								<defs>
									<clipPath id="clip0_268_1116">
										<rect width="20.0163" height="20.0163" fill="white" transform="translate(0 -0.000976562)" />
									</clipPath>
								</defs>
							</svg>
						</div>
						<p class="hidden lg:flex lg:text-base lg:pl-1 2xl:text-[26px] text-black 2xl:leading-[26px] ">PawTex</p>

					</div>
					<p class="lg:text-sm lg:pr-8 2xl:text-[22px] 2xl:leading-[26px] text-black 2xl:pt-2 2xl:pb-2">Accessories for man’s best friend</p>
				</div>
			</a>
			<div id="dynamic" class="opacity-0 lg:font-extralight text-2xl text-black pl-4 pb-4 leading-7 md:text-4xl lg:text-[70px] lg:leading-[80px] font-light lg:pl-16 2xl:text-[105px] 2xl:leading-[119.7px] 2xl:pl-[5rem]  ">our dynamic <br> brands</div>

			<a id="learnMoreLink" href="/brands" class="hidden lg:flex lg:justify-end lg:mt-[9.5rem] lg:ml-[12rem] 2xl:mt-[14rem] 2xl:ml-[0rem] 2xl:w-1/5">
				<button class="  text-sm lg:pt-2 lg:pr-2 2xl:text-[22px]">learn more</button>
				<div id="learnContainer" class="w-7 h-7 lg:w-8 lg:h-8 2xl:w-12 2xl:h-12">
					<svg viewBox="0 0 38 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.8036 37.2798L11.7535 37.407L15.1407 28.1777L15.1951 28.0294L15.0844 27.9166L9.35402 22.0793L13.4881 22.0308L13.7389 22.0279L13.7351 21.7771L13.7299 21.4426L13.726 21.1886L13.718 21.1889L13.6708 17.0213L27.7684 16.856L35.0977 27.8009L26.3079 34.5775L26.3079 34.5775L22.8036 37.2798Z" fill="black" stroke="black" stroke-width="0.499775" />
						<path d="M2.32049 8.76278L22.1949 8.5312L22.2195 8.56906L22.2194 8.56908L22.2215 8.57216L27.2169 16.0293L13.0952 16.1917L12.8403 16.1946L12.8424 16.2626L12.8294 16.263L12.8322 16.5079L12.8864 21.2047L8.54455 21.2569L2.39161 14.9861L2.32049 8.76278Z" fill="black" stroke="black" stroke-width="0.499775" />
					</svg>
				</div>
			</a>
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					const svgContainer = document.getElementById("learnContainer");
					const learnMoreLink = document.getElementById("learnMoreLink");

					gsap.set(svgContainer, { x: 0 });

					const bounceTimeline = gsap.timeline({ paused: true });
					bounceTimeline.to(svgContainer, { x: 10, duration: 0.3, ease: "power1.inOut" })
								.to(svgContainer, { x: 0, duration: 0.3, ease: "power1.inOut", yoyo: true, repeat: 1 });

					learnMoreLink.addEventListener("mouseenter", function () {
						bounceTimeline.play();
						gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "underline", duration: 0.3 });
					});

					learnMoreLink.addEventListener("mouseleave", function () {
						bounceTimeline.reverse();
						gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "none", duration: 0.3 });
					});
							});
			</script>
		</div>
		<div class="flex justify-end lg:justify-center 2xl:mx-8 lg:ml-4">
			<a href="/brands" onclick="setScrollTarget('brandsButton2')" class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] lg:rounded-[2rem] md:h-40 lg:pt-24 lg:w-1/5 lg:pl-2 lg:h-48 2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img3')" onmouseout="fadeOutEffect('img3')">
				<div id="img3" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
					<img class="h-full w-full object-cover brightness-95  " src="<?php echo
						get_post_meta( get_the_ID(), "casecraftbg", TRUE ) ?>" alt="/" />
				</div>
				<div class=" text-[9px] pr-6 p-2 pb-7 md:text-base">
					<div class=" w-5 h-5 pb-[1.6rem] lg:hidden">
						<svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_268_1116)">
								<path d="M10.0249 -0.00176436C4.54893 -0.0357169 -0.00313377 4.51497 1.61874e-06 10.0221C0.00261445 15.5167 4.5134 20.0141 10.0223 20.0146C15.5364 20.0151 20.0163 15.5313 20.0163 10.0116C20.0163 4.49199 15.5693 0.0327106 10.0249 -0.00176436ZM6.00532 5.63645C6.03511 5.13396 6.07796 4.6372 6.30998 4.17336C7.03321 2.72802 8.48438 3.05345 9.13915 3.88137C9.72285 4.61892 9.93293 5.48288 10.0103 6.37505C9.9601 6.99612 9.88955 7.58847 9.56243 8.11447C8.94894 9.10066 7.66708 9.21349 6.91093 8.32654C6.25563 7.55712 5.94523 6.65503 6.00532 5.63645ZM2.65829 8.5031C2.63634 8.27535 2.67501 8.03455 2.72414 7.80837C3.0011 6.5328 4.26414 6.34371 5.03596 6.75637C5.3448 6.92143 5.6458 7.13402 5.88827 7.38475C6.74632 8.27065 7.23544 9.3143 7.07972 10.5789C6.96998 11.4685 6.37112 11.9825 5.47022 11.9825C5.10024 12.0054 4.74594 11.8827 4.42195 11.6602C3.31202 10.8991 2.78684 9.80792 2.65829 8.5031ZM13.5412 16.0124C12.7454 16.9129 11.9223 17.055 10.8244 16.5462C10.2188 16.2657 9.6382 16.191 8.99649 16.4527C8.55179 16.634 8.06841 16.7724 7.59183 16.8136C6.29953 16.9259 5.54338 16.1555 5.36884 14.8627C5.35368 14.7514 5.35577 14.6375 5.34689 14.4605C5.38034 13.444 5.74509 12.5544 6.72333 11.9715C6.93863 11.8435 7.10376 11.5964 7.23597 11.3713C7.38385 11.1201 7.48732 10.8375 7.57616 10.558C7.88551 9.58488 8.56224 9.06671 9.55041 8.90792C10.8098 8.70577 11.8288 9.33833 12.2385 10.5873C12.2813 10.7189 12.3205 10.8526 12.3482 10.9884C12.4371 11.4288 12.6712 11.7589 13.0521 12.0044C13.6886 12.4144 14.1563 12.9629 14.2734 13.7354C14.4056 14.6088 14.1014 15.3782 13.5412 16.0124ZM15.7689 11.329C15.4162 11.5912 14.982 11.7662 14.5602 11.9067C13.9436 12.112 12.9215 11.6283 12.8687 10.534C12.8321 9.77083 13.0176 9.07768 13.3871 8.42161C13.3975 8.4028 13.408 8.384 13.4184 8.36467C13.4487 8.30826 13.478 8.2508 13.5083 8.19334H13.5078C13.4906 8.17454 13.4744 8.1573 13.4576 8.13902C13.3719 8.22521 13.2899 8.31453 13.2005 8.39706C12.088 9.42452 10.8892 8.84053 10.4759 7.80942C10.1216 6.92717 10.1477 6.01254 10.4957 5.11985C10.5804 4.90203 10.6614 4.67742 10.7868 4.48311C10.9681 4.20104 11.1547 3.90905 11.3966 3.6834C12.5144 2.64131 13.7236 3.40969 14.0628 4.33633C14.3105 5.01382 14.3115 5.70593 14.2054 6.41266C14.1276 6.93135 13.9196 7.38841 13.663 7.83345C13.6823 7.85016 13.7011 7.86688 13.7205 7.88411C14.0502 7.58011 14.3606 7.25051 14.7154 6.97941C15.1607 6.63936 15.6916 6.54011 16.2434 6.61899C16.8188 6.70152 17.1234 7.09641 17.2948 7.61249C17.4323 8.02776 17.4051 8.45138 17.3048 8.86926C17.067 9.85963 16.5904 10.7184 15.7689 11.329Z" fill="#4A4381" />
								<path d="M17.2948 7.61269C17.1234 7.09661 16.8187 6.70171 16.2434 6.61918C15.6916 6.54031 15.1606 6.63955 14.7154 6.9796C14.3606 7.2507 14.0502 7.5803 13.7204 7.88431C13.7163 7.89841 13.71 7.91199 13.7022 7.92453C13.6692 7.9543 13.6358 7.98408 13.6023 8.01385C13.5997 7.98251 13.5966 7.95065 13.594 7.91878C13.617 7.89058 13.64 7.86185 13.663 7.83364C13.9195 7.3886 14.1275 6.93155 14.2054 6.41286C14.3115 5.70612 14.3104 5.01401 14.0627 4.33653C13.7236 3.40988 12.5144 2.64151 11.3966 3.68359C11.1546 3.90925 10.9681 4.20124 10.7868 4.48331C10.6613 4.67762 10.5803 4.90223 10.4957 5.12005C10.1477 6.01274 10.1215 6.92737 10.4758 7.80961C10.8892 8.84073 12.0879 9.42471 13.2005 8.39725C13.2898 8.31472 13.3719 8.2254 13.4576 8.13921C13.4811 8.1225 13.5046 8.10631 13.5281 8.08959C13.5213 8.12407 13.5146 8.15802 13.5078 8.19302C13.478 8.251 13.4487 8.30845 13.4184 8.36487C13.4079 8.3842 13.3975 8.403 13.387 8.4218C13.0176 9.07787 12.8321 9.77103 12.8687 10.5342C12.9214 11.6285 13.9436 12.1122 14.5602 11.9069C14.9819 11.7664 15.4162 11.5914 15.7689 11.3292C16.5904 10.7186 17.067 9.85983 17.3047 8.86946C17.4051 8.45158 17.4322 8.02795 17.2948 7.61269ZM13.5083 6.63851C13.3688 7.12691 13.1629 7.57874 12.7783 7.93602C12.1318 8.53672 11.4781 8.44113 11.1102 7.63567C10.9493 7.28361 10.9054 6.87775 10.8082 6.49591C10.8312 6.49016 10.8536 6.4839 10.8766 6.47763C10.8688 5.74373 11.0794 5.07565 11.5042 4.47808C11.6035 4.33862 11.7206 4.20437 11.8533 4.09572C12.4412 3.61412 13.0312 3.73217 13.3724 4.40809C13.7351 5.12788 13.7251 5.88058 13.5083 6.63851ZM14.9145 11.1709C14.1145 11.5898 13.4639 11.1547 13.4712 10.2542C13.4722 10.1158 13.4727 9.97422 13.502 9.83998C13.7063 8.9008 14.1683 8.11519 14.9469 7.54113C15.1444 7.39591 15.3838 7.28727 15.6205 7.22093C16.189 7.06266 16.6432 7.38338 16.7205 7.96684C16.7367 8.08698 16.7419 8.20816 16.7518 8.32935C16.5867 9.56783 16.0479 10.577 14.9145 11.1709Z" fill="#FAFAFB" />
								<path d="M14.2733 13.7357C14.1562 12.9632 13.6885 12.4147 13.052 12.0047C12.6711 11.7592 12.437 11.4291 12.3481 10.9887C12.3204 10.8529 12.2812 10.7192 12.2384 10.5876C11.8287 9.33862 10.8097 8.70606 9.55032 8.90821C8.56215 9.067 7.88542 9.58517 7.57607 10.5583C7.48723 10.8378 7.38376 11.1203 7.23588 11.3716C7.10367 11.5967 6.93854 11.8438 6.72324 11.9718C5.745 12.5547 5.38025 13.4443 5.3468 14.4608C5.35569 14.6378 5.3536 14.7517 5.36875 14.863C5.54329 16.1558 6.29944 16.9262 7.59174 16.8139C8.06832 16.7727 8.5517 16.6342 8.9964 16.453C9.63811 16.1913 10.2187 16.266 10.8243 16.5465C11.9222 17.0553 12.7453 16.9132 13.5412 16.0127C14.1013 15.3785 14.4055 14.6091 14.2733 13.7357ZM12.0994 16.2143C11.8172 16.2503 11.5089 16.1375 11.2215 16.0591C10.9895 15.9959 10.7742 15.8732 10.5458 15.7922C9.83094 15.5373 9.15996 15.7275 8.50675 16.02C8.15141 16.1793 7.78771 16.2691 7.39839 16.2394C6.36215 16.1605 5.97597 15.4177 5.94827 14.6164C5.91849 13.7504 6.20067 13.0039 6.96048 12.5171C7.48462 12.1812 7.82376 11.7315 7.98314 11.1334C8.03227 10.9506 8.11953 10.7777 8.18642 10.5996C8.60813 9.48436 10.296 8.97298 11.234 10.061C11.4248 10.2825 11.5335 10.5792 11.6568 10.8519C11.7231 10.9997 11.7378 11.17 11.7817 11.3288C11.916 11.8151 12.182 12.1933 12.6178 12.4732C13.1231 12.7981 13.5344 13.2191 13.6681 13.8386C13.6937 13.9562 13.6979 14.0784 13.712 14.198C13.6964 15.1414 12.9595 16.1051 12.0994 16.2143Z" fill="#FAFAFB" />
								<path d="M5.88819 7.38482C5.64572 7.1341 5.34472 6.9215 5.03589 6.75644C4.26406 6.34379 3.00102 6.53288 2.72406 7.80845C2.67494 8.03462 2.63627 8.27543 2.65821 8.50317C2.78676 9.80799 3.31194 10.8992 4.42187 11.6602C4.74586 11.8828 5.10016 12.0055 5.47014 11.9825C6.37104 11.9825 6.9699 11.4685 7.07964 10.579C7.23536 9.31438 6.74624 8.27073 5.88819 7.38482ZM6.41598 10.6819C6.24406 11.2633 5.84064 11.5229 5.26791 11.3223C4.92876 11.2032 4.59275 11 4.32833 10.7555C3.64952 10.1282 3.27014 9.21356 3.24505 8.37258C3.28059 8.19551 3.29627 8.01164 3.35532 7.84292C3.56121 7.25528 4.01114 7.04634 4.59014 7.27513C5.41736 7.6016 5.91536 8.24618 6.24928 9.0391C6.47242 9.56928 6.58529 10.1099 6.41598 10.6819Z" fill="#FAFAFB" />
								<path d="M9.13914 3.88133C8.48436 3.0534 7.0332 2.72798 6.30997 4.17332C6.07795 4.63716 6.0351 5.13391 6.00531 5.63641C5.94522 6.65499 6.25562 7.55708 6.91092 8.3265C7.66707 9.21345 8.94892 9.10062 9.56241 8.11443C9.88954 7.58843 9.96009 6.99608 10.0103 6.37501C9.93291 5.48284 9.72284 4.61888 9.13914 3.88133ZM8.90764 7.9478C8.57581 8.3662 8.18023 8.46388 7.74598 8.15465C7.46588 7.95511 7.20042 7.68401 7.03372 7.38628C6.57856 6.57559 6.46621 5.69126 6.73847 4.797C6.82678 4.50553 7.0217 4.21928 7.23804 3.9999C7.5312 3.70216 7.91686 3.7147 8.26018 3.96229C8.90816 4.43031 9.18251 5.11302 9.31942 5.86572C9.35496 6.06108 9.35914 6.26218 9.37743 6.46068C9.36697 7.00496 9.25306 7.51321 8.90764 7.9478Z" fill="#FAFAFB" />
								<path d="M10.8767 6.47765C10.8694 5.74323 11.0794 5.07567 11.5043 4.47811C11.6036 4.33812 11.7206 4.20387 11.8528 4.09575C12.4412 3.61414 13.0307 3.73167 13.3719 4.40811C13.7351 5.12791 13.7252 5.88061 13.5083 6.63853C13.3683 7.12745 13.1629 7.57928 12.7783 7.93657C12.1319 8.53727 11.4782 8.44168 11.1103 7.63622C10.9493 7.28363 10.9054 6.87777 10.8082 6.49646C10.8307 6.49019 10.8537 6.48444 10.8762 6.47817L10.8767 6.47765Z" fill="#4A4381" />
								<path d="M16.7518 8.3298C16.5867 9.56828 16.0479 10.5775 14.9144 11.1714C14.1149 11.5903 13.4643 11.1552 13.4711 10.2546C13.4722 10.1162 13.4727 9.97467 13.502 9.84095C13.7063 8.90177 14.1682 8.11616 14.9474 7.5421C15.1444 7.39688 15.3842 7.28771 15.621 7.2219C16.189 7.06363 16.6436 7.38435 16.721 7.96781C16.7372 8.08795 16.7419 8.20913 16.7523 8.33032L16.7518 8.3298Z" fill="#4A4381" />
								<path d="M13.7006 7.9241C13.6676 7.95345 13.6352 7.98281 13.6022 8.01268C13.5996 7.98126 13.5965 7.94985 13.5939 7.91895C13.6295 7.92101 13.665 7.92255 13.7006 7.92461V7.9241Z" fill="#FAFAFB" />
								<path d="M13.7021 7.92442C13.666 7.92233 13.63 7.92076 13.5939 7.91867C13.6169 7.89047 13.6399 7.86174 13.6629 7.83301C13.6817 7.84972 13.7011 7.86696 13.7199 7.88368C13.7157 7.89778 13.7094 7.91136 13.7016 7.9239L13.7021 7.92442Z" fill="#4A4381" />
								<path d="M13.4576 8.13869C13.4808 8.12224 13.5039 8.10578 13.5271 8.08984C13.5204 8.12378 13.5137 8.15823 13.5075 8.19217C13.4911 8.17468 13.4741 8.15669 13.4576 8.13869Z" fill="#4A4381" />
								<path d="M13.7121 14.1989C13.6959 15.1417 12.9596 16.1054 12.0994 16.2151C11.8172 16.2512 11.5084 16.1383 11.2215 16.06C10.9895 15.9968 10.7742 15.874 10.5458 15.7931C9.83098 15.5387 9.16 15.7283 8.5068 16.0208C8.15093 16.1801 7.78722 16.27 7.39791 16.2402C6.36167 16.1613 5.97549 15.4186 5.94779 14.6173C5.91801 13.7512 6.20019 13.0053 6.96 12.5185C7.48414 12.1826 7.82276 11.7323 7.98266 11.1343C8.03126 10.9514 8.11905 10.7791 8.18594 10.6009C8.60765 9.48521 10.2955 8.97435 11.233 10.0624C11.4238 10.2839 11.5325 10.5806 11.6558 10.8532C11.7227 11.0005 11.7368 11.1713 11.7807 11.3296C11.915 11.8159 12.1815 12.1941 12.6168 12.4746C13.1221 12.7995 13.5334 13.22 13.6671 13.84C13.6927 13.9575 13.6969 14.0798 13.711 14.1994L13.7121 14.1989Z" fill="#4A4381" />
								<path d="M3.24506 8.37257C3.28059 8.19549 3.29627 8.01162 3.35532 7.84291C3.56121 7.25526 4.01114 7.04685 4.59014 7.27511C5.41736 7.60158 5.91537 8.24616 6.24929 9.0396C6.47242 9.56926 6.5853 10.1104 6.41598 10.6819C6.24406 11.2632 5.84064 11.5228 5.26791 11.3223C4.92824 11.2032 4.59223 11 4.32833 10.756C3.64952 10.1282 3.27014 9.21355 3.24506 8.37309V8.37257Z" fill="#4A4381" />
								<path d="M9.37744 6.46049C9.36751 7.00425 9.25307 7.5125 8.90765 7.94761C8.57582 8.36601 8.17972 8.46369 7.74599 8.15446C7.46589 7.95492 7.20043 7.68382 7.03321 7.38609C6.57805 6.57488 6.46622 5.69107 6.73796 4.79681C6.82679 4.50534 7.02171 4.21909 7.23805 3.99971C7.53121 3.70197 7.91634 3.71451 8.25967 3.96262C8.90765 4.43065 9.182 5.11283 9.31943 5.86606C9.35497 6.06141 9.35862 6.262 9.37744 6.46049Z" fill="#4A4381" />
							</g>
							<defs>
								<clipPath id="clip0_268_1116">
									<rect width="20.0163" height="20.0163" fill="white" transform="translate(0 -0.000976562)" />
								</clipPath>
							</defs>
						</svg>
					</div>
					<div class="hidden lg:flex w-20 h-auto pb-[.6rem] 2xl:w-36 2xl:pt-6">
						<svg viewBox="0 0 57 11" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<rect y="-0.000976562" width="56.1328" height="10.4433" fill="url(#pattern0)" />
							<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_268_1131" transform="matrix(0.00110988 0 0 0.00596559 0 -0.00409262)" />
								</pattern>
								<image id="image0_268_1131" width="901" height="169" xlink:href="data:image/png;base64,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" />
							</defs>
						</svg>
					</div>
					<p class="lg:hidden">Accessories for man’s best friend</p>
					<p class="hidden text-sm lg:flex lg:pt-4 2xl:text-[22px] 2xl:leading-[26px] 2xl:pt-10">Phone cases built to last</p>
				</div>
			</a>
			<div class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] lg:rounded-[2rem] md:h-40 lg:w-1/5 lg:h-48 lg:pl-2  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img4')" onmouseout="fadeOutEffect('img4')">
			<div id="img4" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo
					get_post_meta( get_the_ID(), "bostonlinen", TRUE ) ?>" alt="/" />
			</div>
				<div class=" text-[9px] pr-6 p-2 pb-7 md:text-base">
					<div class="w-14 h-auto pb-[.6rem] lg:hidden">
						<svg viewBox="0 0 57 11" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<rect y="-0.000976562" width="56.1328" height="10.4433" fill="url(#pattern0)" />
							<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_268_1131" transform="matrix(0.00110988 0 0 0.00596559 0 -0.00409262)" />
								</pattern>
								<image id="image0_268_1131" width="901" height="169" xlink:href="data:image/png;base64,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" />
							</defs>
						</svg>
					</div>
					<p class="lg:hidden">Phone cases built to last</p>
					<p class="hidden lg:flex lg:pl-2 lg:pt-10 2xl:text-[25px] 2xl:leading-[26px]">Wild Kratts</p>
				</div>
			</div>
			<a href="/brands" onclick="setScrollTarget('brandsButton5')" class="hidden border-[1px] border-black rounded-2xl lg:flex items-center md:rounded-[2.5rem] lg:pl-2 lg:rounded-[2rem] md:h-40 lg:w-1/5 lg:h-48  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img5')" onmouseout="fadeOutEffect('img5')">
				<div id="img5" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
					<img class="h-full w-full object-cover brightness-95  " src="<?php echo
						get_post_meta( get_the_ID(), "mossybg", TRUE ) ?>" alt="/" />
				</div>
				<div class=" text-[9px] lg:pt-16 pr-6 p-2 md:text-base">
					<div class="w-5 h-5 lg:w-20 lg:h-10 2xl:w-28 2xl:h-16 2xl:pt-2">
						<img class="h-full w-full" src="<?php echo get_post_meta( get_the_ID(), "mossy", TRUE ) ?>" alt=""/>
					</div>
					<p class="lg:hidden">Fishermen’s equipment</p>
					<p class="hidden lg:flex text-sm 2xl:text-[22px] 2xl:leading-[26px] 2xl:pr-10 2xl:pt-6 ">Building brands that push the boundaries y </p>
				</div>
			</a>
		</div>
		<div class="flex lg:hidden">
			<div class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] md:h-40 ">
				<div class=" text-[9px] pr-6 p-2 md:text-base">
					<div class="w-5 h-5">
						<svg viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<rect y="-0.000976562" width="48" height="32" fill="url(#pattern0)" />
							<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_268_1133" transform="scale(0.00104167 0.0015625)" />
								</pattern>
								<image id="image0_268_1133" width="960" height="640" xlink:href="data:image/png;base64,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" />
							</defs>
						</svg>
					</div>
					<p>Fishermen’s equipment</p>
				</div>
			</div>
		</div>
		<!-- ---------- -->
		<div class="lg:flex">
			<div class="flex lg:w-full 2xl:ml-8 lg:ml-4">
				<div class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] lg:rounded-[2rem] md:h-40 lg:w-[40%]  lg:h-48  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img6')" onmouseout="fadeOutEffect('img6')">
				<div id="img6" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo
					get_post_meta( get_the_ID(), "bostonlinen", TRUE ) ?>" alt="/" />
			</div>
					<div class=" text-[9px] pr-4 p-2 lg:p-0 lg:pl-4 md:text-base ">
						<div class="w-5 h-5 lg:hidden">
							<svg viewBox="0 0 65 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect y="-0.000976562" width="65" height="35" fill="url(#pattern0)" />
								<defs>
									<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
										<use xlink:href="#image0_268_1135" transform="scale(0.000833532 0.00154799)" />
									</pattern>
									<image id="image0_268_1135" width="1200" height="646" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLAAAAKGCAYAAABa0mJFAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAACAAElEQVR42uzddXgU1/oH8O+ZzcbdjTiBJDgB4hAcSgu0BYoESoFSl1u7t+7uLlCKlQItVKgiARISJLi7BA1xTza75/dH2/trL4ECmd2sfD/P06ftyjkz7zu7O/PmnDMAERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERqUYwBERERETqycmZ72XX1OhhgMZVY6dxgNA7SSkdJTSOgMFJkYoDhHQ2SNgLARcYpBYQrlCknTQINyGgCAiPy+lLQroBwu5/Hm0UEDV//p9ByrL/nvgJ1ECiEQCgCB0gqwFAGKCHgkoDUKVIQ60UqDHoNRVau6ZaqVdqGxVNube3tiYhYXQjM0xEREStgQUsIiIior8oWL7IQ+9YF2CQGj8BvS+EcDdI4SEAd0B4SCk9hZAe+L3I5C4hPAQM7n/+v5WHRw+gEkAVhKyVBlGtCFEihaEEEiUQokRKlECKUghDiSI0xXoFxY2N2pLMzNHVPLqIiIjoarGARURERFYtO3uRq719bQB0wl/RCF8JxU9IGSgg/SSEr4Dwk5CBkPCFgB8Ae0bNKBokUCoEfi92ASch5FkplZMKDGeFQZzSS5yBg8OplJTRdQwXERER/RULWERERGSxcnLmeylN+hCNgjAplBABQ6iEEgYhQyARCiAMgAsjZXHKJMRpIeRpYcAZKXASEGch5XEJcdSl3nCk86CJNQwTERGR7WABi4iIiMzS7t2L7KuKdeEGoY9ShAiHlCESIhwQIYAMARAOwJmRsllFkDgCRR6BAUelohxR9OKoXosjp05pT44ePVrPEBEREVkPFrCIiIio1WRnz/J01NhFSSGjBUQUpIwGRBQgogHZBoCGUaKroANwHAJHIXEIEHsh9HulBntTUiadYniIiIgsDwtYREREZFQF2V/6NigyXigyRkgZDSAKwJ//9mGEyMQqAOwTUu42CLFPA+xRhLI3Me3gMSGeNjA8RERE5okFLCIiIlLF+ux5odJO3x4Q8QIiXkq0B5AAwJfRIQtQB2AfgP0ScodQlG2iXtmS1H/cOYaGiIio9bGARURERFckN3dBsEY2xguDkmAA4oUQUYDsDMCP0SErVAZgD6TYLBW52U7oN/dInbRHCCEZGiIiItNhAYuIiIialZs7080O2s4Gg+giBLpAoguAeABOjA7ZuDIJbBVCboVBbAXklqSMI/s5BZGIiMh4WMAiIiIi5OTM99IKfQL0ortBiO4CsjuA9gAURofoslQB2AGJXChyndQ4rktJGV3KsBAREamDBSwiIiIb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" />
								</defs>
							</svg>
						</div class="2xl:pl-5">
						<p class="lg:hidden">Building brands that push the boundaries </p>
						<p class="hidden lg:flex lg:pt-16 2xl:text-[25px] 2xl:leading-[26px] 2xl:pt-20">Wild Kratts </p>
						<p class="hidden text-sm lg:flex lg:pt-8 2xl:text-[22px] 2xl:leading-[26px] 2xl:pt-14">Phone cases built to last </p>
					</div>
				</div>
				<a class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] md:h-40 lg:w-[40%] lg:h-48  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img7')" onmouseout="fadeOutEffect('img7')">
				<div id="img7" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo
					get_post_meta( get_the_ID(), "karin", TRUE ) ?>" alt="/" />
			</div>
					<div class=" text-[9px] pr-4 p-2 md:text-base 2xl:pl-5 ">
						<div class="w-5 h-5">
						</div>
						<p class="lg:hidden">Building brands that push the boundaries </p>
						<p class="hidden lg:flex lg:pt-10 2xl:text-[25px] 2xl:leading-[26px] 2xl:pt-20">Karin Maki</p>
						<p class="hidden text-sm lg:flex lg:pt-4 2xl:text-[22px] 2xl:leading-[26px] 2xl:pt-8 2xl:pb-7">Building brands that push the boundaries </p>
					</div>
				</a>
			</div>
			<div class="flex justify-end lg:w-full 2xl:mr-8">
				<div class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] md:h-40 lg:w-[40%] lg:h-48  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img8')" onmouseout="fadeOutEffect('img8')">
				<div id="img8" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
				<img class="h-full w-full object-cover brightness-95  " src="<?php echo
					get_post_meta( get_the_ID(), "bostonlinen", TRUE ) ?>" alt="/" />
			</div>
					<div class=" text-[9px] pr-4 p-2 md:text-base">
						<p class="lg:hidden">Authentic, premium-quality Bed & Bath essentials </p>
						<p class="hidden lg:flex lg:pt-6 2xl:text-[25px] 2xl:leading-[26px] 2xl:pl-3">Blue Ridge Trading </p>
					</div>
				</div>
				<a href="/brands" onclick="setScrollTarget('brandsButton4')" class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-center md:rounded-[2.5rem] md:h-40 lg:w-[40%] lg:h-48  2xl:h-[18rem] 2xl:rounded-[3rem] 2xl:border-[1px] lg:relative" onmouseover="fadeInEffect('img9')" onmouseout="fadeOutEffect('img9')">
					<div id="img9" class="absolute -z-20 opacity-0 w-full h-full object-contain object-center overflow-hidden top-0 left-0 2xl:rounded-[3rem] lg:rounded-[1.8rem]">
					<img class="h-full w-full object-cover brightness-95  " src="<?php echo
						get_post_meta( get_the_ID(), "bostonlinen", TRUE ) ?>" alt="/" />
					</div>
						<div class=" text-[9px] pr-4 p-2 lg:pt-16 md:text-base 2xl:pl-5">
							<div class="w-5 h-5 lg:w-14 lg:h-8 2xl:w-20 2xl:h-12">
								<img class="w-full h-full" src="<?php echo get_post_meta( get_the_ID(), "realtree", TRUE ) ?>" alt=""/>
							</div>
							<p class="lg:hidden">Building brands that push the boundaries</p>
							<p class="hidden lg:flex lg:text-sm lg:pr-4 2xl:text-[22px] 2xl:leading-[26px]">Family, Friends and the Outdoors </p>
						</div>
				</a>
			</div>
		</div>
		<div class="flex justify-between items-end lg:hidden">
			<div class="w-4/12 h-24 border-[.5px] border-black rounded-3xl flex items-end md:rounded-[2.5rem] md:h-40 lg:w-[40%] lg:h-48  2xl:h-[18rem]">
				<div class=" text-[9px] pr-4 p-2 pb-4 md:text-base">
					<p>Building brands that push the boundaries </p>
				</div>
			</div>
			<div class="flex lg:hidden">
				<button class="underline  md:text-xl">learn more</button>
				<div class="w-9 h-9 md:w-10 md:h-10">
					<svg viewBox="0 0 38 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.8036 37.2798L11.7535 37.407L15.1407 28.1777L15.1951 28.0294L15.0844 27.9166L9.35402 22.0793L13.4881 22.0308L13.7389 22.0279L13.7351 21.7771L13.7299 21.4426L13.726 21.1886L13.718 21.1889L13.6708 17.0213L27.7684 16.856L35.0977 27.8009L26.3079 34.5775L26.3079 34.5775L22.8036 37.2798Z" fill="black" stroke="black" stroke-width="0.499775" />
						<path d="M2.32049 8.76278L22.1949 8.5312L22.2195 8.56906L22.2194 8.56908L22.2215 8.57216L27.2169 16.0293L13.0952 16.1917L12.8403 16.1946L12.8424 16.2626L12.8294 16.263L12.8322 16.5079L12.8864 21.2047L8.54455 21.2569L2.39161 14.9861L2.32049 8.76278Z" fill="black" stroke="black" stroke-width="0.499775" />
					</svg>
				</div>
			</div>
		</div>
	</div>
	<script>
			function fadeInEffect(elementId) {
				gsap.to(`#${elementId}`, { duration: 0.5, opacity: 0.5 });
			}

			function fadeOutEffect(elementId) {
				gsap.to(`#${elementId}`, { duration: 0.5, opacity: 0 });
			}

			function setScrollTarget(targetId) {
			localStorage.setItem('scrollTarget', targetId);
			}
	</script>

	</div>
</section>

<section>
	<div class="mx-4 pt-6 lg:pt-0 md:mx-8 lg:mx-0 lg:mt-28 lg:my-40 2xl:mx-12 2xl:mt-40">
		<h1 id="brands" class="opacity-0 lg:font-extralight text-2xl pr-8 text-black font-light md:text-5xl lg:leading-[52px] lg:mx-8 md:mx-8 lg:text-[38px] lg:w-1/2 lg:pr-[10rem] lg:mb-12 2xl:w-[50%] 2xl:text-[58px] 2xl:leading-[64px]">
			Building brands that push the boundaries of what a brand is for people.
		</h1>
		<div class="lg:flex lg:justify-between 2xl:mt-20">
			<div id="parentPin" class=" relative flex justify-end lg:block mt-8 lg:mt-6 lg:w-1/2">
				<div class="flex justify-end pr-2 h-[15rem] w-[80%] lg:justify-start lg:h-[450px] lg:ml-11 2xl:mr-8">
					<img class="object-cover rounded-[2.5rem] w-full h-full lg:w-full lg:object-cover 2xl:w-[909.44px] 2xl:h-[640px]" src="<?php echo
						get_post_meta( get_the_ID(), "dog", TRUE ) ?>" alt="">
				</div>

				<div id="pinContainer" class="z-50 w-[14rem] md:w-[19rem] lg:mt-1 lg:w-4/5 h-auto absolute -top-8 -left-4 md:-top-16 lg:left-[-10vw] lg:pt-[14rem] 3xl:pt-[20rem] 2xl:py-[17rem] 2xl:pr-4" style="transform: rotate(-30deg);">
					<svg  class="" viewBox="0 0 295 271" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M172.179 98.0161L174.586 203.139L93.5158 258.748L42.5575 194.155L22.2808 168.459L20.3885 85.0154L90.1421 109.735L135.055 64.6491L135.839 98.9088L138.268 98.8442L138.265 98.779L172.179 98.0161Z" fill="#B5F158" />
						<path d="M234.6 162.014L234.561 162.029L233.468 162.755L176.974 201.521L174.575 95.6658L174.118 95.6853L174.113 95.5549L138.208 96.3701L137.417 62.2675L183.503 16.0271L231.218 14.9491L234.573 162.002L234.6 162.014Z" fill="#B5F158" />
					</svg>
				</div>
				<script>
					document.addEventListener("DOMContentLoaded", function() {
						gsap.registerPlugin(ScrollTrigger);

						ScrollTrigger.create({
							trigger: "#pinContainer",
							start: "30% top",
							end: "55% top",
							// pin: true,
							// markers: true,
							onUpdate: (self) => {
								gsap.to("#pinContainer", {
									rotation: -30 + (self.progress * 30) // interpolate between -20 and 0
								});
							}
						});
					});
				</script>


				<!-- <script>
					gsap.registerPlugin(ScrollTrigger);

					gsap.to("#pinContainer", {
					scrollTrigger: {
						trigger: "#pinContainer", 
						start: "top top",
						end: "bottom bottom", 
						pin: true, 
						// markers: true, 
					},
					});
				</script> -->
			</div>
			<div class="pt-12  mr-4 md:mr-8 lg:w-1/2 lg:pt-10 lg:px-8 lg:flex lg:flex-col lg:justify-center 2xl:mr-0 2xl:p-0 2xl:pt-[125px] ">
				<div class="relative mb-3">
					<h6 class="mb-0">
						<button class="border-b-2 border-[#B5F158] text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-2 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-1">
							<h1 class="text-base md:text-xl lg:text-base 2xl:text-[22px] ">
								Pure Value
							</h1>
							<div class="open w-10 pt-2 h-10 md:w-12 md:h-12 lg:w-10 lg:h-10 2xl:w-14 2xl:h-14">
								<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
							<div class=" close w-8 h-8  lg:w-9 lg:h-9 2xl:w-[52px] 2xl:h-[52px] hidden">
								<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
									<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
						</button>
					</h6>
					<div data-collapse="collapse-1" class="overflow-hidden transition-height duration-300 ease-in-out">
						<p class=" pl-2 pt-3 text-sm font-light pr-14 md:text-xl lg:pr-20 lg:leading-[1.1rem] lg:text-base 2xl:w-[80%] 2xl:text-[22px] 2xl:leading-[25px] 2xl:pr-24 lg:font-normal 2xl:mt-3 ">
						The best value you can get. A great mix of quality, reliability, agility, price, innovation and responsibility.
						</p>
					</div>
				</div>

				<div class="relative mb-3">
					<h6 class="mb-0">
						<button class="border-b-2 border-[#B5F158] text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-2 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-2">
							<h1 class="text-base md:text-xl lg:text-base 2xl:text-[22px] ">
								Force for Good
							</h1>
							<div class="open w-10 pt-2 h-10 md:w-12 md:h-12 lg:w-10 lg:h-10 2xl:w-14 2xl:h-14">
								<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
							<div class=" close w-8 h-8  lg:w-9 lg:h-9 2xl:w-[52px] 2xl:h-[52px] hidden">
								<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
									<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
						</button>
					</h6>
					<div data-collapse="collapse-2" class="overflow-hidden transition-height duration-300 ease-in-out">
						<p class=" pl-2 pt-3 text-sm font-light pr-14 md:text-xl lg:pr-20 lg:leading-[1.1rem] lg:text-base 2xl:w-[80%] 2xl:text-[22px] 2xl:leading-[25px] 2xl:pr-24 lg:font-normal 2xl:mt-3 ">
						We are a mission driven organisation. Serving humankind is what we do this for. Paying our debt to the environment, and ensuring our brands and business makes the world a better place for all. We do this so we can change the future landscape of amazon retail brands.
						</p>
					</div>
				</div>

				<div class="relative mb-3">
					<h6 class="mb-0">
						<button class="border-b-2 border-[#B5F158] text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-2 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-3">
							<h1 class="text-base md:text-xl lg:text-base 2xl:text-[22px] ">
								Innovative and unorthodox
							</h1>
							<div class="open w-10 pt-2 h-10 md:w-12 md:h-12 lg:w-10 lg:h-10 2xl:w-14 2xl:h-14">
								<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
							<div class=" close w-8 h-8  lg:w-9 lg:h-9 2xl:w-[52px] 2xl:h-[52px] hidden">
								<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
									<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
						</button>
					</h6>
					<div data-collapse="collapse-3" class="overflow-hidden transition-height duration-300 ease-in-out">
						<p class=" pl-2 pt-3 text-sm font-light pr-14 md:text-xl lg:pr-20 lg:leading-[1.1rem] lg:text-base 2xl:w-[80%] 2xl:text-[22px] 2xl:leading-[25px] 2xl:pr-24 lg:font-normal 2xl:mt-3 ">
						We at VisiOne are changing the way brands are done. We are a fresh breed of young and hungry Pakistanis willing to make our name as the people who made waves in the industry.
						</p>
					</div>
				</div>

				<div class="relative mb-3">
					<h6 class="mb-0">
						<button class="border-b-2 border-[#B5F158] text-slate-700 justify-between rounded-t-1 group relative flex w-full cursor-pointer items-center  border-solid p-2 text-left font-semibold text-dark-500 transition-all ease-in" data-collapse-target="collapse-4">
							<h1 class="text-base md:text-xl lg:text-base 2xl:text-[22px] ">
								Green providers
							</h1>
							<div class="open w-10 pt-2 h-10 md:w-12 md:h-12 lg:w-10 lg:h-10 2xl:w-14 2xl:h-14">
								<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
									<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
							<div class=" close w-8 h-8  lg:w-9 lg:h-9 2xl:w-[52px] 2xl:h-[52px] hidden">
								<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
									<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
								</svg>
							</div>
						</button>
					</h6>
					<div data-collapse="collapse-4" class="overflow-hidden transition-height duration-300 ease-in-out">
						<p class=" pl-2 pt-3 text-sm font-light pr-14 md:text-xl lg:pr-20 lg:leading-[1.1rem] lg:text-base 2xl:w-[80%] 2xl:text-[22px] 2xl:leading-[25px] 2xl:pr-24 lg:font-normal 2xl:mt-3 ">
						Sustainability at VisiOne is not restricted to a capsule collection. We practice sustainability that comes
naturally. A sustainable future that is accessible for all.
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

									// Show the first SVG parent div
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





				<!-- <div class="border-b-2 border-[#B5F158] flex justify-between items-center">
					<h1 class="text-base md:text-xl lg:text-base 2xl:text-[22px] ">
						Pure Value
					</h1>
					<div class="w-10 h-10 md:w-12 md:h-12 lg:w-10 lg:h-10 2xl:w-14 2xl:h-14">
						<svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.34019 21.8629L4.05874 11.6814L12.631 14.6715L12.8475 14.747L13.0085 14.5838L18.2114 9.30873L18.3116 12.9048L18.3217 13.2685L18.6855 13.2571L19.0006 13.2471L19.3689 13.2355L19.3686 13.2286L23.0373 13.1278L23.4018 26.2106L13.3564 33.1748L6.91272 25.0899L6.9127 25.0899L4.34019 21.8629Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
							<path d="M30.6458 2.30888L31.1604 20.8322L24.4225 25.505L24.0614 12.4384L24.0512 12.0686L23.9846 12.0718L23.9842 12.062L23.6289 12.0719L19.3319 12.1908L19.2219 8.2824L24.9621 2.46552L30.6458 2.30888Z" fill="#1C1C1C" stroke="black" stroke-width="0.725182" />
						</svg>
					</div>
					
				</div>
				<p class="pt-3 text-sm font-light pr-14 md:text-xl lg:pr-20 lg:leading-[1.1rem] lg:text-base 2xl:w-[80%] 2xl:text-[22px] 2xl:leading-[25px] 2xl:pr-24 lg:font-normal 2xl:mt-3 ">
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
				</p>
				<div class="border-b-2 border-[#B5F158] flex justify-between py-4 items-center lg:py-2 lg:mt-8 2xl:mt-16">
					<h1 class="md:text-xl lg:text-base 2xl:text-[22px]">
						Force for Good  Innovative and unorthodox    Green providers
					</h1>
					<div class="w-8 h-8  lg:w-9 lg:h-9 2xl:w-[52px] 2xl:h-[52px]">
						<svg viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.4419 35.0013L11.2572 35.1185L14.3851 26.5956L14.4641 26.3803L14.3035 26.2167L9.11302 20.9294L12.7102 20.8872L13.0741 20.883L13.0685 20.5191L13.0636 20.2039L13.0579 19.8354L13.051 19.8356L13.0094 16.1657L26.0964 16.0122L32.8977 26.1687L24.71 32.4811L24.71 32.4811L21.4419 35.0013Z" stroke="black" stroke-width="0.725182" />
							<path d="M2.31499 8.38306L20.8442 8.16717L25.4078 14.9796L12.337 15.1299L11.9671 15.1341L11.9692 15.2008L11.9595 15.2011L11.9636 15.5565L12.0132 19.8548L8.10353 19.9018L2.37996 14.0685L2.31499 8.38306Z" stroke="black" stroke-width="0.725182" />
						</svg>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</section>

<section class="overflow-hidden">
	<div class="relative flex justify-center mt-8 md:mx-8 lg:mt-16 3xl:mt-32 2xl:mt-40">
		<img class="rounded-3xl pb-1.5 brightness-75 md:hidden" src="<?php echo
			get_post_meta( get_the_ID(), "mobile1", TRUE ) ?>" alt="">
		<img class="hidden md:block rounded-3xl lg:w-full h-[60vh] lg:h-[500px] lg:ml-2 lg:mb-[1.8rem] lg:brightness-[60%] lg:rounded-[2.5rem] lg:object-cover 2xl:mx-12 2xl:rounded-[4rem] 2xl:h-[680px]" src="<?php echo
			get_post_meta( get_the_ID(), "sustain", TRUE ) ?>" alt="">
		<div class="absolute top-10 lg:ml-5  text-white flex flex-col justify-center md:mx-8 md:top-32 lg:top-0 lg:-mt-8 lg:mx-3 lg:h-full  ">
			<div class="px-10 lg:px-0 space-y-3 lg:w-2/3 2xl:pl-12">
				<div>
					<h1 id="paying" class=" opacity-0 text-2xl font-light lg:font-extralight leading-[1.8rem] md:text-5xl md:leading-[3.5rem] lg:text-[85px] lg:leading-[6rem] 2xl:text-[118px] 2xl:leading-[122px]">paying our <br>debt to the planet</h1>
				</div>
				<div class="my-2 md:my-8">
					<p id="recognise" class=" opacity-0 leading-4 font-light  md:text-4xl lg:text-sm lg:pr-[20rem] lg:pt-8 2xl:text-[22px] 2xl:leading-[26px] 2xl:pt-16">At VisiOne, we recognize the profound impact that our actions have on the world we share. Guided by an unwavering commitment to responsibility, innovation, and positive change, our sustainability journey is a testament to our dedication to creating a brighter, more sustainable future.</p>
				</div>
				<a id="sustainabilityLink" href="/sustainability" class="lg:w-1/6 flex justify-start items-end 2xl:items-center 2xl:pt-6 ">
					<button class=" pr-1 lg:pt-4 text-sm md:text-2xl 2xl:text-[22px] lg:text-base 2xl:pr-4">learn more</button>
					<div id="sustainabilityContainer" class="w-6 h-6 md:w-10 md:h-10 lg:w-8 lg:h-8  2xl:w-12 2xl:h-12">
						<svg viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.9385 21.1669L6.61155 21.2398L8.54925 15.9599L8.57239 15.8969L8.52534 15.8489L5.21887 12.4808L7.64536 12.4523L7.75196 12.4511L7.75031 12.3445L7.74739 12.1549L7.74573 12.0469L7.74107 12.0471L7.7135 9.61312L15.7593 9.51874L19.943 15.7663L14.9343 19.6279L14.9343 19.6279L12.9385 21.1669Z" fill="white" stroke="black" stroke-width="0.212422" />
							<path d="M1.27953 4.93251L12.6003 4.8006L12.6248 4.83844L12.6248 4.83845L12.6257 4.83976L15.4938 9.12124L7.42341 9.21402L7.31506 9.21527L7.31625 9.25309L7.30816 9.25335L7.30936 9.35744L7.3405 12.0553L4.82876 12.0854L1.32041 8.50986L1.27953 4.93251Z" fill="white" stroke="black" stroke-width="0.212422" />
						</svg>
					</div>
				</a>
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						const svgContainer = document.getElementById("sustainabilityContainer");
						const learnMoreLink = document.getElementById("sustainabilityLink");

						gsap.set(svgContainer, { x: 0 });

						const bounceTimeline = gsap.timeline({ paused: true });
						bounceTimeline.to(svgContainer, { x: 10, duration: 0.3, ease: "power1.inOut" })
									.to(svgContainer, { x: 0, duration: 0.3, ease: "power1.inOut", yoyo: true, repeat: 1 });

						learnMoreLink.addEventListener("mouseenter", function () {
							bounceTimeline.play();
							gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "underline", duration: 0.3 });
						});

						learnMoreLink.addEventListener("mouseleave", function () {
							bounceTimeline.reverse();
							gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "none", duration: 0.3 });
						});
					});
				</script>
			</div>
		</div>
	</div>
	<div class="bg-[#1C1C1C] text-white pb-20 2xl:pb-16">
		<div class="w-full bg-white "></div>
		<div class="w-full h-auto -mt-52 md:-mt-[22rem] lg:ml-[12rem] lg:w-[87%] 2xl:w-[82%] lg:-mt-[29rem] 2xl:-mt-[38.4rem] 2xl:ml-[20.5rem] ">
			<svg viewBox="0 0 1448 1280" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M863.772 464.61L877.989 960.301L490.809 1220.48L244.9 914.674L147.051 793.017L135.853 399.552L470.838 517.829L684.973 306.371L689.606 467.918L701.243 467.674L701.228 467.366L863.772 464.61Z" fill="black" />
				<path d="M1167.11 765.798L1166.93 765.866L1161.71 769.261L892.137 950.507L877.952 451.706L875.765 451.786L875.735 451.172L703.799 454.123L699.144 293.427L918.681 76.7042L1147.17 72.8069L1166.99 765.741L1167.11 765.798Z" fill="black" />
			</svg>
		</div>

		<div id="svgContainer" class="hidden md:block w-full lg:relative h-auto -mt-44 md:-mt-[22rem] lg:-mt-[30rem] 3xl:-mt-[33rem] 2xl:-mt-[44rem] 3lg:-mt-[35rem]">
			<svg id="parabolicPath" class="lg:absolute bottom-0 left-0" width="98" height="93" viewBox="0 0 98 93" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M34.2562 45.9591L60.3252 26.5339L88.8562 37.0157L81.6956 61.4246L78.8477 71.1361L58.1515 86.5507L51.8961 64.5416L32.4905 61.2907L40.9865 54.96L40.5355 54.3595L40.5196 54.3719L34.2562 45.9591Z" fill="#B5F158" />
				<path d="M39.2152 18.767L39.2258 18.774L39.6046 18.9195L59.4901 26.2215L33.235 45.7757L33.3216 45.8873L33.2898 45.9121L39.9228 54.8173L31.4675 61.1214L11.5609 57.7816L2.74755 45.9463L39.217 18.7758L39.2152 18.767Z" fill="#B5F158" />
			</svg>
			<svg class="w-full" viewBox="0 0 1728 448" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M-8.5 447.5C129.5 305.667 512.6 18.3 941 3.50001C1369.4 -11.3 1649.83 33.6667 1736.5 58" stroke="#B5F158" />
			</svg>
		</div>

		<script>
			function generateParabolicPath(viewportWidth, viewportHeight) {
		let scaleFactorX, scaleFactorY;

		if (viewportWidth === 1280) {
			scaleFactorX = 1;
			scaleFactorY = .98;
		} else if (viewportWidth === 1680) {
			scaleFactorX = viewportWidth / 1280;
			scaleFactorY = viewportHeight / 800; // Adjust for 1680x1050
		} else if (viewportWidth === 1728) {
			scaleFactorX = viewportWidth / 1280;
			scaleFactorY = viewportHeight / 815; // Adjust for 1728x1117
		} else if (viewportWidth === 1920) {
			scaleFactorX = 1.5;
			scaleFactorY = 1.51; // Adjust for 1728x1117
		} else {
			scaleFactorX = 1;
			scaleFactorY = 1.1;
		}

		const path = `M-5 ${335 * scaleFactorY} C${87.5 * scaleFactorX} ${205.111 * scaleFactorY} ${341 * scaleFactorX} ${40 * scaleFactorY} ${752.5 * scaleFactorX} ${30 * scaleFactorY} C${1164 * scaleFactorX} ${50.3 * scaleFactorY} ${1300.3333 * scaleFactorX} ${22.2222 * scaleFactorY} ${1447.5 * scaleFactorX} ${100 * scaleFactorY}`;

		return path;
	}
			document.addEventListener("DOMContentLoaded", function() {
				// const parabolicMotionPath = "M-8.5 447.5C129.5 305.667 512.6 18.3 941 3.50001C1369.4 -11.3 1649.83 33.6667 1736.5 58";
				const parabolicMotionPath1280 = "M-5 335C87.5 200.111 341 40 752.5 30C1164 50.3 1367.3333 22.2222 1447.5 200";

				const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
				const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

				const parabolicMotionPath = generateParabolicPath(viewportWidth, viewportHeight);
				console.log(parabolicMotionPath);


				gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

				const animationTimeline = gsap.timeline({
					scrollTrigger: {
						trigger: "#svgContainer",
						start: "20% 40%",
						end: "+=90%",
						scrub: true,
						// markers: true
					},
				});

				animationTimeline.to("#parabolicPath", {
					duration: 20,
					motionPath: {
						path: parabolicMotionPath,
						align: "#parabolicPath",
						autoRotate: 45,

					},
					ease: "power1.inOut",

				});
			});
		</script>



		<div class="mx-4 -mt-16 lg:flex lg:-mt-[15rem] lg:flex-row-reverse lg:items-center 2xl:-mt-[21rem]">
			<div class="h-[16rem] lg:h-full w-[60%] lg:w-1/2 2xl:flex 2xl:justify-center 2xl:items-center">
				<img class="rounded-3xl object-cover w-full h-full lg:w-[38rem] lg:h-[40rem] lg:rounded-[2.5rem] 2xl:rounded-[4rem] 2xl:w-[825px] 2xl:h-[875px]" src="<?php echo
					get_post_meta( get_the_ID(), "homeend", TRUE ) ?>" alt="">
			</div>
			<div class="lg:w-1/2">
				<div class="space-y-2 lg:w-[85%] 3xl:w-[90%] lg:mt-12 lg:pl-[2.2rem] 2xl:ml-8 2xl:mt-[10rem] ">
					<h1 id="driving" class="opacity-0 lg:font-extralight text-4xl mt-8 font-light lg:text-7xl 2xl:text-[115px]">driving growth</h1>
					<p id="helm" class=" opacity-0 lg:font-light text-sm font-light pr-6 py-4 2xl:py-20 lg:pt-8 2xl:text-[22px] 2xl:pb-14 2xl:leading-[28px] 2xl:pr-20">At the helm of VisiOne, our leadership embodies a fusion of experience and forward thinking. With a collective dedication to fostering a culture that is inclusive, inspiring, and transformative, our leaders steer us toward a future
						that holds boundless potential.</p>
						<a id="growthLink" href="/impact" class="lg:w-1/4 flex justify-start items-end 2xl:items-center 2xl:pt-6 ">
					<button class=" pr-1 lg:pt-4 text-sm md:text-2xl 2xl:text-[22px] lg:text-base 2xl:pr-4">learn more</button>
					<div id="growthContainer" class="w-6 h-6 md:w-10 md:h-10 lg:w-8 lg:h-8  2xl:w-12 2xl:h-12">
						<svg viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.9385 21.1669L6.61155 21.2398L8.54925 15.9599L8.57239 15.8969L8.52534 15.8489L5.21887 12.4808L7.64536 12.4523L7.75196 12.4511L7.75031 12.3445L7.74739 12.1549L7.74573 12.0469L7.74107 12.0471L7.7135 9.61312L15.7593 9.51874L19.943 15.7663L14.9343 19.6279L14.9343 19.6279L12.9385 21.1669Z" fill="white" stroke="black" stroke-width="0.212422" />
							<path d="M1.27953 4.93251L12.6003 4.8006L12.6248 4.83844L12.6248 4.83845L12.6257 4.83976L15.4938 9.12124L7.42341 9.21402L7.31506 9.21527L7.31625 9.25309L7.30816 9.25335L7.30936 9.35744L7.3405 12.0553L4.82876 12.0854L1.32041 8.50986L1.27953 4.93251Z" fill="white" stroke="black" stroke-width="0.212422" />
						</svg>
					</div>
				</a>
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						const svgContainer = document.getElementById("growthContainer");
						const learnMoreLink = document.getElementById("growthLink");

						gsap.set(svgContainer, { x: 0 });

						const bounceTimeline = gsap.timeline({ paused: true });
						bounceTimeline.to(svgContainer, { x: 10, duration: 0.3, ease: "power1.inOut" })
									.to(svgContainer, { x: 0, duration: 0.3, ease: "power1.inOut", yoyo: true, repeat: 1 });

						learnMoreLink.addEventListener("mouseenter", function () {
							bounceTimeline.play();
							gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "underline", duration: 0.3 });
						});

						learnMoreLink.addEventListener("mouseleave", function () {
							bounceTimeline.reverse();
							gsap.to(learnMoreLink.querySelector("button"), { textDecoration: "none", duration: 0.3 });
						});
					});
				</script>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>