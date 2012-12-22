var SearchToggle = jQuery.Class.create({
    
  initialize: function(options){
    var defaults = {
      toggle_on_focus: false,
      elem_id: false,
      toggle_id: false,
      toggle_text_id: false,
    };
    this.options = jQuery.extend(true, defaults, options);
    
    this.toggle_on_focus = this.options.toggle_on_focus;
    this.advanced_search = jQuery(this.options.elem_id);
    this.search_toggle = jQuery(this.options.toggle_id);
    if(this.options.toggle_text_id){
      this.search_text = jQuery(this.options.toggle_text_id);
    }
    else {
      this.search_text = jQuery(this.options.toggle_id);
    }
    
    this.search_toggle.click(jQuery.proxy(this.toggleSearch, this));
  },
  
  toggleSearch: function(event){
    if(this.advanced_search.is(':visible')){
      this.search_text.html('+');
      jQuery(this.options.elem_id).slideUp();
    } else {
      this.search_text.html('-');
      jQuery(this.options.elem_id).slideDown();
    }
  }

});