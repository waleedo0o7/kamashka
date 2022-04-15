$(document).ready(function () {

    $('#taps').DataTable({
        "responsive": true,
        "bLengthChange": false,
        "bFilter": true, // search input
        "bInfo": false, // bottom results info
        "bAutoWidth": true,
        language: {
            search: "", // remove search label
            searchPlaceholder: "Search For Taps"
        }
    });


    $('#products').DataTable({
        "responsive": true,
        "bLengthChange": false,
        "bFilter": true, // search input
        "bInfo": false, // bottom results info
        "bAutoWidth": true,
        language: {
            search: "", // remove search label
            searchPlaceholder: "Search For products"
        }
    });

});



$(document).ready(function () {

    let oneAttrItem = `
                        <div class="one-item">
                            <div class="select-product-attribute-col">
                                <div class="form-group mb-4">
                                    <label for="" class=" "> Select Product Attribute </label>
                                    <select class="form-control mb-2">
                                        <option>Color</option>
                                        <option>Attribute 2</option>
                                        <option>Attribute 3</option>
                                        <option>Attribute 4</option>
                                        <option>Attribute 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="attribute-value-col">
                                <div class="form-group mb-4 attribute-value-wrapper">
                                    <label for="" class=" "> Attribute Value </label>
                                    <input type="text" class="form-control mb-2" placeholder="Attribute">
                                </div>
                            </div>

                            <div class="add-attribute-wrapper">
                                <i class="remove-attribute-btn fa fa-minus"></i>
                            </div>
                        </div>

                        `

    $(".add-attribute-btn").on("click", function () {
        $(".products-attr-wrapper").append(oneAttrItem);
    });

    $(document).on("click", ".remove-attribute-btn", function () {
        $(this).parents(".one-item").remove()
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
            "responsive": true,
            "bLengthChange": false,
            "bFilter": true, // search input
            "bInfo": false, // bottom results info
            "bAutoWidth": true,
            language: {
                search: "", // remove search label
                searchPlaceholder: "Search For orders"
            }
        });

        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    });
}

































// uploadFile1
$(function () {
    $("#imageEdit1").on("click", function () {
        $("#imageUpload1").click();
    });
    $("#imageUpload1").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview1").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});



// uploadFile2
$(function () {
    $("#imageEdit2").on("click", function () {
        $("#imageUpload2").click();
    });
    $("#imageUpload2").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview2").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});




// uploadFile3
$(function () {
    $("#imageEdit3").on("click", function () {
        $("#imageUpload3").click();
    });
    $("#imageUpload3").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview3").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});


// uploadFile4
$(function () {
    $("#imageEdit4").on("click", function () {
        $("#imageUpload4").click();
    });
    $("#imageUpload4").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview4").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});



// uploadFile5
$(function () {
    $("#imageEdit5").on("click", function () {
        $("#imageUpload5").click();
    });
    $("#imageUpload5").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview5").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});



// uploadFile6
$(function () {
    $("#imageEdit6").on("click", function () {
        $("#imageUpload6").click();
    });
    $("#imageUpload6").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview6").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});



// uploadFile7
$(function () {
    $("#imageEdit7").on("click", function () {
        $("#imageUpload7").click();
    });
    $("#imageUpload7").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview7").attr("src", this.result)
            }
        }

        $(this).parent().addClass("has-loading");

    });
});




let loadMoreOnScroll = () => {
    window.onscroll = function(ev) {
        var pageHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight,  document.documentElement.clientHeight,  document.documentElement.scrollHeight,  document.documentElement.offsetHeight );
        if ((window.innerHeight + window.scrollY) >= pageHeight) {
            console.log("Load More");
        }
    };
}