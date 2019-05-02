// Setup table header size and margin tbody
$(document).ready(function(){
  $('.dataTables_scrollHeadInner,.dataTables_scrollHeadInner table').width('100%');
  $('.dataTables_scrollHead').css('overflow','', 'position', '');
  $('.dataTables_scrollBody').css('margin-top','-20px');
});
// DataTables
      $(function () {
        $('#bid').DataTable({
          "scrollY"     : "320px",
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'lengthChange': false,
          "pageLength"  : 15,
          'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#ask').DataTable({
          "scrollY"     : "320px",
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'lengthChange': false,
          "pageLength"  : 15,
          'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#mh').DataTable({
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'ordering'    : true,
          'lengthChange': false,
          "pageLength"  : 15,
          'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#oo').DataTable({
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'ordering'    : true,
          'lengthChange': false,
           'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#moo').DataTable({
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'ordering'    : true,
          'lengthChange': false,
           'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#ro').DataTable({
          'paging'      : true,
          'searching'   : true,
          'info'        : false,
          'ordering'    : true,
          'lengthChange': false,
           'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })
        $('#yth').DataTable({
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'ordering'    : true,
          'lengthChange': false,
          "pageLength"  : 15,
           'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })

        $('#transferHistoryTable').DataTable({
          'paging'      : true,
          'searching'   : false,
          'info'        : false,
          'ordering'    : true,
          "pageLength"  : 15,
          'lengthChange': false,
           'pagingType'  : 'full_numbers',
          'responsive'  : true,
          "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
          'autoWidth'   : false
        })

         $('#balanceTable').DataTable({
         'paging'      : false,
         'searching'   : true,
         'info'        : false,
         'lengthChange': false,
         'pagingType'  : 'full_numbers',
         'responsive'  : true,
         "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
         'autoWidth'   : false
       })
      
      })
      