</div>


<script src="../libs/js/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js"
        integrity="sha512-U3Q2T60uOxOgtAmm9VEtC3SKGt9ucRbvZ+U3ac/wtvNC+K21Id2dNHzRUC7Z4Rs6dzqgXKr+pCRxx5CyOsnUzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


<script>

    $(document).on('click', '.delete-object', function () {

        var id = $(this).attr('delete-id');
        var q = confirm("Are you sure?");

        if (q === true) {

            $.post('template/delete_product.php', {
                object_id: id
            }, function (data) {
                location.reload();
            }).fail(function () {
                alert('Unable to delete.');
            });

        }

        return false;
    });
</script>

<script>

    $(document).on('click', '.delete-object', function () {

        var id = $(this).attr('delete-id');

        bootbox.confirm({
            message: "<h4>Are you sure?</h4>",
            buttons: {
                confirm: {
                    label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                    className: 'btn-danger'
                },
                cancel: {
                    label: '<span class="glyphicon glyphicon-remove"></span> No',
                    className: 'btn-primary'
                }
            },
            callback: function (result) {

                if (result === true) {
                    $.post('../delete_product.php', {
                        object_id: id
                    }, function (data) {
                        location.reload();
                    }).fail(function () {
                        alert('Unable to delete.');
                    });
                }
            }
        });

        return false;
    });


    </body>
    </html>