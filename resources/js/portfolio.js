(function(){var r=document.documentElement,b=document.getElementById('theme'),t=null;
try{t=localStorage.getItem('theme')}catch(e){}
if(t)r.setAttribute('data-theme',t);
b.addEventListener('click',function(){var d=r.getAttribute('data-theme')||(matchMedia('(prefers-color-scheme:dark)').matches?'dark':'light');var n=d==='dark'?'light':'dark';r.setAttribute('data-theme',n);try{localStorage.setItem('theme',n)}catch(e){}});
})();