<?php
/*
@package smhthmc theme

    ===============================
        Table of Content
    ===============================
    Usage: 

[toc][toc-item]First Item[toc-item-nested]First nested item[/toc-item-nested][/toc-item][/toc]

Bunu için toc.js dosyasını ve functions.php dosyasında gerekli değişiklikleri yaptın ancak henüz hazır değil.
toc.js içerisinde gerekli değşiklikleri yapman gerek. 

*/


function smhthmc_toc($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'id' =>'toc',
            'class'=>'table-of-contents',
            'data-aos'=>'',
            'data-aos-anchor'=>'',
            'data-aos-anchor-placement'=>''
        ), 
        $atts, 
        'toc'
    );

    return '<div id="' .$atts['id'] . '" class="' .$atts['class'] . '" data-aos="' .$atts['data-aos'] . '" data-aos-anchor="' .$atts['data-aos-anchor'] . '" data-aos-anchor-placement="' .$atts['data-aos-anchor-placement'] . '">
        <ol>' .do_shortcode($content) . '</ol>
    </div>';
}

add_shortcode('toc', 'smhthmc_toc');


function smhthmc_toc_item($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'target' =>''
        ), 
        $atts, 
        'toc-item'
    );

    return '<li>
                <a href="#" class="js-scroll-to" data-target="#' .$atts['target'] . '">' .do_shortcode($content) . '</a>
            </li>';
}

add_shortcode('toc-item', 'smhthmc_toc_item');

function smhthmc_toc_item_nested($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'target' =>''
        ), 
        $atts, 
        'toc-item-nested'
    );

    return '<ol>
                <li>
                    <a href="#" class="js-scroll-to" data-target="#' .$atts['target'] . '">' .$content . '</a>
                </li>
            </ol>';
}

add_shortcode('toc-item-nested', 'smhthmc_toc_item_nested');


/*
@package smhthmc theme

    ===============================
        Inline Code
    ===============================
*/

function smhthmc_code_inline($atts, $content=null) {
    //get the attributes
    /* $atts = shortcode_atts(
        array(
            'target' =>''
        ), 
        $atts, 
        'code-inline'
    ); */

    return '<code class="inline-code">' .$content . '</code>';
}

add_shortcode('code-inline', 'smhthmc_code_inline');

/*
@package smhthmc theme

    ===============================
        Code Highlight Attached 
    ===============================
*/
function smhthmc_code_highlight($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'lang' =>'markup'
        ), 
        $atts, 
        'code'
    );

    return '<!-- Code Highlight Attached -->
    <div class="code-highlight-attached">
        <div class="code-highlight code-highlight-with-label" data-label="">
            <span class="js-copy-to-clipboard copy-code">kopyala</span>
            <pre><code class="language-' .$atts['lang'] . ' js-code">'.$content.'</code></pre>
        </div>
    </div>
    <!-- End of Code Highlight Attached -->';
}

add_shortcode('code', 'smhthmc_code_highlight');

/*
@package smhthmc theme

    ===============================
        Multi Code Highlight Attached 
    ===============================
*/
function smhthmc_multi_code_highlight($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
        ), 
        $atts, 
        'code-multi'
    );

    return '<div class="code-highlight-attached">
    '.do_shortcode($content).
    '</div>';
}

add_shortcode('code-multi', 'smhthmc_multi_code_highlight');

/*
@package smhthmc theme

    ===============================
        Multi Code Inner Highlight Attached 
    ===============================
*/
function smhthmc_multi_code_inner_highlight($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'label'=> 'HTML',
            'lang'=>'markup'
        ), 
        $atts, 
        'code-multi-inner'
    );

    return '<div class="code-highlight code-highlight-with-label" data-label="' .$atts['label'] . '">
                <span class="js-copy-to-clipboard copy-code">copy</span> 
                <pre><code class="language-' .$atts['lang'] . ' js-code">'.$content.'</code></pre>
            </div>';
}

add_shortcode('code-multi-inner', 'smhthmc_multi_code_inner_highlight');

/*
@package smhthmc theme

    ===============================
        Image and Code tabs
    ===============================

    [tab img="/image/foo.png"]
        [code]
            ...code
        [/code]
    [/tab]
*/

function smhthmc_tab_button($atts, $content=null) {
    //get the attributes
    $atts = shortcode_atts(
        array(
            'src' =>'',
            'alt' =>'',
            'class' =>'image',
            'first-headline' => 'Sayfayı Görüntüle',
            'second-headline' => 'Kodu Görüntüle',
            'first-tab'=>'image',
            'second-tab'=>'code'
        ), 
        $atts, 
        'tab'
    );

    if($atts['first-tab']=='image') {
        $first_tab_inner = '<div class="helper center">
        <img src="' .$atts['src'] . '" class="'.$atts['class'].'" alt="'.$atts['alt'].'">
    </div>';
    }elseif ($atts['first-tab']=='code') {
        $first_tab_inner= do_shortcode($content);
    }

    if($atts['second-tab']=='image') {
        $second_tab_inner = '<div class="helper center">
        <img src="' .$atts['src'] . '" class="'.$atts['class'].'" alt="'.$atts['alt'].'">
    </div>';
    }elseif ($atts['second-tab']=='code') {
        $second_tab_inner= do_shortcode($content);
    }

    return '<!-- Show code button -->
    <div class="tabs js-tabs code-highlight-tabs code-highlight-tabs-center">
        <h4 class="tab-title">
            <i class="fa fa-cube"></i>'.$atts['first-headline'].'</h4>
        <div class="tab-content">
            '.$first_tab_inner.'
        </div>
        <h4 class="tab-title">
            <i class="fa fa-code"></i>'.$atts['second-headline'].'</h4>
        <div class="tab-content">
            ' .$second_tab_inner . '
        </div>
    </div>
    <!-- End of Show code button -->';
}

add_shortcode('tab', 'smhthmc_tab_button');