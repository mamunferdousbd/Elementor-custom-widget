<?php
class Banner_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Banner Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Banner','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return 'eicon-banner';
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
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'selector' => '{{WRAPPER}} .banner h4',
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
        //  Heading Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .banner h1',
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
    
        // Description Typography
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .banner p',
			]
		);
        /*==========================
            Button One
        ============================= */
        $this->add_control(
			'btn1_heading',
			[
				'label' => esc_html__('Button One','picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->start_controls_tabs(
			'style_tabs_btn1'
		);

        /*===================
        Button One Normal Style
         ===================*/

		$this->start_controls_tab(
			'btn1_normal_tab',
			[
				'label' => esc_html__( 'Normal','picchi-extension' ),
			]
		);
        // Text Color
        $this->add_control(
			'btn1_text_color',
			[
				'label' => esc_html__( 'Text Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn' => 'color: {{VALUE}}',
				],
			]
		);
        // Background Color
        $this->add_control(
			'btn1_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'Btn1_typography',
				'selector' => '{{WRAPPER}} .banner a.box_btn',
			]
		);
        // Button one Margin
        $this->add_control(
			'btn1_margin',
			[
				'label' => esc_html__( 'Margin', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        // Button one Padding
        $this->add_control(
			'btn1_padding',
			[
				'label' => esc_html__( 'padding', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
         // Button one border Radious
         $this->add_control(
			'btn1_BorderRadius',
			[
				'label' => esc_html__( 'Border Radius', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_tab();
         /*===================
        Button One Hover Style
         ===================*/
        $this->start_controls_tab(
			'btn1_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'picchi-extension' ),
			]
		);
        // Text Color
        $this->add_control(
			'btn1_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
        // Background Color
        $this->add_control(
			'btn1_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.box_btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
       
        $this->end_controls_tab();

        $this->end_controls_tabs();
        /*==========================
            Button Two
        ============================= */
        $this->add_control(
			'btn2_heading',
			[
				'label' => esc_html__('Button Two ','picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->start_controls_tabs(
			'style_tabs_btn2'
		);
        /*===================
        Button Two Normal Style
         ===================*/

		$this->start_controls_tab(
			'btn2_normal_tab',
			[
				'label' => esc_html__( 'Normal','picchi-extension' ),
			]
		);
        // Text Color
        $this->add_control(
			'btn2_text_color',
			[
				'label' => esc_html__( 'Text Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'color: {{VALUE}}',
				],
			]
		);
        // Background Color
        $this->add_control(
			'btn2_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'background-color: {{VALUE}}',
				],
			]
		);
        // Border Color
        $this->add_control(
			'btn2_bo_color',
			[
				'label' => esc_html__( 'Border Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'border-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'Btn2_typography',
				'selector' => '{{WRAPPER}} .banner a.border_btn',
			]
		);
        // Button one Margin
        $this->add_control(
			'btn2_margin',
			[
				'label' => esc_html__( 'Margin', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        // Button one Padding
        $this->add_control(
			'btn2_padding',
			[
				'label' => esc_html__( 'padding', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
         // Button one border Radious
         $this->add_control(
			'btn2_BorderRadius',
			[
				'label' => esc_html__( 'Border Radius', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_tab();
         /*===================
        Button Two Hover Style
         ===================*/
        $this->start_controls_tab(
			'btn2_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'picchi-extension' ),
			]
		);
        // Text Color
        $this->add_control(
			'btn2_text_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#FFF',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
        // Background Color
        $this->add_control(
			'btn2_bg_hover_color',
			[
				'label' => esc_html__( 'Background Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
        // Hover Border Color
        $this->add_control(
			'btn2_bo_hover_color',
			[
				'label' => esc_html__( 'Border Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                'default'=>'#ff6347',
				'selectors' => [
					'{{WRAPPER}} .banner a.border_btn' => 'border-color: {{VALUE}}',
				],
			]
		);
        $this->end_controls_tab();

        $this->end_controls_tabs();


        
        


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