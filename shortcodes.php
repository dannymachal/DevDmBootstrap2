<?php

//////////////////////////////////////////////////////////
// Button
// example. [btn size='small' type='info' link='http://devdm.com' icon="icon-heart" icontype="icon-inverse"] Go To the DevDm.com Website [/btn]
//////////////////////////////////////////////////////////

    function btn_func($atts, $content = NULL) {
        extract( shortcode_atts( array(
            'size' => '',
            'type' => '',
            'link' => '#',
            'icon' => '',
            'icontype' => 'icon-white'
        ), $atts));

        if ($size != '') {
            $size = ' btn-' . $size;
        }

        if ($icon != '') {
            $icon = '<i class="'. $icon .' '. $icontype. '"></i>';
        }

        if ($type != '') {
            $type = ' btn-' . $type;
        }

        $btn = "<a type='button' href='". $link ."' class='btn" . $size . "" . $type. "'>" . $icon . $content . "</a>";
        return $btn;
    }

    add_shortcode('btn', 'btn_func');

//////////////////////////////////////////////////////////
// Alert Box
// example. [alert type='info' dismiss='yes' size='3' title='Alert Block Title'] Go To the DevDm.com Website [/alert]
//////////////////////////////////////////////////////////

function alert_func($atts, $content = NULL) {
    extract( shortcode_atts( array(
        'type' => '',
        'dismiss' => '',
        'size' => '',
        'title' => ''
    ), $atts));

    if ($dismiss == 'yes') {
        $dismiss = "data-dismiss='alert'";
        $dismisslink ="<a class='close'>&times;</a>";
    } else {
        $dismiss = '';
        $dismisslink = '';
    }

    if ($title != '') {
        $title = "<h4 class='alert-heading'>".$title."</h4>";
        $block = " alert-block ";
    } else {
        $title = "";
        $block = "";
    }

    if ($type != '') {
        $type = " alert-" . $type ." ";
    }

    if ($size != '') {
        $size = " span" . $size;
    }


    $alert = "<div class='alert". $block ."". $type ."". $size ."'". $dismiss .">";
    $alert .= $dismisslink . $title;
    $alert .= "<p>". $content . "</p>";
    $alert .= "</div>";
    return $alert;
}

add_shortcode('alert', 'alert_func');

add_filter('widget_text', 'do_shortcode');