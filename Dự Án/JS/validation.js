function validator (options) {

    var form = document.querySelector(options.form);

    var selectorRules = {};

    form.onsubmit = (e) => {
        e.preventDefault();

        var formInvalid = true;

        options.rules.forEach ((rule) => {
            var inputElement = form.querySelector(rule.selector);
            var errParentElement = inputElement.parentElement.querySelector(options.errSelector);
            var errMessage;
            
            var selectorRule = selectorRules[rule.selector];
                for (var i = 0;i < selectorRule.length;i++) {
                    errMessage = selectorRule[i](inputElement.value);
                    
                    if (errMessage) {
                        break;
                    }
                } 
    
                if (errMessage) {
                    errParentElement.innerText = errMessage;
                    inputElement.parentElement.classList.add('invalid');
                }else {
                    errParentElement.innerText = '';
                    inputElement.parentElement.classList.remove('invalid');
                } 
            
            if (errMessage) {
                formInvalid = false;
            }
        });

        if (formInvalid) {
            form.submit();
        }


    }

    options.rules.forEach( (rule) => {
        var inputElement = form.querySelector(rule.selector);
            
        if (Array.isArray(selectorRules[rule.selector])) {
            selectorRules[rule.selector].push(rule.test);
        }else {
            selectorRules[rule.selector]= [rule.test];
        }


        if (inputElement) {

            var errParentElement = inputElement.parentElement.querySelector(options.errSelector);
            var errMessage;
            // Xử lý sự kiện blur
            inputElement.onblur = () => {

                var selectorRule = selectorRules[rule.selector];
                for (var i = 0;i < selectorRule.length;i++) {
                    errMessage = selectorRule[i](inputElement.value);
                    
                    if (errMessage) {
                        break;
                    }
                } 

                if (errMessage) {
                    errParentElement.innerText = errMessage;
                    inputElement.parentElement.classList.add('invalid');
                }else {
                    errParentElement.innerText = '';
                    inputElement.parentElement.classList.remove('invalid');
                }  

            }
            //Xử lý sự kiện người dùng đang nhập
            inputElement.oninput = () => {
                errParentElement.innerText = '';
                inputElement.parentElement.classList.remove('invalid');
            }
        }
    });

}


validator.isRequied = (selector,errText) => {
    return {
        selector: selector,
        test: function (value) {
            return value.trim() ? undefined : errText || 'Bạn không được bỏ trống trường này';
        }
    }
}

validator.isEmail = (selector,errText) => {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : errText || 'Bạn không được bỏ trống email này';
        }
    }
}

validator.minLength = (selector,min,errText) => {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : errText || `Vui lòng nhập vào tối thiểu ${min} ký tự`;
        }
    }
}

validator.maxLength = (selector,max,errText) => {
    return {
        selector: selector,
        test: function (value) {
            return value.length <= max ? undefined : errText || `Vui lòng chỉ nhập tối đa ${max} ký tự`;
        }
    }
}

validator.confirmed = (selector,getConfirmed,errText) => {
    return {
        selector: selector,
        test: function (value) {
            return value == getConfirmed() ? undefined : errText || `Vui lòng nhập vào tối thiểu ${min} ký tự`;
        }
    }
}

validator.isString = (selector,errText) => {
    return {
        selector: selector,
        test: function (value) {
            const regex = /[a-zA-z]/;
            return value.length == 0 || regex.test(value) ? undefined : errText || 'Kiểu dữ liệu chỉ được phép là kiểu chuỗi'; 
        }
    }
}

validator.isNumber = (selector,errText) => {
    return {
        selector: selector,
        test: function (value) {
            const regex = /[0-9]/;
            return regex.test(value) ? undefined : errText || 'Kiểu dữ liệu chỉ được phép là kiểu chuỗi'; 
        }
    }
}

validator.countWord = (selector,wordNumber,errText) => {
    return {
        selector: selector,
        test: function (value) {
            const number1 = value.split(" ").length - 1;
            console.log(number1)
            return number1 >= wordNumber ? undefined : errText || `Trường này yêu cầu tối thiểu ${wordNumber} ký tự`;
        }
    }
}