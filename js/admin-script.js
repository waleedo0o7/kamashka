$(document).ready(function () {

    $('#example').DataTable({
        "bLengthChange": false,
        "bFilter": true, // search input
        "bInfo": false, // bottom results info
        "bAutoWidth": true,
        language: {
            search: "", // remove search label
            searchPlaceholder: "Search For Category"
        }
    });


    $('#products').DataTable({
        "bLengthChange": false,
        "bFilter": true, // search input
        "bInfo": false, // bottom results info
        "bAutoWidth": true,
        language: {
            search: "", // remove search label
            searchPlaceholder: "Search For Category"
        }
    });

});



$(document).ready(function () {

    let selectProductAttribute = ` 
                                    <select class="form-control mb-2" id="">
                                        <option>Color</option>
                                        <option>Attribute 2</option>
                                        <option>Attribute 3</option>
                                        <option>Attribute 4</option>
                                        <option>Attribute 5</option>
                                    </select>  
                                `

    let productAttributeinput = `<input type="text" class="form-control mb-2" placeholder="Attribute">`

    $(".add-attribute-btn").on("click", function () {

        $(".select-product-attribute-col").append(selectProductAttribute);

        $(".attribute-value-wrapper").append(productAttributeinput)
    });

});









let initOrdersTable = () => {

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[1]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );

    $(document).ready(function () {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'MMMM Do YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'MMMM Do YYYY'
        });

        // DataTables initialisation
        var table = $('#orders').DataTable({
            "bLengthChange": false,
            "bFilter": true, // search input
            "bInfo": false, // bottom results info
            "bAutoWidth": true,
            language: {
                search: "", // remove search label
                searchPlaceholder: "Search For Category"
            }
        });

        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    });
}
