import React from 'react';
import ReactDOM from 'react-dom';

function User() {
  return(
    <div className="container">
      User
    </div>
  )
}

export default User;

// DOM element
if(document.getElementById('user')) {
  ReactDOM.render(<User />, document.getElementById('user'));
}
