<?php
class About_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'About Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'About Widget','picchi-extension' );
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
        return ['general'];
    }
    // For Searching Widget 
	public function get_keywords() {
        return ['custom','about','widget'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        // About  Heading
        $this->add_control(
            'about_heading',
            [
                'label'=>esc_html__( 'About Heading','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your About Heading Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // About Description 
        $this->add_control(
            'about_description',
            [
                'label'=>esc_html__( 'About Description','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::WYSIWYG,
                'placeholder'=>esc_html__('Write Your About Description  Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
       
        // About Button Text
        $this->add_control(
            'about_btn_text',
            [
                'label'=>esc_html__( 'About Button Text','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // About Button  Link
        $this->add_control(
            'about_btn_link',
            [
                'label'=>esc_html__( 'About Button Link','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::URL,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // About Image
        $this->add_control(
			'about_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block'=>true,
                'seperator'=>'before',
                'placeholder'=>esc_html__( 'Choose About Image', 'picchi-extension' ),
				
			]
		);
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
			'about_feature_title', [
				'label' => esc_html__( 'About Feature Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'About Feature Title' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'about_feature_desc', [
				'label' => esc_html__( 'About Feature Description', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'About Feature Description' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
         // About Feature Button Text
         $repeater->add_control(
            'about_feature_btn_text',
            [
                'label'=>esc_html__( 'About Feature Button Text','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Your Button Text Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // About Feature Button  Link
        $repeater->add_control(
            'about_feature_btn_link',
            [
                'label'=>esc_html__( 'About Feature Button Link','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::URL,
                'placeholder'=>esc_html__('Write Your Button Link Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        $this->add_control(
			'about_features_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ about_feature_title }}}',
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
			'about_title',
			[
				'label' => esc_html__( 'About Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // About Title Color
        $this->add_control(
			'about_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .about-text h4' => 'color: {{VALUE}}',
				],
			]
		);
        // About Title Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_title_typography',
				'selector' => '{{WRAPPER}} .about-text h4',
			]
		);
        
        $this->add_control(
			'about_description_heading',
			[
				'label' => esc_html__( 'About Description', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // About Description Color
        $this->add_control(
			'about_description_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .about-text p' => 'color: {{VALUE}}',
				],
			]
		);
        //  About Description Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_description_typography',
				'selector' => '{{WRAPPER}} .about-text p',
			]
		);
        
        
        

        
        /*==========================
            Button One
        ============================= */
        $this->add_control(
			'about_btn_title',
			[
				'label' => esc_html__('About Button','picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->start_controls_tabs(
			'style_tabs_about_btn'
		);

        /*===================
        Button One Normal Style
         ===================*/

		$this->start_controls_tab(
			'about_btn_normal_tab',
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
        $about_heading = $settings['about_heading'];
        $about_description = $settings['about_description'];
        $about_btn_text = $settings['about_btn_text'];
        $about_btn_link = $settings['about_btn_link']['url'];
        $about_image = $settings['about_image']['url'];
        // $btn_two_text = $settings['btn_two_text'];
        // $btn_two_link = $settings['btn_two_link']['url'];

        ?>
            <div class="row">
				<div class="col-xl-6">
					<div class="about-text">
						<h4><?php echo $about_heading;?></h4>
                        <?php echo $about_description;?>
						<a href="<?php echo $about_btn_link;?>" class="box-btn"><?php echo $about_btn_text?></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-img">
						<img src="<?php echo $about_image;?>" alt="Image" />
					</div>
				</div>
			</div>
            <div class="row pt-100">
                <?php
                if ( $settings['about_features_list'] ) {
                    foreach (  $settings['about_features_list'] as $item ) {
                ?>
				<div class="col-xl-4">
					<div class="single-about">
						<h4><?php echo $item['about_feature_title'];?></h4>
						<p><?php echo $item['about_feature_desc'];?> </p>
						<a href="<?php echo $item['about_feature_btn_link']['url'];?>"><?php echo $item['about_feature_btn_text'];?></a>
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