function cekMember() {
    var formData = new FormData();
    formData.append('id', $('#member_id').val());
    $.ajax({
        url: 'http://localhost:8080/members/find',
        type: 'POST',
        data: formData,
        success: function (data) {
          $('#fullname').val(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
}

function cekBuku() {
    var formData = new FormData();
    formData.append('ISBN', $('#ISBN').val());
    $.ajax({
        url: 'http://localhost:8080/katalog/find',
        type: 'POST',
        data: formData,
        success: function (data) {
          var asd = JSON.parse(data);
          $('#judul').val(asd[0]);
          $('#book_id').val(asd[1]);
        },
        cache: false,
        contentType: false,
        processData: false
    });
}