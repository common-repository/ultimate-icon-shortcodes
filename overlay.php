<?
    include '_/fontawesome_array.php';
?>

<div class="uis_overlay">
    <div class="uis_inner">
        <h1>Ultimate Icon Shortcodes Lite</h1>

        <ul class="uis_tab_headers">
            <li data-value="uis_fontawesome" class="active">Fontawesome</li>
            <li data-value="uis_brandico">Brandico</li>
            <li data-value="uis_iconic">Iconic</li>
            <li data-value="uis_fontelico">Fontelico</li>
            <li data-value="uis_foundicon">Foundicon</li>
            <li data-value="uis_openwebfonts">Open Web Fonts</li>
            <li data-value="uis_raphael">Raphael</li>
            <li data-value="uis_typicons">Typicons</li>
        </ul>

        <br>

        <div class="uis_tab" id="uis_brandico">

            <h1>Brandico</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <div class="uis_tab" id="uis_iconic">

            <h1>Iconic</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>



        <div class="uis_tab active" id="uis_fontawesome">

            <h1>FontAwesome</h1>
            <p>Created and Maintained by <a href="http://twitter.com/davegandy">Dave Gandy</a>. Created by Font Awesome licensed under <a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a>· Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a>

            </p>
            <div class="uis_header_options_wrap">

                <div class="uis_header_option">
                    <p>Size</p>
                    <select id="uis_fa_size">
                        <option value="">Normal</option>
                        <option value="large">Large</option>
                        <option value="2x">2x</option>
                        <option value="3x">3x</option>
                        <option value="4x">4x</option>
                    </select>

                </div>
                <div class="uis_header_option">
                    <p>Rotation</p>
                    <select id="uis_fa_rotation">
                        <option value="">Normal</option>
                        <option value="rotate-90">Rotate 90</option>
                        <option value="rotate-180">Rotate 180</option>
                        <option value="rotate-270">Rotate 270</option>
                        <option value="flip-horizontal">Flip Horizontal</option>
                        <option value="flip-vertical">Flip Vertical</option>
                    </select>
                </div>
                <div class="uis_header_option">
                    <p>Spinning</p>
                    <input type="checkbox" id="uis_fa_spinning">
                </div>

            </div>

            <br class="clear"><br>
            <div class="uis_tab_inner">

                <ul class="uis_icons">
                    <? foreach($fa as $icon){
                        echo '<li id="'.$icon.'" title="'.$icon.'"><i class="'.$icon.'"></i></li>';
                    } ?>
                </ul>

            </div>
        </div>

        <div class="uis_tab" id="uis_fontelico">

            <h1>Fontelico</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <div class="uis_tab" id="uis_foundicon">

            <h1>Foundation Icons</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <div class="uis_tab" id="uis_openwebfonts">

            <h1>Open Web Fonts</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <div class="uis_tab" id="uis_raphael">

            <h1>Raphael</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <div class="uis_tab" id="uis_typicons">

            <h1>Typicons</h1>
            <p class="upgrade">Please <a href="http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/?utm_source=WordPress&utm_medium=plugin&utm_campaign=Lite">Upgrade to get this and the other fonts</a>.</p>
        </div>

        <script type="text/javascript">

            jQuery(document).ready(function($){
                $('.uis_tab_headers li').on('click', function(){
                    var tab = $(this).attr('data-value');

                    $('.uis_tab_headers li').removeClass('active');
                    $(this).addClass('active');

                    $('.uis_tab').removeClass('active');
                    $('#'+tab).addClass('active');


                })
            })

        </script>

        <p class="uis_clearfix uis_right">&copy; 2013 Created by the Peadig Team.</p>


    </div>
</div>