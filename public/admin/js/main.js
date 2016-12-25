$(document).ready(function() {
    $('.data').DataTable( {
        columnDefs: [ {
            orderable: false,
            targets:   [0,-1]
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]],
    } );
    $('.single_table').DataTable( {
        columnDefs: [ {
            orderable: false,
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]],
    } );

   
} );
