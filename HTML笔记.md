目录
--
[HTML界面与JSP界面基本文档结构区别](#HTML界面与JSP界面基本文档结构区别)

[用元数据说明文档](#用元数据说明文档)


---
---

## HTML4与HTML5区别：
> 指定字符编码变化：
>*  HTML4：
```
<meta http-equiv=‶content-type″ content=‶text/html; charset=UTF-8″>
```
>*  HTML5:
```
<meta charset=‶UTF-8″>
```
> DOCTYPE声明变化：
>* HTML4：
```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
```
>* HTML5 :刻意不使用版本声明，一份文档将会适用于所有版本的 HTML。HTML5 中的 DOCTYPE 声明方法（不区分大小写）如下：
```
 <!DOCTYPE html>
 ```
> 可以省略标记的元素
在 HTML5 中，标签的标记分为`“不允许写结束标记”`、`“可以省略结束标记”`和`“开始标记和结束标记全部可以省略”`三种类型。让我们来针对这三类情况列举一个标签清单，其中包括 HTML5 中的新标签:

>* 1、不允许写结束标记的标签有：不允许写结束标记的标签”是指，不允许使用开始标记与结束标记将标签括起来的形式，只允许使用“<标签/>”的形式进行书写。例如“<br>...</br>”的书写方式是错误的，正确的书写方式为“<br/>”。当然，HTML5之前的版本中<br>这种写法可以被沿用。
```
area、base、br、col、command、embed、hr、img、input、keygen、link、meta、param、source、track、wbr
```
>* 2、可以省略结束标记的标签有：可以省略全部标记的标签”是指，该标签可以完全被省略。请注意，即使标记被省略了，该标签还是以隐式的方式存在的。例如将body标签省略不写时，但它在文档结构中还是存在的，可以使用document.body进行访问。
```
li、dt、dd、p、rt、rp、op、optgroup、option、colgroup、thead、tbody、tfoot、tr、td、th
```
>* 3、可以省略全部标记的标签有：
```
html、head、body、colgroup、tbody。
```
>* 具有boolean值的属性:对于具有boolean值的属性，例如 disabled 与 readonly 等，当只写属性而不指定属性值时，表示属性值为true；如果想要将属性值设为flase，可以不使用该属性。另外，要想将属性值设为true时，也可以将属性名设定为属值，或将空字符串设定为属性值。属性值的设定方法可以参考下面的示例：
```
<!--只写属性不写属性值代表属性为true-->
<input type="checkbox" checked>
<!--不写属性代表属性为false-->
<input type="checkbox">
<!--属性值=属性名，代表属性为true-->
<input type="checkbox" checked="checked">
<!--属性值=空字符串，代表属性为true-->
<input type="checkbox" checked="">
```
> 省略引号:在之前的 HTML 版本中，大家已经知道，指定属性值的时候，属性值两边既可以用双引号，也可以用单引号。HTML5 在此基础上做了一些改进，当属性值不包括空字符串、“<”、“>”、"="、单引号、双引号等字符时，属性值两边的引号可以省略。如下面的代码所示：
```
<!--请注意type的属性值两边的引号-->
<input type="text">
<input type='text'>
<input type=text>
示例：

<!DOCTYPE html>
<meta charset="UTF-8">
<title>HTML5 标记示例</title>
<p>这段代码是根据HTML5语法
<br/>编写出来的。
```
>> 1、该代码完全是用 HTML5 写成的；
>> 2、省略了<html>、<head>、<body>等标签；
>> 3、DOCTYPE申明使用了 HTML5 支持的简洁申明方式；
>> 4、用<meta>标签的 charset 属性指定字符编码；
>> 5、省略了<p>标签的结束标记；
>> 6、使用<标签/>的方式来结束<title>标签以及<br>标签。
 
 
 
 
 
## HTML界面与JSP界面基本文档结构区别
* html基本文档组成
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
* jsp基本文档组成
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

## 用元数据说明文档
* 指定名/值数据对
> 1.如表：meta元素使用的预定义元素数据类型
  
  元素数据名称|说明|
  |-|:-:|
  application name|当前页所属web应用系统名称
  author|当前页作者名
  description|用来生成HTML的软件名称（通常用于以Ruby on Rails、ASP.NET等服务器端框架生成HTLML页的情况下）
  keywords|一批以逗号分开的字符串，用来描述页面的内容
  
> 2.声明字符串编码：
```
<mate charset="Utf-8"/>
```
 
> 3.模拟HTTP标头字段： 
```
<meta http-equiv="refresh" content="5">
注:   refresh的设置为每5s再次载入界面
      http-equiv属性使用至有：`refresh`、`default-style`、`content-type`。
 ```







