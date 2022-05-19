	<!--------------------- footer section --------------------->
	<section id="footer">
		<img src="assets/img/wave2.png" class="footer-img" alt="">
		<div class="container">
			<div class="row mb-3">
				<div class="col-lg-4">
					<img src="assets/img/Logo_senas.svg" width="250px">
				<br>
					<p>Desarrollamos esta herramienta virtual que acerque a las personas en aprender
						lengua de señas colombiana de una manera ágil, haciendo uso de la tecnología, que permita
						una mejor comunicación en diferentes entornos.</p>
				</div>
				<div class="col-lg-4 text-center">
					<p><b>CONTACTOS</b></p>
					<p><i class="fa-solid fa-location-dot"></i> Medellín, Colombia</p>
					<p><i class="fa-solid fa-phone"></i> +57 326 1545</p>
					<p><i class="fa-solid fa-envelope"></i> senas.co@gmail.com</p>
				</div>
				<div class="col-lg-4 text-center">
					<p><b>SUBSCRIBE NEWSLETTER</b></p>
					<div class="mb-3">
						<input type="email" class="form-control" placeholder="Your Email" />
					</div>
					<div class="mb-3">
						<button class="btn btn-primary">Subscribe</button>
					</div>
				</div>
			</div>
			<hr>
			<p class="copyright">2022 - Sitio web</p>
		</div>
	</section>

	<!-- JavaScript -->
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
	<!-- Bundle bootstrap -->
	<script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
	<!-- Smooth Scroll -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
	<script>
		gsap.registerPlugin(ScrollTrigger);

 
		gsap.from(".tipopersona",{
		ScrollTrigger:{
			trigger: ".tipopersona",

			toggleActions: "restart pause resume none"
		},
		duration: 0.7,  
		x:"-100vw",
		opacity: 0, 
		// scale: 2,
		ease: "linear", 


		})
	</script>
	</body>

	</html>