 $(document).ready(function(){
         $('.dataTables_scrollHeadInner,.dataTables_scrollHeadInner table').width('100%');
         $('.dataTables_scrollHead').css('overflow','', 'position', '');
         $('.dataTables_scrollBody').css('margin-top','-20px');

         $('.dropdown-submenu a.submenu').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
      
      var ul = $('ul:first.sidebar-menu'),
        ulHeight = ul.outerHeight();
      
      ul.on('mousemove',
                function(e){
                    var win = $(window),
                        cST = win.scrollTop();
                    if (e.pageY>=(ulHeight/2)){
                        win.scrollTop(cST + 20);
                    }
                    else {
                        win.scrollTop(cST - 20);
                    }
                });