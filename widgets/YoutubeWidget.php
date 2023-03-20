<?php
class YoutubeWidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('youtube_widget', 'Youtube Widget');
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $youtube = isset($instance['youtube']) ? $instance['youtube'] : '';
        echo '<iframe width="465" height="315" src="https://www.youtube.com/embed/' . esc_attr($youtube) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        $youtube = isset($instance['youtube']) ? $instance['youtube'] : '';
        ?>
        <p>
            <label for="<?= $this->get_field_id('title') ?>">Titre</label>
            <input class="widefat" type="text" name="<?= $this->get_field_name('title') ?>"
                id="<?= $this->get_field_id('title') ?>" value="<?= esc_attr($instance['title']) ?>">
        </p>
        <p>
            <label for="<?= $this->get_field_id('youtube') ?>">ID YouTube</label>
            <input class="widefat" type="text" name="<?= $this->get_field_name('youtube') ?>"
                id="<?= $this->get_field_id('youtube') ?>" value="<?= esc_attr($instance['youtube']) ?>">
        </p>
        <?php
    }

    public function update($newInstance, $oldInstance)
    {
        return $newInstance;
    }
}