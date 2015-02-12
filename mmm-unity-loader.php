<?php

/*
Plugin Name: Mmm Unity Loader
Plugin URI: http://www.mediamanifesto.com
Description: A simple shortcode for loading unity web apps things [MmmUnityLoader src="YourFileUrlHere.unity3d" height="800" width="600"]Click to Load Text Here[/MmmUnityLoader]
Version: 1.0
Author: Adam Bissonnette
Author URI: http://www.mediamanifesto.com
*/

function LoadUnityPlayer($atts, $content=null)
{
    /* See https://docs.unity3d.com/353/Documentation/Manual/WorkingwithUnityObject.html for params and attributes for function  */

    extract( shortcode_atts( array(
        'src' => '',
        'height' => '',
        'width' => '',
        'params' => '',
        'attributes' => '{}'
        /* Callbacks not implemented */
        ), $atts ) );

    $output = sprintf('<script type="text/javascript" src="http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                if(typeof unityObject == "undefined"){
                    $(\'#unityPlayer\').show();
                }
                else {
                    $(\'#MmmUnityLoader\').show();
                    $(\'#MmmUnityLoader\').click(function(e){unityObject.embedUnity("unityPlayer", "%s", "%s", "%s", "%s", "%s");$(\'#MmmUnityLoader\').hide()});
                }
            });
        </script>', $src, $height, $width, $params, $attributes);

    $output .= '<div id="unityPlayer" style="display: None;">
                <div class="missing">
                    <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
                        <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
                    </a>
                </div>
            </div>';

    if ($content == null)
    {
        $content = "Click here to load";
    }

    $output .= '<div id="MmmUnityLoader" style="display: None;">' . $content . '</div>';

    return $output;
}

add_shortcode( 'MmmUnityLoader', 'LoadUnityPlayer' );

?>