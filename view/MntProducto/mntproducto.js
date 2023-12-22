let arrImages = [];//TODO: Se coloca el array
let myDropzone=new Dropzone('.dropzone',{
    url:'../../assets/img',
    maxFilessize:20,
    maxFiles:20,
    acceptedFiles:'image/jpeg, image/png',
    addRemoveLinks:true,
    dictRemoveFile:'Quitar'
})
myDropzone.on('addedfile',file=>{
    arrImages.push(file);
    /* console.log(file); */
})
myDropzone.on('removedfile',file=>{
    let i=arrImages.indexOf(file);
    arrImages.splice(i,1);
    console.log(arrImages);
})
 function init(){
    $('#producto_form').on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    e.preventDefault();
    var formData=new FormData($("#producto_form")[0]);
    var totalfiles=arrImages.length;/**TODO: Cuantos archivos enviar en el array */
    for (var i = 0; i < totalfiles; i++) {
        formData.append("file[]",arrImages[i]);
    } 
    $.ajax({
        url:"../../controller/ProductoCtr.php?op=guardar",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success: function (data) {
            console.log(data);
        }
    })
}
init();