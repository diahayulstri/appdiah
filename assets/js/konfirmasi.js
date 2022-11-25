function hapusMenu(url){
    Swal.fire({
        title: 'are you sure',
        text :"Yakin ingin hapus menu?",
        icon : 'warning',
        showCanecelButton: true,
        confirmButtonColor : '#3085d6',
        concelButtonColor:"#d33",
        confirmButtonText: 'ya, hapus!:'
    }).than((resuit) => {
        if(result.value) {
            document.location.href = url;
        }
    })
}
function hapusRole(url){
    Swal.fire({
        title: 'are you sure',
        text :"Yakin ingin hapus role menu?",
        icon : 'warning',
        showCanecelButton: true,
        confirmButtonColor : '#3085d6',
        concelButtonColor:"#d33",
        confirmButtonText: 'ya, hapus!:'
    }).than((resuit) => {
        if(result.value) {
            document.location.href = url;
        }
    })
}
function hapusSubmenu(url){
    Swal.fire({
        title: 'are you sure',
        text :"Yakin ingin hapus sub menu?",
        icon : 'warning',
        showCanecelButton: true,
        confirmButtonColor : '#3085d6',
        concelButtonColor:"#d33",
        confirmButtonText: 'ya, hapus!:'
    }).than((resuit) => {
        if(result.value) {
            document.location.href = url;
        }
    })
}