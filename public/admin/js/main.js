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

    $.contextMenu({
        selector: '.context-menu-one',
        callback: function(key, options) {
            var m = "clicked: " + key;

            $id =$(this).data('id')

            switch (key) {
                case 'edit':
                    edit($id);
                    break;
                case 'method':
                    method($id);
                    break;
                case 'export':
                    xmlExport($id);
                    break;
                case 'delete':
                    del($id)
                    break;
                default:

                    break;
            }
            console.log(options);
        },
        items: {
            "edit"    : {name: "Edit", icon: "fa-edit"},
            "published"  : {name: "Published", icon: "fa-level-up"},
            "not_published"  : {name: " Not Published", icon: "fa-level-down"},
            "delete"  : {name: "Delete", icon: "fa-trash"}
        }
    });
    $('.context-menu-one').on('click', function(e){
        console.log('clicked', this);
    });
    function edit(id) {
        console.log("toto" + id);
        $('#myModal2').modal('show')
    }
} );
