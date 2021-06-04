// bezier animations
var bez = $.bez([.19,1,.22,1]);
var bezcss = ".19,1,.22,1";
/* Get css3 transition and transform prefixes */
function mg_getProperty(arr0, arr1, arr2){
    var tmp = document.createElement("div");
    for(var i=0, len=arr0.length; i<len; i++){
        tmp.style[arr0[i]] = 800;
        if(typeof tmp.style[arr0[i]] == 'string'){
            return {
                js: arr0[i],
                css: arr1[i],
                jsEnd: arr2[i]
            };
        }
    }
    return null;
}
function mg_getTransition(){
    var arr0 = ["transition", "msTransition", "MozTransition", "WebkitTransition", "OTransition", "KhtmlTransition"];
    var arr1 = ["transition", "-ms-transition", "-moz-transition", "-webkit-transition", "-o-transition", "-khtml-transition"];
    var arr2 = ["transitionend", "MSTransitionEnd", "transitionend", "webkitTransitionEnd", "oTransitionEnd", "khtmlTransitionEnd"];
    return mg_getProperty(arr0, arr1, arr2);
}
function mg_getTransform(){
    var arr0 = ["transform", "msTransform", "MozTransform", "WebkitTransform", "OTransform", "KhtmlTransform"];
    var arr1 = ["transform", "-ms-transform", "-moz-transform", "-webkit-transform", "-o-transform", "-khtml-transform"];
    return mg_getProperty(arr0, arr1, []);
}
function mg_getPerspective(){
    var arr0 = ["perspective", "msPerspective", "MozPerspective", "WebkitPerspective", "OPerspective", "KhtmlPerspective"];
    var arr1 = ["perspective", "-ms-perspective", "-moz-perspective", "-webkit-perspective", "-o-perspective", "-khtml-perspective"];
    return mg_getProperty(arr0, arr1, []);
}
var transition = mg_getTransition();
var transform = mg_getTransform();
var perspective = mg_getPerspective();