var td1 = document.querySelector("#td1");
var td2 = document.querySelector("#td2");
var td3 = document.querySelector("#td3");
var th1 = document.querySelector("#th1");
var th2 = document.querySelector("#th2");
var tm1 = document.querySelector("#tm1");
var tm2 = document.querySelector("#tm2");
var ts1 = document.querySelector("#ts1");
var ts2 = document.querySelector("#ts2");
var ah1 = document.querySelector("#ah1");
var ah2 = document.querySelector("#ah2");
var am1 = document.querySelector("#am1");
var am2 = document.querySelector("#am2");
var as1 = document.querySelector("#as1");
var as2 = document.querySelector("#as2");

function setTotal(day, hour, minute, second) {
    var myd = day.toString().split('');
    var myh = hour.toString().split('');
    var mym = minute.toString().split('');
    var mys = second.toString().split('');
  
  switch(myd.length) {
    case 1: 
      td1.innerText = "0";
      td2.innerText = "0";
      td3.innerText = myd[0];
      break;
      
    case 2: 
      td1.innerText = "0";
      td2.innerText = myd[0];
      td3.innerText = myd[1];
      break;
      
    case 3: 
      td1.innerText = myd[0];
      td2.innerText = myd[1];
      td3.innerText = myd[2];
      break;
      
    default: 
      td1.innerText = "0";
      td2.innerText = "0";
      td3.innerText = "0";
      break;
  } 
  
  switch(myh.length) {
    case 1: 
      th1.innerText = "0";
      th2.innerText = myh[0];
      break;
      
    case 2: 
      th1.innerText = myh[0];
      th2.innerText = myh[1];
      break;
      
      default: 
      th1.innerText = "0";
      th2.innerText = "0";
      break;
  } 
  
  switch(mym.length) {
    case 1: 
      tm1.innerText = "0";
      tm2.innerText = mym[0];
      break;
      
    case 2: 
      tm1.innerText = mym[0];
      tm2.innerText = mym[1];
      break;
      
      default: 
      tm1.innerText = "0";
      tm2.innerText = "0";
      break;
  } 
  
  switch(mys.length) {
    case 1: 
      ts1.innerText = "0";
      ts2.innerText = mys[0];
      break;
      
    case 2: 
      ts1.innerText = mys[0];
      ts2.innerText = mys[1];
      break;
      
      default: 
      ts1.innerText = "0";
      ts2.innerText = "0";
      break;
  } 
}


function setAverage(hour, minute, second) {
    var myah = hour.toString().split('');
    var myam = minute.toString().split('');
    var myas = second.toString().split('');
  
  switch(myah.length) {
    case 1: 
      ah1.innerText = "0";
      ah2.innerText = myah[0];
      break;
      
    case 2: 
      ah1.innerText = myah[0];
      ah2.innerText = myah[1];
      break;
      
      default: 
      ah1.innerText = "0";
      ah2.innerText = "0";
      break;
  } 
  
  switch(myam.length) {
    case 1: 
      am1.innerText = "0";
      am2.innerText = myam[0];
      break;
      
    case 2: 
      am1.innerText = myam[0];
      am2.innerText = myam[1];
      break;
      
      default: 
      am1.innerText = "0";
      am2.innerText = "0";
      break;
  } 
  
  switch(myas.length) {
    case 1: 
      as1.innerText = "0";
      as2.innerText = myas[0];
      break;
      
    case 2: 
      as1.innerText = myas[0];
      as2.innerText = myas[1];
      break;
      
      default: 
      as1.innerText = "0";
      as2.innerText = "0";
      break;
  } 
}