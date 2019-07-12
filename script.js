window.onload = function(){
    let table = document.querySelector('#table_cars'),
        tbody = table.querySelector('tbody'),
        sort_img = document.querySelectorAll('.sort_img');

        sortTable(8);
        
        
        function sortTable(param){
            let rowsTable = [].slice.call(tbody.rows);        
            rowsTable.sort(sortRow);
            
            
                    function sortRow(rowsA, rowsB){        
                        return rowsB.cells[param].innerHTML -rowsA.cells[param].innerHTML
                    }
    
            table.removeChild(tbody);
            
            for(let i = 0; i < rowsTable.length; i++){
                let b = i;
                tbody.appendChild(rowsTable[i]);
                rowsTable[i].cells[0].innerHTML = ++b;
            }
            table.appendChild(tbody);
        }

        function removeShow(){
            for(let i =0; i< sort_img.length; i++ ){
                sort_img[i].classList.remove('show');
                sort_img[i].classList.add('sort_img');
                
            }
        }

    table.addEventListener('click', (e)=>{
        let elem = e.target;
        let index = elem.cellIndex;
        console.log(index)
        if(elem.classList.contains('sort')){
            if(elem.hasAttribute('data-race')){
                console.log(elem.childNodes[1])
                removeShow()
                elem.childNodes[1].classList.remove('sort_img')
                elem.childNodes[1].classList.add('show')
            }
            else if(elem.hasAttribute('data-all')){
                removeShow()
                elem.childNodes[1].classList.remove('sort_img')
                elem.childNodes[1].classList.add('show')
            }
            sortTable(index);
        }
    });
    
}


