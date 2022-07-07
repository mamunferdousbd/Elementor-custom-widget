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
        // Counter Title
        $this->add_control(
            'counter_title',
            [
                'label'=>esc_html__( 'Title','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Title Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );

        // Counter sub Title
        $this->add_control(
            'counter_sub_title',
            [
                'label'=>esc_html__( 'Sub Title','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html__('Write Sub Title Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        // Counter Description
        $this->add_control(
            'counter_description',
            [
                'label'=>esc_html__( 'Description','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::TEXTAREA,
                'dynamic' => [
					'active' => true,
				],
                'rows'=>10,
                'placeholder'=>esc_html__('Write Your Description Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
		//  Counter Repeater
        $repeater = new \Elementor\Repeater();
		// Counter Icon
		$repeater->add_control(
			'counter_icon',
			[
		   
                'label' => esc_html__( 'Icon', 'picchi-extension' ),
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
		
		// Counter Number
        $repeater->add_control(
			'counter_number', [
				'label' => esc_html__( 'Number', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
				'max' => 1000,
				'step' => 5,
				'default' => 500,
				'label_block' => true,
			]
		);
		// Counter Category
        $repeater->add_control(
			'counter_cat', [
				'label' => esc_html__( 'Category', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add  Category' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'counter_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ counter_cat }}}',
			]
		);

       
        
        $this->end_controls_section();

        /*===================
            Style Tab
        ===================== */

        /*====================
            Title Styling 
        ======================*/
        $this->start_controls_section(
            'counter_title_style',
            [
                'label'=>esc_html__( 'Title Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Tilte Color
        $this->add_control(
			'counter_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .counter-title h2' => 'color: {{VALUE}}',
				],
			]
		);
        // Tilte Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'counter_title_typography',
				'selector' => '{{WRAPPER}} .counter-title h2',
			]
		);

        $this->end_controls_section();
        /*=============================
            Sub Title Styling
        =============================*/
        $this->start_controls_section(
            'counter_sub_title_style',
            [
                'label'=>esc_html__( 'Sub Title Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Sub Title Color
        $this->add_control(
            'counter_sub_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .counter-title h2 span' => 'color: {{VALUE}}',
				],
			]

        );
        // Sub Title Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'counter_sub_title_typography',
				'selector' => '{{WRAPPER}} .counter-title h2 span',
			]
		);
        $this->end_controls_section();
        /*=============================
            Divider Styling
        =============================*/
        $this->start_controls_section(
            'counter_divider_style',
            [
                'label'=>esc_html__( 'Divider Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'counter_border_color',
            [
                'label' => esc_html__( 'Color', 'picchi-extension' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
                'selectors' => [
                    '{{WRAPPER}} .counter-title h2::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

        /*=============================
            Description Styling
        =============================*/
        $this->start_controls_section(
            'counter_description_style',
            [
                'label'=>esc_html__( 'Description Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Description Color
        $this->add_control(
            'counter_description_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .counter-title p' => 'color: {{VALUE}}',
				],
			]

        );
        // Description Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'counter_description_typography',
				'selector' => '{{WRAPPER}} .counter-title p',
			]
		);
        $this->end_controls_section();
        /*=============================
            Counter Card Styling
        =============================*/
        
        $this->start_controls_section(
            'counter_card_style',
            [
                'label'=>esc_html__( 'Counter Card Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Card Background
        $this->add_control(
            'counter_card_bg_color',
			[
				'label' => esc_html__( 'Card Background color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .single-counter' => 'background-color: {{VALUE}}',
				],
			]

        );
        // Card Icon Color
        $this->add_control(
            'counter_card_icon_color',
			[
				'label' => esc_html__( 'Card Icon color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .single-counter i' => 'color: {{VALUE}}',
				],
			]

        );
        // Card Icon Shape
        $this->add_control(
			'counter_card_icon_shape',
			[
				'label' => esc_html__( 'Icon Shape', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => esc_html__( 'default', 'picchi-extension' ),
					'square' => esc_html__( 'Square', 'picchi-extension' ),
					'frame' => esc_html__( 'Framed', 'picchi-extension' ),
					
				],
                'prefix_class'=>'picchi_card_shape-',
			]
		);
        // Card Number Color
        $this->add_control(
            'counter_card_number_color',
			[
				'label' => esc_html__( 'Number Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .single-counter h4 span' => 'color: {{VALUE}}',
				],
			]

        );
        // Card Number Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'counter_card_number_typography',
				'selector' => '{{WRAPPER}} .single-counter h4 span',
			]
		);
        // Card Category Color
        $this->add_control(
            'counter_card_cat_color',
			[
				'label' => esc_html__( ' Category Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#777',
				'selectors' => [
					'{{WRAPPER}} .single-counter h4 ' => 'color: {{VALUE}}',
				],
			]

        );
        // Card Category Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'counter_card_cat_typography',
				'selector' => '{{WRAPPER}} .single-counter h4 ',
			]
		);


        $this->end_controls_section();
        


    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $counter_title = $settings['counter_title'];
        $counter_sub_title = $settings['counter_sub_title'];
        $counter_description = $settings['counter_description'];
        

        ?>
           <div class="row align-items-center">

				<div class="col-xl-5">
					<div class="counter-title">
						<h2><span><?php echo $counter_sub_title;?></span><?php echo $counter_title;?></h2>
						<p><?php echo $counter_description;?></p>
					</div>
				</div>

				<div class="col-xl-7">
					<div class="row">
                        <?php
                            if ( $settings['counter_list'] ) {
                            foreach (  $settings['counter_list'] as $item ) {
                        ?>

						<div class="col-xl-6">
							<div class="single-counter">
								<i class="<?php echo $item['counter_icon']['value'];?>"></i>
								<h4><span class="counter"><?php echo $item['counter_number'];?></span><?php echo $item['counter_cat'];?></h4>
							</div>
						</div>

                        <?php
                            }
                        }
                        ?>


					</div>
				</div>
		   </div>


        <?php


    }
    

    

	

}