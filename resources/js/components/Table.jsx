import React, {useState,useEffect} from 'react';


function Table(props){ 

  if (props.data.length == 0) return <div>Loading...</div>;


  return(
      <div>
        <div class='tbl-header'>
          <table>
              <thead class='tbl-header'>
                  <tr>
                  {props.cols.map((item) => (
                    
                  <th scope="col">{item}</th>
                  ))}
                  </tr>
              </thead>
          </table>
        </div>

        <div class='tbl-content' data-search="true" data-filter-control="true">
          <table>
              <tbody>
                {props.type === 'accounts' && (
                  props.data.map((item) => (                      
                    <tr>  
                    <td scope="col">{item.name}</td>  
                    <td scope="col">{item.accountNum}</td> 
                    </tr>
                )))}
                {props.type === 'contacts' && (
                  props.data.map((item) => (                      
                <tr>  
                <td scope="col">{item.name}</td>  
                <td scope="col">{item.email}</td> 
                <td scope="col">{item.mobile}</td> 
                <td scope="col">{item.clientRecord.num}</td> 
                </tr>
                )))}
                {props.type === 'bills' && (
                  props.data.map((item) => (                      
                <tr>  
                <td scope="col">{item.contactName}</td>  
                <td scope="col">{item.desc}</td> 
                <td scope="col">{item.amount}$</td> 
                <td scope="col">{item.date}</td> 
                <td scope="col">{item.documentType}</td> 
                </tr>
                )))}
              </tbody>
            </table>
        </div>
      </div>
    )
}


export default Table;