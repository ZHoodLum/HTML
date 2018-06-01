// JavaScript Document
var curIndex=0;

var timeInterval=3000;
var arr=new Array();
arr[0]="image/22.PNG";
arr[1]="image/23.PNG";
arr[2]="image/24.PNG";
arr[3]="image/25.PNG";
arr[4]="image/26.PNG";
setInterval(changeImg,timeInterval);

function changeImg()
{
    var m1=document.getElementById("m3");
    if (curIndex==arr.length-1) 
    {
        curIndex=0;
    }
    else
    {
        curIndex+=1;
    }
    m3.src=arr[curIndex];
}