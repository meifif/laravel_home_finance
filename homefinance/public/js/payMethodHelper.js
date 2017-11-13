$("#addmethod").submit(function(e) {
    var url = "/paymethod";
    $.ajax({
           type: "POST",
           url: url,
           data: $("#addmethod").serialize(), 
           success: function(data)
           {
        	   tr = $('#showallmethod tr:last').clone();
        	   tr.addClass('new')
        	   tr.find("input[type='text']").val("").focus();
        	   
        	   $('#showallmethod tbody').append(tr);
        	   $('#showallmethod tr:last td:first-child').text(parseInt($('#showallmethod tr:last td:first-child').text())+1);
               $('.new .btn.btn-outline-success').removeClass('btn-outline-success').addClass('btn-outline-danger').val('מחק');              
           }
         });
    e.preventDefault(); 
});