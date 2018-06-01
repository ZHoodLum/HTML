var curIndex=0;

var timeInterval=3000;
var arr=new Array();
arr[0]="image/15.PNG";
arr[1]="image/16.PNG";
arr[2]="image/17.PNG";
arr[3]="image/18.PNG";
setInterval(changeImg,timeInterval);

function changeImg()
{
    var m1=document.getElementById("m6");
    if (curIndex==arr.length-1) 
    {
        curIndex=0;
    }
    else
    {
        curIndex+=1;
    }
    m6.src=arr[curIndex];
}