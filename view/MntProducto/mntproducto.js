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