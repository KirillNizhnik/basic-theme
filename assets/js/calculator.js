// VANTA.FOG({
//     el: "#calculator-title",
//     mouseControls: true,
//     touchControls: true,
//     gyroControls: false,
//     minHeight: 200.00,
//     minWidth: 200.00,
//     highlightColor: 0xC2A888,
//     midtoneColor: 0xCBB69D,
//     lowlightColor: 0xC2A888,
//     baseColor: 0xf2ded3,
//     blurFactor: 0.21,
//     speed: 4.10,
//     zoom: 1
// });
//
// VANTA.FOG({
//     el: "#response",
//     mouseControls: true,
//     touchControls: true,
//     gyroControls: false,
//     minHeight: 200.00,
//     minWidth: 200.00,
//     highlightColor: 0xC2A888,
//     midtoneColor: 0xCBB69D,
//     lowlightColor: 0xC2A888,
//     baseColor: 0xf2ded3,
//     blurFactor: 0.21,
//     speed: 4.10,
//     zoom: 1
// });

jQuery(document).ready(function ($) {
    let birthdayInput = $('#birthday');
    let btn = $('#calculator-submit-btn');
    let handednessSelect = $('#handedness');


    btn.on('click', function (event) {
        event.preventDefault();
        if (birthdayInput.val().trim() === '') {
            alert('Введіть дату народження.');
            return;
        }
        if (!validateDate()) {
            console.log('Дата не пройшла валідацію');
        } else {
            console.log('Дата пройшла валідацію');
            sendAjaxRequest(birthdayInput.val(), handednessSelect.val());
        }
    });

    function validateDate() {
        let enteredDate = new Date(birthdayInput.val());
        let minDate = new Date('1900-01-01');
        let maxDate = new Date('2151-12-31');


        if (enteredDate < minDate || enteredDate > maxDate) {
            alert('Дата народження повинна бути між 1900 і 2151 роками.');
            return false;
        }
        alert('Дякую!')
        return true;
    }

    function sendAjaxRequest(birthday, handedness) {
        let formData = {
            action: 'ajax_calculate',
            birthday: birthday,
            handedness: handedness
        };
        $.ajax({
            url: lets.ajax_url,
            method: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    console.log("class");
                    let calculatorResponse = document.getElementById('calculator-response')
                    if (calculatorResponse) {
                        calculatorResponse.remove();
                    }

                    let calculatorTitle = document.getElementById('calculator-head');
                    if (calculatorTitle) {
                        console.log(response.data)
                        calculatorTitle.insertAdjacentHTML('afterend', response.data);
                    }
                } else {
                    console.log("bad");
                }
            },
            error: function () {
                alert('Виникла помилка при відправці запиту.');
            }
        });
    }
});

