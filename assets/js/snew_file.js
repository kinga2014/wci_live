(function($){
  
    function kiFooter(){
        
        // Default variables.
        var self = this,
            kiFooterClasses         = 'kiFooter',
            kiFooterToggleClasses   = 'kiFooter-toggle',
           	kiFooterInnerClasses    = 'kiFooter-inner',
            kiFooterTitleClasses    = 'kiFooter-title',
            kiFooterContentClasses  = 'kiFooter-content';
        
        // Constructor.
        this.init = function(options, elem){
            
            // Check if kiFooter is attached to a custom DOM element.
            // If this is true, we enforce custom CSS rules for compatibility.
            if(elem.length>0) {
                self.elem = $(elem);
                self.elem.css({'position':'relative', 'overflow':'hidden'});
            }
            
            // Extend the default settings.
            self.settings = $.extend({
                                        title           : null,
                                        autoOpen        : true,
                                        hideOnClose     : false,
                                        content         : null,
                                        ajaxSettings    : null,
                                        beforeClose     : null,
                                        beforeOpen      : null,
                                        extraClasses    : null,
                                        animationSpeed  : 100,
                                        extraNoticeInterval : 0
                                    }, options);
                                    
            // Create the html container.
            var kiFooter = (self.kiFooter = $('<div></div>')).
                            appendTo((self.elem ? self.elem : document.body)).
                            addClass(kiFooterClasses+(self.settings.extraClasses ? ' '+self.settings.extraClasses : '')),
                        
                kiFooterToggle = (self.kiFooterToggle = $('<div></div>')).
                                    appendTo(self.kiFooter).
                                    addClass(kiFooterToggleClasses),
                 
                kiFooterToggleIcon = (self.kiFooterToggleIcon = $('<span></span>')). // +
                                       appendTo(self.kiFooterToggle),
                 
                kiFooterInner = (self.kiFooterInner = $('<div></div>')).
                                    appendTo(self.kiFooter).
                                    addClass(kiFooterInnerClasses), 
                                
                kiFooterTitle = (self.kiFooterTitle = $('<div></div>')).
                                    appendTo(self.kiFooterInner).
                                    addClass(kiFooterTitleClasses).
                                    html((self.settings.title ? self.settings.title : null)), 
                                
                kiFooterContent = (self.kiFooterContent = $('<div></div>')).
                                    appendTo(self.kiFooterInner).
                                    addClass(kiFooterContentClasses),
                                
                hasContent = false;
            
            // Enforce the kiFooter to be absolute if it's attached to a custom DOM element.
            if(self.elem){
                self.kiFooter.css({'position':'absolute'});
            }
            
            // Fill the content with an existing DOM element.
            if(self.settings.content instanceof jQuery && self.settings.content.length>0){
                self.kiFooterContent.append(self.settings.content);
                self.settings.content.show();
                hasContent = true;
            }
            
            // Fill the content with a static string.
            if(typeof self.settings.content == 'string'){
                self.kiFooterContent.html(self.settings.content);
                hasContent = true;
            }
            
            // Fill the content with AJAX html response.
            if(self.settings.ajaxSettings && typeof self.settings.ajaxSettings.url == 'string'){
                
                // Default AJAX success callback.
                // If the user doesn't use a custom AJAX success() function 
                // fallback into the default behaviour.
                if(!$.isFunction(self.settings.ajaxSettings.success)){
                    
                    self.settings.ajaxSettings.success = function(data){
                    
                        if(typeof data == 'object' && data.notice_count){
                            self._setToggleIcon('<sup>'+data.notice_count+'</sup>');
                            self.kiFooterContent.html(data.notice_content);
                            self._open();
                        }
                        if(typeof data == 'string'){
                            self.kiFooterContent.html(data);
                            self._open();
                        }                    
                    
                    }
                }
               
                $.ajax($.extend({context: self}, self.settings.ajaxSettings));
                hasContent = true;
                
            }
            
            // Stop the execution if there is no content.
            if(!hasContent){
                return false;
            }
            
            // Hide the title container if no text is received.
            if(self.settings.title==null || self.settings.title==''){
                self.kiFooterTitle.hide();
            }
            
            // Update the icon to (x) if hideOnClose option is present.
            if(self.settings.hideOnClose){
                self._setToggleIcon('<sup>x</sup>');
            }
            
            // Let's go to the next stage an try to open the notice.
            // If AJAX option is enabled, we don't do nothing, just wait for the response
            // to fill the content.
            if(!self.settings.ajaxSettings){
                self._open();
            }
            
        },
        
        this._open = function(){
                      
            var cssBottomHeight = self._getBottomHeight();
                
                self.kiFooter.css('bottom', cssBottomHeight).addClass('init');
                                
                // Just init, no auto-open.
                if(self.settings.autoOpen){
                    // Auto-open
                    self.kiFooter.animate({bottom: 0}, self.settings.animationSpeed);
                    self.kiFooterToggle.addClass('opened');
                    if(!self.settings.hideOnClose){self._setToggleIcon('');}                    
                
                } else {
                    // No auto-open, just init.
                    self.kiFooter.css({bottom: cssBottomHeight});
                    
                }
                
                // Bind open/close to toggle.
                self.kiFooterToggle.bind('click.kiFooter', function(){
                    
                    // Open it!
                    if(!$(this).hasClass('opened')){ 
                        
                        self.kiFooter.animate({bottom: 0}, self.settings.animationSpeed);
                        $(this).addClass('opened');
                        self._setToggleIcon('');
                        if(self.Interval){
                            clearTimeout(self.Interval);
                        }

                    } else {
                        // Close it!
                        if(self.settings.hideOnClose){
                            self._hide();
                            return true;
                        } else {
                            self.kiFooter.animate({bottom: self._getBottomHeight()}, self.settings.animationSpeed);
                            $(this).removeClass('opened');
                            self._setToggleIcon('');
                        }
                    }

                });
                
               if(self.settings.extraNoticeInterval>0 && !self.settings.autoOpen){ 
                    self.Interval = setInterval(function(){ 
                        self._toggleAnim(); 
                    }, self.settings.extraNoticeInterval);
                }
        }
        
        // Hide the notice. @todo: allow user to extend this.
        this._hide = function(){
            
            self.kiFooter.fadeOut(100);
            
        }
        
        // Change the control icon.
        this._setToggleIcon = function(icon){
            
            self.kiFooterToggleIcon.html(icon);
            
        }  
        
        // Calculate how much to hide from the current notice.
        this._getBottomHeight = function(){
            
            var _top = parseInt(self.kiFooterToggle.css('top'));
            if(isNaN(_top)){ _top = 0; }
            var _height = -self.kiFooter.height()+25+_top; 
            
            return _height;
            
        }
        
        // Add a special animation to notify the user about the existence of the notice.
        this._toggleAnim = function(){
            
            self.kiFooter.addClass('anim');
            setTimeout(function(){ self.kiFooter.removeClass('anim'); }, 100);
            
        }
        
    } 
    
    $.fn.kiFooter = function(options) {
        var mykiFooter = new kiFooter();
         mykiFooter.init(options, this);
    }})(jQuery);




