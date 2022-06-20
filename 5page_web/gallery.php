<?php include 'header.php';?>
<header>
<h1> Lightbox Gallery</h1>
   </header>


<div id="gallery-section">
	
	<div id="thumbnail-gallery-container">

		<!---- Top Row --->

	    <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image" src="https://cdn.shopify.com/s/files/1/1162/6338/files/how-to-water-succulents-in-a-terrarium2_large.jpg?v=1492784728" alt="Colourful abstract collage art"/></a>
		
		<a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image" src="https://www.coolgreenandshady.com/wp-content/uploads/2019/07/Product_Sleek-Succulents_IMG-1833.jpg"/></a>

		<a class="thumbnail" href="#lightbox-image-3"><img class="thumbnail-image" src="https://www.viviano.com/images/prodshots_new/85919S_z.jpg" alt="Assorted succulent plants in a glass jar."/></a>

	
		<!--- Bottom Row --->

		<a class="thumbnail" href="#lightbox-image-4"><img class="thumbnail-image" src="https://cdn.shopify.com/s/files/1/1023/4337/products/product-listing-succulent-terrarium_grande.jpg?v=1517508241" alt="Two table top glass jars of succulents."/></a>

		<a class="thumbnail" href="#lightbox-image-5"><img class="thumbnail-image" src="https://simplysucculents.com/wp-content/uploads/2015/02/Terrarium-Bowl-577.jpg" alt="Table top glass jar of plants."/></a>

		<a class="thumbnail" href="#lightbox-image-6"><img class="thumbnail-image" src="https://www.thespruce.com/thmb/xfc4WpNMCmEIKCqtfUKwk11s428=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/difference-between-cacti-and-succulents-3976741-hero-fdb0b4d4197a4796b86dbdf39ebf026a.jpg" alt="Small pots of cactii."/></a>

	</div><!-- thumbnail-gallery-container -->
</div><!--- gallery-section --->


<!--- Lightbox overlay. Below content is hidden until :target activated --->

     <div class="lightbox-overlay" id="lightbox-image-1">
		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>

			<img class="lightbox-image" src="https://cdn.shopify.com/s/files/1/1162/6338/files/how-to-water-succulents-in-a-terrarium2_large.jpg?v=1492784728" alt="Terrarium on table." />


		    <p class="lightbox-navigation"><a class="next" href="#lightbox-image-2">Next</a></p>
		</div><!-- lightbox-content -->
    </div><!--- lightbox-overlay --->
		

	<div class="lightbox-overlay" id="lightbox-image-2">

		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>


			<img class="lightbox-image" src="https://www.coolgreenandshady.com/wp-content/uploads/2019/07/Product_Sleek-Succulents_IMG-1833.jpg" alt="Potted Succulent on Table." />

		    <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1">Back</a><a class="next" href="#lightbox-image-3">Next</a></p>

		</div><!-- lightbox-content -->
    </div><!--- lightbox-overlay --->

    <div class="lightbox-overlay" id="lightbox-image-3">
		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>


			<img class="lightbox-image" src="https://www.viviano.com/images/prodshots_new/85919S_z.jpg" alt="Assorted succulents in a jar." />
			
      <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2">Back</a><a class="next" href="#lightbox-image-4">Next</a></p>

		</div><!-- lightbox-content -->
	</div><!--- lightbox-overlay --->

	<div class="lightbox-overlay" id="lightbox-image-4">
		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>

			<img class="lightbox-image" src="https://cdn.shopify.com/s/files/1/1023/4337/products/product-listing-succulent-terrarium_grande.jpg?v=1517508241" alt="Two table top jars of assorted succulents." />
			
			<p class="lightbox-navigation"><a class="back" href="#lightbox-image-3">Back</a><a class="next" href="#lightbox-image-5">Next</a></p>
		</div><!-- lightbox-content -->
    </div><!--- lightbox-overlay --->

    <div class="lightbox-overlay" id="lightbox-image-5">
		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>

			<img class="lightbox-image" src="https://simplysucculents.com/wp-content/uploads/2015/02/Terrarium-Bowl-577.jpg" alt="Assorted plants in a jar." />
	

			<p class="lightbox-navigation"><a class="back" href="#lightbox-image-4">Back</a><a class="next" href="#lightbox-image-6">Next</a></p>
		</div><!-- lightbox-content -->
    </div><!--- lightbox-overlay --->

    <div class="lightbox-overlay" id="lightbox-image-6">
		<div class="lightbox-content">

			<a class="close" href="#gallery-section"></a>


			<img class="lightbox-image" src="https://www.thespruce.com/thmb/xfc4WpNMCmEIKCqtfUKwk11s428=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/difference-between-cacti-and-succulents-3976741-hero-fdb0b4d4197a4796b86dbdf39ebf026a.jpg" alt="Small pots of cactii." />

			<p class="lightbox-navigation"><a class="next" href="#lightbox-image-5">Back</a></p>
		</div><!-- lightbox-content -->
    </div><!--- lightbox-overlay --->
    <?php include 'footer.php';?>