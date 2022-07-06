<?php
class Projects_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Projects Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Projects','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return ' eicon-frame-expand';
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
        return ['pageheading','heading','widget','Sectionheading'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );
		//  Projects Repeater
        $repeater = new \Elementor\Repeater();
		// Projecct Main Image
		$repeater->add_control(
			'projects_main_image',
			[
				'label' => esc_html__( 'Projects Main Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block'=>true,
				'sepertaor'=>'before',
				'placeholder' => esc_html__( 'Add Main Image', 'picchi-extension' ),
				
				
			]
		);
		// Projecct Small Image
		$repeater->add_control(
			'projects_lightbox_image',
			[
				'label' => esc_html__( 'Projects lightbox Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block'=>true,
				'sepertaor'=>'before',
				'placeholder' => esc_html__( 'Choose lightbox Image', 'picchi-extension' ),
				
				
			]
		);
		// Projects Title
        $repeater->add_control(
			'projects_title', [
				'label' => esc_html__( 'Projects Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add Projects Title' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Projects Category
        $repeater->add_control(
			'projects_cat', [
				'label' => esc_html__( 'Projects Category', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Add Projects Category' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'projects_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ projects_title }}}',
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
            <div class="row  no-gutters">
			<?php
                if ( $settings['projects_list'] ) {
                    foreach (  $settings['projects_list'] as $item ) {
            ?>
               <div class="col-md-4 ">
                  <div class="single-portfolio">
                     <img src="<?php echo $item['projects_main_image']['url'];?>" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo $item['projects_lightbox_image']['url'];?>"><i class="eicon-plus-circle-o"></i><?php echo $item['projects_title']; ?> <span><?php echo $item['projects_cat'];?></span></a></h3>
                        </div>
                     </div>
                  </div>
               </div> 
			   <?php 
			   }
			}
			   ?> 
            </div>


        <?php


    }
    

    

	

}