<?php
/*
 */

get_header();
?>
<script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Set initial opacity and translateY to zero
		gsap.set('#contact, #contactParagraph, #visit, #address, #formAnimation', {
			opacity: 0,
			y: '20px'
		});

		// Create an Intersection Observer
		const observer = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					// Custom delays for each element
					let delay = 0;

					if (entry.target.id === 'contact') {
						delay = 0;
					} else if (entry.target.id === 'contactParagraph') {
						delay = .25;
					} else if (entry.target.id === 'formAnimation') {
						delay = .5;
					} else if (entry.target.id === 'visit') {
						delay = 0;
					} else if (entry.target.id === 'address') {
						delay = .25;
					}
					const targetIds = ['contact', 'contactParagraph', 'visit', 'address', 'formAnimation'];

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

		observer.observe(document.getElementById('contact'));
		observer.observe(document.getElementById('contactParagraph'));
		observer.observe(document.getElementById('visit'));
		observer.observe(document.getElementById('address'));
		observer.observe(document.getElementById('formAnimation'));
	});
</script>

<section>
	<div class="hidden lg:flex px-8 pt-[4.5rem] lg:pt-[2.5rem] 2xl:px-12 2xl:pt-[4rem]  lg:relative lg:z-10">
		<div class="bg-[#B5F158] w-full h-[3rem] 2xl:h-[4rem]">
		</div>
	</div>

	<div class="bg-[rgb(28,28,28)] text-white pl-4 pr-4 pt-12 pb-40 lg:-mt-[1.6rem] 2xl:-mt-[2rem] lg:px-8 2xl:px-12 lg:relative lg:z-20 lg:pt-[4.5rem] 2xl:pt-[7.5rem] lg:flex lg:flex-row lg:pb-16">
		<div class=lg:w-1/2>
			<h1 id="contact" class="opacity-0 text-5xl lg:text-7xl 2xl:text-[105px] 2xl:leading-[119.7px] lg:leading-[80px] lg:font-extralight 3xl:text-[90px]">Contact us</h1>
			<p id="contactParagraph" class="opacity-0 my-8 leading-[1.375rem] md:text-xl lg:text-sm 2xl:text-[20px] 2xl:leading-[23px] lg:leading-[15px] lg:font-light lg:pr-[6.6rem] 3xl:text-[17px] 2xl:pt-2 2xl:pr-[14rem] 3xl:pr-[12rem]">At VISIONE, we're more than a company – we're a community united by our passion for pushing boundaries and making a difference. Whether you have a question, a collaboration in mind, or simply want to connect, we're here to listen. Reach out to us to explore how we're building brands that care, crafting products that speak volumes, and fostering a culture of innovation and inclusivity. Contact us today to be part of the VISIONE experience.</p>
		</div>
 
		<div id="formAnimation" class="text-white opacity-0 md:text-xl lg:w-1/2 lg:pr-4">
			<form action="" method="post">
				<input class="placeholder:text-white bg-transparent border-b-2 lg:border-b-[1px] 2xl:border-b-[2px] 2xl:pb-[5px] 2xl:text-[20px] 2xl:leading-[22.8px] lg:text-sm lg:pb-[1px] border-white inline-block 2xl:mt-10 w-full my-5 " type="text" placeholder="name" name="name">
				<input class="placeholder:text-white bg-transparent border-b-2 lg:border-b-[1px] 2xl:border-b-[2px] 2xl:pb-[5px] 2xl:text-[20px] 2xl:leading-[22.8px] border-white inline-block w-full my-5 2xl:mt-14 lg:mt-9 lg:text-sm lg:pb-[1px]" type="text" placeholder="email" name="email">
				<input class="placeholder:text-white bg-transparent border-b-2 lg:border-b-[1px] 2xl:border-b-[2px] 2xl:pb-[5px] 2xl:text-[20px] 2xl:leading-[22.8px] border-white inline-block w-full my-5 lg:mt-9 2xl:mt-14 lg:text-sm lg:pb-[1px]" type="text" placeholder="what's up" name="what's up">
				<input class="placeholder:text-white bg-transparent border-b-2 lg:border-b-[1px] 2xl:border-b-[2px] 2xl:pb-[5px] 2xl:text-[20px] 2xl:leading-[22.8px] border-white inline-block w-full my-5 lg:mt-9 2xl:mt-14 lg:text-sm lg:pb-[1px]" type="text" placeholder="comment" name="comment">
				<div class="  mt-20 lg:mt-[8rem] 2xl:mt-[11rem] bg-white w-full lg:h-[1px] 2xl:h-[2px]"></div>
				<a id="submitLink"  class=" lg:w-1/6 flex my-5 lg:items-center lg:mt-7">
					<button class=" lg:text-sm lg:mr-2 2xl:mr-3 2xl:text-[20px] 2xl:leading-[22.8px]" type="submit">submit</button>
					<div id="submitContainer" class="w-5 h-5 md:w-10 md:h-10 md:ml-4 lg:w-9 lg:h-9 2xl:w-12 2xl:h-12">
						<svg viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.9385 21.1669L6.61155 21.2398L8.54925 15.9599L8.57239 15.8969L8.52534 15.8489L5.21887 12.4808L7.64536 12.4523L7.75196 12.4511L7.75031 12.3445L7.74739 12.1549L7.74573 12.0469L7.74107 12.0471L7.7135 9.61312L15.7593 9.51874L19.943 15.7663L14.9343 19.6279L14.9343 19.6279L12.9385 21.1669Z" fill="white" stroke="black" stroke-width="0.212422" />
							<path d="M1.27953 4.93251L12.6003 4.8006L12.6248 4.83844L12.6248 4.83845L12.6257 4.83976L15.4938 9.12124L7.42341 9.21402L7.31506 9.21527L7.31625 9.25309L7.30816 9.25335L7.30936 9.35744L7.3405 12.0553L4.82876 12.0854L1.32041 8.50986L1.27953 4.93251Z" fill="white" stroke="black" stroke-width="0.212422" />
						</svg>
					</div>
				</a>
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						const svgContainer = document.getElementById("submitContainer");
						const learnMoreLink = document.getElementById("submitLink");

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
			</form>
		</div>
	</div>
	<div class="-mt-32 lg:-mt-[1.6rem] 2xl:-mt-[2rem] lg:relative lg:z-40 lg:pb-[0rem] ">
		<div class="flex flex-col-reverse lg:flex lg:flex-row">

			<div class="lg:flex justify-end lg:justify-center lg:relative lg:w-1/3 ">
				<div class="mx-4 mt-10 lg:ml-8 2xl:ml-12 lg:mt-[5rem] 2xl:mt-[6.5rem]">
					<h1 id="visit" class="opacity-0 text-5xl md:text-6xl lg:font-extralight lg:text-[70px] lg:leading-[80px] 2xl:text-[105px] 2xl:leading-[119.7px] 3xl:text-[90px]">Visit us</h1>
				<a href="https://maps.app.goo.gl/Y4jr1ezDr2S2tedH6" target="_blank">
					<p id="address" class="opacity-0 my-4 leading-[1.375rem] md:text-xl lg:font-light lg:text-sm lg:leading-[15px] 2xl:text-[20px] 2xl:leading-[22.8px] 2xl:mt-8 lg:pt-[1.2rem] lg:pr-[4rem] 2xl:pr-[8rem] 3xl:text-[17px]">
						1-KM Jaranwala Rd, Khurianwala, Faisalabad, Punjab 38000, Pakistan
					</p>
				</a>

				</div>
				<div class="flex justify-end lg:block">
					<div class="w-1/4 h-auto lg:hidden">
						<svg viewBox="0 0 83 165" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M34.0518 135.753L47.761 97.1892L84.9591 88.2051L94.5299 118.774L98.3389 130.932L87.4503 161.541L65.5123 142.873L42.9234 153.031L47.3913 140.471L46.4994 140.157L46.4913 140.173L34.0518 135.753Z" stroke="#B5F158" />
							<path d="M20.2299 103.819H20.246L20.7442 103.706L46.668 97.4463L32.8543 136.276L33.0231 136.332L33.007 136.38L46.1778 141.065L41.734 153.569L18.5585 164L1.05627 157.772L20.238 103.827L20.2299 103.819Z" stroke="#B5F158" />
							<path d="M130.949 29.2462L117.239 67.8104L80.0411 76.7865L70.4704 46.226L66.6614 34.0677L77.55 3.45898L99.48 22.1264L122.077 11.961L117.609 24.5291L118.493 24.8425L118.501 24.8184L130.949 29.2462Z" stroke="#B5F158" />
							<path d="M29.2462 34.0518L67.8104 47.761L76.7865 84.9591L46.226 94.5299L34.0677 98.3389L3.45898 87.4502L22.1264 65.5123L11.961 42.9234L24.5291 47.3913L24.8425 46.4993L24.8184 46.4913L29.2462 34.0518Z" stroke="#B5F158" />
							<path d="M61.1808 20.2303V20.2463L61.2933 20.7446L67.5533 46.6684L28.7238 32.8547L28.6676 33.0234L28.6194 33.0073L23.9344 46.1782L11.4226 41.7343L1 18.5588L7.22782 1.05664L61.1728 20.2383L61.1808 20.2303Z" stroke="#B5F158" />
						</svg>
					</div>
				</div>
				<div class="hidden lg:flex lg:absolute lg:left-0 lg:w-[8.5rem] 2xl:w-[12rem] lg:pt-[12.5rem] 2xl:pt-[23.5rem]">
					<svg width="182" height="531" viewBox="0 0 182 531" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M89.3301 422.734L-35.8263 378.242L-64.9834 257.52L34.2237 226.459L73.6823 214.097L173.02 249.435L112.437 320.606L145.401 393.942L104.639 379.442L103.622 382.311L103.674 382.337L89.3301 422.734Z" stroke="#B5F158" />
						<path d="M-14.31 467.591V467.539L-14.6751 465.922L-34.9912 381.789L91.0258 426.594L91.2084 426.073L91.3648 426.125L106.569 383.38L147.149 397.802L181.001 473.016L160.789 529.818L-14.2839 467.565L-14.31 467.591Z" stroke="#B5F158" />
						<path d="M73.7351 92.6701L29.2431 217.826L-91.4797 246.957L-122.541 147.776L-134.902 108.318L-99.5644 8.98047L-28.3929 69.5635L44.9431 36.5728L30.4428 77.3614L33.3116 78.3785L33.3377 78.3002L73.7351 92.6701Z" stroke="#B5F158" />
						<path d="M118.592 196.311H118.54L116.923 196.676L32.79 216.992L77.5949 90.975L77.0734 90.7924L77.1255 90.6359L34.3809 75.4315L48.803 34.8255L124.017 1.00012L180.818 21.2119L118.566 196.285L118.592 196.311Z" stroke="#B5F158" />
					</svg>
				</div>
			</div>
			<div class="flex justify-center px-4 lg:w-2/3">
				<iframe class="rounded-[3rem] 2xl:rounded-[3.25rem] w-full h-[20rem] lg:rounded-[2.2rem] object-cover lg:w-[740px] lg:ml-[1.5rem] lg:h-[500px] 2xl:w-[1050px] 2xl:h-[700px] 2xl:ml-[8rem] 3xl:ml-[7rem] 3xl:w-[900px]"
					frameborder="0"     style="border: 1px solid #ccc; padding: .5rem;" 
					allowfullscreen
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6811.962900669483!2d73.20261!3d31.387075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392265c6d435890b%3A0xb49f357de49f499c!2sJaranwala%20Rd%20%26%20Khurianwala%20Bypass%2C%20Makkuana%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1700462363100!5m2!1sen!2sus" >
				</iframe>

			</div>
		</div>

		<hr class="bg-[#BFFC05] lg:h-[3px] my-10 lg:mx-8 2xl:mx-12 lg:mt-[12.5rem] 2xl:mt-[16rem]">
	</div>

</section>

<?php
get_footer();
