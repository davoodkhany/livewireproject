require('./bootstrap');

// require('alpinejs');

require('./bootstrap');

import Swal from 'sweetalert2'


const Toast = Swal.mixin({
    toast: true,

    position: 'bottom-right',
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })



  document.addEventListener('livewire:load',()=>{
      livewire.on('Analyes',()=>{
        Toast.fire({
            icon: 'success',
            title: 'وب‌سایت شما با موفقیت برای ما ارسال شد، پس از بررسی کارشناسان با شما ارتباط برقرار خواهیم کرد'
          })
      })
  })


  document.addEventListener('livewire:load', () =>{
      livewire.on('Toast',($value)=>{
        $('#exampleModalCenter').modal('hide')
          Toast.fire({
              icon:'success',
              title: $value.meesage
          })
      })
  })


  $('#myModal').modal('hide')
  document.addEventListener('livewire:load',()=>{
      livewire.on('FormHome',($value)=>{
         let name= $value.name;

         Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'اطلاعات شما با موفقیت ارسال شد',
            showConfirmButton: false,
            timer: 2500
          })
      })
  })


  document.addEventListener('livewire:load',()=>{
    livewire.on('comment',($)=>{
       Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'کامنت شما با موفقیت ارسال شد',
          showConfirmButton: false,
          timer: 2000
        })
    })
})


