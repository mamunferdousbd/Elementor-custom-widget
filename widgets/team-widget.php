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
				'label' => esc_html__( 'Team Member Name', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Team Member Name' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Team Member Designation
		$this->add_control(
			'team_member_designation', [
				'label' => esc_html__( 'Team Member Designation', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Team Member Designation' , 'picchi-extension' ),
				'label_block' => true,
			]
		);
		// Team Member Image
		$this->add_control(
			'team_member_image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'placeholder'=>esc_html__('Choose Image.','picchi-extension'),
			]
		);
		// Repeater
		$repeater = new \Elementor\Repeater();
		
		$this->add_control(
			'team_lists',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				
				'title_field' => '{{{ team_member_name }}}',
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
                'default'=>'#777',
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
        
        // Heading Color
        $this->add_control(
			'team_member_designation_title_color',
			[
				'label' => esc_html__( 'Color', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'=>'#000',
				'selectors' => [
					'{{WRAPPER}} .team-hover p' => 'color: {{VALUE}}',
				],
			]
		);
        //  Heading Typography
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'team_member_designation_typography',
				'selector' => '{{WRAPPER}} .team-hover p',
			]
		);
        
        
        


        


        
    
        


        
        


        $this->end_controls_section();
        

        

        
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $team_member_image = $settings['team_member_image']['url'];
        $team_member_name = $settings['team_member_name'];
        $team_member_designation = $settings['team_member_designation'];
        

        ?>
            
		<div class="single-team">
			<img src="<?php echo $team_member_image;?>" alt="">
			<div class="team-hover">
			<div class="team-hover-table">
				<div class="team-hover-cell">
					<h4><?php echo $team_member_name;?></h4>
					<p><?php echo $team_member_designation;?></p>
					<div class="team-social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
					<a href=""><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			</div>
		</div>
	
	
				


        <?php


    }
    

    

	

}