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
  $("#DragWordList li").draggable({helper: 'clone'});
  $("#inname").droppable({
    accept: "#DragWordList li",
    drop: function(ev, ui) {
      $(this).insertAtCaret(ui.draggable.text());
    }
  });
  
  $.fn.insertAtCaret = function (myValue) {
	  var thisRow = $( this ).closest( 'tr' )[0];
	  $( thisRow ).clone().insertAfter( thisRow ).find( 'input:text' ).val( '' ).droppable({
		    accept: "#DragWordList li",
		    drop: function(ev, ui) {
		      $(this).insertAtCaret(ui.draggable.text());
		    }
		  });
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
	  $("#fixexpancename, #chengeexpancename").droppable({
	    accept: "#DragWordListExp li",
	    drop: function(ev, ui) {
	      $(this).insertAtCaretexp(ui.draggable.text());
	    }
	  });
	  
	  $.fn.insertAtCaretexp = function (myValue) {
		  var thisRow = $( this ).closest( 'tr' )[0];
		  $( thisRow ).clone().insertAfter( thisRow ).find( 'input:text' ).val( '' ).droppable({
			    accept: "#DragWordListExp li",
			    drop: function(ev, ui) {
			      $(this).insertAtCaret(ui.draggable.text());
			    }
			  });
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

