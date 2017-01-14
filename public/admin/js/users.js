/**
 * Created by Goldoni on 12.01.2017.
 */
$(function() {

var grid
webix.attachEvent("onBeforeAjax",
    function(mode, url, data, request, headers, files, promise){
        headers["Content-type"]= "application/json"
        headers["X-CSRF-TOKEN"]= $('meta[name="csrf-token"]').attr('content')
    }
 );
grid = webix.ui({
    container: "box1",
    view: "datatable",
    columns: [
        {
            id: "ch1",
            header: {content: "masterCheckbox"},
            checkValue: 'on',
            uncheckValue: 'off',
            css: " center ",
            template: "{common.checkbox()}",
            width: 40
        },
        {
            id: "id",
            header: "id",
            adjust: "all",
            sort: "int"
        },
        {
            id: "isbn",
            header: ["isbn", {content: "textFilter"}],
            adjust: "all",
            batch:1,
            sort: "string"
        },
        {
            id: "name",
            header: ["name", {content: "textFilter"}],
            adjust: "all",
            batch:2,
            sort: "string"
        },
        {
            id: "quantity",
            header: ["quantity",{content: "textFilter"}],
            adjust: "all",
            batch:3,
            sort: "string"
        },
        {
            id: "price",
            header: ["price", {content: "textFilter"}],
            adjust: "all",
            batch:4,
            sort: "string"
        },
        {
            id: "category",
            header: ["category", {content: "selectFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "status",
            header: ["status", {content: "selectFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "url",
            header: ["url", {content: "textFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "content",
            header: "content",
            adjust: "all",
            sort: "string"
        },
        {
            id: "created_at",
            header: ["Created", {content: "dateFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "updated_at",
            header: ["Updated", {content: "dateFilter"}],
            minWidth: 200,
            sort: "string"
        },
        {id: "actions",
            header: "Actions",
            css: "center",
            minWidth: 100,
            sort: "string"
        },
    ],
    url:"products/showAll",
    select: "cell",
    blockselect: true,
    multiselect: true,
    rightSplit: 2,
    leftSplit: 2,
    autoheight: true,
    resizeColumn: true,
    resizeRow: true,
    select: "row",
    onClick: {
        "delbtn": function (e, id, trg) {
            destroy(id)
        }
    },
    pager: {
        template: "{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
        container: "paging",
        size: 20,
        group: 5
    }
});
var menu = webix.ui({
    view:"contextmenu",
    id:"cmenu",
    data:[{ id:1,value:"Add",  icon: "plus"},{ id:2,value:"Edit",  icon: "pencil-square"},{ id:3, value:"Publish",  icon: "level-up"},{ id:4, value:"Not-Publish",  icon: "pause"},{ id:5, value:"Delete",  icon: "trash"}],
    on:{
        onItemClick:function(id){
            var context = this.getContext();
            var list = context.obj;
            var listId = context.id;
            var uid = listId.row
            switch(this.getItem(id).id) {
                case 1:
                    $('#edit_modal').modal('show')
                    break;
                case 2:
                    $('#edit_modal').modal('show')
                    break;
                case 3:
                    update(uid,1)
                    break;
                case 4:
                    update(uid,2)
                    break;
                case 5:
                    update(uid,3)
                    break;
                default:

            }
            //console.log(listId.row);
            console.log(this.getItem(id).id);
            webix.message("List item: <i>"+list.getItem(listId).name+"</i> <br/>Context menu item: <i>"+this.getItem(id).value+"</i>");
        }
    }
});
menu.attachTo(grid);
var destroy = function (uid) {
    webix.ajax().del("products/destroy/"+uid, function (text, data) {
        webix.message("Delete "+data.json().success)
        grid.remove(uid)
        grid.refresh()
    });
 }
 var update =   function(uid, status) {
     webix.ajax().put("products/update/" + uid,{ status: status }, function (text, data) {
         webix.message("Delete " + data.json().success)
         var id = data.json().id
         var item = grid.getItem(id)
         item['status'] = data.json().status
         grid.updateItem(id, item);
     });
 }
});