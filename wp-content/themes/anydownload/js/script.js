$(function() {
    $('#downloadBtn').on('click', function (e) {
        e.preventDefault();
        let url = $('#url').val();
        url = url.trim();

        if (url.length === 0) {
            alert('error')
            return;
        }

        showLoader();

        let api = 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js';
        $.ajax({
            type : "get",
            // dataType : "json",
            url : api,
            data : {

            },
            context: this,
            success: function(response) {
                hideLoader();
                console.log('response', response)
                $('#result').show();

                $('html, body').animate({
                    scrollTop: $("#result").offset().top
                });
            },
            error: function( jqXHR, textStatus, errorThrown ){
                hideLoader();
                console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        })
        return false;

    })
});
$('#pasteBtn').on('click', function (e) {
    let pasteBtn = document.getElementById("pasteBtn");
    let input = document.getElementById("url")
    if (pasteBtn.innerHTML === 'Clear') {
        input.value = "";
        pasteBtn.innerHTML = 'Paste from clipboard';
    } else {
        navigator.clipboard.readText().then(clipText =>
                input.value = clipText,
            pasteBtn.innerHTML = 'Clear');
    }
})

/**
 * LAZY IMAGE: SEO
 */

document.addEventListener("DOMContentLoaded", function () {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyloadImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function () {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function (img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if (lazyloadImages.length === 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }
})

/**
 * COMMON FUNCTIONS
 */
function isValidURL(url) {
    if (!elm) {
        elm = document.createElement('input');
        elm.setAttribute('type', 'url');
    }
    elm.value = url;
    return elm.validity.valid;
}

function isEmpty(str) {
    return (!str || str.length === 0);
}

function showLoader() {
    document.getElementById("url").style.display = "none";
    document.getElementById("downloadBtn").style.display = "none";
    document.getElementById("pasteBtn").style.display = "none";
    let loader = document.createElement("img");
    loader.src = siteUrl + "/wp-content/themes/anydownload/images/loader.svg";
    loader.className = "img-fluid w-25 mx-auto";
    loader.id = "loader";
    document.getElementById("download-form").appendChild(loader);
}

function hideLoader() {
    document.getElementById("url").style.display = "";
    document.getElementById("downloadBtn").style.display = "";
    document.getElementById("pasteBtn").style.display = "";
    if (document.getElementById("loader") !== null) {
        document.getElementById("loader").remove();
    }
}

function showAlert(message) {
    let alertDiv = document.getElementById("alert");
    alertDiv.innerHTML = message;
    alertDiv.style.display = "";
    setTimeout(hideAlert, 5000);
    hideLoader();
}

function hideAlert() {
    let alertDiv = document.getElementById("alert");
    alertDiv.innerHTML = "";
    alertDiv.style.display = "none";
}

function removeHash() {
    history.pushState("", document.title, window.location.pathname
        + window.location.search);
}
