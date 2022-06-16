// $(document).ready(function(){
//     //alert('funciona');
//     $('.me ul li a:first').removeClass('a1');
//     $('.me ul li a:first').addClass('act');

//     $('.me ul li a').click(function(){  
//         $('.me ul li a').removeClass('a1');
//         $('.me ul li a').removeClass('act');
//         $(this).addClass('act');
//     });
// });


/*<script>
   $(document).ready(function(){
        $('.me ul li a:first').addClass('active');

        $('.menu ul li a').click(function(){
            $('.me ul li a').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>*/

var url = window.location.pathname;
if(url.endsWith("index.php")){
    document.getElementById("index.php").classList.add("act");
    document.getElementById("index.php").classList.remove("a1");
}
if(url.endsWith("favs.php")){
    document.getElementById("favs.php").classList.add("act");
    document.getElementById("favs.php").classList.remove("a1");
}
if(url.endsWith("usuarios.php")){
    document.getElementById("usuarios.php").classList.add("act");
    document.getElementById("usuarios.php").classList.remove("a1");
}
if(url.endsWith("libros.php")){
    document.getElementById("libros.php").classList.add("act");
    document.getElementById("libros.php").classList.remove("a1");
}
if(url.endsWith("cuenta.php")){
    document.getElementById("cuenta.php").classList.add("act");
    document.getElementById("cuenta.php").classList.remove("a1");
}