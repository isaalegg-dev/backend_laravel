import { useState } from 'react';
import React from 'react';
import { BrowserRouter as Router, Route, Link, Routes } from 'react-router-dom';
import AccountsView from './AccountsView';
import ContactsView from './ContactsView';
import BillsView from './BillsView';


function AppRouter(){

  return (
      <div className='App'>
        <Router>
          <div className='contenedor-izquierdo'>
            <nav className="barra-de-navegacion">
                <ul class="lista-de-proyectos-react">
                    <li className="item-nav-bar"><Link to="/"> Contactos </Link></li>
                    <li className="item-nav-bar"><Link to="/cuentas"> Cuentas contables </Link></li>
                    <li className="item-nav-bar"><Link to="/facturas"> Facturas </Link></li>
                </ul>
              </nav>
          </div>
            {<Routes>
              <Route path= "/" element={<ContactsView />} />
              <Route path= "/cuentas" element={<AccountsView />} />
              <Route path= "/facturas" element={<BillsView />} />
            </Routes>}
        </Router>
      </div>
    );
  }
  
  
  export default AppRouter;