check=0;
        $(document).ready(function(){
            $(".answer").hide();
            $(".question").click(function(){
                if(check==0){
                    $(".answer").slideDown();
                    check=1;
                }
                else{
                    $(".answer").slideUp();
                    check=0;
                }
            });
            
        });