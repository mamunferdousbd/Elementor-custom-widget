<?php
class Team_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Team Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Team','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return ' eicon-heading';
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
		
		// Team Member Name
		$this->add_control(
			'team_member_name', [
				'label' => esc_html__( 'Team Member Name', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Team Member Name' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Team Member Designation
		$this->add_control(
			'team_member_designation', [
				'label' => esc_html__( 'Team Member Designation', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Team Member Designation' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Team Member Image
		$this->add_control(
			'team_member_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'placeholder'=>esc_html__('Choose Image.','picchi-extension'),
			]
		);
		// Show Social Icon
		$this->add_control(
			'show_social_icon',
			[
				'label' => esc_html__( 'Show Icon', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'picchi-extension' ),
				'label_off' => esc_html__( 'Hide', 'picchi-extension' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater = new \Elementor\Repeater();
		// Team Icon Title
        $repeater->add_control(
			'team_icon_title', [
				'label' => esc_html__( 'Team Icon Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Team Icon Title' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Team Social Icons
		$repeater->add_control(
			'team_social_icon',
			[
				'label' => esc_html__( 'Team Social Icon', 'picchi-extension' ),
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
		// Team Icon link
		$repeater->add_control(
            'team_icon_link',
            [
                'label'=>esc_html__( 'Team Icon Link','picchi-extension' ),
                'type'=>  \Elementor\Controls_Manager::URL,
                'placeholder'=>esc_html__('Put Your Social Link Here.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
       
		
		$this->add_control(
			'team_social_lists',
			[
				'label' => esc_html__( 'Team Social Icon Lists', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ team_icon_title }}}',
				'condition'=>[
					'show_social_icon'=>'yes',
				],
				
			]
		);

        
        $this->end_controls_section();

        /*===================
            Style Tab
        ===================== */
        $this->start_controls_section(
            'team_style_section',
            [
                'label'=>esc_html__( 'Style','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        // Team Member Name Title
        $this->add_control(
			'team_member_name_title',
			[
				'label' => esc_html__( 'Team Member Name', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Team Member Name Color
        $this->add_control(
			'team_member_name_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .team-hover h4' => 'color: {{VALUE}}',
				],
			]
		);
        // Team Member Name typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'team_member_name__title_typography',
				'selector' => '{{WRAPPER}} .team-hover h4',
			]
		);
        // Team Member Designation Title
        $this->add_control(
			'team_member_designation_title',
			[
				'label' => esc_html__( 'Team Member Designation', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        // Team Member Designation Color
        $this->add_control(
			'team_member_designation_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .team-hover p' => 'color: {{VALUE}}',
				],
			]
		);
        // Team Member Designation Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'team_member_designation_typography',
				'selector' => '{{WRAPPER}} .team-hover p',
			]
		);
		// Team Member Social Icon Style Title
		$this->add_control(
			'team_member_icon_title',
			[
				'label' => esc_html__( 'Team Member Icon', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition'=>[
					'show_social_icon'=>'yes',
				],
			]
		);
		// Team Member Social Icon Color
		$this->add_control(
			'team_member_social_icon_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#fff',
				'selectors' => [
					'{{WRAPPER}} .team-social a' => 'color: {{VALUE}}',
				],
				'condition'=>[
					'show_social_icon'=>'yes',
				],
			]
		);
		// Team Member Social Icon Size
		$this->add_control(
			'team_member_social_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 50,
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
					'{{WRAPPER}} .team-social a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition'=>[
					'show_social_icon'=>'yes',
				],
			]
		);
        
        
        $this->end_controls_section();
        

        

        
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $team_member_image = $settings['team_member_image']['url'];
        $team_member_name = $settings['team_member_name'];
        $team_member_designation = $settings['team_member_designation'];
        $show_social_icon = $settings['show_social_icon'];

        

        ?>
            
		<div class="single-team">
			<img src="<?php echo $team_member_image;?>" alt="">
				<div class="team-hover">
					<div class="team-hover-table">
						<div class="team-hover-cell">
							<h4><?php echo $team_member_name;?></h4>
							<p><?php echo $team_member_designation;?></p>

							<?php 
								if($show_social_icon === 'yes'){
							?>
							<div class="team-social">
							<?php
								if ( $settings['team_social_lists'] ) {
									foreach (  $settings['team_social_lists'] as $item ) {
							?>
								<a href="<?php echo $item['team_icon_link']['url'];?>"><i class="<?php echo $item['team_social_icon']['value'];?>"></i></a>
							<?php
						}}?>	
							</div>
							<?php
							 }
							?>
						</div>
					</div>
				</div>
		</div>
	
	
				


        <?php


    }
    

    

	

}