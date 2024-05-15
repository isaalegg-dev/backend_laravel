import React from 'react';
import { Get } from '../hooks/Get';
import Table from './Table';

function BillsView (){
    const billsData = Get("http://127.0.0.1:8000/api/bills");
    let billsCols = ['Usuario','Descripcion','Monto', 'Fecha', 'Tipo'];
    
    return(
        <Table 
        data={billsData}
        cols={billsCols}
        type={'bills'}
        />
    )
}

export default BillsView;