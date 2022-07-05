<?php
class Process_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Process Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Process Widget','picchi-extension' );
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
        return ['pageProcess','Process','widget','SectionProcess'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        // Process Heading
        $this->add_control(
            'process_heading',
            [
                'label'=>esc_html__( 'Process Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Process Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Process Number
        $this->add_control(
            'process_number',
            [
                'label'=>esc_html__( 'Process Number','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::NUMBER,
                'placeholder'=>esc_html__('Write Your Process Number Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Process Description
        $this->add_control(
            'process_description',
            [
                'label'=>esc_html__( 'Process Description','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXTAREA,
                'dynamic' => [
					'active' => true,
				],
                'rows'=>10,
                'placeholder'=>esc_html__('Write Your Process Description Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
		// Process Heading text Align
        $this->add_control(
			'process_heading_txt_align',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Alignment', 'picchi-extension' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'picchi-extension' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'picchi-extension' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'picchi-extension' ),
						'icon' => 'eicon-text-align-right',
					],
                    'justify' => [
						'title' => esc_html__( 'Justified', 'elementor' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .single-process' => 'text-align: {{VALUE}};',
				],
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
        // Heading Process Style  Title
        $this->add_control(
			'heading_process_style',
			[
				'label' => esc_html__( 'Heading Style', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Process Heading Color
        $this->add_control(
			'process_heading_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .single-process h6' => 'color: {{VALUE}}',
				],
			]
		);
        // Process Heading typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'process_heading_typography',
				'selector' => '{{WRAPPER}} .single-process h6',
			]
		);
		// Process Number  Title
        $this->add_control(
			'process_number_style_title',
			[
				'label' => esc_html__( 'Number Style', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Process Number Color
        $this->add_control(
			'process_number_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .single-process h6 span' => 'color: {{VALUE}}',
				],
			]
		);
        //  Process Number Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'process_number_typography',
				'selector' => '{{WRAPPER}} .single-process h6 span',
			]
		);
        // Process Description  Title
        $this->add_control(
			'process_description_style_title',
			[
				'label' => esc_html__( 'Description Style', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Process Description Color
        $this->add_control(
			'process_description_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .single-process p' => 'color: {{VALUE}}',
				],
			]
		);
        //  Process Description Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'process_description_typography',
				'selector' => '{{WRAPPER}} .single-process p',
			]
		);
        


        
        


        $this->end_controls_section();
        

        

        
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $process_heading = $settings['process_heading'];
        $process_number = $settings['process_number'];
        $process_description = $settings['process_description'];
        

        ?>
            <div class="single-process">
				<h6><?php echo $process_heading;?> <span><?php echo $process_number;?></span></h6>
				<p><?php echo $process_description;?></p>
			</div>

        <?php


    }
    

    

	

}