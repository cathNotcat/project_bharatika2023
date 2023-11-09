$(document).ready(() => {
  let details = navigator.userAgent;

  /* Creating a regular expression
  containing some mobile devices keywords
  to search it in details string*/
  let regexp = /android|iphone|kindle|ipad/i;

  /* Using test() method to search regexp in details
  it returns boolean value*/
  let isMobileDevice = regexp.test(details);

  if (isMobileDevice) {
    $('.d-flex > a').css('text-decoration', 'underline');
  }
  var loading = `<div class='loading'><h2>Loading</h2><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>`;
  //   $('#registerFormModal').modal('show');
  //   $('#registerFormModal').on('shown.bs.modal', () => {
  //     $('#register-fullname').focus();
  //   });

  $('#register-form').submit(function (event) {
    event.preventDefault();
    $('.register').html(loading);
    $('div.button').children().attr('disabled', 'disabled');
    // $('#registerFormModal').focusout();

    $(this).find('button.submit').attr('disabled', true);

    const fullname = $('#register-fullname').val();
    const instansi = $('#register-instansi').val();
    const email = $('#register-email').val();
    const lineID = $('#register-lineID').val();
    const wa = $('#register-wa').val();
    const alamat = $('#register-alamat').val();
    const telp = $('#register-telp').val();
    const password = $('#register-password').val();
    const passwordConfirmation = $('#register-password-confirmation').val();

    $.ajax({
      type: 'POST',
      url: 'assets/api/submit_register.php',
      data: { fullname, email, lineID, telp, password, passwordConfirmation, instansi, wa, alamat },
    })
      .done((data) => {
        if (!data.success) {
          Swal.fire({
            icon: 'error',
            title: 'Register Gagal',
            text: data.message,
            didOpen: () => {
              //   $('#registerFormModal button').attr('disabled', true);
              //   $('#registerFormModal input').attr('disabled', true);
              $(Swal.getConfirmButton()).focus();
            },
          }).then(() => {
            // $('#registerFormModal button').attr('disabled', false);
            // $('#registerFormModal input').attr('disabled', false);
          });
          return;
        }
        $.ajax({
          url: './modal_otp.php',
          method: 'GET',
          data: { email },
        }).done((modalOTP) => {
          $('body').append(modalOTP);
          //   $('#registerFormModal').modal('hide');

          Swal.fire({
            text: data.message,
          }).then(() => {
            $('#otpFormModal').modal('show');
          });

          $('#otpFormModal').one('shown.bs.modal', () => {
            $('#otp-kode').focus();
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
                $('#otpFormModal').one('hidden.bs.modal', () => {
                  Swal.fire('Silahkan login').then(() => {
                    location.replace('./login.php');
                  });
                });
              });
            });
          });
        });
      })
      .fail(() => {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Register gagal. Silahkan coba lagi!',
        });
      })
      .always(() => {
        $('div.button').children().removeAttr('disabled');
        $('.register').html('<h3>REGISTER</h3>');
      });
  });
});
