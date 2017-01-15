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
    scheme:{
        $init:function(obj){
            obj.status = obj.status.name
            obj.category = obj.category.name
        },
        $update:function(obj){
            obj.status = obj.status.name
        }
    },
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
            sort: "string",
            template:function(obj, common) {
                return webix.i18n.numberFormat(obj.price);
            }
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
            sort: "string",
            template:function(obj, common) {
                var result
                switch (obj.status){
                    case  "Published":
                        result = "<span class='text label label-success'>Published</span>"
                        break;
                    case "Not Published":
                        result = "<span class='text label label-warning'>Not Published</span>"
                        break;
                    case "Deleted":
                        result = "<span class='text label label-danger'>Deleted</span>"
                        break;
                    default:
                        result =   "";
                }
                return result
            }
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
            header: ["Created", {content: "selectFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "updated_at",
            header: ["Updated", {content: "selectFilter"}],
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
        },
        "edit_modal": function (e, id, trg) {
            edit(id)
        }
    },
    pager: {
        template: "{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()} Page {common.page()} from #limit#",
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
                   edit(uid)
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
    var edit= function (id) {
        $('#box1').attr('data-id',id)
        $('#trigger_edit').click()
    }
});