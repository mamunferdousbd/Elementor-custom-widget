<?php
class Test_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Test Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Picchi Test','picchi-extension' );
    }
    // Widget Icon
	public function get_icon() {
        return 'eicon-t-letter-bold';
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
                'label'=>esc_html( 'Content','picchi-extension' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );
        $this->add_control(
            'title',
            [
                'label'=>esc_html( 'Title','picchi-extension' ),
                'tab'=>  \Elementor\Controls_Manager::TEXT,
                'placeholder'=>esc_html('Put Your Text Here.','picchi-extension'),
                'description'=>esc_html('Here you can Edit toy text.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        $this->add_control(
            'description',
            [
                'label'=>esc_html( 'Description','picchi-extension' ),
                'tab'=>  \Elementor\Controls_Manager::TEXTAREA,
                'placeholder'=>esc_html('Put Your Text Here.','picchi-extension'),
                'description'=>esc_html('Here you can Edit toy text.','picchi-extension'),
                'seperator'=>'after',
                'label_block'=>true,
            ]
        );
        
        $this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'seperator'=>'after',
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

        $this->add_control(
			'font_family',
			[
				'label' => esc_html__( 'Font Family', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .title' => 'font-family: {{VALUE}}',
				],
			]
		);
        $this->add_control(
            'gallery',
            [
                'label'=>esc_html__('Add Image','picchi-extension'),
                'type'=> \Elementor\Controls_Manager::GALLERY,
                'default'=>[],
            ]
        );

        $this->end_controls_section();

        
    }
    protected function render(){
        $settings= $this-> get_settings_for_display();
        echo '<h2>'.$settings['title'] .'</h2>';
        echo '<p>'.$settings['description'].'</p>';
        ?>
        <div class="my-icon-wrapper">
        <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </div>
        <?php
        foreach ( $settings['gallery'] as $image ) {
			echo '<img src="' . esc_attr( $image['url'] ) . '">';
		}
        
        

    }

    

	

}
