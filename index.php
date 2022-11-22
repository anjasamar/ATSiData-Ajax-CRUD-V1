<!DOCTYPE html>
<html>

<head>
    <title>ATSiData User Editor</title>
    <script type="text/javascript" src="script/jquery-min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            //load data user saat aplikasi dijalankan 
            loadData();

            //Load form add
            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'crud/add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //Load form edit dengan parameter id
            $("#contentData").on("click", "#EditButton", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'crud/edit.php',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            //simpan data user
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'func/service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data user
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'func/service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data user berdasarkan id
            $("#contentData").on("click", "#DeleteButton", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'func/service.php?action=delete',
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'crud/data.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>
</head>

<body>
    <div align="center">
        <h2>ATSiData User Editor</h2>
        <div id="contentData"></div>
    </div>
</body>

</html>