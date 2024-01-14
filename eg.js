import React from 'react' 
import Header from '@/Components/Header' 
import Blog from '@/Components/Blog' 
function page() { 
return ( 
<> 
<div className='h-full m-2 py-1 '> 
<Header/>// 1st component 
<Blog/> // 2nd component 
</div> 
</> 
);
};
export default page;
