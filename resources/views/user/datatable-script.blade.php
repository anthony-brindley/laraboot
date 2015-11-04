<script>
    $(document).ready( function () {

        $('#user_table').DataTable({
            select: false,
            "ajax": {
                "url": "/api/user",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            },
            "columns": [
                { "data": "id" },
                { "data": "name",
                    "render": function(data,type,row,meta) {
                        return '<a href="/user/'+row.id+'">'+data+'</a>';
                    }
                },
                { "data": "email" },

                { "data": "is_subscribed",
                    "render": function ( data, type, full, meta ) {
                        return data == 1 ? 'Yes' : 'No';
                    }
                },
                { "data": "is_admin",
                    "render": function ( data, type, full, meta ) {
                        return data == 1 ? 'Yes' : 'No';
                    }
                },
                { "data": "user_type_id",
                    "render": function ( data, type, full, meta ) {
                        return data == 10 ? 'Free' : 'Paid';
                    }


                },
                { "data": "status_id",
                    "render": function ( data, type, full, meta ) {
                        return data == 10 ? 'Active' : 'Inactive';
                    }


                },
                { "data": "created_at",
                    "render": function ( data, type, full, meta ) {
                        var d = new Date(data);
                        var month = d.getMonth() +1 < 10 ? "0" + (d.getMonth() +1): d.getMonth() +1;
                        var day = d.getDate() < 10 ? "0" + d.getDate(): d.getDate();
                        return month + "/" + day + "/" + d.getFullYear();
                    }


                },
                {"defaultContent": "null", "render": function(data,type,row,meta) {
                    return '<a href="/user/'+row.id+'/edit">'+ '<button>Edit</button>' + '</a>';
                }

                }
            ]

        });

    } );
</script>