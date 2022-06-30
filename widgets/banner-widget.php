<?php
class Banner_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Banner Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Banner Widget','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return ' eicon-circle';
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
        return ['custom','mamun','widget'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        // Sub Heading
        $this->add_control(
            'sub_heading',
            [
                'label'=>esc_html__( 'Sub Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Sub Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Heading
        $this->add_control(
            'heading',
            [
                'label'=>esc_html__( 'Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Description
        $this->add_control(
            'description',
            [
                'label'=>esc_html__( 'Description','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXTAREA,
                'rows'=>10,
                'placeholder'=>esc_html__('Write Your Description Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Button One Text
        $this->add_control(
            'btn_one_text',
            [
                'label'=>esc_html__( 'Button One Text','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Button One Link
        $this->add_control(
            'btn_one_link',
            [
                'label'=>esc_html__( 'Button One Link','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::URL,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Button Two Text
        $this->add_control(
            'btn_two_text',
            [
                'label'=>esc_html__( 'Button Two Text','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Button Two Link
        $this->add_control(
            'btn_two_link',
            [
                'label'=>esc_html__( 'Button Two Link','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::URL,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
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
        $this->add_control(
			'sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Sub Heading Color
        $this->add_control(
			'sub_heading_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .banner h4' => 'color: {{VALUE}}',
				],
			]
		);
        // Sub Heading Font Family
        $this->add_control(
			'sub_heading_font_family',
			[
				'label' => esc_html__( 'Font Family', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .banner h4' => 'font-family: {{VALUE}}',
				],
                
			]
		);
        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Heading Color
        $this->add_control(
			'heading_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .banner h1' => 'color: {{VALUE}}',
				],
			]
		);
        //  Heading Font Family
        $this->add_control(
			'heading_font_family',
			[
				'label' => esc_html__( 'Font Family', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .banner h1' => 'font-family: {{VALUE}}',
				],
                
			]
		);
        $this->add_control(
			'description_style',
			[
				'label' => esc_html__( 'Description', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        // Description Color
        $this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .banner p' => 'color: {{VALUE}}',
				],
			]
		);
    
        // Description Font Family
        $this->add_control(
			'description_font_family',
			[
				'label' => esc_html__( 'Font Family', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .banner p' => 'font-family: {{VALUE}}',
				],
            
			]
		);
        $this->end_controls_section();
        

        

        
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $sub_heading = $settings['sub_heading'];
        $heading = $settings['heading'];
        $description = $settings['description'];
        $btn_one_text = $settings['btn_one_text'];
        $btn_one_link = $settings['btn_one_link']['url'];
        $btn_two_text = $settings['btn_two_text'];
        $btn_two_link = $settings['btn_two_link']['url'];

        ?>
            <div class="banner">
                <h4><?php echo $sub_heading;?></h4>
                <h1><?php echo $heading;?></h1>
                <p><?php echo $description;?></p>
                <a class="box_btn"  href="<?php echo $btn_one_link?>"><?php echo $btn_one_text;?></a>
                <a class="border_btn"  href="<?php echo $btn_two_link?>"><?php echo $btn_two_text?></a>
            </div>


        <?php


    }
    

    

	

}
