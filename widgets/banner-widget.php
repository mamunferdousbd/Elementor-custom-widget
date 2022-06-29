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

        
    }
    

    

	

}
