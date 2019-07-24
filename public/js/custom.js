$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


  $(document).ready(function () {
      
    $.ajax({
        type: "GET",
        url: "/customer/",
        data: "data",
        dataType: "json",
        success: function (customers) {
            // console.log('success',customer);

            $.each(customers, function (i,customer) { 
                 $('#sagor').append('<tr>'+
                 '<td>'+customer.name+'</td>'+
                 '<td>'+customer.address+'</td>'+
                 '<td>'+customer.description+'</td>'+
                
                  
            ' </tr>'
                 
                 
                 
                 );
            });
        }

    });
  });
$('#submit').on('click', function (e) {
    e.preventDefault();
    var formData = {
       
        name     : $('input[name=name]').val(),
        address    : $('input[name=address]').val(),
        description : $('input[name=description]').val(),
    }
    console.log(formData);
        
      $.ajax({
          type: "POST",
          url: "/customer/add",
          data: formData,
          async:false,
          cache:false,
          
          
          success: function (newcustomer) {
            
             
            $('#sagor').append('<tr>'+
            '<td>'+newcustomer.name+'</td>'+
            '<td>'+newcustomer.address+'</td>'+
            '<td>'+newcustomer.description+'</td>'+
           
             
       ' </tr>'
            
            
            
            );
                 console.log(newcustomer) 
          }
      }); 
});

//   $().click(function (e) { 
//       e.preventDefault();

  
//   });