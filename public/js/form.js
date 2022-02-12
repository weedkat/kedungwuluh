var steps = $("fieldset").length; //for prograssbar

function saveValue(e) {
    //save value for reload
    var id = e.id;
    var val = e.value;
    localStorage.setItem(id, val);
}

//progress bar
function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%");
}

function getSavedValue(v) {
    //get value when page load
    if (!localStorage.getItem(v)) {
        return "";
    }
    return localStorage.getItem(v);
}

function validation(e) {
    e.preventDefault();
    Swal.fire({
        title: "Warning",
        text: "Apakah anda yakin menghapus data ini?",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
    }).then((result) => {
        if (result.isConfirmed) {
            inputAll.forEach((n) => {
                localStorage.setItem(n.id, "");
            });
            $("#msform").submit();
            current_fs = $(".next1").parent();
            next_fs = $(".next1").parent().next();
            //Add Class Active
            $("#progressbar li")
                .eq($("fieldset").index(next_fs))
                .addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        next_fs.css({ opacity: opacity });
                    },
                    duration: 500,
                }
            );
            setProgressBar(++current);
        }
    });
}

//fill all input when reload
const inputAll = document.querySelectorAll(
    "input[id]:not(.next,.previous,.kode,#ktp,#surat_kk),select,textarea"
);

inputAll.forEach((n) => {
    n.value = getSavedValue(n.id);
});

$(document).ready(function () {
    //when document load

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current; //current progress bar value

    var visible = localStorage.getItem("visible"); //which fieldset is visible

    $("#msform").validate({
        rules: {
            nama_lengkap: {
                required: true,
            },
            no_hp: {
                required: true,
            },
            tempat_lahir: {
                required: true,
            },
            tanggal_lahir: {
                required: true,
            },
            warga_negara: {
                required: true,
            },
            agama: {
                required: true,
            },
            pekerjaan: {
                required: true,
            },
            tempat_tinggal: {
                required: true,
            },
            nik: {
                required: true,
            },
            status_kawin: {
                required: true,
            },
            keperluan: {
                required: true,
            },
            ktp: {
                required: true,
            },
            surat_kk: {
                required: true,
            },
        },
        messages: {
            nama_lengkap: {
                required: "Nama lengkap kosong",
            },
        },
        errorPlacement: function (error, element) {
            element.after("<br/>").after(error);
        },
    });
    //set the visible fieldset
    if (visible) {
        $("#" + visible).show();
        $("#progressbar li")
            .eq($("fieldset").index($("#" + visible)))
            .prevAll()
            .addBack()
            .addClass("active");
        current = $("fieldset").index($("#" + visible)) + 1;
    } else {
        $("#fieldset1").show();
        current = 1;
    }

    //set
    setProgressBar(current);

    $(".next1").click(function (e) {
        if ($("#msform").valid()) {
            validation(e);
        }
    });
    //if click next
    $(".next").click(function () {
        if ($("#msform").valid()) {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            //Add Class Active
            $("#progressbar li")
                .eq($("fieldset").index(next_fs))
                .addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        next_fs.css({ opacity: opacity });
                    },
                    duration: 500,
                }
            );
            setProgressBar(++current);
        }
    });

    //if click previous button
    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(--current);
    });

    //if user done
    $(".ok").click(function () {
        localStorage.setItem("visible", "fieldset1");
    });

    //before page reload
    $(window).on("beforeunload", function () {
        //save all active li
        localStorage.setItem("active", $("#progressbar li").hasClass("active"));

        //save the visible fieldset
        if (current < steps) {
            localStorage.setItem("visible", $("fieldset:visible").prop("id"));
        } else {
            //end of the steps
            localStorage.setItem("visible", "fieldset3");
        }
    });
});
