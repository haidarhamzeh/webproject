const product=[
{
    id:0,
    image:'img/mockinbird1.jpg',
    title:'To Kill a Mockingbird',
    author:'Harper Lee'
},

]
const categories=[...new set(product.map((item)=>{return item}))]
document.getElementById('searchbar').addEventListener('keyup',(e)=>{
    const searchData =e.target.value.toLowerCase();
    const filterData =categories.filter((item)=> {
        return(
            item.title.toLocalLowerCase().includes(searchData)

        )
    })
displayItem(filterData)
});
const displayItem =(items)=> {
    document.getElementById('root').innerHTML=items.map((item)=>{
        var {image ,title ,author}=item;
        return(
          
              ` <img class='images' src=${image}></img>
             
                <p>${title}</p>
                <h2>${author}</h2>`
        )
            
    }).join('')
};
displayItem(categories);

