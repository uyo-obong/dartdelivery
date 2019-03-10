 $('.country').change(function(){
  var countryID = $(this).val();  
  let section = $(this).parent().parent()[0];
  let state = $(section.querySelector('.state'));
  let city = $(section.querySelector('.city'));
            // debugger;  
            if(countryID){
              $.ajax({
               type:"GET",
               url:"{{url('get-state-list')}}?country_id="+countryID,
               success:function(res){               
                if(res){
                  state.empty();
                  state.append('<option>Select</option>');
                  $.each(res,function(key,value){
                    state.append('<option value="'+key+'">'+value+'</option>');
                  });

                  state.on('change',function(){
                    var stateID = $(this).val();    
                    if(stateID){
                      $.ajax({
                       type:"GET",
                       url:"{{url('get-city-list')}}?state_id="+stateID,
                       success:function(res){               
                        if(res){
                          city.empty();
                          $.each(res,function(key,value){
                            city.append('<option value="'+key+'">'+value+'</option>');
                          });

                        }else{
                         city.empty();
                       }
                     }
                   });
                    }else{
                      city.empty();
                    }

                  });
                }else{
                 state.empty();
               }
             }
           });
            }else{
              state.empty();
              city.empty();
            }      
          });
