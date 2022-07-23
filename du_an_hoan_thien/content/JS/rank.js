// hander render item li in page rank
const handleRender = (list, selector) => {
    const htmlRender = list.map((item, index) => {
        return (
            `<li class="media py-4 border-bottom wrapLi"><a href="/truyen/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich" class="nh-thumb nh-thumb--90 shadow mr-3">
                <img alt="" width="72" data-src="https://static.cdnno.com/poster/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich/150.jpg?1656379210" src="${item.img}" lazy="loaded">
                <span class="ribbon ribbon--${index + 1}">${index + 1}</span></a>
                <div class="media-body">
                    <h2 class="fz-body mb-2 ">
                        <a href="/truyen/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich" class="d-block text-d title_rank">${item.title}</a>
                    </h2>
                    <div class="text-secondary fz-14 text-overflow-3-lines">
                        ${item.content}
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap mb-0 mt-3 text-secondary fz-13">
                        <li class="d-flex align-items-center mr-4"><i class="fa-solid fa-user-pen"></i>
                            <span class="d-inline-block fz-13 ml-2">${item.author}</span>
                        </li>
                        <li class="d-flex align-items-center mr-4"><i class="fa-solid fa-arrow-up-from-bracket"></i>
                            <span class="d-inline-block ml-2 fz-13">2460</span>
                        </li>
                        <li>
                            <span class="btn"> ${item.name}</span>
                        </li>
                    </ul>
                </div>
            </li>`
        )
    })
    document.querySelector(`${selector}`).innerHTML = htmlRender.join("")
}