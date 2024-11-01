jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.uis_plugin', {
        init : function(ed, url) {


            // Register buttons - trigger above command when clicked
            ed.addButton('uis_button', {
                title : 'Choose Icons',
                image: url + '/20x20.png',
                onclick : function() {

                    //launch popover etc


                        if($("div").hasClass("uis_overlay")){
                            $(".uis_overlay").show();
                            $(".uis_inner").show();
                        } else {
                            $.get("../wp-content/plugins/ultimate-icon-shortcodes-lite/overlay.php", function(data){
                                $("body").append(data);
    
                            });
    

                            $(".uis_inner").show();
    
                            $(document.body).on("click",".uis_overlay",function(){
                                $(".uis_overlay").hide();
    
                            });
    
                            $(document.body).on("click",".uis_inner",function(e){
                                e.stopImmediatePropagation();
                            });
    
                            $(document).keyup(function(e) {
                                if (e.keyCode == 27) {
                                    $(".uis_overlay").hide();
                                }
                            });




                            /*
                                FONTAWESOME BUILDER
                             */
                            $(document.body).on("click","#uis_fontawesome ul.uis_icons li",function(){
                                var icon = $(this).attr('id');
                                var size        = $('#uis_fa_size').val();
                                var rotation    = $('#uis_fa_rotation').val();
                                var spinning    = $('#uis_fa_spinning');


                                content     = '[uis type=fontawesome icon=';
                                content    += icon;

                                if(size != ''){
                                    content    += ' size=';
                                    content    += size;
                                }
                                if(rotation != ''){
                                    content    += ' rotation=';
                                    content    += rotation;
                                }

                                if(spinning.is(':checked')){
                                    content += ' spinning=true';
                                }

                                content    += ']';


                                ed.execCommand('mceInsertContent', false, content);
                                $(".uis_overlay").fadeOut();
                            });
    
    
                        }



                    } // onclick
            });
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            return {
                longname : "Ultimate Icon Shortcode Options",
                author : 'Shane Jones, Alex Moss   ',
                authorurl : 'http://peadig.com/',
                infourl : 'http://peadig.com/',
                version : "1"
            };
        }
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('uis_button', tinymce.plugins.uis_plugin);
});1