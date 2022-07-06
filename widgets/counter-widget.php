<?php
class Counter_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Counter Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Counter','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return ' eicon-counter-circle';
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
        return ['pagecounter','counter','widget','Sectioncounter'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );
		//  Counter Repeater
        $repeater = new \Elementor\Repeater();
		// Projecct Main Image
		$repeater->add_control(
			'Counter_main_image',
			[
				'label' => esc_html__( 'Counter Main Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block'=>true,
				'sepertaor'=>'before',
				'placeholder' => esc_html__( 'Add Main Image', 'picchi-extension' ),
				
				
			]
		);
		// Projecct Small Image
		$repeater->add_control(
			'Counter_lightbox_image',
			[
				'label' => esc_html__( 'Counter lightbox Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block'=>true,
				'sepertaor'=>'before',
				'placeholder' => esc_html__( 'Choose lightbox Image', 'picchi-extension' ),
				
				
			]
		);
		// Counter Title
        $repeater->add_control(
			'Counter_title', [
				'label' => esc_html__( 'Counter Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add Counter Title' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Counter Category
        $repeater->add_control(
			'Counter_cat', [
				'label' => esc_html__( 'Counter Category', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Add Counter Category' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'Counter_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ Counter_title }}}',
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
                'default'=>'#777',
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
                'default'=>'#000',
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
                'default'=>'#333',
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
        // $section_title_sub_heading = $settings['section_title_sub_heading'];
        // $section_title_heading = $settings['section_title_heading'];
        // $section_title_description = $settings['section_title_description'];
        

        ?>
           <div class="row align-items-center">
				<div class="col-xl-5">
					<div class="counter-title">
						<h2><span> span What's your story?</span> Fun Facts</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="row">
						<div class="col-xl-6">
							<div class="single-counter">
								<i class="fas fa-briefcase"></i>
								<h4><span class="counter">543</span> projects</h4>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="single-counter">
								<i class="fas fa-briefcase"></i>
								<h4><span class="counter">543</span> projects</h4>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="single-counter">
								<i class="fas fa-briefcase"></i>
								<h4><span class="counter">543</span> projects</h4>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="single-counter">
								<i class="fas fa-briefcase"></i>
								<h4><span class="counter">543</span> projects</h4>
							</div>
						</div>

					</div>
				</div>
		   </div>


        <?php


    }
    

    

	

}