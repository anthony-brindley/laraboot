<script>
    $(document).ready( function () {
        $('#profile_table').DataTable({

            select: false,
            "ajax": {
                "url": "/api/profile",
                "type": "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            },
            "columns": [

                { "data": "user", "visible": false},

                { "data": "id"},


                { "data": "first_name",
                    "render": function(data,type,row,meta) {
                        return '<a href="/profile/'+row.id+'">'+data+'</a>';
                    }

                },

                { "data": "last_name",
                    "render": function(data,type,row,meta) {
                        return '<a href="/profile/'+row.id+'">'+data+'</a>';
                    }


                },

                {
                    "data": "name",
                    "render": function(data,type,row,meta) {
                        return '<a href="/user/'+row.user+'">'+data+'</a>';
                    }


                },

                { "data": "gender",
                    "render": function(data,type,row,meta) {
                        return (data == 1) ? 'male' : 'female';
                    }


                },

                { "data": "birthdate",
                    "render": function ( data, type, full, meta ) {
                        var d = new Date(data);
                        var month = d.getMonth() +1 < 10 ? "0" + (d.getMonth() +1): d.getMonth() +1;
                        var day = d.getDate() +1 < 10 ? "0" + (d.getDate() +1): d.getDate() +1;
                        return month + "/" + day + "/" + d.getFullYear();


                    }

                },

                {"defaultContent": "null", "render": function(data,type,row,meta) {
                    return '<a href="/profile/'+row.id+'/edit">'+ '<button>Edit</button>' + '</a>';
                }

                }

            ]

        });

    } );




</script>