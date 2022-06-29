<?php
class Mamun_Test_widget extends \Elementor\Widget_Base{

    // Widget Name
    public function get_name() {
        return 'Mamun Widget';
    }
    // Widget Title
	public function get_title() {
        return esc_html( 'Mamun Widget','picchi-extension' );
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
			'icons',
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

        $this->end_controls_section();

        
    }
    protected function render(){
        $settings= $this-> get_settings_for_display();
    }

    

	

}
