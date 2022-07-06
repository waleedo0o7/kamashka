let uploadVatProofDocumentWithThumbnails = () => {

    document.getElementById('vat-proof-document-input').addEventListener('change', function (event) {

        let file = event.target.files[0];

        let fileReader = new FileReader();

        console.log('file.type');

        console.log(file.type);

        if (file.type.match('image')) {

            fileReader.onload = function () {

                let div = document.createElement("div");

                div.classList.add("one-thumbnail");

                div.classList.add("has-loading");


                let loadingDiv = document.createElement("div");

                loadingDiv.classList.add("loading-container");

                let loadingDiv2 = document.createElement("div");

                loadingDiv2.classList.add("loader");

                loadingDiv.append(loadingDiv2);

                let img = document.createElement('img');
                img.src = 'img/file-upload-default.svg';
                img.setAttribute("asset_id", 1);

                let icon = document.createElement('a');
                icon.classList.add("icon", "icon-close");

                div.append(img);
                div.append(icon);
                div.append(loadingDiv);
                document.getElementById('vat-prof-thumbnails-wrapper').appendChild(div);

            };
            fileReader.readAsDataURL(file);
        }

    });


    $("#vat-proof-upload-btn").on("click", function () {
        $("#vat-proof-document-input").click();
    });

    $("body").on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();
        $(this).parent().remove();
    });

}

//////////////////////////////////////////////////////// 


let uploadTaxCardDocumentWithThumbnails = () => {

    document.getElementById('tax-card-document-input').addEventListener('change', function (event) {

        let file = event.target.files[0];

        let fileReader = new FileReader();

        console.log('file.type');

        console.log(file.type);

        if (file.type.match('image')) {

            fileReader.onload = function () {

                let div = document.createElement("div");

                div.classList.add("one-thumbnail");

                div.classList.add("has-loading");


                let loadingDiv = document.createElement("div");

                loadingDiv.classList.add("loading-container");

                let loadingDiv2 = document.createElement("div");

                loadingDiv2.classList.add("loader");

                loadingDiv.append(loadingDiv2);

                let img = document.createElement('img');
                img.src = 'img/file-upload-default.svg';
                img.setAttribute("asset_id", 1);

                let icon = document.createElement('a');
                icon.classList.add("icon", "icon-close");

                div.append(img);
                div.append(icon);
                div.append(loadingDiv);
                document.getElementById('tax-card-thumbnails-wrapper').appendChild(div);

            };
            fileReader.readAsDataURL(file);
        }

    });


    $("#tax-card-upload-btn").on("click", function () {
        $("#tax-card-document-input").click();
    });

    $("body").on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();
        $(this).parent().remove();
    });

}

//////////////////////////////////////////////////////// 

let uploadLicenseScanDocumentWithThumbnails = () => {

    document.getElementById('license-scan-document-input').addEventListener('change', function (event) {

        let file = event.target.files[0];

        let fileReader = new FileReader();

        console.log('file.type');

        console.log(file.type);

        if (file.type.match('image')) {

            fileReader.onload = function () {

                let div = document.createElement("div");

                div.classList.add("one-thumbnail");

                div.classList.add("has-loading");


                let loadingDiv = document.createElement("div");

                loadingDiv.classList.add("loading-container");

                let loadingDiv2 = document.createElement("div");

                loadingDiv2.classList.add("loader");

                loadingDiv.append(loadingDiv2);

                let img = document.createElement('img');
                img.src = 'img/file-upload-default.svg';
                img.setAttribute("asset_id", 1);

                let icon = document.createElement('a');
                icon.classList.add("icon", "icon-close");

                div.append(img);
                div.append(icon);
                div.append(loadingDiv);
                document.getElementById('license-scan-thumbnails-wrapper').appendChild(div);

            };
            fileReader.readAsDataURL(file);
        }

    });


    $("#license-scan-upload-btn").on("click", function () {
        $("#license-scan-document-input").click();
    });

    $("body").on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();
        $(this).parent().remove();
    });

}


//////////////////////////////////////////////////////// 


let uploadProofDocumentWithThumbnails = () => {

    document.getElementById('proof-document-input').addEventListener('change', function (event) {

        let file = event.target.files[0];

        let fileReader = new FileReader();

        console.log('file.type');

        console.log(file.type);

        if (file.type.match('image')) {

            fileReader.onload = function () {

                let div = document.createElement("div");

                div.classList.add("one-thumbnail");

                div.classList.add("has-loading");


                let loadingDiv = document.createElement("div");

                loadingDiv.classList.add("loading-container");

                let loadingDiv2 = document.createElement("div");

                loadingDiv2.classList.add("loader");

                loadingDiv.append(loadingDiv2);

                let img = document.createElement('img');
                img.src = 'img/file-upload-default.svg';
                img.setAttribute("asset_id", 1);

                let icon = document.createElement('a');
                icon.classList.add("icon", "icon-close");

                div.append(img);
                div.append(icon);
                div.append(loadingDiv);
                document.getElementById('proof-thumbnails-wrapper').appendChild(div);

            };
            fileReader.readAsDataURL(file);
        }

    });


    $("#proof-upload-btn").on("click", function () {
        $("#proof-document-input").click();
    });

    $("body").on("click", ".one-thumbnail .icon-close", function (event) {
        event.preventDefault();
        $(this).parent().remove();
    });

}

//////////////////////////////////////////////////////// 

$(".steps ul li:nth-child(1) .number").text("1");
$(".steps ul li:nth-child(2) .number").text("2");
$(".steps ul li:nth-child(3) .number").text("3");
$(".steps ul li:nth-child(4) .number").text("4");
$(".steps ul li:nth-child(5) .number").text("5");