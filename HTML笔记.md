目录
--
[HTML界面与JSP界面基本文档结构区别](#HTML界面与JSP界面基本文档结构区别)






## HTML界面与JSP界面基本文档结构区别
html基本文档组成
--
```
<!DOCTYPE html>
<html>
<head>
<title>文档的标题</title>
</head>
<body>
  * HTMl文档的外层元素由两个元素确定：DOCTYPE、html。DOCTYPE元素让浏览器明白处理的是HTML文档。
  * HTML元素的开始标签，告诉浏览器直到HTML结束标签，所有元素都应作为HTML处理。
</body>
</html>
```

jsp基本文档组成
--
```
<%@ page language="java" contentType="text/html; charset=UTF-8"%>
<%@ taglib prefix="f" uri="http://java.sun.com/jsp/jstl/fmt"%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>文档标题</title>
</head>
<body>
 *    组成jsp的五部分 
      1.模板元素：html、xml
      
      2.注释元素
        (1)html注释，显示在客户端源码中  <!--  注释 -->
        
        (2)jsp注释，不会显示在客户端源码，只在jsp中 <% -- 注释 --%>
            
        (3)单行注释与多行注释， 单行// 多行/**  注释  */
            
      3.指令元素
      (1)page指令：     <%@page %>
      
      (2)include指令：  包含代码,静态包含 <%@include file=""%>
      
      (3)taglib：      <%@taglib prefix="c"   uri="taglibURI" %> 标签前缀找到标签描述文件和标签库的方式

      4.脚本元素
      (1)声明   <%!  方法或者变量%> 被转换成servlet中的实例属性和实例方法
      
      (2)表达式  <%=%>  例：<%="你好，世界" %>  相当于jsp中的out.println("你好，世界");  转化成servlet中的out.print("你好，世界" );
      
      (3)scriptlets <%  %>  多个scriptlets合成一个被包含在servlet的service方法中

      5.动作元素
      1.<jsp:param>， 
      以名值对的形式为其他标签提供附加信息 <jsp:param name="" value=""/>
      
      2.<jsp:include>， 
      包含的是结果，两个文件   <!--flush属性必须为true-->   <jsp:include page="" flush="true"/>
      或者
      <jsp:include page="" flush=""true"> 
          <jsp:param name="" value=""/>  
      </jsp:include>
      
      3<jsp:forward>，  
      请求转发,每当遇到此操作时，就停止执行当前的jsp,转而执行被转发的资源。 <jsp:forward page=""/>
      或者
      <jsp:forward page="">
          <jsp:param name="" value=""/>
      </jsp:forward>
      
      4.<jsp:useBean>、<jsp:setProperty>、<jsp:getProperty>

      <jsp:useBean id="id" scope="page|request|session|application" class="">
         <jsp:setProperty name="id" property="*"/>
      </jsp:useBean>

      <jsp:getProperty name="id" property="属性名"/>
      
      5.<jsp:plugin>
      可以使用它来插入Applet或者JavaBean
</body>
</html>
```

##
