<?php 
	
	if( wp_is_mobile() ){
		$var_img_file = '--mobile';
		$class_img = '';

	} else {

		$var_img_file = '';
		$class_img = '';
	}

 ?>
<div class="Section-subSection Section-subsection--dados u-paddingHorizontal u-marginHorizontal u-positionRelative u-displayFlex">
	
	<div class="Subsection-content u-positionRelative u-size11of24 u-marginLeft">

		<nav class="Subsection-navigation Navigation Navigation--tabs u-positionAbsolute u-zIndex2 u-sizeFull">
			<ul class="Navigation--tabs-items u-sizeFull u-displayFlex">
				<li class="Nacigation-item u-size12of24 is-active">
					<h3><a class="Navigation-link" href="javascript:;">Restaurante</a></h3>
				</li>
				<li class="Nacigation-item">
					<h3><a class="Navigation-link" href="javascript:;">Expresso</a></h3>
				</li>
			</ul>
		</nav>

		<ul class="Subsection-items u-marginTop">
			<li class="Subsection-items-item">
				<header class="Subsection-header">
					<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has..</h4>
				</header>
				<div class="Features u-positionRelative u-displayFlex">
					<ul class="Features-items">
						<li class="Features-items-item"></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<div class="Subsection-imageMan u-positionRelative u-size12of24 u-zIndex4">
		<img class="Subsection-imageMan-src" src="<?php echo get_template_directory_uri() . '/assets/images/subSection-mainImage--pizza' . $var_img_file . '.png'; ?>" alt="Pizza Vignoli">
	</div>

</div>