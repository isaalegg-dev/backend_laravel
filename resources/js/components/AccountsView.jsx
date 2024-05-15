import React from 'react';
import { Get } from '../hooks/Get';
import Table from './Table';

function AccountsView (){
    const accountsData = Get("http://127.0.0.1:8000/api/accounts");
    let accountsCols = ['Enunciado','Número de cuenta'];
    
    return(
        <Table 
        data={accountsData}
        cols={accountsCols}
        type={'accounts'}
        />
    )
}

export default AccountsView;
