
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/forms/select/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/extensions/sweetalert2.min.css">
    <script src="<?php echo base_url();?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <div class="msg" style="display:none;">
        <?php echo @$this->session->flashdata('msg'); ?>
    </div>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="<?php echo base_url();?>app-assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="col-sm-6 col-12 text-left pt-1">
                                            <div class="media pt-1">
                                                <!-- <img src="<?php echo base_url();?>app-assets/images/logo/login-logo.png" alt="company logo" /> -->
                                            </div>
                                        </div>
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Buat Akun Baru</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Silakan Lengkapi Data Anda.</p>
                                        <div class="card-content">
                                            <div class="card-body collapse-icon accordion-icon-rotate pt-1">
                                                <div id="accordionExample" role="tablist" aria-multiselectable="true">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="collapse-margin">
                                                            <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                <span class="lead collapse-title">
                                                                    DATA LOGIN
                                                                </span>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <form action="<?php echo base_url();?>Home/simpan" method="POST" id="frm" name="loginForm">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="nik">NIK*</label>
                                                                                    <input type="text" class="form-control" id="nik" minlength="16" maxlength="16" name="nik" autocomplete="off" onkeypress="validate(event)" placeholder="NIK (KTP)" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password1" autocomplete="off" name="password" placeholder="Password 1" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="password">Ketik Lagi Password</label>
                                                                                    <input type="password" class="form-control" id="password2" autocomplete="off" placeholder="Password 2" required>
                                                                                </fieldset>
                                                                                <span id='message'></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapse-margin">
                                                                <div class="card-header" id="headingTwo" data-toggle="collapse" role="button" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <span class="lead collapse-title">
                                                                        BIODATA
                                                                    </span>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label for="nama">Nama Lengkap*</label>
                                                                                <fieldset class="form-group position-relative">
                                                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="nama">Tempat Lahir*</label>
                                                                                <fieldset class="form-group position-relative">
                                                                                    <input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" placeholder="Tempat Lahir" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="tgl_lahir">Tanggal Lahir*</label>
                                                                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="TANGGAL LAHIR" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="umur">Umur</label>
                                                                                    <input type="hidden" class="form-control" id="umur" name="umur" placeholder="umur" required>
                                                                                    <input type="text" class="form-control" id="umur2" name="umur2" placeholder="umur" disabled>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group">
                                                                                    <label for="tgl_lahir">Jenis Kelamin*</label>
                                                                                    <select class="form-control select2" name="jenkel" id="jenkel" required>
                                                                                        <option>Laki-Laki</option>
                                                                                        <option>Perempuan</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group">
                                                                                    <label for="status_menikah">Status Perkawinan*</label>
                                                                                    <select class="form-control select2" name="status_menikah" id="status_menikah" required>
                                                                                        <option>Belum Menikah</option>
                                                                                        <option>Menikah</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="hp">HP (WhatsApp)*</label>
                                                                                    <input type="text" class="form-control" id="hp" name="hp" minlength="10" placeholder="HP (WhatsApp)" autocomplete="off" onkeypress="validate(event)" required>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <fieldset class="form-group position-relative">
                                                                                    <label for="pekerjaan">Pekerjaan</label>
                                                                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="collapse-margin">
                                                            <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <span class="lead collapse-title">
                                                                    ALAMAT
                                                                </span>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group">
                                                                                <label for="prop">Provinsi</label>
                                                                                <select class="form-control select2" name="prov_domisili" id="prop" onchange="ajaxkota(this.value)">
                                                                                    <option>--Pilih Provinsi--</option>
                                                                                    <?php 
                                                                                    foreach($provinsi as $data){
                                                                                        echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group">
                                                                                <label for="kota">Kota</label>
                                                                                <select class="form-control select2" name="kota_domisili" id="kota" placeholder="Pilih Kota" onchange="ajaxkec(this.value)">
                                                                                    <option>Pilih Kota/Kab</option>
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group">
                                                                                <label for="kec">Kecamatan</label>
                                                                                <select class="form-control select2" name="kec_domisili" id="kec" onchange="ajaxkel(this.value)">
                                                                                    <option>Pilih Kecamatan</option>
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group">
                                                                                <label for="kel">Kelurahan</label>
                                                                                <select class="form-control select2" name="kel_domisili" id="kel">
                                                                                    <option>Pilih Kelurahan</option>
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group position-relative">
                                                                                <label for="rt">RT</label>
                                                                                <input type="text" class="form-control" onkeypress="validate(event)" autocomplete="off" name="rt_domisili" id="rt_domisili" placeholder="RT" required>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <fieldset class="form-group position-relative">
                                                                                <label for="rw">RW</label>
                                                                                <input type="text" class="form-control" onkeypress="validate(event)" autocomplete="off" name="rw_domisili" id="rw_domisili" placeholder="RW" required>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <fieldset class="form-group position-relative">
                                                                                <label for="alamat">Alamat</label>
                                                                                <input type="text" class="form-control" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat" required>
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <fieldset class="form-group">
                                                                                <label>
                                                                                    <input type="checkbox" value="setuju" name="setuju" required>
                                                                                    Dengan ini saya menyatakan bahwa data tersebut adalah yang sebenarnya dan menyatakan persetujuan untuk penanganan oleh pihak puskesmas.
                                                                                </label>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <button type="submit" onclick="cek()" class="btn btn-success btn-block">Daftar</button>
                                                                        </div> 
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script type="text/javascript">

        window.onload = function() {
            $('#tgl_lahir').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
                $('#umur2').val(age+ ' tahun');
            });

            document.getElementById("kota").disabled ='true';
            document.getElementById("kec").disabled ='true';
            document.getElementById("kel").disabled ='true';
            document.getElementById("rt_domisili").disabled ='true';
            document.getElementById("rw_domisili").disabled ='true';
            document.getElementById("alamat_domisili").disabled ='true';
            document.getElementById("message").value ='';
        //document.getElementById("tgl_vaksin").disabled ='true';
    }

    function cek(){
        $("#collapseOne").show();
        $("#collapseTwo").show();
        //alert('test');
    }

    function validatePassword() {
        var validator = $("#loginForm").validate({
            rules: {
                password: "required",
                password2: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: " Enter Password",
                confirmpassword: " Enter Confirm Password Same as Password"
            }
        });
        if (validator.form()) {
            alert('Sucess');
        }
    }

    var ajaxku=buatajax();
    function ajaxkota(id){
        var url="<?php echo base_url();?>daerah/getKab/"+id+"/"+Math.random();
        ajaxku.onreadystatechange=stateChanged;
        ajaxku.open("GET",url,true);
        ajaxku.send(null);
        document.getElementById("kec").disabled ='false';
    }

    function ajaxkec(id){
        var url="<?php echo base_url();?>daerah/getKec/"+id+"/"+Math.random();
        ajaxku.onreadystatechange=stateChangedKec;
        ajaxku.open("GET",url,true);
        ajaxku.send(null);
        document.getElementById("kel").disabled ='false';
    }

    function ajaxkel(id){
        var url="<?php echo base_url();?>daerah/getKel/"+id+"/"+Math.random();
        ajaxku.onreadystatechange=stateChangedKel;
        ajaxku.open("GET",url,true);
        ajaxku.send(null);

    }

    function ajaxlok(){
        $('#tgl_vaksin').removeAttr('disabled');
    }

    function buatajax(){
        if (window.XMLHttpRequest){
            return new XMLHttpRequest();
        }
        if (window.ActiveXObject){
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
        return null;
    }
    function stateChanged(){
        var data;
        if (ajaxku.readyState==4){
            data=ajaxku.responseText;
            if(data.length>=0){
                document.getElementById("kota").innerHTML = data
            }else{
                document.getElementById("kota").value = "<option selected>Pilih Kota/Kab</option>";
            }
            document.getElementById("kota").disabled = false;
        }
    }

    function stateChangedKec(){
        var data;
        if (ajaxku.readyState==4){
            data=ajaxku.responseText;
            if(data.length>=0){
                document.getElementById("kec").innerHTML = data
            }else{
                document.getElementById("kec").value = "<option selected>Pilih Kecamatan</option>";
            }
            document.getElementById("kec").disabled = false;
        }
    }

    function stateChangedKel(){
        var data;
        if (ajaxku.readyState==4){
            data=ajaxku.responseText;
            if(data.length>=0){
                document.getElementById("kel").innerHTML = data
            }else{
                document.getElementById("kel").value = "<option selected>Pilih Kelurahan/Desa</option>";
            }
            document.getElementById("kel").disabled = false;
            document.getElementById("rt_domisili").disabled = false;
            document.getElementById("rw_domisili").disabled = false;
            document.getElementById("alamat_domisili").disabled = false;
        }
    }

    function validate(evt)
    {
        if(evt.keyCode!=8)
        {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key))
            {
                theEvent.returnValue = false;

                if (theEvent.preventDefault)
                    theEvent.preventDefault();
            }
        }
    }


</script>


<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url();?>app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<script type="text/javascript">
    $('#password1, #password2').on('keyup', function () {
      if ($('#password1').val() == $('#password2').val()) {
        $('#message').html('Password Sama').css('color', 'green');
    } else 
    $('#message').html('Password Tidak Sama').css('color', 'red');
});
</script>
<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url();?>app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url();?>app-assets/js/core/app.js"></script>
<script src="<?php echo base_url();?>app-assets/js/scripts/components.js"></script>
<script src="<?php echo base_url();?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<!-- BEGIN: Page JS-->
<script src="<?php echo base_url();?>app-assets/js/scripts/forms/select/form-select2.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>