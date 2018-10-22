function Init() {
       
       //hover
    
       $("#project-list-branding-id").mouseenter(hover_branding); 
    
       $("#project-list-web-id").mouseenter(hover_web);
    
       $("#project-list-mobile-id").mouseenter(hover_mobile);
    
       var $element = $('#project-branding').bind('webkitAnimationEnd', function(){
            this.style.webkitAnimationName = '';
       });
                                           
       //click
    
       //branding
       $("#project-branding").click(function(e) {
            $('#project-branding').removeClass("project-title");
            $('#project-web-development').removeClass("project-title");
            $('#project-mobile-development').removeClass("project-title");
           
            $('#project-branding').removeClass("project-title-clicked");
            $('#project-branding').removeClass("project-title-not-clicked");
           
            $('#project-web-development').removeClass("project-title-clicked");
            $('#project-web-development').removeClass("project-title-not-clicked");
           
            $('#project-mobile-development').removeClass("project-title-clicked");
            $('#project-mobile-development').removeClass("project-title-not-clicked");
           
            $('#project-list-branding-id').unbind('mouseenter', hover_branding);
            $('#project-list-web-id').unbind('mouseenter', hover_web);
            $('#project-list-mobile-id').unbind('mouseenter', hover_mobile);    
           
            //nudge effect on select
            $('#project-branding').addClass("project-branding wow shake delay-01s");
            $('#project-branding').replaceWith($('#project-branding').clone(true));
                        
            $('#project-branding').addClass("project-title-clicked");
            $('#project-web-development').addClass("project-title-not-clicked");
            $('#project-mobile-development').addClass("project-title-not-clicked");
           
            $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow flipInX delay-02s">' + '<img src="img/ipad.png" alt="">' + '</figure>')
       });
       
       //web
       $("#project-web-development").click(function(e) {
            $('#project-branding').removeClass("project-title");
            $('#project-web-development').removeClass("project-title");
            $('#project-mobile-development').removeClass("project-title");
           
            $('#project-branding').removeClass("project-title-clicked");
            $('#project-branding').removeClass("project-title-not-clicked");
           
            $('#project-web-development').removeClass("project-title-clicked");
            $('#project-web-development').removeClass("project-title-not-clicked");
           
            $('#project-mobile-development').removeClass("project-title-clicked");
            $('#project-mobile-development').removeClass("project-title-not-clicked");           
           
            $('#project-list-branding-id').unbind('mouseenter', hover_branding);
            $('#project-list-web-id').unbind('mouseenter', hover_web);
            $('#project-list-mobile-id').unbind('mouseenter', hover_mobile);
           
            $('#project-web-development').addClass("project-web-development wow shake delay-01s");
            $('#project-web-development').replaceWith($('#project-web-development').clone(true));
             
            $('#project-branding').addClass("project-title-not-clicked");
            $('#project-web-development').addClass("project-title-clicked");
            $('#project-mobile-development').addClass("project-title-not-clicked");
           
            $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow flipInX delay-02s">' + '<img src="img/imac.png" alt="">' + '</figure>' )
       });
       
       //mobile
       $("#project-mobile-development").click(function(e) {
            $('#project-branding').removeClass("project-title");
            $('#project-web-development').removeClass("project-title");
            $('#project-mobile-development').removeClass("project-title");   
           
            $('#project-branding').removeClass("project-title-clicked");
            $('#project-branding').removeClass("project-title-not-clicked");
           
            $('#project-web-development').removeClass("project-title-clicked");
            $('#project-web-development').removeClass("project-title-not-clicked");
           
            $('#project-mobile-development').removeClass("project-title-clicked");
            $('#project-mobile-development').removeClass("project-title-not-clicked");         
           
            $('#project-list-branding-id').unbind('mouseenter', hover_branding);
            $('#project-list-web-id').unbind('mouseenter', hover_web);
            $('#project-list-mobile-id').unbind('mouseenter', hover_mobile);
           
            $('#project-mobile-development').addClass("project-mobile-development wow shake delay-01s");
            $('#project-mobile-development').replaceWith($('#project-mobile-development').clone(true));
             
            $('#project-branding').addClass("project-title-not-clicked");
            $('#project-web-development').addClass("project-title-not-clicked");
            $('#project-mobile-development').addClass("project-title-clicked");
            
            $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow flipInX delay-02s">' + '<img src="img/iphone.png" alt="">' + '</figure>' )
       });
    
}



function hover_branding() {
     $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow fadeInUpBig delay-02s">' + '<img src="img/ipad.png" alt="">' + '</figure>')
};

function hover_web() {
     $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow zoomIn delay-02s">' + '<img src="img/imac.png" alt="">' + '</figure>' )
};

function hover_mobile() {
     $('#project-selector').replaceWith('<figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow fadeInLeftMed delay-02s">' + '<img src="img/iphone.png" alt="">' + '</figure>')
};


