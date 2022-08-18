//show modal thêm user
function modalShow(selectorBtn,selectorModal,selectorOverlay) {
    const btnEl = document.querySelector(selectorBtn);
    const modalEl = document.querySelector(selectorModal);
    const overlayEl = document.querySelector(selectorOverlay);

    btnEl.onclick = () => {
        modalEl.classList.add('active');
    }

    overlayEl.onclick = () => {
        modalEl.classList.remove('active');
    }
}

// hiển thị sơ đồ dạng đường line
function showChartLine (nameId,numberDay,numberMonth,dataMonth,nameVariable) {
    let myChartMonthComment = document.getElementById(nameId).getContext('2d');
    if (nameVariable) {
        nameVariable.destroy();
    } 

    let chartMonthComment = new Chart(myChartMonthComment, {
        type: 'line',
        data: {
                labels: numberDay,
                datasets: [{
                    label: 'Tháng '+numberMonth,
                    data: dataMonth,
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
        options: {}
    });
    return chartMonthComment;
}

// hiển thị sơ đồ dạng cột
function showChartColumn (nameId,numberMonth,numberYear,dataYear,nameVariable) {
    const myChartYearComment = document.getElementById(nameId).getContext('2d');
    if (nameVariable) {
        nameVariable.destroy();
    }
    const chartYearComment = new Chart(myChartYearComment, {
        type: 'bar',
        data: {
            labels: numberMonth,
            datasets: [{
                    label: 'Năm '+numberYear,
                    data: dataYear,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
    });

    return chartYearComment;
}

// các biến đều phải có định dạng là số
// lấy ra ngày phía trước
function selectDayAfter (day,month,year) {
    let result;
    if (day == 1 && month == 1) {
        let newMonth = 12;
        let newYear = year - 1;
        let newDay = getDayOfMonth(month,year);
        result = {
            'day': newDay >= 10 ? newDay : '0'+newDay,
            'month': newMonth >= 10 ? newMonth : '0'+newMonth,
            'year': newYear,
        };
    }

    if (day == 1 && month != 1) {
        result = {
            'day': getDayOfMonth(month-1,year) >= 10 ? getDayOfMonth(month-1,year) : '0'+getDayOfMonth(month-1,year),
            'month': (month - 1) >= 10 ? month-1 : '0'+(month-1),
            'year': year,
        };
    }

    if (day != 1) {
        result = {
            'day': (day - 1) >=10 ? day-1 : '0'+(day-1),
            'month': month >= 10 ? month : '0'+month,
            'year': year,
        };
    }

    return result;
}

// lấy ra tháng phía trước [year,month]
function selectMonthAfter (month,year) {
    if (month == 1) {
        return {
            'month': 12,
            'year': year - 1,
        };
    }
    if (month > 1) {
        return {
            'month': (month - 1) >= 10 ? month - 1 : '0'+(month-1),
            'year': year,
        };
    }
}

// lấy ra số ngày của 1 năm từ tháng 1 đến tháng 12
function get_day_of_month (year) {
    const dayArr = [];
    for (let i = 1;i <= 12 ;i++) {
        // lấy ra số ngày của tháng 1 đến tháng 12
        dayArr.push(new Date(year, i, 0).getDate());
    }
    return dayArr;
}

// lấy ra số ngày của 1 tháng năm bất kỳ
function getDayOfMonth (month,year) {
    return new Date(year, month, 0).getDate();
}

// so sánh 2 ngày
function compareDate (d1, d2) {
    let ms1 = (new Date(d1)).getTime();
    let ms2 = (new Date(d2)).getTime();
    return ms1 == ms2;
};

// datetime -> date
function splitDate (dateTime) {
    const dateC = dateTime.split(' ')[0];
    return dateC;
}

// lấy ra ngày tháng hiện tại
function getDateToday () {
    const date = new Date();
    let day = date.getDate() >= 10 ? date.getDate() : '0'+date.getDate();
    let month = (date.getMonth() + 1) >= 10 ? (date.getMonth() + 1) : '0'+(date.getMonth() + 1);
    return `${date.getFullYear()}-${month}-${day}`;
}

// tính số % chênh lệch của hiện tại so với trước
function deviant (after,today) {
    if (after == 0) {
        return today*100;
    }else {
        const daviantAfterAndToday = today/(after/100);
        return parseFloat(daviantAfterAndToday).toFixed(2) - 100;
    }
}

// function hiển thị thống kê đếm 
function statistical (callback,options) {
    // lấy ra số ngày lần lượt của các tháng từ 1-> 12
    const dayOfMonthArr = get_day_of_month((new Date()).getFullYear());
    const dateObj = new Date();
    const yearToday = dateObj.getFullYear();

    // lấy ra số comment ngày hôm nay
    const todayDate = getDateToday();
    let commentToday = []; // arr comment ngày hôm nay
    options.mainArr.forEach(commentItem => {
        if (compareDate(splitDate(commentItem[options.column.date]),todayDate)) {
            commentToday.push(commentItem);
        }
    });
    
    // comment ngày hôm qua
    const dateAfterObj = selectDayAfter(dateObj.getDate(),dateObj.getMonth()+1,dateObj.getFullYear());
    const afterDay = `${dateAfterObj.year}-${dateAfterObj.month}-${dateAfterObj.day}`;// ngày hôm qua
    let commentDayAfter = [];
    options.mainArr.forEach(commentItem => {
        if (compareDate(splitDate(commentItem[options.column.date]),afterDay)) {
            commentDayAfter.push(commentItem);
        }
    });

    // bình luận tháng này
    const monthToday = dateObj.getMonth() + 1;
    let commentThisMonth = [];
    options.mainArr.forEach(commentItem => {
        let commentDate = new Date(commentItem[options.column.date]);
        if ((commentDate.getMonth() + 1) == monthToday && yearToday == commentDate.getFullYear()) {
            commentThisMonth.push(commentItem);
        }
    });

    // bình luận tháng trước
    const monthAfter = selectMonthAfter(monthToday,yearToday);
    let commentMonthAfter = [];
    options.mainArr.forEach(commentItem => {
        let commentDate = new Date(commentItem[options.column.date]);
        if ((commentDate.getMonth() + 1) == monthAfter.month && monthAfter.year == commentDate.getFullYear()) {
            commentMonthAfter.push(commentItem);
        }
    });

    // bình luận năm nay
    let commentThisYear = [];
    options.mainArr.forEach(commentItem => {
        let commentDate = new Date(commentItem[options.column.date]);
        if (yearToday == commentDate.getFullYear()) {
            commentThisYear.push(commentItem);
        }
    });

    // bình luận năm trước
    let commentAfterYear = [];
    options.mainArr.forEach(commentItem => {
        let commentDate = new Date(commentItem[options.column.date]);
        if (yearToday - 1 == commentDate.getFullYear()) {
            commentAfterYear.push(commentItem);
        }
    });

    // lấy ra các element
    const listEl = document.querySelector(options.selectorList);
    const dayEl = listEl.querySelector(options.selectorDay);
    const monthEl = listEl.querySelector(options.selectorMonth);
    const yearEl = listEl.querySelector(options.selectorYear);

    // Hiển thị bình luận hôm nay
    dayEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = commentToday.length;
        // so với ngày hôm trước
    const deviantDay = deviant(commentDayAfter.length,commentToday.length);
    dayEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantDay >= 0 ? '+'+deviantDay+'%' : ''+deviantDay+'%';

    if (deviantDay >= 0) {
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // Hiển thị tháng này
    monthEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = commentThisMonth.length;
        // so với tháng trước
    const deviantMonth = deviant(commentMonthAfter.length,commentThisMonth.length);
    monthEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantMonth >= 0 ? '+'+deviantMonth+'%' : ''+deviantMonth+'%';

    if (deviantMonth >= 0) {
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // hiển thị năm nay
    yearEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = commentThisYear.length;
        // so với ngày hôm trước
    const deviantYear = deviant(commentAfterYear.length,commentThisYear.length);
    yearEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantYear >= 0 ? '+'+deviantYear+'%' : ''+deviantYear+'%';

    if (deviantYear >= 0) {
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // xử lý logic biểu đồ
    callback(options);
}

// show các sơ đồ đếm
function showChartComment (options) {
    const listEl = document.querySelector(options.selectorList);
    const dateObj = new Date();
    const chartMonthBlock = listEl.querySelector(options.selectorMonthBlock);
    const monthMEl = chartMonthBlock.querySelector(options.selectorMonthSl); 
    const monthMYEl = chartMonthBlock.querySelector(options.selectorMonthYSl); 

    // ===== biểu đồ ngày =====
    // lấy ra dữ liệu từng ngày trong tháng
    let dataMonth = []; // mảng dữ liệu số comment từng ngày của tháng
    let numberDay = getDayOfMonth(dateObj.getMonth()+1,dateObj.getFullYear()); // số ngày trong tháng hiển thị
    let numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
    for (let i = 1; i <= numberDay;i++) {
        numberDayArr.push(i);
    }

    numberDayArr.forEach( itemDay => {
        let numberCommentDay = [];
        let date = dateObj.getFullYear()+'-'
                    +((dateObj.getMonth() +1) >=10 ?(dateObj.getMonth() +1) : '0'+((dateObj.getMonth() +1)))+
                    '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
        options.mainArr.forEach( itemComment => {
            if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                numberCommentDay.push(itemComment);
            }
        });
        dataMonth.push(numberCommentDay.length);
    });

    options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,dateObj.getMonth()+1,dataMonth,options.nameVariableM);
    // khi thay đổi select
    monthMEl.onchange = () => {
        dataMonth = [];
        numberDay = getDayOfMonth(+monthMEl.value,+monthMYEl.value);
        numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
        for (let i = 1; i <= numberDay;i++) {
            numberDayArr.push(i);
        }

        numberDayArr.forEach( itemDay => {
            let numberCommentDay = [];
            let date = +monthMYEl.value+'-'
                        +(+monthMEl.value >=10 ? +monthMEl.value : '0'+(+monthMEl.value))+
                        '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
            options.mainArr.forEach( itemComment => {
                if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                    numberCommentDay.push(itemComment);
                }
            });
            dataMonth.push(numberCommentDay.length);
        });

        options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,+monthMEl.value,dataMonth,options.nameVariableM);
    }
    // thay đổi năm
    monthMYEl.onchange = () => {
        dataMonth = [];
        numberDay = getDayOfMonth(+monthMEl.value,+monthMYEl.value);
        numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
        for (let i = 1; i <= numberDay;i++) {
            numberDayArr.push(i);
        }

        numberDayArr.forEach( itemDay => {
            let numberCommentDay = [];
            let date = +monthMYEl.value+'-'
                        +(+monthMEl.value >=10 ? +monthMEl.value : '0'+(+monthMEl.value))+
                        '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
            options.mainArr.forEach( itemComment => {
                if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                    numberCommentDay.push(itemComment);
                }
            });
            dataMonth.push(numberCommentDay.length);
        });

        options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,+monthMEl.value,dataMonth,options.nameVariableM);
    }

    // ====== biểu đồ tháng ====
    // lấy dữ liệu comment từng tháng
    let numberMonthArr = [];
    let nameMonthArr = [];
    for (let i = 1; i <= 12; i++) {
        numberMonthArr.push(i);
        nameMonthArr.push('Tháng '+i);
    }
    // trường hợp mặc định
    const chartYearBlock = listEl.querySelector(options.selectorYearBlock);
    const yearYEl = chartYearBlock.querySelector(options.selectorYearSl);

    let numberYearSl = +yearYEl.value;
    let dataYear = [];
    numberMonthArr.forEach( itemMonth => {
        let numberCommentMonth = [];
        options.mainArr.forEach( itemComment => {
            let date = new Date(itemComment[options.column.date]);
            if (date.getMonth() + 1 == itemMonth && date.getFullYear() == numberYearSl) {
                numberCommentMonth.push(itemComment);
            }
        });
        dataYear.push(numberCommentMonth.length);
    });

    options.nameVariableY = showChartColumn (options.nameIdCanvasYear,nameMonthArr,numberYearSl,dataYear,options.nameVariableY);

    yearYEl.onchange = () => {
        numberYearSl = +yearYEl.value;
        dataYear = [];
        numberMonthArr.forEach( itemMonth => {
            let numberCommentMonth = [];
            options.mainArr.forEach( itemComment => {
                let date = new Date(itemComment[options.column.date]);
                if (date.getMonth() + 1 == itemMonth && date.getFullYear() == numberYearSl) {
                    numberCommentMonth.push(itemComment);
                }
            });
            dataYear.push(numberCommentMonth.length);
        });

        options.nameVariableY = showChartColumn (options.nameIdCanvasYear,nameMonthArr,numberYearSl,dataYear,options.nameVariableY);
    }
}

// ==== thông kê kê tổng ====
// function hiển thị thống kê tổng 
function statisticalSum (callback,options) {
    // lấy ra số ngày lần lượt của các tháng từ 1-> 12
    const dateObj = new Date();
    const yearToday = dateObj.getFullYear();

    // lấy ra số view ngày hôm nay
    const todayDate = getDateToday();
    let viewToday = 0; // arr comment ngày hôm nay
    options.mainArr.forEach(mainItem => {
        if (compareDate(mainItem[options.column.date],todayDate)) {
            viewToday += +mainItem[options.column.numberView];
        }
    });
    
    // view ngày hôm qua
    const dateAfterObj = selectDayAfter(dateObj.getDate(),dateObj.getMonth()+1,dateObj.getFullYear());
    const afterDay = `${dateAfterObj.year}-${dateAfterObj.month}-${dateAfterObj.day}`;// ngày hôm qua
    let viewDayAfter = 0;
    options.mainArr.forEach(mainItem => {
        if (compareDate(mainItem[options.column.date],afterDay)) {
            viewDayAfter += +mainItem[options.column.numberView];
        }
    });

    // view tháng này
    const monthToday = dateObj.getMonth() + 1;
    let viewThisMonth = 0;
    options.mainArr.forEach(mainItem => {
        let viewDate = new Date(mainItem[options.column.date]);
        if ((viewDate.getMonth() + 1) == monthToday && yearToday == viewDate.getFullYear()) {
            viewThisMonth += +mainItem[options.column.numberView];
        }
    });

    // view tháng trước
    const monthAfter = selectMonthAfter(monthToday,yearToday);
    let viewMonthAfter = 0;
    options.mainArr.forEach(mainItem => {
        let viewDate = new Date(mainItem[options.column.date]);
        if ((viewDate.getMonth() + 1) == monthAfter.month && monthAfter.year == viewDate.getFullYear()) {
            viewMonthAfter += +mainItem[options.column.numberView];
        }
    });

    // bình luận năm nay
    let viewThisYear = 0;
    options.mainArr.forEach(mainItem => {
        let yearDate = new Date(mainItem[options.column.date]);
        if (yearToday == yearDate.getFullYear()) {
            viewThisYear += +mainItem[options.column.numberView];
        }
    });

    // bình luận năm trước
    let viewAfterYear = 0;
    options.mainArr.forEach(mainItem => {
        let yearDate = new Date(mainItem[options.column.date]);
        if (yearToday - 1 == yearDate.getFullYear()) {
            viewAfterYear += +mainItem[options.column.numberView];
        }
    });

    // lấy ra các element
    const listEl = document.querySelector(options.selectorList);
    const dayEl = listEl.querySelector(options.selectorDay);
    const monthEl = listEl.querySelector(options.selectorMonth);
    const yearEl = listEl.querySelector(options.selectorYear);

    // Hiển thị bình luận hôm nay
    dayEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = viewToday;
        // so với ngày hôm trước
    const deviantDay = deviant(viewDayAfter,viewToday);
    dayEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantDay >= 0 ? '+'+deviantDay+'%' : ''+deviantDay+'%';

    if (deviantDay >= 0) {
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        dayEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // Hiển thị tháng này
    monthEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = viewThisMonth;
        // so với tháng trước
    const deviantMonth = deviant(viewMonthAfter,viewThisMonth);
    monthEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantMonth >= 0 ? '+'+deviantMonth+'%' : ''+deviantMonth+'%';

    if (deviantMonth >= 0) {
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        monthEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // hiển thị năm nay
    yearEl.querySelector('.adminQl-statistical-overview-item-text .title').innerText = viewThisYear;
        // so với ngày hôm trước
    const deviantYear = deviant(viewAfterYear,viewThisYear);
    yearEl.querySelector('.adminQl-statistical-overview-item-other span').innerText = deviantYear >= 0 ? '+'+deviantYear+'%' : ''+deviantYear+'%';

    if (deviantYear >= 0) {
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('green');
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('blue');
    }else {
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.add('blue');
        yearEl.querySelector('.adminQl-statistical-overview-item-other span').classList.remove('green');
    }

    // xử lý logic biểu đồ
    callback(options);
}

// show các sơ đồ tổng
function showChartSum (options) {
    const listEl = document.querySelector(options.selectorList);
    const dateObj = new Date();
    const chartMonthBlock = listEl.querySelector(options.selectorMonthBlock);
    const monthMEl = chartMonthBlock.querySelector(options.selectorMonthSl); 
    const monthMYEl = chartMonthBlock.querySelector(options.selectorMonthYSl); 

    // ===== biểu đồ ngày =====
    // lấy ra dữ liệu từng ngày trong tháng
    let dataMonth = []; // mảng dữ liệu số comment từng ngày của tháng
    let numberDay = getDayOfMonth(dateObj.getMonth()+1,dateObj.getFullYear()); // số ngày trong tháng hiển thị
    let numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
    for (let i = 1; i <= numberDay;i++) {
        numberDayArr.push(i);
    }

    numberDayArr.forEach( itemDay => {
        let viewNumberDay = 0;
        let date = dateObj.getFullYear()+'-'
                    +((dateObj.getMonth() +1) >=10 ?(dateObj.getMonth() +1) : '0'+((dateObj.getMonth() +1)))+
                    '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
        options.mainArr.forEach( itemComment => {
            if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                viewNumberDay += +itemComment[options.column.numberView];
            }
        });
        dataMonth.push(viewNumberDay);
    });

    options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,dateObj.getMonth()+1,dataMonth,options.nameVariableM);
    // khi thay đổi select
    monthMEl.onchange = () => {
        dataMonth = [];
        numberDay = getDayOfMonth(+monthMEl.value,+monthMYEl.value);
        numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
        for (let i = 1; i <= numberDay;i++) {
            numberDayArr.push(i);
        }

        numberDayArr.forEach( itemDay => {
            let numberCommentDay = 0;
            let date = +monthMYEl.value+'-'
                        +(+monthMEl.value >=10 ? +monthMEl.value : '0'+(+monthMEl.value))+
                        '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
            options.mainArr.forEach( itemComment => {
                if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                    numberCommentDay += +itemComment[options.column.numberView];
                }
            });
            dataMonth.push(numberCommentDay);
        });

        options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,+monthMEl.value,dataMonth,options.nameVariableM);
    }
    // thay đổi năm
    monthMYEl.onchange = () => {
        dataMonth = [];
        numberDay = getDayOfMonth(+monthMEl.value,+monthMYEl.value);
        numberDayArr = []; //số ngày trong tháng hiển thị dạng mảng
        for (let i = 1; i <= numberDay;i++) {
            numberDayArr.push(i);
        }

        numberDayArr.forEach( itemDay => {
            let numberCommentDay = 0;
            let date = +monthMYEl.value+'-'
                        +(+monthMEl.value >=10 ? +monthMEl.value : '0'+(+monthMEl.value))+
                        '-'+(itemDay >=10 ? itemDay : '0'+itemDay);
            options.mainArr.forEach( itemComment => {
                if (compareDate(splitDate(itemComment[options.column.date]),date)) {
                    numberCommentDay += +itemComment[options.column.numberView];
                }
            });
            dataMonth.push(numberCommentDay);
        });

        options.nameVariableM = showChartLine(options.nameIdCanvasMonth,numberDayArr,+monthMEl.value,dataMonth,options.nameVariableM);
    }

    // ====== biểu đồ tháng ====
    // lấy dữ liệu comment từng tháng
    let numberMonthArr = [];
    let nameMonthArr = [];
    for (let i = 1; i <= 12; i++) {
        numberMonthArr.push(i);
        nameMonthArr.push('Tháng '+i);
    }
    // trường hợp mặc định
    const chartYearBlock = listEl.querySelector(options.selectorYearBlock);
    const yearYEl = chartYearBlock.querySelector(options.selectorYearSl);

    let numberYearSl = +yearYEl.value;
    let dataYear = [];
    numberMonthArr.forEach( itemMonth => {
        let numberCommentMonth = 0;
        options.mainArr.forEach( itemComment => {
            let date = new Date(itemComment[options.column.date]);
            if (date.getMonth() + 1 == itemMonth && date.getFullYear() == numberYearSl) {
                numberCommentMonth += +itemComment[options.column.numberView];
            }
        });
        dataYear.push(numberCommentMonth);
    });

    options.nameVariableY = showChartColumn (options.nameIdCanvasYear,nameMonthArr,numberYearSl,dataYear,options.nameVariableY);

    yearYEl.onchange = () => {
        numberYearSl = +yearYEl.value;
        dataYear = [];
        numberMonthArr.forEach( itemMonth => {
            let numberCommentMonth = 0;
            options.mainArr.forEach( itemComment => {
                let date = new Date(itemComment[options.column.date]);
                if (date.getMonth() + 1 == itemMonth && date.getFullYear() == numberYearSl) {
                    numberCommentMonth += +itemComment[options.column.numberView];
                }
            });
            dataYear.push(numberCommentMonth);
        });

        options.nameVariableY = showChartColumn (options.nameIdCanvasYear,nameMonthArr,numberYearSl,dataYear,options.nameVariableY);
    }
}

// show list user 
function showListUser (numberPagination,options) {
    const listEl = document.querySelector(options.selectorList);
    console.log(listEl);
    if (options.arrange) {
        options.arrange();
    }
    if (!numberPagination) {
        numberPagination = 0;
    }

    let userLogin;
    options.mainArr.forEach(itemMain => {
        if (options.idLogin == itemMain['idUser']) {
            userLogin = itemMain;
            return 0;
        }
    });

    // vòng lặp lọc ra các user hiển thị
    let htmls = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            htmls += `
            <tr>
                <td>${options.mainArr[i]['idUser']}</td>
                <td><a href="${options.userUrl}/user_profile/index.php?idUser=${options.mainArr[i]['idUser']}" class="text">${options.mainArr[i]['userName']}</a></td>
                <td>${options.mainArr[i]['email']}</td>
                <td>${showNameBadge(options.mainArr[i]['quyenHan'])}</td>
                <td>${options.mainArr[i]['userDate']}</td>
                <td>${showNameSex(options.mainArr[i]['sex'])}</td>
                <td>
                `+(+userLogin['quyenHan'] >= 4 && userLogin['idUser'] != options.mainArr[i]['idUser'] ? `
                    `+(+options.mainArr[i]['trangThaiTk'] == 1 ? `
                        <a href="${options.adminUrl}/trangchinh/editUser.php?idUser=${options.mainArr[i]['idUser']}&type=lock&link=${options.adminUrl}/trangchinh/index.php" class="editTruyen" title="Mở tài khoản"><i class="fad fa-lock-open"></i></a>
                    ` : `
                        <a href="${options.adminUrl}/trangchinh/editUser.php?idUser=${options.mainArr[i]['idUser']}&type=lock&link=${options.adminUrl}/trangchinh/index.php" class="editTruyen" style="color:var(--primary);" title="Khóa tài khoản"><i class="fas fa-lock-alt"></i></a>
                    `)+`
                ` : '')+`
                `+(+userLogin['quyenHan'] == 5 && userLogin['idUser'] != options.mainArr[i]['idUser'] ? `
                    `+(+options.mainArr[i]['quyenHan'] < 4 ? `
                        <a href="${options.adminUrl}/trangchinh/editUser.php?idUser=${options.mainArr[i]['idUser']}&type=up&link=${options.adminUrl}/trangchinh/index.php" class="addChuong" title="Bổ nhiệm"><i class="fad fa-sort-size-up"></i></a>
                    ` : '')+`
                    `+(
                        +options.mainArr[i]['quyenHan'] > 1 ? `
                            <a href="${options.adminUrl}/trangchinh/editUser.php?idUser=${options.mainArr[i]['idUser']}&type=down&link=${options.adminUrl}/trangchinh/index.php" class="addChuong" title="Giáng chức"><i class="fad fa-sort-size-down-alt"></i></a>
                        ` : '' 
                    )+`
                    <a href="${options.adminUrl}/trangchinh/editUser.php?idUser=${options.mainArr[i]['idUser']}&type=delete&link=${options.adminUrl}/trangchinh/index.php&idDelete=${userLogin['idUser']}" class="addChuong" title="Xóa user"><i class="fad fa-trash-alt"></i></a>
                ` : '')+`
                </td>
            </tr>
            `;
        }else {
            continue;
        }
    }
    listEl.innerHTML = htmls;
}

function showNameSex (num) {
    if (num == 1) {
        return "Nam";
    }else if (num == 0) {
        return 'Nữ';
    }else {
        return 'Không xác định';
    }
}

function showListCensorship (numberPagination,options) {
    const listEl = document.querySelector(options.selectorList);
    if (options.arrange) {
        options.arrange();
    }
    if (!numberPagination) {
        numberPagination = 0;
    }

    let userLogin;
    options.subArr.forEach(subItem => {
        if (options.idLogin == subItem['idUser']) {
            userLogin = subItem;
            return 0;
        }
    });

    // vòng lặp lọc ra các user hiển thị
    let htmls = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            let userUpTruyen;
            options.subArr.forEach(itemSub => {
                if (itemSub['idUser'] == options.mainArr[i]['idUser']) {
                    userUpTruyen = itemSub;
                    return 0;
                }
            });
            htmls += `
            <div class="adminQl-censorship-item">
                <div class="adminQl-censorship-item-left">
                    <img src="${options.contentUrl}/IMG/${options.mainArr[i]['imgTruyen']}" alt="">
                    <div>
                        <a href="${options.adminUrl}/truyen/indexAdminTruyen.php?editTruyen=1&idTruyen=${options.mainArr[i]['idTruyen']}&duyet=0" class="adminQl-censorship-item-title text">${options.mainArr[i]['tenTruyen']}</a>
                        <a href="${options.userUrl}/user_profile/index.php?idUser=${userUpTruyen['idUser']}" class="adminQl-censorship-item-userUp text">
                            <i class="fad fa-cloud-upload-alt mr-2"></i>
                            ${userUpTruyen['userName']}
                        </a>
                        <span class="adminQl-censorship-item-timeUp"><i class="fad fa-clock mr-2"></i>${time_distance_current(options.mainArr[i]['dateTruyen'])}</span>

                    </div>
                </div>

                <div class="adminQl-censorship-item-right">
                    <a href="${options.adminUrl}/trangchinh/duyetTruyen.php?idTruyen=${options.mainArr[i]['idTruyen']}&type=approved&link=${options.adminUrl}/trangchinh/index.php" class="adminQl-censorship-item-right-duyet adminQl-censorship-item-btn">Thông Qua</a>
                    <a href="${options.adminUrl}/trangchinh/duyetTruyen.php?idTruyen=${options.mainArr[i]['idTruyen']}&type=delete&link=${options.adminUrl}/trangchinh/index.php" class="adminQl-censorship-item-right-delete adminQl-censorship-item-btn">Xóa</a>
                </div>
            </div>
            `;
        }else {
            continue;
        }
    }
    listEl.innerHTML = htmls;
}

function showListUserNoti (numberPagination,options) {
    const listEl1 = document.querySelector(options.selectorList);
    if (options.arrange) {
        options.arrange();
    }
    
    if (!numberPagination) {
        numberPagination = 0;
    }

    // vòng lặp lọc ra các user hiển thị
    let htmls = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            htmls += `
                <tr>
                    <td>${options.mainArr[i]['idUser']}</td>
                    <td><a href="${options.userUrl}/user_profile/index.php?idUser=${options.mainArr[i]['idUser']}" class="text">${options.mainArr[i]['userName']}</a></td>
                    <td>${options.mainArr[i]['email']}</td>
                    <td>${showNameBadge(options.mainArr[i]['quyenHan'])}</td>
                    <td>${options.mainArr[i]['userDate']}</td>
                    <td>${showNameSex(options.mainArr[i]['sex'])}</td>
                    <td>
                        <input type="checkbox" name="userAddNotifyCheckbox[]" value="${options.mainArr[i]['idUser']}" class="chonCheckBox">
                    </td>
                </tr>
            `;
        }else {
            continue;
        }
    }
    listEl1.innerHTML = htmls;
}