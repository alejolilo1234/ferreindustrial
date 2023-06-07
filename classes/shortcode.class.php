<?php

class Shortcode {
    public function make_keywords($list) {
        $html = "";
        $words = explode(", ", $list);
        foreach($words as $key => $value) {
            $html .= "<a href='/?s=$value'>$value</a>&nbsp;";
        }
        return $html;
    }
}