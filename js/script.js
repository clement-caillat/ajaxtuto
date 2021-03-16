$(document).ready(function(){
    $('#login').click(function() {
        let username = $('#username').val();
        let password = $('#password').val();

        $.ajax({
            url: 'api/login.php',
            type: 'POST',
            data: {
                user: username,
                pass: password
            },
            success: function(response) {
                if (response) {
                    document.location.href = 'profil.php';
                }
                else {
                    alert('Mot de passe incorrect');
                }
            },
            error: function(hxr, error, type) {
                $('body').append(type);
            }
        })
    })


    $('#get').click(function() {
        $.ajax({
            url: 'api/get.php',
            type: 'GET',
            success: function(response) {
                response = JSON.parse(response);
                console.log(response);

                response.forEach(element => {
                    $('#data').append(element.username +' ');
                })
            },
            error: function(hxr, error, type) {
                $('body').append(type);
            }
        })
    })
})