  $( function() {
    $( ".incomeslist, .expancesslist" ).draggable({cancel: "li"});
    $( ".incomeslist, .expancesslist" ).resizable();
  } );
  
  $(document).ready(function() {
	  $(window).keydown(function(event){
	    if(event.keyCode == 13) {
	      event.preventDefault();
	      return false;
	    }
	  });
	});
  
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
  
  function calc_sum_income () {
  $('.invalue').change(function() {
	  var total = 0;
	  $('.invalue').each(function(i, obj) {
		  if ($(obj).val()) {
			  total = total + parseInt($(obj).val());
		  }
	  	});
	  $('#totalin').text(total);
  });
  }
  calc_sum_income();
  
  function calc_sum_fix_expence() {
	  $('.fixexpancevalue').change(function() {
		  var total = 0;
		  $('.fixexpancevalue').each(function(i, obj) {
			  if ($(obj).val()) {
				  total = total + parseInt($(obj).val());
			  }
		  	});
		  $('#totalFixExpance').text(total);
	  });
	  }
  calc_sum_fix_expence();
  
  function calc_sum_chenge_expence() {
	  $('.chengeexpancevalue').change(function() {
		  var total = 0;
		  $('.chengeexpancevalue').each(function(i, obj) {
			  if ($(obj).val()) {
				  total = total + parseInt($(obj).val());
			  }
		  	});
		  $('#totalChengExpence').text(total);
	  });
	  }
  calc_sum_chenge_expence();
  
  function add_delete() {
	  $(".deleteRow").click(function(){
		  $(this).closest('tr').remove();
			calc_sum_chenge_expence();
		    calc_sum_fix_expence();
		    calc_sum_income();
		})
  }

  $( function() {
  $("#DragWordList li").draggable({helper: 'clone'});
  $(".inname").droppable({
    accept: "#DragWordList li",
    drop: function(ev, ui) {
      $(this).insertAtCaret(ui.draggable.text());
    }
  });
  
  $.fn.insertAtCaret = function (myValue) {
	  var thisRow = $( this ).closest( 'tr' )[0];
	  $( thisRow ).clone().insertAfter( thisRow ).find( 'input' ).val( '' ).droppable({
		    accept: "#DragWordList li",
		    drop: function(ev, ui) {
		      $(this).insertAtCaret(ui.draggable.text());
		    }
		  });
	  calc_sum_income();
	  add_delete();
	  return this.each(function(){
	  //IE support
	  if (document.selection) {
	    this.focus();
	    sel = document.selection.createRange();
	    sel.text = myValue;
	    this.focus();
	  }
	  //MOZILLA / NETSCAPE support
	  else if (this.selectionStart || this.selectionStart == '0') {
	    var startPos = this.selectionStart;
	    var endPos = this.selectionEnd;
	    var scrollTop = this.scrollTop;
	    this.value = '';
	    this.value = myValue;

	    this.focus();
	    this.selectionStart = startPos + myValue.length;
	    this.selectionEnd = startPos + myValue.length;
	    this.scrollTop = scrollTop;
	  } else {
	    this.value += myValue;
	    this.focus();
	  }
	  });
	};
  });
  
  //expance

  $( function() {
	  $("#DragWordListExp li").draggable({helper: 'clone'});
	  $(".fixexpancename, .chengeexpancename").droppable({
	    accept: "#DragWordListExp li",
	    drop: function(ev, ui) {
	      $(this).insertAtCaretexp(ui.draggable.text());
	    }
	  });
	  
	  $.fn.insertAtCaretexp = function (myValue) {
		  var thisRow = $( this ).closest( 'tr' )[0];
		  $( thisRow ).clone().insertAfter( thisRow ).find( 'input' ).val( '' ).droppable({
			    accept: "#DragWordListExp li",
			    drop: function(ev, ui) {
			      $(this).insertAtCaret(ui.draggable.text());
			    }
			  });
		  add_delete();
		  calc_sum_chenge_expence();
		  calc_sum_fix_expence();
		  return this.each(function(){
		  //IE support
		  if (document.selection) {
		    this.focus();
		    sel = document.selection.createRange();
		    sel.text = myValue;
		    this.focus();
		  }
		  //MOZILLA / NETSCAPE support
		  else if (this.selectionStart || this.selectionStart == '0') {
		    var startPos = this.selectionStart;
		    var endPos = this.selectionEnd;
		    var scrollTop = this.scrollTop;
		    this.value = '';
		    this.value = myValue;

		    this.focus();
		    this.selectionStart = startPos + myValue.length;
		    this.selectionEnd = startPos + myValue.length;
		    this.scrollTop = scrollTop;
		  } else {
		    this.value += myValue;
		    this.focus();
		  }
		  });
		};
	  });

