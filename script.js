window.onload = function(){
    let table = document.querySelector('#table_cars'),
        tbody = table.querySelector('tbody');
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

    table.addEventListener('click', (e)=>{
        let elem = e.target;
        let index = elem.parentElement.cellIndex;
        if(elem.classList.contains('sort_click')){
            sortTable(index);
        }
    });
    
}


