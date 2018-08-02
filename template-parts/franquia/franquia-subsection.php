<?php 
	
	if( wp_is_mobile() ){
		$var_img_file = '--mobile';
		$class_img = '';

	} else {

		$var_img_file = '';
		$class_img = '';
	}

 ?>

<div class="Section-subSection Section-subsection--dados Subsection u-marginTop u-positionRelative u-displayFlex u-flexDirectionColumn u-flexSwitchRow">

	
	<div class="Subsection-content u-positionRelative u-size12of24 u-paddingVertical">

		<nav class="Subsection-navigation Navigation Navigation--tabs u-positionAbsolute u-zIndex2 u-sizeFull">
			<ul class="Navigation--tabs-items u-sizeFull u-displayFlex">
				<li id="tab-1" class="Navigation--tabs-items-item u-size12of24 u-paddingBottom--inter u-positionRelative u-paddingRight--inter--px is-active">
					<h3 class="u-alignRight">

						<a class="Navigation-link u-displayBlock u-paddingHorizontal--vrt--inter--half--px is-animating" href="javascript:NavigationTabs('aFranquia','1');">Restaurante</a>

					</h3>
					<figure class="ShadowBox ShadowBox--tabRight--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
					<figure class="ShadowBox ShadowBox--tabRight u-positionAbsolute u-zIndex1 is-animating"></figure>
				</li>
				<li id="tab-2" class="Navigation--tabs-items-item u-size12of24 u-paddingBottom--inter u-positionRelative u-paddingLeft--inter--px">
					<h3>

						<a class="Navigation-link u-displayBlock is-animating u-paddingHorizontal--vrt--inter--half--px" href="javascript:NavigationTabs('aFranquia','2');">Expresso</a>

					</h3>
					<figure class="ShadowBox ShadowBox--tabLeft--footer u-positionAbsolute u-zIndex2 is-animating"></figure>
					<figure class="ShadowBox ShadowBox--tabLeft u-positionAbsolute u-zIndex1 is-animating"></figure>
				</li>
			</ul>
		</nav>

		<ul class="Subsection-items Items Items--tabs u-marginTop u-positionRelative">


			<li id="tabContent-1" class="Subsection-items-item Item Item--tab is-animating u-sizeFull u-paddingTop u-positionRelative is-active is-animating">

				
					<div class="Item-content">
						<header class="Subsection-header">
							<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has ben.</h4>
						</header>
						<div class="Features u-positionRelative u-displayFlex">
							<ul class="Features-items u-sizeFull u-paddingTop--inter">
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--store"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Taxa de Franquia</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>70.000</em>,00</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--moedas"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Faturamento Médio</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>317.000</em>,00</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--report"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Retorno do Investimento</h5>
									<span class="Features-items-item-value u-alignRight"><strong><em>18 - 36</em> meses</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--money"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Investimento total</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>1.</em>500.000,00</strong></span>
								</li>
							</ul>
						</div>
					</div>
				
			</li>


			<li id="tabContent-2" class="Subsection-items-item Item Item--tab is-animating u-sizeFull u-paddingTop u-positionRelative is-animating">

				<div class="Item-content">
						<header class="Subsection-header">
							<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed risus posuere enim auctor laoreet.</h4>
						</header>
						<div class="Features u-positionRelative u-displayFlex">
							<ul class="Features-items u-sizeFull u-paddingTop--inter">
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--store"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Taxa de Franquia</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>50.000</em>,00</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--moedas"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Faturamento Médio</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>217.000</em>,00</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--report"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Retorno do Investimento</h5>
									<span class="Features-items-item-value u-alignRight"><strong><em>24 - 36</em> meses</strong></span>
								</li>
								<li class="Features-items-item u-displayFlex u-positionRelative u-boxShadow u-paddingHorizontal--vrt--inter--half--px u-marginBottom--inter--half u-sizeFull u-FlexFustifyContentSpaceBetween u-flexAlignItemsCenter u-borderRadius5">
									<figure class="Features-items-item-figure u-displayInlineBlock FigureIcon--money"></figure>
									<h5 class="Features-items-item-title Section-items-item-title u-paddingLeft--inter--half--px u-flex1">Investimento total</h5>
									<span class="Features-items-item-value u-alignRight"><strong>R$ <em>1.</em>100.000,00</strong></span>
								</li>
							</ul>
						</div>
					</div>
			</li>
		</ul>
	</div>

	<div id="tabImage-1" class="Subsection-imageMain u-positionRelative u-size12of24 u-zIndex4 u-lineHeight0 is-active">
		<img class="Subsection-imageMain-src u-maxSize100 is-animating" src="<?php echo get_template_directory_uri() . '/assets/images/subSection-mainImage--pizza' . $var_img_file . '.png'; ?>" alt="Pizza Vignoli">
	</div>
	<div id="tabImage-2" class="Subsection-imageMain u-positionRelative u-size12of24 u-lineHeight0 u-zIndex4">

		<img class="Subsection-imageMain-src u-maxSize100 is-animating" src="<?php echo get_template_directory_uri() . '/assets/images/subSection-mainImage--pizza--expresso' . $var_img_file . '.png'; ?>" alt="Pizza Vignoli">
	</div>

</div>