
/***************** RTL *********************/
$('#myonoffswitch24').click(function () {
    if (this.checked) {
        _bs('.carousel').create.trigger('rtl');

    } 
});
/***************** RTL *********************/

/***************** LTR *********************/

$('#myonoffswitch23').click(function () {
    if (this.checked) {
        _bs('.carousel').create.trigger('ltr');
    } 
});
/***************** LTR ******************/