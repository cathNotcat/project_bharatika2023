$(document).ready(() => {
  $('#icon1').on('click', () => {
    $('#login-email').focus();
  });
  $('#icon2').on('click', () => {
    $('#login-password').focus();
  });
  let details = navigator.userAgent;

  /* Creating a regular expression
  containing some mobile devices keywords
  to search it in details string*/
  let regexp = /android|iphone|kindle|ipad/i;

  /* Using test() method to search regexp in details
  it returns boolean value*/
  let isMobileDevice = regexp.test(details);

  if (isMobileDevice) {
    $('.link > a').css('text-decoration', 'underline');
  }
  var loading = `<div class='loading'><h4>Loading</h4><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>`;
  $('#login-form').submit(function (event) {
    event.preventDefault();
    $('.login').html(loading);
    const email = $('#login-email').val();
    const password = $('#login-password').val();
    const recaptcha = $('#g-recaptcha-response').val();
    $('div.button').children().attr('disabled', 'disabled');

    $.ajax({
      url: './assets/api/submit_login.php',
      method: 'POST',
      data: { email, password, recaptcha },
    })
      .done((data) => {
        if (data.successLogin && data.isVerified) {
          location.replace('.');
          return;
        }
        grecaptcha.reset();
        if (data.isVerified == undefined) {
          Swal.fire({
            title: data.message,
            didOpen: () => {
              $(Swal.getConfirmButton()).focus();
            },
          });
          return;
        }
        $.ajax({
          url: './modal_otp.php',
          method: 'GET',
        }).done((modalOTP) => {
          $('body').append(modalOTP);
          $('#otpFormModal').on('shown.bs.modal', () => {
            $('#otp-kode').focus();
          });

          Swal.fire({
            text: data.message,
          }).then(() => {
            $('#otpFormModal').modal('show');
          });

          $('#otpFormModal .resend-otp').click(() => {
            $('#otp-form .submit').attr('disabled', true);
            $.ajax({
              url: './assets/api/kirim_ulang_otp.php',
              method: 'POST',
              data: { email },
            }).done((data) => {
              Swal.fire({
                text: data.message,
                didOpen: () => {
                  $('#otpFormModal button').attr('disabled', true);
                  $('#otpFormModal input').attr('disabled', true);
                  $(Swal.getConfirmButton()).focus();
                },
              }).then(() => {
                $('#otpFormModal button').attr('disabled', false);
                $('#otpFormModal input').attr('disabled', false);
                $('#otp-form .submit').attr('disabled', false);
                $('#otp-kode').focus();
              });
            });
          });
          $('#otp-form').submit((event) => {
            event.preventDefault();
            const otp = $('#otp-kode').val();
            $.ajax({
              url: './assets/api/submit_otp.php',
              method: 'POST',
              data: { email, otp },
            }).done((data) => {
              Swal.fire({
                icon: data.success ? 'success' : 'error',
                title: data.success ? 'Berhasil' : 'Gagal',
                text: data.message,
                didOpen: () => {
                  $('#otpFormModal button').attr('disabled', true);
                  $('#otpFormModal input').attr('disabled', true);
                  $(Swal.getConfirmButton()).focus();
                },
              }).then(() => {
                $('#otpFormModal button').attr('disabled', false);
                $('#otpFormModal input').attr('disabled', false);
                if (!data.success) {
                  return;
                }
                $('#otpFormModal').modal('hide');
              });
            });
          });
        });
      })
      .always(() => {
        $('div.button').children().removeAttr('disabled');
        $('.login').html('<h3>LOGIN</h3>');
      });
  });
});
