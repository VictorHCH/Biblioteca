$(document).ready(function(){
    //alert('funciona');
    $('.me ul li a :first').addClass('act');

    $('.me ul li a').click(function(){
        $('.me ul li a').removeClass('act');
        $(this).addClass('act');
    });
});

/*<script>
   $(document).ready(function(){
        $('.me ul li a:first').addClass('active');

        $('.menu ul li a').click(function(){
            $('.me ul li a').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>*/
