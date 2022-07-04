<?php
class Feature_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Feature Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Feature Widget','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return 'eicon-plus';
    }
    // Help for Widget
	public function get_custom_help_url() {
        return 'https://www.mamunferdousbd.com';
    }
    // Widget Categories Basic,General,Pro Etc.
	public function get_categories() {
        return ['general'];
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
            'style_section',
            [
                'label'=>esc_html__( 'Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Section Sub Title
        $this->add_control(
			'heading_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Sub Heading Color
        $this->add_control(
			'heading_sub_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .section-title h4' => 'color: {{VALUE}}',
				],
			]
		);
        // Sub Heading typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_sub_title_typography',
				'selector' => '{{WRAPPER}} .section-title h4',
			]
		);
        // Section Heading Title
        $this->add_control(
			'heading_title',
			[
				'label' => esc_html__( 'Heading', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Heading Color
        $this->add_control(
			'heading_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}',
				],
			]
		);
        //  Heading Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_title_typography',
				'selector' => '{{WRAPPER}} .section-title h2',
			]
		);
        // Border 
        $this->add_control(
			'heading_border_style',
			[
				'label' => esc_html__( 'Border', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        // border One Background Color
        $this->add_control(
			'heading_border1_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .section-title h2::before' => 'background-color: {{VALUE}}',
				],
			]
		);
        // border Two Background Color
        $this->add_control(
			'heading_border2_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#e16038',
				'selectors' => [
					'{{WRAPPER}} .section-title h2::after' => 'background-color: {{VALUE}}',
				],
			]
		);


        // Description
        $this->add_control(
			'heading_des_style',
			[
				'label' => esc_html__( 'Description', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


        // Description Color
        $this->add_control(
			'section_des_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .section-title p' => 'color: {{VALUE}}',
				],
			]
		);
    
        // Description Typography
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'section-title_dsc_typography',
				'selector' => '{{WRAPPER}} .section-title p',
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