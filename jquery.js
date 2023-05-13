
     

        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });

        $(document).ready(function(){
            
          $('#jid,#jname,#jemail,#jstate').focus(function(){
            
            $(this).css('background','#f2f2f2');

          });

          $('#jid,#jname,#jemail,#jstate').blur(function(){
            
            $(this).css('background','white');

          });

          

        });


       