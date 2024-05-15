import React from 'react';
import { Get } from '../hooks/Get';
import Table from './Table';

function ContactsView (){
    const contactsData = Get("http://127.0.0.1:8000/api/contacts");
    let contactsCols = ['Usuario','Email','Telefono','Número de cuenta'];
    
    return(
        <Table 
        data={contactsData}
        cols={contactsCols}
        type='contacts'
        />
    )
}

export default ContactsView;
