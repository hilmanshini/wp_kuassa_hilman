// xyCSS.com - custom JavaScript
function xycss_visual_grid(){
    var e=$("body").width();
    $("body").append('<div class="button" id="xycss-grid"></div>');
    
    $("#xycss-grid").css({
        width:"100%",
        position:"fixed",
        top:"0",
        bottom:"0",
        zIndex:999,
        left:"0",
        background:"url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAAABCAYAAABAKImFAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTFERTRBMEMwOTgwMTFFMUE3OENBOEFCQUUwRjNBMEMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTFERTRBMEQwOTgwMTFFMUE3OENBOEFCQUUwRjNBMEMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MURFNEEwQTA5ODAxMUUxQTc4Q0E4QUJBRTBGM0EwQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MURFNEEwQjA5ODAxMUUxQTc4Q0E4QUJBRTBGM0EwQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgWEI0AAAAAZSURBVHjaYmRgYGhgGEHg////NPUvQIABAPOUA/92vlFHAAAAAElFTkSuQmCC)"});
    var t=1;
    var n=60;
    var r=24;
    for(colLeft=0;colLeft<=e;colLeft=(n+r)*(t-1))
    {
        $("#xycss-grid").append('<span class="col col-'+t+'"><strong>'+t+"</strong><span>"+((n+r)*t-r)+"</span></span>");
        $("#xycss-grid .col-"+t).css({width:n,position:"absolute",top:"0",bottom:"0",left:colLeft,color:"#fff",fontSize:"1em",paddingTop:"0.75em"});
        $(".col strong").css({position:"relative","float":"left",clear:"both",left:"5px",marginTop:"0.25em",marginBottom:"0.50em"});
        $(".col span").css({position:"relative","float":"left",clear:"both",left:"5px"});
        t++
    }
}

function xycss_dynamic_browser_size(){
    $("#browser-size").text("w : "+$(window).width()+" , h : "+$(window).height()).css({width:"120px",top:"0",left:"0",background:"#000",cursor:"pointer",padding:"0.75em",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",opacity:.1});
    var e=window.location.pathname;
    var t="/xy/demos/liquid-matrix/";
    var n="/xy/demos/empty-matrix/";
    
    if(e==t||e==n)
    {
        $("#browser-size").css({background:"#fff",color:"#111",opacity:.7}).hover(function(){$(this).css({opacity:.9})},function(){$(this).css({opacity:.7})})
    }else{
        $("#browser-size").hover(function(){$(this).css("opacity",.5)},function(){$(this).css("opacity",.1)})
    }
}
    
function xycss_display_media_query(){
    $("#media-query").css({bottom:"0",left:"0",background:"#666633",cursor:"pointer",padding:"0.75em",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",opacity:.1});
    var e=window.location.pathname;var t="/xy/demos/liquid-matrix/";var n="/xy/demos/empty-matrix/";
    
    if(e==t||e==n)
    {
        $("#media-query").css({background:"#fff",color:"#111",opacity:.7}).hover(function(){$(this).css("opacity",.9)},function(){$(this).css("opacity",.7)})
    }else{
        $("#media-query").hover(function(){$(this).css("opacity",.5)},function(){$(this).css("opacity",.1)})}
}
        
function loadMatrix(){
    if(window.location.pathname=="/xy/demos/empty-matrix/")
    {
        var e=Math.round($(window).height()/18),t=Math.round($(window).width()/18),n=e*t-e-t;$("body").append('<div id="empty-matrix"></div>');for(var r=0;r<n;++r){$("#empty-matrix").append('<div class="x0 y01"></div>')}
    }
}

function xycss_text_abbrev(){
    if($(window).width()<=849)
    {
        $(".docs a").text("Docs")}else{$(".docs a").text("Documentation")
    }
}

function xycss_dynamic_top_link(){
    if($(window).height()<$(document).height())
    {
        $("body.xycss, body.sub, .demo body").append('<div class="button" id="top-link">top</div>');
        $("#top-link").click(function(){window.location="#top"}).css({width:"40px",bottom:"0",right:"0",background:"#000",color:"#fff",opacity:.2,textDecoration:"none",position:"fixed",cursor:"pointer",padding:"0.75em",zIndex:9999});
        var e=window.location.pathname;var t="/xy/demos/liquid-matrix/";
        var n="/xy/demos/empty-matrix/";
        
        if(e==t||e==n)
        {
            $("#top-link").css({background:"#fff",color:"#111",opacity:.7}).hover(function(){$(this).css({opacity:.9})},function(){$(this).css({opacity:.7})})
        }else{
            $("#top-link").hover(function(){$(this).css("opacity",.5)},function(){$(this).css("opacity",.2)})}}}$(window).resize(function(){if($("#xycss-top-grid").attr("rel")=="on"){$("#xycss-grid").remove();xycss_visual_grid()}});
            $(document).ready(function(){
                                $("body").append('<div class="button" id="xycss-top-grid">layout grid</div>');
                                $("#xycss-top-grid").css({width:"70px",top:"0",right:"100px",background:"#ff0000",cursor:"pointer",padding:"0.75em",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",opacity:.2}).hover(function(){$(this).css("opacity",.5)},function(){$(this).css("opacity",.2)});$("#xycss-top-grid").toggle(function(){$(this).text("hide grid");$("#xycss-grid").show();$(this).attr("rel","on");$("#xycss-grid").remove();xycss_visual_grid()},function(){$(this).text("layout grid");$("#xycss-grid").hide();$(this).attr("rel","off")})
                                });
            $(document).ready(function(){
                                $("body").append('<div class="button" id="xycss-toggle-grid">show matrix</div>');
                                if($.browser.msie){
                                    $("body").addClass("ie");
                                    $("#xycss-toggle-grid").toggle(function(){$("html").addClass("grid")},function(){$("html").removeClass("grid")})
                                }else{
                                    $("#xycss-toggle-grid").toggle(function(){$("head").append('<link rel="stylesheet" title="grid" href="http://xycss.com/xy/wp-content/themes/xycss/css/grid.css?v=1.4c">')},function(){$("[title=grid]").remove()})
                                }
                                $("#xycss-toggle-grid").toggle(function(){$(this).text("hide matrix")},function(){$(this).text("show matrix")}).hover(function(){$(this).css("opacity",.6)},function(){$(this).css("opacity",.3)}).css({width:"70px",top:"0",right:"200px",background:"#336666",cursor:"pointer",padding:"0.75em",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",opacity:.2})
            });
            $(document).ready(function(){
                $("body.xy h1 a, body.xy ul a").hover(function(){
                    var e=$(this).attr("title");
                    var t=$(this).text();
                    $(this).text(e).attr("rel",t).removeAttr("title").wrapInner("<span />")},function(){
                        var e=$(this).text();
                        var t=$(this).attr("rel");
                        $(this).text(t).attr("title",e).removeAttr("rel")
                    }
                );
                $(".xy-menu a").hover(function(){
                    var e=$(this).attr("title");
                    var t=$(this).text();
                    $(this).text(e).attr("rel",t).removeAttr("title")},function(){
                        var e=$(this).text();
                        var t=$(this).attr("rel");
                        $(this).text(t).attr("title",e).removeAttr("rel")
                    }
                )
            });
            
            $(document).ready(function(){
                $("body.xycss, body.sub, body.xy").append('<div class="button" id="home-link" rel="http://xycss.com/">home</div>');
                $("html.demo body").append('<div class="button" id="home-link" rel="http://xycss.com/xy/demos/">menu</div>');
                $("#home-link, #top-link").click(function(){
                    window.location=$(this).attr("rel");return false
                }).css({width:"70px",top:"0",right:"0",background:"#000",cursor:"pointer",padding:"0.75em",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",opacity:.2}).hover(function(){$(this).css("opacity",.5)},function(){$(this).css("opacity",.2)});
                $("html.demo footer a").attr("class","home-link");
                $("a.home-link").css({textDecoration:"none",color:"inherit"})
            });
            
            $(document).ready(function(){
                if($(window).width()>480)
                {
                    $("body").append('<div class="button" id="browser-size"></div>')
                }
                xycss_dynamic_browser_size();
                if($(window).width()>480)
                {
                    $("body").append('<div class="button" id="media-query"></div>')
                }
                xycss_display_media_query()
            });
            
            $(window).resize(function(){
                xycss_dynamic_browser_size();
                xycss_display_media_query();
                var e=window.location.pathname;
                var t="/xy/demos/liquid-matrix/";
                var n="/xy/demos/empty-matrix/";
                if($(window).width()==984||$(window).width()==3e3)
                {
                    $("#browser-size").css({background:"#99ff99",color:"#000",opacity:.8})
                }else{
                    if(e==t||e==n){
                        $("#browser-size").css({opacity:.9});
                        $("#media-query").css({opacity:.9})
                    }else{
                        $("#browser-size").css({opacity:.5});
                        $("#media-query").css({opacity:.5})
                    }
                }
            });
            $(document).ready(function(){
                loadMatrix()
            });
            $(window).resize(function(){
                $("#empty-matrix").remove();
                loadMatrix()
            });
            $(document).ready(function(){
                xycss_text_abbrev()
            });
            $(window).resize(function(){
                xycss_text_abbrev()
            });
            $(document).ready(function(){
                xycss_dynamic_top_link()
            });
            $(window).resize(function(){
                $("#top-link").remove();
                xycss_dynamic_top_link()
            });
            $(document).ready(function(){
                $(".sub article section aside").append('<div class="line"></div>');
                $("#docs-menu a").attr("class","anchor");
                if($.browser.webkit){
                    $("html").addClass("webkit")
                }else if($.browser.mozilla){
                    if($.browser.version>="17.0"){
                        $("html").addClass("mozilla")
                    }else{
                        $("html").addClass("mozilla-older")
                    }
                }else if($.browser.opera){
                    $("html").addClass("opera")
                }
                $.browser.camino=/camino/.test(navigator.userAgent.toLowerCase());
                if($.browser.camino){
                    $("html").addClass("camino")
                }
                var e=window.location.pathname;
                var t="/xy/demos/liquid-matrix/";
                var n="/xy/demos/empty-matrix/";
                if(e==t||e==n){
                    $("html").addClass("matrix");
                    $(".button").css({background:"#fff",color:"#111",opacity:.7}).hover(function(){
                        $(this).css({background:"#fff",color:"#111",opacity:.9})
                    },function(){
                        $(this).css({background:"#fff",color:"#111",opacity:.7})
                    })
                }
            });
            $(document).ready(function(){
                $("input:text, textarea, input:password").each(function(){
                    if(this.value=="")this.value=this.title
                });
                $("input:text, textarea, input:password").focus(function(){
                    if(this.value==this.title)this.value=""
                });
                $("input:text, textarea, input:password").blur(function(){
                    if(this.value=="")this.value=this.title
                });
                $("input:image, input:button, input:submit").click(function(){$(this.form.elements).each(function(){
                    if(this.type=="text"||this.type=="textarea"||this.type=="password"){
                        if(this.value==this.title&&this.title!=""){
                            this.value=""
                        }
                    }
                })
                })
            });
            $(document).ready(function(){function e(){
                if(!document.getElementsByTagName)return;
                var e=document.getElementsByTagName("a");
                for(var t=0;t<e.length;t++)
                {
                    var n=e[t];
                    if(n.getAttribute("href")&&(n.getAttribute("rel")=="external"||n.getAttribute("rel")=="external nofollow"||n.getAttribute("rel")=="nofollow external"))n.target="_blank"
                }
            }e()});
            
            anchor={init:function(){$("a.anchor").click(function(){
                elementClick=$(this).attr("href");
                destination=$(elementClick).offset().top;$("html:not(:animated),body:not(:animated)").animate({scrollTop:destination},300);return false
            })}};
            
            $(document).ready(function(){
                anchor.init()
            });
            $(document).ready(function(){
                $("body").append('<div class="button" id="xycss-help-button"><a href="http://xycss.com/about/">?</a></div>');
                $("#xycss-help-button a").css({width:"36px",height:"36px",top:"0",right:"300px",borderRadius:"36px",lineHeight:"36px",fontSize:"14px",fontWeight:"bold",cursor:"pointer",zIndex:9999,position:"fixed",textDecoration:"none",color:"#fff",background:"rgba(102,153,102,0.5)",opacity:.2,textAlign:"center"}).hover(function(){$(this).css("opacity",.8)},function(){$(this).css("opacity",.5)})
            });
            
            $(document).ready(function(){var e=window.location.pathname;var t=encodeURIComponent("Currently reading: http://xycss.com"+e+" @perishable");var n="/xy/wp-content/themes/xycss/img/twitter.png";$("body").append('<div id="twitter"><a id="twitter_link" href="http://twitter.com/home?status='+t+'" title="Share on Twitter" rel="nofollow" target="_blank">Tweet this!</a></div>');$("#twitter a").css({width:"36px",height:"36px",position:"fixed",bottom:"0",right:"67px",textIndent:"-9999em",opacity:.2,cursor:"pointer",zIndex:9999,textDecoration:"none",background:"url("+n+") no-repeat center center"}).hover(function(){$(this).css("opacity",.8)},function(){$(this).css("opacity",.5)})})