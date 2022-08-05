function showRank(numberPagination,options) {
    const listEl = document.querySelector(options.selectorList);
    if (options.arrange) {
        options.arrange();
    }
    if (!numberPagination) {
        numberPagination = 0;
    }
    
    // vòng lặp lọc ra các truyện hiển thị
    let htmls = '';
    let nameCate = '';
    for (let i = numberPagination*options.numberPagi;i < numberPagination*options.numberPagi + options.numberPagi; i++) {
        if (options.mainArr[i]) {
            options.subArr.forEach(cateItem => {
                if (cateItem['idDanhMuc'] == options.mainArr[i]['nhom1']) {
                    return nameCate = cateItem['tenDanhMuc'];
                }
            }); 
            htmls += `
            <li class="media py-4 border-bottom wrapLi">
                <a href="${options.userUrl}/truyen/index.php?idTruyen=${options.mainArr[i]['idTruyen']}" class="nh-thumb nh-thumb--90 shadow mr-3">
                    <img alt="" width="72" data-src="" src="${options.contentUrl}/IMG/${options.mainArr[i]['imgTruyen']}" lazy="loaded">
                    <span class="ribbon ribbon--${i + 1}">${i + 1}</span>
                </a>
                <div class="media-body">
                    <h2 class="fz-body mb-2 ">
                        <a href="${options.userUrl}/truyen/index.php?idTruyen=${options.mainArr[i]['idTruyen']}" class="d-block text-d title_rank">${options.mainArr[i]['tenTruyen']}</a>
                    </h2>
                    <div class="text-secondary fz-14 text-overflow-3-lines">
                        ${options.mainArr[i]['gioiThieu']}
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap mb-0 mt-3 text-secondary fz-13">
                        <li class="d-flex align-items-center mr-4"><i class="fa-solid fa-user-pen"></i>
                            <span class="d-inline-block fz-13 ml-2">${options.mainArr[i]['tacGia']}</span>
                        </li>
                        <li class="d-flex align-items-center mr-4">
                            ${options.icon}
                            <span class="d-inline-block ml-2 fz-13">${options.numberPrivate(options.mainArr,i)}</span>
                        </li>
                        <li>
                            <span class="btn"> ${nameCate}</span>
                        </li>
                    </ul>
                </div>
            </li>`;
        }else {
            continue;
        }
    }
    listEl.innerHTML = htmls;
}