$(document).ready(function () {
    $('.open-my-modal1').click(function(){
        $('#v-regI').val($(this).data('v-reg'));
        $('#v-reg2').html($(this).data('v-reg'));
        $('#v-type1').html($(this).data('v-type'));
        $('#v-type2').html($(this).data('v-type'));
        $('#v-price1').html($(this).data('v-price'));
        $('#v-price2').html($(this).data('v-price'));
    });
});

$(document).ready(function () {
    $('.open-my-modal2').click(function(){
        $('#bid').val($(this).data('bid'));
        $('#v-regI').val($(this).data('v-reg'));
        $('#v-reg2').html($(this).data('v-reg'));
        $('#v-type').html($(this).data('v-type'));
        $('#v-price').html($(this).data('v-price'));
        $('#pdate').html($(this).data('pdate'));
        $('#rdate').html($(this).data('rdate'));
    });
});

$(document).ready(function () {
    $('.open-my-modal3').click(function(){
        $('#Cbid').val($(this).data('bid'));
        $('#Cv-regI').val($(this).data('v-reg'));
        $('#Cv-reg2').html($(this).data('v-reg'));
        $('#Cv-type').html($(this).data('v-type'));
        $('#Cv-price').html($(this).data('v-price'));
        $('#Cpdate').html($(this).data('pdate'));
        $('#Crdate').html($(this).data('rdate'));
    });
});