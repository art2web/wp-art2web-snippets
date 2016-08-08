var $art2web = jQuery.noConflict();
$art2web(document).ready(function() {


});


/* =================================================================================================== */
function centra_altura_elemento(elemento_total, elemento) {
    $art2web(elemento).each(function(index, elemento) {
        var altura_elemento = $art2web(elemento_total).outerHeight();
        var padding_top = (altura_elemento - $art2web(elemento).height()) / 2;
        console.log(padding_top);
        $art2web(elemento).css('padding-top', padding_top);
    });
    return;
}
/* =================================================================================================== */

/* =================================================================================================== */
function centra_largura_elemento(elemento_total, elemento) {
    $art2web(elemento).each(function(index, elemento) {
        var largura_elemento = $art2web(elemento_total).outerWidth();
        var margem_centraliza = (largura_elemento - $art2web(elemento).width()) / 2;
        $art2web(elemento).css('margin-left', margem_centraliza);
    });
    return;
}
/* =================================================================================================== */
