  $( function() {
    $( ".incomeslist, .expancesslist" ).draggable({cancel: "li"});
    $( ".incomeslist, .expancesslist" ).resizable();
  } );
  
  $( "#income" ).click(function() {     
	   $('.incomeslist').toggle("blind", { }, 250);
	   $('.expancesslist').hide();
	});
 
  $( "#fixexpance, #chengeexpance" ).click(function() {     
	   $('.expancesslist').toggle("blind", { }, 250);
	   $('.incomeslist').hide();
	});
  
  $( "#closein" ).click(function() {     
	   $('.incomeslist').toggle("blind", { }, 250);
	});
  
  $( "#closeex" ).click(function() {     
	   $('.expancesslist').toggle("blind", { }, 250);
	});
  
$( function() {
	  $('li').draggable({
		    revert: true
		});
	$("#inname").droppable({
	    drop: function (event, ui) {
	        this.value = $(ui.draggable).text();
	        var i = 1;
            $("tbody>tr:last-child").clone().find("input").each(function() {
            $(this).val('').attr('id', function(_, id) { return id + i });
            }).end().appendTo("table");
            i++;
	    }
	}); 
} );
  


