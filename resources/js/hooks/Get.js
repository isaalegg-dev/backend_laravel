import { useState, useEffect } from 'react'; 


export function Get(url){
    const [data, setData] = useState([]);

    useEffect(() => {
        fetch(url)
        .then((response)=>response.json())
        .then((data)=>setData(data));
    });
    return data
}
