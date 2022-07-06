<?php
class Feature_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Feature Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Feature','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return 'eicon-featured-image';
    }
    // Help for Widget
	public function get_custom_help_url() {
        return 'https://www.mamunferdousbd.com';
    }
    // Widget Categories Basic,General,Pro Etc.
	public function get_categories() {
        return ['picchi-category'];
    }
    // For Searching Widget 
	public function get_keywords() {
        return ['featured','feature','widget','pagefeature'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );
		// Features Style
		$this->add_control(
			'features_style',
			[
				'label' => esc_html__( 'Features Style', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'feature1'  => esc_html__( 'Feature 1', 'picchi-extension' ),
					'feature2' => esc_html__( 'Feature 2', 'picchi-extension' ),
				],
			]
		);

        // Features Sub Heading
        $this->add_control(
            'features_sub_heading',
            [
                'label'=>esc_html__( 'Features Sub Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Features Sub Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Features Heading
        $this->add_control(
            'features_heading',
            [
                'label'=>esc_html__( 'Features Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Features Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        
		$repeater = new \Elementor\Repeater();
		// Feature Icon
		$repeater->add_control(
			'feature_icon',
			[
				'label' => esc_html__( 'Feature Icon', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);
		//  Feature Title
        $repeater->add_control(
			'feature_title', [
				'label' => esc_html__( 'Feature Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add Feature Title' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		//Feature Description
        $repeater->add_control(
			'feature_desc', [
				'label' => esc_html__( 'Feature Description', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Add Feature Description' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'features_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ feature_title }}}',
			]
		);
		
		// Feature Image
        $this->add_control(
			'feature_image',
			[
				'label' => esc_html__( 'Choose Feature Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block'=>true,
                'seperator'=>'before',
                'placeholder'=>esc_html__( 'Choose Feature Image', 'picchi-extension' ),
				
			]
		);
        
        $this->end_controls_section();

        /*===================
            Style Tab
        ===================== */
        $this->start_controls_section(
            'feature_area_style_section',
            [
                'label'=>esc_html__( 'Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
		/*===============================
		 Feature Area Background Option
		 ===============================*/
		// Feature Area Background Title
		$this->add_control(
			'feature_area_background_title',
			[
				'label' => esc_html__( 'Feature Background Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Feature Area Background Color
		$this->add_control(
			'feature_area_background_color',
			[
				'label' => esc_html__( 'Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#f8f9fa',
				'selectors' => [
					'{{WRAPPER}} .features' => 'background-color: {{VALUE}}',
				],
			]
		);
        // Feature Section Sub Title
        $this->add_control(
			'feature_Section_sub_title',
			[
				'label' => esc_html__( 'Feature Sub Title Option ', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Feature section Sub Title Color
        $this->add_control(
			'feature_Section_sub_title_color',
			[
				'label' => esc_html__( 'Feature Sub Title Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .single-feature h6' => 'color: {{VALUE}}',
				],
			]
		);
        // Feature section Sub Title Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_Section_sub_title_typography',
				'selector' => '{{WRAPPER}} .single-feature h6',
			]
		);
        // Feature section Title 
        $this->add_control(
			'feature_Section_heading_title',
			[
				'label' => esc_html__( 'Feature  Title Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Feature section Title Color
        $this->add_control(
			'feature_Section_title_color',
			[
				'label' => esc_html__( 'Feature Title Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .single-feature h4' => 'color: {{VALUE}}',
				],
			]
		);
        //  Feature section Title Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_Section__title_typography',
				'selector' => '{{WRAPPER}} .single-feature h4',
			]
		);
		// Feature section Seperator
		// Feature section Seperator Title
		$this->add_control(
			'feature_Section_seperator_title',
			[
				'label' => esc_html__( 'Feature Seperator Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		// Feature section Seperator Color
		$this->add_control(
			'feature_Section_seperator_color',
			[
				'label' => esc_html__( 'Feature Seperator Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'tomato',
				'selectors' => [
					'{{WRAPPER}} .single-feature h4:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		// Feature section Icon Title
		$this->add_control(
			'feature_Section_icon_title',
			[
				'label' => esc_html__( 'Feature Icon Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Feature section Icon Color
		$this->add_control(
			'feature_Section_icon_color',
			[
				'label' => esc_html__( 'Feature Icon Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'tomato',
				'selectors' => [
					'{{WRAPPER}} .feature-box i' => 'color: {{VALUE}}',
				],
			]
		);
		// Feature section Icon Size
		$this->add_control(
			'feature_Section_icon_size',
			[
				'label' => esc_html__( 'Feature Icon Size', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 80,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Feature Card  Title
		$this->add_control(
			'feature_card_title',
			[
				'label' => esc_html__( 'Feature Card Title Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Feature Card Title Color
        $this->add_control(
			'feature_card_title_color',
			[
				'label' => esc_html__( 'Feature Card Title Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .feature-box h5' => 'color: {{VALUE}}',
				],
			]
		);
        //  Feature Card Title Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_card__title_typography',
				'selector' => '{{WRAPPER}} .feature-box h5',
			]
		);
		// Feature Card  Description Title
		$this->add_control(
			'feature_card_description',
			[
				'label' => esc_html__( 'Feature Card Description Option', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Feature Card Description Color
        $this->add_control(
			'feature_card_description_color',
			[
				'label' => esc_html__( 'Feature Card Description Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .feature-box p' => 'color: {{VALUE}}',
				],
			]
		);
        //  Feature Card Description Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_card__description_typography',
				'selector' => '{{WRAPPER}} .feature-box p',
			]
		);
		// Feature Image Style Option
		// Feature Image Title
		$this->add_control(
			'feature_image_style_options',
			[
				'label' => esc_html__( 'Feature Image Style Options', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		// Feature Image Background Color
		$this->add_control(
			'feature_image_background_color',
			[
				'label' => esc_html__( 'Feature Image Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#333',
				'selectors' => [
					'{{WRAPPER}} .features-1::after,.features-2::after' => 'background-color: {{VALUE}}',
				],
			]
		);
		// Feature Image Opacity
		$this->add_control(
			'feature_image_opacity',
			[
				'label' => esc_html__( 'Image Opacity', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0.00,
						'max' => 1,
						'step' => 0.01,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0.8,
				],
				'selectors' => [
					'{{WRAPPER}} .features-1::after,.features-2::after' => 'opacity: {{SIZE}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_section();
        

        

        
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $features_style = $settings['features_style'];
        $features_sub_heading = $settings['features_sub_heading'];
        $features_heading = $settings['features_heading'];
        $feature_image = $settings['feature_image']['url'];

		if($features_style=='feature1'){
			$feature_class= 'features-1';
			$margin_left ='';

		}else{
			$feature_class='features-2';
			$margin_left ='ml-auto';
		}


        ?>
		<style>
			.features-1::before, .features-2::before{
				background-image:url('<?php echo $feature_image;?>');
			}
		</style>
    	<div class="features <?php echo $feature_class;?>">
			
		<div class="col-xl-6 <?php echo $margin_left;?>">
			<div class="single-feature text-center">
				<h6><?php echo $features_sub_heading;?></h6>
				<h4><?php echo $features_heading;?></h4>

				<div class="row">

				<?php
                if ( $settings['features_list'] ) {
                    foreach (  $settings['features_list'] as $item ) {
                ?>

					<div class="col-xl-6">
						<div class="feature-box">
							<i class="<?php echo $item['feature_icon']['value'];?>"></i>
							<h5><?php echo $item['feature_title'];?></h5>
							<p><?php echo $item['feature_desc'];?></p>
						</div>
					</div>

				<?php
					}
				}
				?>	
					

					

					

				</div>
			</div>
		</div>
	
			
	</div>


        <?php


    }
    

    

	

}