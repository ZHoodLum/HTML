### JSP获取当前系统时间

* java内置实践类实例化对象：
```
  <body>
    java.text.SimpleDateFormat simpleDateFormat = new java.text.SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
    
    java.util.Date currentTime = new java.util.Date();
    
    String time = simpleDateFormat.for(currentTime).toString();
    
    out.println("当前系统时间："+time);
    
  </body>
```

* 使用JSP内置usebean实例化时间类：

  通常情况下，一般采用这个方法，代码少，简单。
```
   <body>
    <jsp:usebean id="time" class="java.util.Date"/>
    
    现在时间：<%=time%>
  </body>
```
  
* 使用JSP usebean type与beanName配对使用：

```
   <body>
     <jsp:usebean id="time" type="java.io.Serializable" beanName="java.util.Date"/>
     
     现在时间：<%=time%>
  </body>
```
* 使用JSP setproperty设置属性：

  ```
   <body>
     jsp:setproperty 实例</hr>
     
     <jsp:usebean id="time" class="java.util.Date">
     
        <jsp:setproperty name="time" property="hours" param="hh"/>
        
        <jsp:setproperty name="time" property="minutes" param="mm"/>
        
        <jsp:setproperty name="time" property="seconds" param="ss"/>
        
     </jsp:usebean>
     
     <br>
     设置属性后的时间：${time} }
  </body>
  ```
  
  
