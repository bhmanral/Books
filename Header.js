import React from 'react' 
import Link from 'next/link' 
function Header () { 
return ( <> 
<div className='h-10 bg-red-500 text-white shadow-sm px-4 py-2 flex items-center 
justify-between' > 
<h2>Welcome</h2> 
<div className='flex gap-4 px-3'> 
<Link href="/Home" >Home</Link> 
<Link href="/About" >About</Link> 
<Link href="/Products" >Products</Link> 
<Link href="/Contact" >Contacts</Link> 
</div> 
</div> </> 
  );
}; 

export default Header;