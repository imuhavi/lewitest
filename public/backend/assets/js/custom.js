$(document).ready(function () {

  /*====================================================
                   load-function
   ====================================================*/

  $(window).on('load', function () {
    $('#status').fadeOut() // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow') // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({ 'overflow': 'visible' })
  })

  // CounterUp Plugin || Toastr
  setTimeout(function() {
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut',
        timeOut: 5000
    }
    if(successNotification) toastr.success(successNotification, 'Success !')
    if(infoNotification) toastr.info(infoNotification, 'Information !')
    if(warningNotification) toastr.warning(warningNotification, 'Warning !')
    if(errorNotification) toastr.error(errorNotification, 'Error !')
  }, 1800)

})


// preview an image when uploading
function previewImage(whereToShow, imageFile) {
  document.getElementById(whereToShow).src = window.URL.createObjectURL(imageFile[0])
}