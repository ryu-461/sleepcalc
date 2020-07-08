'use strict';

$("#gobtn").click(function(){
  Swal.fire({
    title: 'データの追加',
    text: "データの登録をしますか？",
    type: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK'
  });
});
