<?php
class Services_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Services Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Services Widget','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return 'fas fa-circle';
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
        return ['pageservices','services','widget','Sectionservices'];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label'=>esc_html__( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );
		// Services Column Seletion
		$this->add_control(
			'services_column',
			[
				'label' => esc_html__( 'Select Services Column', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'columnFour',
				'options' => [
					'columnThree'  => esc_html__( '3', 'picchi-extension' ),
					'columnFour' => esc_html__( '4', 'picchi-extension' ),
					'columnTwo' => esc_html__( '2', 'picchi-extension' ),
				],
			]
		);
		// Services Repeater
		$repeater = new \Elementor\Repeater();

		
		$repeater->add_control(
			'service_media_type',
			[
				'label' => esc_html__( 'Select Media Type', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'Service_icon' => [
						'title' => esc_html__( 'Icon', 'picchi-extension' ),
						'icon' => 'eicon-icon-box',
					],
					'Service_image' => [
						'title' => esc_html__( 'Image', 'picchi-extension' ),
						'icon' => 'eicon-image-box',
					],
					'Service_number' => [
						'title' => esc_html__( 'Number', 'picchi-extension' ),
						'icon' => 'eicon-number-field',
					],
				],
				'default' => 'Service_icon',
				'toggle' => true,
			]
		);
		$repeater->add_control(
			'Service_icon', [

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
				'condition'=>[
					'service_media_type'=>'Service_icon',
				]
				
				
			]
		);
		$repeater->add_control(
			'Service_image', [

				'label' => esc_html__( 'Image', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block'=>true,
				'condition'=>[
					'service_media_type'=>'Service_image',
				]
				
				
			]
		);
		$repeater->add_control(
			'Service_number', [

				'label' => esc_html__( 'Number', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'label_block'=>true,
				'condition'=>[
					'service_media_type'=>'Service_number',
				]
				
				
			]
		);

		$repeater->add_control(
			'services_title', [
				'label' => esc_html__( 'Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add Title' , 'picchi-extension' ),
				'label_block' => true,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'services_description',
			[
				'label' => esc_html__( 'Descriptin', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Add Description' , 'picchi-extension' ),
				'label_block' => true,
				'separator' => 'before',
				
			]
		);
		$this->add_control(
			'services_list',
			[
				'label' => esc_html__( 'Repeater List', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ services_title }}}',
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
        $services_column = $settings['services_column'];
        

		if($services_column == 'columnThree'){
			$services_column_class = 'col-xl-4';
		}
		elseif($services_column == 'columnFour'){
			$services_column_class = 'col-xl-3';
		}
		else{
			$services_column_class = 'col-xl-6';
		}
        

        ?>
		<div class="row">
			<?php
                if ( $settings['services_list'] ) {
                    foreach (  $settings['services_list'] as $item ) {
            ?>
			<div class="<?php echo $services_column_class;?>">
				<div class="single-service">
					<?php
						if(!empty($item['Service_icon']['value'])){
					?>	
							<i class="<?php echo $item['Service_icon']['value'];?>"></i>
					<?php
						}
						elseif(!empty($item['Service_image']['url'])){
					?>
					<img src="<?php echo $item['Service_image']['url'];?>" alt="Services Image">
					<?php		
						}elseif(!empty($item['Service_number'])){
					?>
						<span><?php echo $item['Service_number']; ?></span>
					<?php	
						}
					
					?>
				
					<h4><?php echo $item['services_title'];?></h4>
					<p><?php echo $item['services_description'];?></p>
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
    

    

	

