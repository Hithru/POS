/*=============================================
UPLOADING USER PICTURE
=============================================*/

$(".newPics").change(function(){

    var newImage = this.files[0];

    /*===============================================
    =            validating image format            =
    ===============================================*/

    if (newImage["type"] != "image/jpeg" && newImage["type"] != "image/png"){

        $(".newPics").val("");

        swal({
            type: "error",
            title: "Error uploading image",
            text: "¡Image has to be JPEG or PNG!",
            showConfirmButton: true,
            confirmButtonText: "Close"
        });

    }else if(newImage["size"] > 2000000){

        $(".newPics").val("");

        swal({
            type: "error",
            title: "Error uploading image",
            text: "¡Image too big. It has to be less than 2Mb!",
            showConfirmButton: true,
            confirmButtonText: "Close"
        });

    }else{

        var imgData = new FileReader;
        imgData.readAsDataURL(newImage);

        $(imgData).on("load", function(event){

            var routeImg = event.target.result;

            $(".preview").attr("src", routeImg);

        });

    }

    /*=====  End of validating image format  ======*/

})
