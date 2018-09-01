    $(document).ready(function(){
        $('.button').mouseenter(function(){
            $(this).find('div').animate({width:'100%'}, 200);
        });
        $('.button').mouseleave(function(){
            $(this).find('div').animate({width:0}, 200);
        });
        $('.button').click(function(){      
        var name=$(this).attr('id');
        $('.listBlock').not('.'+name).fadeOut(100);
        setTimeout(appear, 100);
        function appear(){
            $('.'+name).fadeToggle(200);
        }
        });
        $('#info').find('li').click(function(){
            var $modelWindow=$(this).attr('id');
            $('.overlay').fadeIn(200);
            $('.modelWindow').fadeIn(200);
            $('.modelContent').load('ModelWindows/'+$modelWindow+'.html');
            $('.close').click(function(){
                $('.overlay').fadeOut(200);
                $('.modelWindow').fadeOut(200);
                $('.modelContent').empty();
                
            });
        });
     /* $('.pageChange').click(function(){
         var pageName=$(this).attr('id');
        $('#mainPart').fadeOut(200);
        setTimeout(empty,200);
        setTimeout(load, 200);
        setTimeout(appear,400);
        function empty(){
            $('#mainPart').empty();
        }
        function load(){
         $('#mainPart').load(pageName+'.html');   
        }
        function appear(){
        $('#mainPart').fadeIn(200);
        }
        });*/
    });