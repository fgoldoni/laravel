/**
 * Created by Goldoni on 12.01.2017.
 */
$(function() {


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
            sort: "string"
        },
        {
            id: "name",
            header: ["name", {content: "textFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "quantity",
            header: ["quantity",{content: "textFilter"}],
            adjust: "all",
            sort: "string"
        },
        {
            id: "price",
            header: ["price", {content: "textFilter"}],
            adjust: "all",
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
    onClick: {
        "delbtn": function (e, id, trg) {
            destroy(id)
        }
    },
    pager: {
        template: "{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
        container: "paging_here1",
        size: 10,
        group: 5
    },
    resizeColumn: true,
    resizeRow: true,
    select: "row"

});
var icon = webix.ui({
    view:"icon",
    icon: "envelope",
    align:"left"
});
webix.ui({
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
                    add(uid)
                    break;
                case 2:
                    edit(uid)
                    break;
                case 3:
                    publish(uid)
                    break;
                case 4:
                    unpublish(uid)
                    break;
                case 5:
                    destroy(uid)
                    break;
                default:

            }
            //console.log(listId.row);
            console.log(this.getItem(id).id);
            webix.message("List item: <i>"+list.getItem(listId).name+"</i> <br/>Context menu item: <i>"+this.getItem(id).value+"</i>");
        }
    }
});
$$("cmenu").attachTo(grid);
var add = function (uid) {
    $('#edit_modal').modal('show')
    console.log("add"+uid)
}
var edit = function (uid) {
    debugger
    $('#edit_modal').modal('show')
}
var publish = function (uid) {
    console.log("publish"+uid)
}
var unpublish = function (uid) {
    console.log("unpublish"+uid)
}
var destroy = function (uid) {
    webix.ajax().del("products/destroy/"+uid, function (text, data) {
        webix.message("Delete "+data.json().success)
        grid.remove(uid)
        grid.refresh()
    });
}

});