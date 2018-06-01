// JavaScript Document
var curIndex=0;

var timeInterval=4000;
var arr=new Array();
arr[0]="image/32.PNG";
arr[1]="image/33.PNG";
arr[2]="image/34.PNG";
setInterval(changeImg,timeInterval);

function changeImg()
{
    var m1=document.getElementById("m1");
    if (curIndex==arr.length-1) 
    {
        curIndex=0;
    }
    else
    {
        curIndex+=1;
    }
    m1.src=arr[curIndex];
}