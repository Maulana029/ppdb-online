<script>
    $(document).ready(function(){
        var table = $("#dtTable").DataTable({
            processing: true,
            serverSide: false,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 Rows', '25 Rows', '50 Rows', 'Show all']
            ],
            ajax: {
                "url": "<?= base_url("home/list_data/") ?>",
                "dataType": "json",
                "method": "POST",
                "beforeSend": function(xhr) {
                    $("#overlay").fadeIn(300);
                },
                "error": function(xhr, status, error) {
                    swal(error, "Terjadi kesalahan", "error").then((value) => {
                        $("#dtTable").DataTable().ajax.reload(function() {
                            $("#overlay").fadeOut(300)
                        }, false);
                    });
                },
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return '<div style="text-align:center;">' + (meta.row + meta.settings._iDisplayStart + 1) + '.</div>';
                    }
                },
                {
                    "data" : "1",
                },
                {
                    "data" : "2",
                },
                {
                    "data" : "3",
                },
                {
                    "data" : "4",
                },
                {
                    "data" : "5",
                },
            ],     
        });
    });
</script>