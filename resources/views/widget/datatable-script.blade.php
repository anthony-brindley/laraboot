<script>
$(document).ready( function () {
$('#widget_table').DataTable({

select: false,
"ajax": {
"url": "/api/widget",
"type": "POST",
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
},

"columns": [
{ "data": "id"},
{ "data": "widget_name",
"render": function(data,type,row,meta) {
    return '<a href="/widget/'+row.id+'-'+row.slug+'">'+data+'</a>';
}
},

{ "data": "slug", "visible": false},

{ "data": "created_at",
"render": function ( data, type, full, meta ) {
var d = new Date(data);
var month = d.getMonth() +1 < 10 ? "0" + d.getMonth() +1 : d.getMonth() +1;
var day = d.getDate() < 10 ? "0" + d.getDate(): d.getDate();
return month + "/" + day + "/" + d.getFullYear();
}
},

{"defaultContent": "null", "render": function(data,type,row,meta) {
return '<a href="/widget/'+row.id+'/edit">'+ '<button>Edit</button>' + '</a>';
}
}

]

});

} );

</script>


