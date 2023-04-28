class Search{
    constructor(){
        this.messageButton = document.querySelector("#search")
        this.init()
    }
    init(){
        this.search()
    }
    search = ()=>{
        this.messageButton.addEventListener('click', ()=>console.log('Test'))
    }
}
const search = new Search()